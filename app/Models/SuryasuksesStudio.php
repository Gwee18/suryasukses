<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuryasuksesStudio extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_image',
        'main_text',
        'whatsapp',
        'whatsapp_link',
    ];
}
