<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function transactions()
    {
        return $this->hasMany(Cart_Product_Transaction::class);
    }

    public function sumTotalPrice()
    {
        $sum = 0;

        foreach ($this->transactions as $transaction) {
            $sum += $transaction->quantity * $transaction->product->price;
        }

        return $sum;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $table = 'carts';

    protected $fillable = ['user_id', 'checkout', 'checkout_at'];

    public $timestamps = false;
}
