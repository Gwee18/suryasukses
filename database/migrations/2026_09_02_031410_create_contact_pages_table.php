<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_pages', function (Blueprint $table) {
            $table->id();
            $table->string('hero_eyebrow')->nullable();
            $table->string('hero_title')->nullable();
            $table->string('intro_title')->nullable();
            $table->text('intro_text')->nullable();
            $table->string('intro_note')->nullable();
            $table->string('support_title')->nullable();
            $table->string('support_email')->nullable();
            $table->string('whatsapp_label')->nullable();
            $table->string('whatsapp_display')->nullable();
            $table->string('whatsapp_link')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_pages');
    }
};