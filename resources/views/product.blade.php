@extends('master')

@section('title')
    <title>Product - {{ $product->name }}</title>
@endsection

@section('style')
<style>
    #content {
        height: 1000px;
        width: 900px;
        padding-top: 30px;
    }

    #item-container {
        flex-direction: row;
        flex-wrap: wrap;
    }

    .items {
        width: 900px;
        height: 500px;
        padding: 15px;
        border: 10px rgb(255, 210, 168) solid;
        background-color: rgb(255, 210, 168);
        margin: 10px;
        border-radius: 10px;
    }

    .items img {
        width: 300px;
        height: 300px;
    }

    .item-name {
        margin-top: 15px;
    }

    .item-name p{
        color: black;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px;
    }

    .item-desc {
        margin-top: 10px;
    }

    .item-name p{
        color: rgb(58, 58, 58);
    }

    .item-quantity {
        margin-top: 5px;
    }

    .item-quantity p{
        color: black;
    }

    .item-price {
        margin-top: 35px;
    }

    .item-price p{
        color: black;
    }

    .item-form {
        margin-top: 20px;
    }
</style>
@endsection

@section('content')
    <div id="content" class="center">
        <div class="center">
            <a href="{{ url('home') }}"><button>Return to product</button></a>
        </div>
        <div class="items">
            <img src="/product-image/{{$product->image}}" alt="{{$product->name}}">
            <div class="item-name">
                <p>{{ $product->name }}</p>
            </div>
            <div class="item-desc">
                <p>{{ $product->description }}</p>
            </div>
            <div class="item-price">
                <p>Price: Rp. {{ $product->price }},00-</p>
            </div>
            <div class="item-quantity">
                <p>Quantity: {{ $product->quantity }}</p>
            </div>
            <div class="item-form">
                <form method="POST" action="/addToCart/{{$product->id}}">
                    {{ csrf_field() }}
                    <input type="number" name="qty" placeholder="0" min="0">
                    <button type="submit" name="submit" id="add-cart-btn">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
@endsection