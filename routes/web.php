<?php

use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('wishlist', function () {
    $user = User::find(1);
    // $product = Product::find(5);
    // $user->cart_products()->attach([
    //     5 => [
    //         'price' => $product->price,
    //         'quantity' => 10
    //     ]
    // ]);

    $total = 0;
    foreach ($user->cart_products as $product) {
        $total += ($product->price * $product->pivot->quantity);
    }
    return $total;
    // return $user->cart_products;
});