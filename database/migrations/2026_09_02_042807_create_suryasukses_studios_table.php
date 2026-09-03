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
        Schema::create('suryasukses_studios', function (Blueprint $table) {
            $table->id();
            $table->string('hero_image')->nullable();
            $table->text('main_text')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('whatsapp_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suryasukses_studios');
    }
};
