<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OfficePhone extends Model
{
    protected $fillable = [
        'office_id',
        'phone',
        'order',
    ];

    public function office()
    {
        return $this->belongsTo(Office::class);
    }
}