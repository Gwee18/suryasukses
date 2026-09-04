<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSliderImage extends Model
{
    protected $guarded = [];

    public function slider()
    {
        return $this->belongsTo(HomeSlider::class, 'home_slider_id');
    }
}
