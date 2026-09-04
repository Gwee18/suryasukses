<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(HomeSliderImage::class)->orderBy('order');
    }
}
