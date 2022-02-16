<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Cart;
use App\Product;
use App\Cart_Product_Transaction;
use Carbon\Carbon;


class CartController extends Controller
{
    public function addToCart($id, Request $request) {
        $user_id = Auth::User()->id;
        $product = Product::find($id);
        $qty = $request->qty;
        $res = $product->quantity - $qty;

        $cart = Cart::where(['checkout' => false, 'user_id' => $user_id])->first();

        $validated = $request->validate([
            'qty' => ['numeric', 'min: 1'],
        ]);

        if (!$cart) {
            $newCart = new Cart();

            $newCart->checkout_at = NULL;
            $newCart->checkout = false;
            $newCart->user_id = $user_id;

            $newCart->save();

            $cart = Cart::where(['checkout' => false, 'user_id' => $user_id])->first();
        }

        $newTransaction = new Cart_Product_Transaction();

        $newTransaction->quantity = $validated['qty'];
        $newTransaction->cart_id = $cart->id;
        $newTransaction->product_id = $id;
        
        Product::where('id', $id)->update([
            'quantity'=>$res
        ]);

        $newTransaction->save();

        return redirect('/cart');
    }

    public function showCart() {
        $auth = Auth::check();
        $cart = Cart::where(['checkout' => false, 'user_id' => Auth::User()->id])->first();

        if (!$cart) {
            $transactions = [];
            $cart = [];
            return view('cart', ['auth' => $auth, 'cart' => $cart, 'transactions' => $transactions]);
        }
        
        $transactions = Cart_Product_Transaction::where(['cart_id' => $cart->id])->get();

        return view('cart', ['auth' => $auth, 'cart' => $cart, 'transactions' => $transactions]);
    }

    public function checkout($id) {

        $cart = Cart::where(['id' => $id])->first();

        $cart->checkout_at = Carbon::now();
        $cart->checkout = true;

        $cart->save();

        return redirect('/history');
    }

    public function showHistory() {
        $auth = Auth::check();
        $carts = Cart::where(['checkout' => true, 'user_id' => Auth::User()->id])->get();

        if (!$carts) {
            $carts = [];
            return view('history', ['auth' => $auth, 'carts' => $carts]);
        }

        return view('history', ['auth' => $auth, 'carts' => $carts]);
    }

}
