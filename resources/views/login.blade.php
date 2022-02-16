@extends('master')

@section('title')
    <title>Login</title>
@endsection

@section('style')
<style>
    #form-login {
        width: 600px;
        padding: 20px;
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
    <h1> Login </h1>
        <div id="form-login" class="center">
            <form action="{{ url('login') }}" method="POST">
                {{ csrf_field() }}
                <div>
                    <input class="standard-input" type="email" placeholder="Email" name="email">
                </div>
                <div class="margin-top">
                    <input class="standard-input" type="password" placeholder="Password" name="password">
                </div>
                <div class="margin-top">
                    <input type="submit" class='btn'>
                </div>
            </form>
        </div>
    </div>
@endsection