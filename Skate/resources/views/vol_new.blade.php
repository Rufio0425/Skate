<!DOCTYPE html>
<html>
<head>
    <title>New Volunteer</title>
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
/*Nav*/
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

        header:hover{
            padding:5px 0;
            background-color: #222222;
        }

        header a{
            text-decoration:none;
            font-family: 'Pathway Gothic One', sans-serif;
            font-weight:bold;
        }

        .logo{
            text-align:left;
            background-color: #222222;
            color:white;
            flex:1;
            padding:18px 70px;
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
/*End Nav*/
        .panel{
            height:650px;
            padding-top:33px;
            width:100%;
        }

        .main{
            margin-top:15px;
            color:#FFFFFF;
            width:35em;
            margin-left:auto;
            margin-right:auto;
        }

        .title{
            font-weight:900;
            font-size:65pt;
            font-family: 'Pathway Gothic One', sans-serif;
            text-align:center;
            padding:20px 0 0 0;
        }

        .volunteer{
            text-align:center;
            padding:10px 0;
            font-size:25pt;
            font-family: 'Raleway', sans-serif;
            font-weight:400;
        }

        form{
            display:flex;
            flex-direction:column;
        }

        input, textarea{
            font-family: sans-serif;
            font-size: 18px;
            box-shadow: none;
            border-radius: 5px;
            border:none;
            height:25px;
            padding:0 5px;
        }

        textarea{
            margin: 0px;
            width: 470px;
            height: 80px;
            resize:none;
        }

        button{
            margin-top:5px;
            font-size:20pt;
            font-family: 'Pathway Gothic One', sans-serif;
            text-decoration:none;
            font-weight:600;
            color: white;
            border:0;
            background-color: #ff6b6b;
            border-radius:10px;
            border:1px solid #ff6b6b;
            padding:5px 0;
        }

    </style>
</head>
<body>
    <header>
        <div class="logo"><a href=""><img src="http://www.skateafterschool.org/wp-content/uploads/2014/02/sas-wordmark.png"></a></div>
        <div class="nav">
            <a href="/volunteer">Who's Helping</a>
            <button class="logout"><a href="/auth/logout">Logout</a></button>
        </div>
    </header>
    <div class="panel">
        <div class="main">
            <div class="title"><span>New Volunteer</span></div>
            <div class="volunteer">
                <form method="POST" action="/vol_new">
                {!! csrf_field() !!}
                    <div class="form_row">
                        <div class="row_name">First Name</div>
                        <div class="input"><input type="text" placeholder="First Name" name="first_name"></div>
                    </div>
                    <div class="form_row">
                        <div class="row_name">Last Name</div>
                        <div class="input"><input type="text" placeholder="Last Name" name="last_name"></div>
                    </div>
                    <div class="form_row">
                        <div class="row_name">Email</div>
                        <div class="input"><input type="text" placeholder="Contact, without the spam" name="email"></div>
                    </div>
                    <div class="form_row">
                        <div class="row_name">Images</div>
                        <div class="input"><input type="text" placeholder="Cool Pictures" name="profile_image_url"></div>
                    </div>
                    <div class="form_row">
                        <div class="row_name">Bio</div>
                        <div class="input"><textarea name="bio" placeholder="Why this person is awesome!"></textarea></div>
                    </div>
                <button>Save Volunteer</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
