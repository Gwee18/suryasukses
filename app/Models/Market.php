<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'subtitle',
        'description',
        'banner_image',
        'whatsapp_text',
        'whatsapp_link',
        'cards',
    ];

    protected $casts = [
        'cards' => 'array',
    ];
}