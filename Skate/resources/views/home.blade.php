<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href='https://fonts.googleapis.com/css?family=Pathway+Gothic+One|Raleway:300,400,500' rel='stylesheet' type='text/css'>
        <link href="/styles.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="/images/sas_logo.jpg">
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    </head>
    <body>
        @extends('master')

        @section('main_content')
        <div class="panel">
            <div class="main_login">
                <div class="title"><span>Login</span></div>
                <div class="admin">
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
                            <div class="loginbutton1"> <button type="submit">Login</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @stop
    </body>
</html>
