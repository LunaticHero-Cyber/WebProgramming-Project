<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            * {
                margin: 0;
                padding: 0;
            }

            a:link {
                color: rgb(131, 131, 131);
                text-decoration: none;
            }

            a:visited {
                color: rgb(131, 131, 131);
                text-decoration: none;
            }
            
            .center {
                margin: auto;
            }

            .centerButton {
                margin: auto;
                text-align: center;
            }

            .right {
                float: right;
            }

            .inline-flex {
                display: inline-flex;
            }

            #header {
                box-shadow: 3px -5px 14px 5px rgba(0,0,0,0.75);
            }

            #inner-header {
                width: 90%;
                height: 80px;
            }

            #Horsemen-title-div {
                padding-top: 25px;
            }

            #register-login-div {
                width: 130px;
                padding-top: 25px;
            }

            #authenticated-div {
                width: 160px;
                padding-top: 25px;
            }

            #Register {
                margin-right: 10px; 
            }

            #Login {
                margin-left: 10px; 
            }

            #content {
                height: 1000px;
                width: 80%;
                padding-top: 30px;
            }

            .topR-btn{
                text-decoration: none;
            }

            .product-btn{
                text-decoration: none;
            }

        </style>
    </head>
    <body>
        <div id="header">
            <div id="inner-header" class="center">
                <div id="Horsemen-title-div" class="inline-flex">
                    <a href="{{url('/')}}">Horsemen Store</a>
                </div>
                @if($auth)
                    <div id="register-login-div" class="right">
                        <div id="Logout" class="right">
                            <a href="{{ url('logout') }}" class='topR-btn'>Logout</a>
                        </div>
                    </div>
                @else
                    <div id="register-login-div" class="right">
                    <div id="Register" class="inline-flex">
                            <a href="{{ url('register') }}" class='topR-btn'>Register</a>
                        </div>
                        <div class="inline-flex">
                            |
                        </div>
                        <div id="Login" class="inline-flex">
                            <a href="{{ url('login') }}" class='topR-btn'>Login</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div id="content" class="centerButton">
            <a href="{{ url('home') }}" class='product-btn'>Click here to see our products</a>
        </div>
    </body>
</html>
