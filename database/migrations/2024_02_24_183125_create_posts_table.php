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
            $table->id();
            $table->string('SEO_title')->nullable();
            $table->string('SEO_description')->nullable();
            $table->string('slug')->nullable();

            $table->string('title')->nullable();;
            $table->text('short_content')->nullable();;
            $table->text('content')->nullable();;
            $table->string('image')->nullable();

            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->on('categories')->references('id');

            $table->boolean('isPublick')->default('1');

            $table->timestamps();
            $table->softDeletes()->nullable();
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
