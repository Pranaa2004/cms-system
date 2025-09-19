import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/frontend/css/app.css', 'resources/frontend/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
