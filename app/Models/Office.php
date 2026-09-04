<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = [
        'name',
        'map_url',
        'order',
    ];

    public function phones()
    {
        return $this->hasMany(OfficePhone::class)->orderBy('order');
    }

    public function addressLines()
    {
        return $this->hasMany(OfficeAddressLine::class)->orderBy('order');
    }
}