<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart_Product_Transaction extends Model
{
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function subTotal()
    {
        return $this->product->price * $this->quantity;
    }

    protected $table = 'cart_product_transactions';

    protected $fillable = ['cart_id', 'product_id', 'quantity'];

    public $timestamps = false;

    public $incrementing = true;
}
