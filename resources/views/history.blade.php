@extends('master')

@section('title')
    <title>Purchase History</title>
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

    .column{
        width: 35%;
    }

    .column-right{
        text-align: right;
    }

</style>
@endsection

@section('content')
    <div id="content" class="center">
        <div class="right-btn">
            <a href="{{ url('home') }}">Return to product</a>
        </div>
        @forelse ($carts as $cart)
        <br>
        <br>
            <div id="cart-header">
                <div>{{ $cart->checkout_at }} <label class="right">Total: {{ $cart->sumTotalPrice() }}.00</label></div>
            </div>
            <hr>
            <table id="table-data-cart">
            <tr>
                    <td class='column'>Order</td>
                    <td class='column'>Price</td>
                    <td class='column'>Quantity</td>
                    <td class='column-right'>Sub Total</td>
            </tr>
            @foreach ($cart->transactions as $transaction)
                <tr>
                    <td class='column'>{{ $transaction->product->name }}</td>
                    <td class='column'>{{ $transaction->product->price }}.00</td>
                    <td class='column'>{{ $transaction->quantity }}</td>
                    <td class='column-right'>{{ $transaction->subTotal() }}.00</td>
                </tr>
            @endforeach
        </table>
        @empty
            <div>You don't have any Transaction</div>
        @endforelse
    </div>
@endsection