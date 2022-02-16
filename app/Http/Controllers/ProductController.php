<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;

class ProductController extends Controller
{
    public function showAllItem() {
        $products = Product::all();
        $auth = Auth::check();

        return view('home', ['auth'=>$auth, 'products'=>$products]);
    }

    public function showItem($id) {
        $product = Product::find($id);
        $auth = Auth::check();

        return view('product', ['auth'=>$auth, 'product'=>$product]);
    }

}
