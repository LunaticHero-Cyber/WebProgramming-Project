@extends('master')

@section('title')
    <title>Cart</title>
@endsection

@section('style')
<style>
    #content {
        width: 800px;
        padding-top: 40px;
    }

    .right-btn{
        float: right;
        border: 2px solid black;
    }

    .submit-btn{
        background-color: lightgreen;
        border: 2px solid green;
    }

</style>
@endsection

@section('content')
    
    <div id="content" class="center">
    <div class="right-btn">
            <a href="{{ url('home') }}">Return to product</a>
    </div>
    <br>
    <br>
        @forelse ($transactions as $transaction)
            <div id="transaction-div">
                <div id="stationary-name-div">
                    Order: {{ $transaction->product->name }}
                </div>
                <div id="price-qty-div">
                    <ul>
                        <li>
                            <div id="stationary-price-div">
                                Price: {{ $transaction->product->price }}
                            </div>
                        </li>
                        <li>
                            <div id="stationary-quantity-div">
                                Quantity: {{ $transaction->quantity }}
                            </div>
                        </li>
                    </ul>                 
                </div>
                <hr>
                <div id="total-checkout-div">
                    <div id="subtotal-div">
                        Total Rp{{ $transaction->product->price*$transaction->quantity }}.00
                    </div>
                    <br>
                </div>  
            </div>
        @empty
            <p>Do Some Transaction to see your products in cart</p>
        @endforelse

        @if(count($transactions))
            <a href="/cart/{{$cart->id}}" id="checkout-btn" class='submit-btn'>Check Out</a>
        @endif
    </div>
@endsection