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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('editor_id');
            $table->string('title',length:255);
            $table->string('excerpt',length:255);
            $table->longText('body');
            $table->enum('status',['draft' ,'scheduled' , 'published', 'achived']);
            $table->timestamp('published_at', precision: 0);
            $table->timestamp('expires_at', precision: 0);
            $table->tinyInteger('is_featured');
            $table->unsignedBigInteger('featured_media_id');
            $table->longText('meta');
             $table->timestamp('deleted_at', precision: 0)->nullable()->default(null);
            $table->timestamps();

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
