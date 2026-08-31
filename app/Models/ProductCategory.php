<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'images',
        'intro',
        'catalog_text',
        'catalog_href',
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
