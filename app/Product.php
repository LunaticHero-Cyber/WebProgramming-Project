<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function transactions()
    {
        return $this->hasMany(Cart_Product_Transaction::class);
    }

    protected $table = 'products';

    protected $fillable = ['quantity'];

    public $timestamps = false;
}
