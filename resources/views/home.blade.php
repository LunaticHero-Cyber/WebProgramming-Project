@extends('master')

@section('title')
    <title>Home</title>
@endsection

@section('style')
<style>
    #content {
        height: 1400px;
        width: 60%;
        padding-top: 30px;
    }

    #item-container {
        flex-direction: row;
        flex-wrap: wrap;
    }

    .items {
        width: 250px;
        height: 350px;
        padding: 15px;
        border: 10px rgb(255, 210, 168) solid;
        background-color: rgb(255, 210, 168);
        margin: 10px;
        border-radius: 10px;
    }

    .items img {
        width: 250px;
        height: 250px;
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
</style>
@endsection

@section('content')
    <div id="content" class="center">
        <div id="item-container" class="inline-flex">

            @foreach($products as $product)
                <a href="/product/{{ $product->id }}">
                    <div class="items">
                        <img src="/product-image/{{$product->image}}" alt="{{$product->name}}">
                        <div class="item-name">
                            <p>{{ $product->name }}</p>
                        </div>
                        <div class="item-desc">
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
            
        </div>
    </div>
@endsection