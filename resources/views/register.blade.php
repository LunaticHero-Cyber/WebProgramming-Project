@extends('master')

@section('title')
    <title>Login</title>
@endsection

@section('style')
<style>
    #form-register {
        width: 600px;
        padding: 20px;
    }

    #Register {
        margin-right: 10px;
    }

    #content {
        height: 1000px;
        width: 95%;
        padding-top: 30px;
    }
</style>
@endsection

@section('content')
    <div id="content" class="center">
    <h1> Register </h1>
        <div id="form-register" class="center">
            <form action="{{ url('register') }}" method="POST">
                {{ csrf_field() }}
                <div>
                    <input class="standard-input" type="text" placeholder="Username" name="username">
                </div>
                <div class="margin-top">
                    <input class="standard-input" type="text" placeholder="Email" name="email">
                </div>
                <div class="margin-top">
                    <input class="standard-input" type="password" placeholder="Password" name="password">
                </div>
                <div class="margin-top">
                    <input type="submit">
                </div>
            </form>
        </div>
    </div>
@endsection