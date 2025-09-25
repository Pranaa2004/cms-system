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
        Schema::create('menu_items', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('parent_id');
            $table->string('label',length:255);
            $table->string('url',length:255);
            $table->enum('target',['_self','_blank']);
            $table->integer('order_column')->unsigned();
            $table->tinyInteger('is_active');
            $table->longText('visibility_rules');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_items');
    }
};
