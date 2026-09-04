<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about_values', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('partnership_title')->nullable();
            $table->text('partnership_text')->nullable();
            $table->string('excellence_title')->nullable();
            $table->text('excellence_text')->nullable();
            $table->string('growth_title')->nullable();
            $table->text('growth_text')->nullable();
            $table->string('safety_title')->nullable();
            $table->text('safety_text')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_values');
    }
};
