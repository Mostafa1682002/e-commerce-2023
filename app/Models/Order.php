<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'sub_total',
        'shipping',
        'tax',
        'discount',
        'total',
        'status',
        'phone',
        'city',
        'street_address',
        'post_code',
        'payment_method',
        'payment_status'
    ];


    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_products')->withPivot('price', 'quantity');
    }
}