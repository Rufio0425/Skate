<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href='https://fonts.googleapis.com/css?family=Pathway+Gothic+One|Raleway:300,400,500' rel='stylesheet' type='text/css'>
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <style>
            body {
                background-image: url('http://www.skateafterschool.org/wp-content/uploads/2014/02/7.jpg');
                background-size:cover;
                margin: 0;
                padding: 0;
                width: 100%;
                font-weight: 100;
            }

            header{
                display:flex;
                text-align:center;
                background-color: #222222;
                font-family:arial;
                position:fixed;
                width:100%;
                z-index:1000;
                transition: all .35s;
            }

            header a{
                text-decoration:none;
                font-family: 'Pathway Gothic One', sans-serif;
                font-weight:bold;
            }

            header:hover{
                padding:5px 0;
                background-color: #222222;
            }

            .logo{
                text-align:left;
                background-color: #222222;
                color:white;
                flex:1;
                padding:18px 70px;
            }

            .logo a{
                color:white;
            }

            .nav{
                background-color: #222222;
                flex:3;
                text-align:right;
                font-size:14pt;
                padding:15px 51px 15px;
            }

            .nav a{
                background-color: #222222;
                color:#666666;
                padding:10px;
            }

            .nav a:hover{
                color:#fff;
            }

            .logout{
                text-decoration:none;
                font-family: 'Pathway Gothic One', sans-serif;
                font-weight:600;
                color: white;
                border:0;
                font-size: 16pt;
                background-color: #ff6b6b;
                border-radius:10px;
                border:1px solid #ff6b6b;
            }

            .logout a{
                text-decoration:none;
                background-color: transparent;
                color:#fff;
            }

            .logout:active{
                background-color: #222222;
            }

            .panel{
                height:650px;
                padding-top:33px;
                width:100%;
            }

            .main{
                margin-top:100px;
                color:black;
                width:35em;
                margin-left:auto;
                margin-right:auto;
            }

            .title{
                text-align:center;
                font-size: 150px;
                font-family: 'Pathway Gothic One', sans-serif;
                color:#fff;
                font-weight:900;
            }

            .volunteer{
                text-align:center;
                padding:20px 0;
            }

            form{
                padding:10px 0 10px 10px;
                display:flex;
                flex-direction:column;
            }

            .row_name{
                font-size:25pt;
                font-family: 'Raleway', sans-serif;
                font-weight:400;
                color:#fff;
            }

            input{
                background-color: #fff;
                font-family: sans-serif;
                font-size: 18px;
                box-shadow: none;
                border-radius: 5px;
                border:none;
                height:25px;
                padding:5px 5px;
            }
            
            .loginbutton1 button{
                margin-top:20px;
                font-size:25pt;
                font-family: 'Pathway Gothic One', sans-serif;
                text-decoration:none;
                font-weight:600;
                color: white;
                border:0;
                background-color: #ff6b6b;
                border-radius:10px;
                padding:5px 100px;
            }
        </style>
    </head>
    <body>
        <header>
            <div class="logo"><a href=""><img src="http://www.skateafterschool.org/wp-content/uploads/2014/02/sas-wordmark.png"></a></div>
            <div class="nav">
                <a href="/volunteer">Who's Helping</a>
                @if(Auth::User())
                    <button class="logout"><a href="/auth/logout">Logout</a></button>
                @else
                    <button class="logout"><a href="/">Login</a></button>
                @endif
            </div>
        </header>
        <div class="panel">
            <div class="main">
                <div class="title"><span>Login</span></div>
                <div class="volunteer">
                    <form method="POST" action="/auth/login">
                    {!! csrf_field() !!}
                        <div class="form_row">
                            <div class="row_name">Email</div>
                            <div class="input">
                                <input class="inputemail" type="email" name="email" value="{{ old('email') }}">
                                @if(count($errors) > 0)
                                    @if(count($errors->getBags()['default']->get('email'))>0)
                                        <span>
                                            {{$errors->getBags()['default']->get('email')[0]}}
                                        </span>
                                    @endif 
                                @endif
                            </div>
                        </div>
                        <div class="form_row">
                            <div class="row_name">Password</div>
                            <div class="input"><input class="inputpw"type="password" name="password" id="password"></div>
                         {{--    <div class="remember"><input type="checkbox" name="remember">Remember Me</div> --}}
                            <div class="loginbutton1"> <button type="submit">Login</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
