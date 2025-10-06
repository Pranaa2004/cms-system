<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login_show()
    {
        return view('auth.login');
    }

    public function login_store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    //      ------ Register -------
    public function register_show()
    {
        return view('auth.register');
    }

    public function register_store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            // 'password' => 'required|string|min:8|confirmed',
            // 'password_confirmation' => 'required|min:8|same:password',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user); // Optional: auto-login after registration
        return redirect()->route('login_show')->with('success', 'User created and logged in successfully.');
    }


    //      ---- Dashboard -----
    public function dashboard_show()
    {
        if (Auth::check()) {
            return view('index');
        }

        return redirect()->route('login_show')->with('error', 'You must be logged in to access the dashboard.');
    }

    public function forgotpw(){
        return view('auth.forgotPassword');
    }

    //      ---- logout ------
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logged out successfully.');
    }
}

