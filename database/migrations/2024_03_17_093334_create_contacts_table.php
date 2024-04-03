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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

            $table->string('logo')->nullable();
            $table->string('name_firm')->nullable();
            $table->string('slogan')->nullable();
            $table->string('adress')->nullable();
            $table->string('work_time')->nullable();
            $table->string('tel_work')->nullable();
            $table->string('tel_mob')->nullable();
            $table->string('email')->nullable();

            $table->text('main_text');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
