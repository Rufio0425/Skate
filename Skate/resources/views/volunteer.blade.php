<!DOCTYPE html>
<html>
    <head>
        <title>Volunteers</title>

        <link href='https://fonts.googleapis.com/css?family=Pathway+Gothic+One|Raleway:300,400,500' rel='stylesheet' type='text/css'>
        <link href="" rel="stylesheet" type="text/css">
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

           /* .container {
                background-color: orange;
                text-align: center;
                display: inline-block;
                vertical-align: middle;
                color:white;
            }

            .content{
                font-family: 'NovecentowideBold';
                font-size: 100px;
                text-align: center;
                display: inline-block;
            }
           
            */

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

            .sign_up{
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

            .sign_up:active{
                background-color: #222222;
            }

            .hero{
                padding-top:33px;
                width:100%;
            }

            .main{
                margin-top:15px;
                color:black;
                width:74em;
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

            .vom{
                text-align:center;
                padding:20px 0;
                font-family:'Raleway';
            }


            .vom_title{
                padding:10px;
            }

            .vom_title span{
                font-size:50px;
                font-family:'Raleway';
                font-weight:400;
            }

            .vom_pic{
                height:300px;
                width:300px;
                background-size:cover;
                display:inline-block;
                border-radius: 150px;
            }
            
            .content{
                /*width:74em;
                margin-left:auto;
                margin-right:auto;*/
                display:flex;
                text-align:center;
            }

            aside{
                width:100px;
            }

            .vom_name{
                font-size:25pt;
            }


            .volunteers{
                font-family:'Raleway';
                display:flex;
                justify-content:center;
                width:74em;
                margin-left:auto;
                margin-right:auto;
                text-align:center;
                padding:20px 0;
            }

            .vol_describe{
                width:400px;
                font-weight:500;
                font-size:16pt;
            }

            .profiles{
                flex-wrap:wrap;
                justify-content:center;
                display:flex;
            }

            .profile{
                margin:5px;
            }

            .profile_pic{
                height:200px;
                width:200px;
                background-size:cover;
                display:inline-block;
            }

            .profile, .profile_pic{
                border-radius:100px;
            }

            .vom_name a, .profile a{
                text-decoration:none;
                color:#fff;
            }

            .name{
                font-size:16pt;
            }
/*Future lightbox*/
            /*.lightbox-tint{
                position:absolute;
                top:0;
                left:0;
                right:0;
                bottom:0;
                background-color: rgba(0,0,0,0.4);
                display:none;
            }

            .lightbox {
                width: 500px;
                height: 300px;
                background-color: green;
                position:fixed;
                left:50%;
                top:50%;
                display:none;
                text-align:center;

                transform: translate(-50%, -50%);
            }

            .lightbox > div{
                font-size:16pt;
            }

            form{
                padding:40px 0;
                display:flex;
                flex-direction:column;
            }

            .form_row{
                font-size:16pt;
            }

            .lightbox-tint.on{
                position:fixed;
                display:block;
            }

            .lightbox-tint.on .lightbox{
                position:fixed;
                display:block;
            }

            .lightbox .exit{
                position:absolute;
                top: 0;
                right: -50px;
            }*/
        </style>
    </head>
    <body>

    {{-- Future lightbox --}}
        {{-- <div class="lightbox-tint">
            <div class="lightbox">
                <div>Let's Get Started!</div>
                <form action="">
                    <div class="form_row">
                        <div class="row_name">First Name</div>
                        <div class="input"><input type="text" placeholder="First Name"></div>
                    </div>
                    <div class="form_row">
                        <div class="row_name">Last Name</div>
                        <div class="input"><input type="text" placeholder="Last Name"></div>
                    </div>
                    <div class="form_row">
                        <div class="row_name">Email</div>
                        <div class="input"><input type="text" placeholder=""></div>
                    </div>
                    <div class="form_row">
                        <button>Submit</button>
                    </div>
                </form>
                <button class="exit">Exit</button>
            </div>
        </div> --}}
        <header>
            <div class="logo"><a href=""><img src="http://www.skateafterschool.org/wp-content/uploads/2014/02/sas-wordmark.png"></a></div>
            <div class="nav">
                <a href="">Home</a>
                <a href="/volunteer">Who's Helping</a>
                <a href="/vol_new">New Volunteer</a>
                <button class="sign_up">Become One of Us!</button>
            </div>
        </header>
        <div class="panel hero">
            <div class="main">
                <div class="banner">
                    <div class="title"><span>Volunteers</span></div>
                </div>
                <div class="vom">
                    <div class="vom_title"><span>Volunteer of The Month</span></div>
                    <div class="vom_pic" style="background-image: url('https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAI-AAAAJDMzYzE3MWVkLTAzODUtNDcxNC04YTg0LWNlZmZmNWQ4NmNiOQ.jpg')"></div>
                    <div class="vom_name"><a href="">Josh Eberhard</a></div>
                </div>
            </div>
        </div>
        <div class="panel content">
            
            <div class="volunteers">
                <div class="vol_describe">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati ea ad nemo fugiat fuga veritatis illo perferendis maxime id, eius, accusantium eos, rem odit esse neque ipsam dolorum, cumque blanditiis.
                </div>

                <div class="profiles">
                    @foreach($volunteers as $volunteer)
                    <div class="profile">
                        <a href="/volunteer/{{$volunteer->id}}">
                            <div class="profile_pic" style="background-image: url('{{$volunteer->profile_image_url}}')"></div>
                            <div class="name">{{$volunteer->fullName()}}</div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <script>
            $(function(){
                $('button').click( function(){
                    $('.lightbox-tint').toggleClass('on');
                });

                $('.lightbox-tint').click( function(){
                    // Close lightbox and tint div
                    $('')
                });

                $('.lightbox').click( function(e){
                    console.log("hello lalala");
                    e.stopPropagation();
                });
            });
        </script>
    </body>
</html>
