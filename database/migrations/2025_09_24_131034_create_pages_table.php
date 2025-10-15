<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('author_id');
            $table->string('title',length:255);
            $table->string('slug',length:255);
            $table->longText('body');
            $table->enum('status',['draft' ,'scheduled' , 'published']);
            $table->timestamp('published_at', precision: 0);
            $table->timestamp('expires_at', precision: 0);
            $table->unsignedBigInteger('featured_media_id');
            $table->longText('meta');
            $table->timestamp('deleted_at', precision: 0);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
