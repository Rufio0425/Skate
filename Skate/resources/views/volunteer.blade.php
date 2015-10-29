<!DOCTYPE html>
<html>
    <head>
        <title>Volunteers</title>

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

            .title {
                font-size: 200px;
                font-family:'LeagueGothicRegular';
            }*/
            

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
                text-align:right;
                padding:15px 51px 15px;
            }

            .nav a{
                background-color: white;
                font-size:10pt;
                padding:10px;
            }

            .hero{
                padding-top:33px;
                width:100%;
                background-color: blue;
            }

            .main{
                margin-top:15px;
                color:black;
                width:74em;
                margin-left:auto;
                margin-right:auto;
                background-color: yellow;
            }

            .title{
                font-size:120px;
                text-align:center;
                background-color: green;
            }

            .title span{
                background-color: pink;
            }

            .vom{
                text-align:center;
                background-color: brown;
                padding:20px 0;
            }


            .vom_title{
                padding:10px;
                background-color: orange;
            }

            .vom_title span{
                font-size:50px;
                background-color: yellow;
            }

            .vom_pic{
                height:300px;
                width:300px;
                background-size:cover;
                display:inline-block;
            }
            
            .content{
                /*width:74em;
                margin-left:auto;
                margin-right:auto;*/
                background-color: green;
                display:flex;
                text-align:center;
            }

            aside{
                background-color: pink;
                width:100px;
            }

            .vol_name{
                font-size:25px;
            }


            .volunteers{
                display:flex;
                justify-content:center;
                width:74em;
                margin-left:auto;
                margin-right:auto;
                background-color:orange;
                text-align:center;
                padding:20px 0;
            }

            .vol_describe{
                width:400px;
                background-color: blue;
                font-family: 'helvetica';
                font-size:16pt;
            }

            .profiles{
                background-color: pink;
                flex-wrap:wrap;
                justify-content:center;
                display:flex;
            }

            .profile{
                background-color: red;
                margin:5px;
            }

            .profile_pic{
                height:200px;
                width:200px;
                background-size:cover;
                display:inline-block;
            }

            .lightbox-tint{
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
            }

            .bottom-join{
                text-align:center;
            }
        </style>
    </head>
    <body>
        <div class="lightbox-tint">
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
        </div>
        <header>
            <div class="logo"><a href="">Skate After School</a></div>
            <div class="nav">
                <a href="/">Home</a>
                <a href="/volunteer">Who's Helping</a>
                <a href="/vol_new">New Volunteer</a>
                <button class="sign-up">Become One of Us!</button>
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
                    <div class="vol_name"><a href="">Josh Eberhard</a></div>
                </div>
            </div>
        </div>
        <div class="panel content">
            
            <div class="volunteers">
                <div class="vol_describe">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati ea ad nemo fugiat fuga veritatis illo perferendis maxime id, eius, accusantium eos, rem odit esse neque ipsam dolorum, cumque blanditiis. Blah blah blah blah blah blah blah blah blah
                </div>

                <div class="profiles">
                    @foreach($volunteers as $volunteer)
                    <div class="profile">
                        <div class="profile_pic" style="background-image: url('{{$volunteer->profile_image_url}}')"></div>
                        <div class="name"><a href="/volunteer/{{$volunteer->id}}">{{$volunteer->fullName()}}</a></div>
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
