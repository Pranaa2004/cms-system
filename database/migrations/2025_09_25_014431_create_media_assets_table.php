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
        Schema::create('media_assets', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('disk',length:100);
            $table->string('path',length:255);
            $table->string('mime_type',length:100);
            $table->integer('size_kb')->unsigned();
            $table->integer('width')->unsigned();
            $table->integer('height')->unsigned();
            $table->string('alt',length:255);
            $table->longText('variants');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_assets');
    }
};
