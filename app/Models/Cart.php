<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id', 'product_id'
    ];
    /**
     * Get the product associated with the Cart
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'products_id');
    }

     /**
      * Get the user that owns the Cart
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
      */
     public function user(): BelongsTo
     {
         return $this->belongsTo(User::class, 'users_id', 'id');
     }


}
