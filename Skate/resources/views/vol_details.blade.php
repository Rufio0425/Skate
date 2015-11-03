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
     /*lightbox*/
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
			color:black;
		}

		.vol_pic{
			height:280px;
			width:280px;
			background-size:cover;
			border-radius:140px;
		}

		.sponser_title{
			font-family: 'Pathway Gothic One', sans-serif;
			color:#FFFFFF;
			font-weight: 900;
    		font-size: 24pt;
    		transform: translateY(-15px);
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
            border-radius:100px;
		}

		.slider div{
			background-size:cover;
			height:400px;
		}

		.media-join{
			background-color: pink;
			text-align:center;
		}

		.red{
			background-color: blue; 
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
				<br>
				<div><span class="editors"><i class="fa fa-camera-retro fa-lg"></i></span></div>
				<br>
				<div class="sponser_title">Sponsors</div>
				<div class="sponsers">
					@foreach($sponsors as $sponsor)
					<a href="{{ $sponsor->url }}" target="_blank"><img src="{{ $sponsor->image_url }}"></a>
					@endforeach
					<br>
				<span class="editors"><i class="fa fa-plus-square"></i></span>
				</div>
			</div>
			<div class="content">
				<div class="name">{{ $volunteer->first_name }} {{ $volunteer->last_name }} <span class="editors"><i class="fa fa-pencil"></i></span></div>
				<div class="bio">{{ $volunteer->bio }} <span class="editors"><i class="fa fa-pencil"></i></div>
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
			function addEditor(){
				$('.editors').on('click', function(){
					$(this).closest('div').html('<input placeholder="{{ $volunteer->bio }}" class="bio_input"><button class="save">Save</button><button>Cancel</button>');
				});
			}

			addEditor();

			$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                }
            });

			$('.slider').slick({
				dots: true,
				autoplay: true,
				slidesToShow: 3,
				slidesToScroll: 1,
				autoplaySpeed: 2000,
			});

			$('.bio').on('click', '.save', function(){
				console.log('Hello');

				var updatedBio =  $('.bio_input').val()

				var formData = {
					bio: updatedBio,
				};



				var button = this;

				$.post( "/api/volunteer/{{ $volunteer->id }}/update", formData, function( data ) {
  					console.log(button);
  					$(button).parent().html(updatedBio + ' <span class="editors"><i class="fa fa-pencil"></i>');
  					addEditor();
				});
			});

			// $('button').click( function(){
   //              $('.lightbox-tint').toggleClass('on');
   //          });

            // $('.lightbox-tint').click( function(){
            //     // Close lightbox and tint div
            //     $('')
            // });

            // $('.lightbox').click( function(e){
            //     console.log("hello lalala");
            //     e.stopPropagation();
            // });

		});
	</script>
	<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.5.8/slick.min.js"></script>
</body>
</html>