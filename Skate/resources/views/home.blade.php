<!DOCTYPE html>
<html>
    <head>
        <title>New Volunteer</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:s100" rel="stylesheet" type="text/css">
        <link href="" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="fonts/">
        <style>
            @font-face {
                font-family: 'LeagueGothicRegular';
                src: url('fonts/League_Gothic-webfont.eot');
                src: url('fonts/League_Gothic-webfont.eot?#iefix') format('embedded-opentype'), url('fonts/League_Gothic-webfont.woff') format('woff'), url('fonts/League_Gothic-webfont.ttf') format('truetype'), url('fonts/League_Gothic-webfont.svg#LeagueGothicRegular') format('svg');
                font-weight: normal;
                font-style: normal;
            }

            @font-face {
                font-family: 'NovecentowideBold';
                src: url('fonts/Novecentowide-Bold-webfont.eot');
                src: url('fonts/Novecentowide-Bold-webfont.eot?#iefix') format('embedded-opentype'), url('fonts/Novecentowide-Bold-webfont.woff') format('woff'), url('fonts/Novecentowide-Bold-webfont.ttf') format('truetype'), url('fonts/Novecentowide-Bold-webfont.svg#NovecentowideBold') format('svg');
                font-weight: normal;
                font-style: normal;
            }

            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                font-weight: 100;
            }

            header{
                display:flex;
                text-align:center;
                background-color: black;
                font-family:helvetica;
                position:fixed;
                width:100%;
                z-index:1000;
                transition: all .35s;
            }

            header:hover{
                padding:10px 0;
                background-color: purple;
            }

            .logo{
                text-align:left;
                background-color: orange;
                flex:1;
                padding:15px 70px;
            }

            .nav{
                background-color: red;
                flex:3;
                text-align:center;
                padding:15px 51px 15px;
            }

            .nav a{
                background-color: white;
                font-size:10pt;
                padding:10px;
            }

            .panel{
                height:650px;
                padding-top:33px;
                width:100%;
                background-color: blue;
            }

            .main{
                margin-top:15px;
                color:black;
                width:35em;
                margin-left:auto;
                margin-right:auto;
                background-color: yellow;
            }

            .volunteer{
                text-align:center;
                background-color: brown;
                padding:20px 0;
            }

            form{
                background-color: green;
                padding:10px 0 10px 10px;
                display:flex;
                flex-direction:column;
            }

            .form_row{

                font-size:16pt;
            }

            .title{
                text-align:center;
                padding:20px 0;
                background-color: green;
            }

            .title span{
                font-size:50px;
                background-color: yellow;
            }

           
        </style>
    </head>
    <body>
        <header>
            <div class="logo"><a href="">Skate After School</a></div>
            <div class="nav">
                <a href="/">Login</a>
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
                            <div class="remember"><input type="checkbox" name="remember">Remember Me</div>
                            <div class="loginbutton1"> <button  type="submit">Login</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
