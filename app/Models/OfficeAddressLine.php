<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OfficeAddressLine extends Model
{
    protected $fillable = [
        'office_id',
        'line',
        'order',
    ];

    public function office()
    {
        return $this->belongsTo(Office::class);
    }
}