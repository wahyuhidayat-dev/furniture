<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Softdeletes;

    protected $fillable = [
        'name', 'price', 'description', 'slug'
    ];

    /**
     * Get all of the galleries for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function galleries(): HasMany
    {
        return $this->hasMany(ProductGallery::class, 'products_id', 'id');
    }
}
