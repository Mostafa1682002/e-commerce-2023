<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class ProductImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id', 'image'
    ];

    protected function firstName(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => asset("$value"),
            // set: fn (string $value) => asset($value),
        );
    }



    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}