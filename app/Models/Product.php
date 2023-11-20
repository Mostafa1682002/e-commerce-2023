<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoy_id',
        'name',
        'slug',
        'description',
        'price',
        'compare_price',
        'featured',
        'slider',
        'status'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }



    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }



    public function wishlist_users()
    {
        return $this->belongsToMany(User::class, 'wishlists')->withPivot('subject', 'rating', 'review');
    }



    public function cart_users()
    {
        return $this->belongsToMany(User::class, 'carts')->withPivot('price', 'quantity');
    }


    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_products')->withPivot('price', 'quantity');
    }
}