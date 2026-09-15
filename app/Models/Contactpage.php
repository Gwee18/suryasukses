<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    protected $fillable = [
        'hero_eyebrow',
        'hero_title',
        'intro_title',
        'intro_text',
        'intro_note',
        'support_title',
        'support_email',
        'whatsapp_label',
        'whatsapp_display',
        'whatsapp_link',
    ];
}