<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Volunteer Details</title>
	<link href='https://fonts.googleapis.com/css?family=Pathway+Gothic+One|Raleway:300,400,500' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.8/slick.css"/>
	<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.8/slick-theme.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<style>
	/*body*/
		body {
			background-image: url('http://www.skateafterschool.org/wp-content/uploads/2014/02/7.jpg');
			background-size:cover;
            margin: 0;
            padding: 0;
            width: 100%;
            font-weight: 100;
        }

     /*nav bar*/

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
            padding:10px 0;
            background-color: #222222;
        }

        .logo{
            text-align:left;
            background-color: #222222;
            color:white;
            flex:1;
            padding:15px 70px;
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

    /*profile*/

		.profile{
			/*background-color: blue;*/
			padding-top:40px;
		}

		.volunteer{
			display:flex;
			width:74em;
            margin-left:auto;
            margin-right:auto;
		}

		.aside{
			padding:40px 10px 0 20px;
			flex:1;
			text-align:center;
		}

		.editors{
			font-size:12pt;
		}

		.vol_pic{
			height:280px;
			width:280px;
			background-size:cover;
		}

		.sponsers img{
			height:50px;
			width:50px;
			border-radius:25px;
		}

		.content{
			padding:40px 0;
			text-align:center;
			color:#FFFFFF;
			flex:3;

		}

		.name{
			font-weight:900;
			font-size:65pt;
			font-family: 'Pathway Gothic One', sans-serif;
		}

		.bio{
			font-size:20pt;
			font-family: 'Raleway', sans-serif;
		}

	/*media*/

		.slider{
			padding-top:20px;
			padding-bottom:0;
			width:74em;
            margin-left:auto;
            margin-right:auto;
            text-align:center;
		}

		.slider div{
			background-size:cover;
			height:400px;
		}

		.media-join{
			background-color: pink;
			text-align:center;
		}

		.media-join button{
			background-color:blue;
			height:40px;
			border:0;
			width:74em;
			margin-left:auto;
            margin-right:auto;
		}

		.media-join button:active{
			background-color: red;
		}

		.red{
			background-color: blue; 
		}
	</style>
</head>
<body>
	<header>
        <div class="logo"><a href=""><img src="http://www.skateafterschool.org/wp-content/uploads/2014/02/sas-wordmark.png"></a></div>
        <div class="nav">
            <a href="">Home</a>
            <a href="/volunteer">Who's Helping</a>
            <a href="/vol_new">New Volunteer</a>
            <button class="sign_up">Become One of Us!</button>
        </div>
    </header>

	<div class="panel profile">
		<div class="volunteer">
			<div class="aside">
				<div class="vol_pic" style="background-image: url('{{ $volunteer->profile_image_url }}')"></div>
				<div><span class="editors"><i class="fa fa-camera-retro fa-lg"></i></span></div>
				<div class="sponsers">
					<a href="http://www.welcomeskateboards.com/" target="_blank"><img src="http://www.twelveboardstore.com.au/web_images/welcomeskate.png"></a>
					<a href="http://www.coalatree.com/" target="_blank"><img src="http://static1.squarespace.com/static/50ab002ee4b00ef29d01c84e/50ac846ce4b0b1fe7ccf60af/50ac846ee4b0b1fe7ccf60b4/1353483375455/ClientLogo_CT.jpg"></a>
					<a href="http://esskateboarding.com/" target="_blank"><img src="http://www.illogicalgravity.com/ilg/logos/eS.jpg"></a>
				<span class="editors"><i class="fa fa-plus-square"></i></span>
				</div>
			</div>
			<div class="content">
				<div class="name">{{ $volunteer->first_name }} {{ $volunteer->last_name }} <span class="editors"><i class="fa fa-pencil"></i></span></div>
				<div class="bio">{{ $volunteer->bio }}<span class="editors"><i class="fa fa-pencil"></i></div>
			</div>
		</div>
	</div>
	<div class="panel media">
		<div class="slider">
			<div style="background-image: url('http://assets.espn.go.com/photo/2009/0424/as_skateRyan_Lay_Bs180_Full.jpg')"></div>
			<div style="background-image: url('http://cdn.skateboarding.transworld.net/files/2009/11/ryan-lay-wallride.jpg')"></div>
			<div style="background-image: url('http://cdn.grindtv.com/wp-content/uploads/2012/06/RyanLay-crook-4281.jpg')"></div>
			<div style="background-image: url('http://a3.espncdn.com/photo/2014/1016/as_skate_lay6_1536.jpg')"></div>
			<div><iframe width="100%" height="100%" src="https://www.youtube.com/embed/93YiIOswx0g" frameborder="0" allowfullscreen></iframe></div>
		</div>
		<div><span class="editors">Add New Media<i class="fa fa-plus-square"></i></span></div>

	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.slider').slick({
				dots: true,
				autoplay: true,
				slidesToShow: 3,
				slidesToScroll: 1,
				autoplaySpeed: 2000,
			});

			$('.editors').on('click', function(){
				$(this).closest('div').toggleClass('red');
			});
		});
	</script>
	<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.5.8/slick.min.js"></script>
</body>
</html>