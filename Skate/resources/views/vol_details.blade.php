<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Volunteer Details</title>
	<link rel="icon" href="/images/sas_logo.jpg">
	<link href='https://fonts.googleapis.com/css?family=Pathway+Gothic+One|Raleway:300,400,500' rel='stylesheet' type='text/css'>
	<link href="/styles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.8/slick.css"/>
	<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.8/slick-theme.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script>
	var csrf_token = '{!! csrf_token() !!}';
	var volunteer_id = '{{ $volunteer->id }}';
	</script>
</head>
<body>
	@extends('master')

	@section('main_content')
	<div class="banner">
		<div class="volunteer">
			<div class="aside">
				<div class="vol_pic" style="background-image: url('{{ $volunteer->profile_image_url }}')"></div>
				<br>
				<div>
					@if(Auth::User())
					<span class="editors"><i class="fa fa-camera-retro fa-lg"></i></span>
					@endif
				</div>
				<br>
				<div class="sponser_title">Sponsors</div>
				<div class="sponsers">
					@foreach($sponsors as $sponsor)
					<a href="{{ $sponsor->url }}" target="_blank"><img src="{{ $sponsor->image_url }}"></a>
					@endforeach
					<br>
					@if(Auth::User())
					<span class="editors"><i class="fa fa-plus-square"></i></span>
					@endif
				</div>
			</div>
			<div class="description">
				<div class="vol_name">{{ $volunteer->first_name }} {{ $volunteer->last_name }}
					@if(Auth::User())
					<span class="editors"><i class="fa fa-pencil"></i></span>
					@endif
				</div>
				<div class="bio"><span class="val">{{ $volunteer->bio }}</span>
					@if(Auth::User())
					<span class="editors"><i class="fa fa-pencil"></i></span>
					@endif
					<div class="txtarea">
						<textarea class="bio_input">{{ $volunteer->bio }}</textarea>
						<div class="buttons"><button class="save">Save</button><button class="cancel">Cancel</button></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="media">
		<div class="slider">
			<div style="background-image: url('http://assets.espn.go.com/photo/2009/0424/as_skateRyan_Lay_Bs180_Full.jpg')"></div>
			<div style="background-image: url('/images/ryan_lay_5050.png')"></div>
			<div style="background-image: url('http://cdn.grindtv.com/wp-content/uploads/2012/06/RyanLay-crook-4281.jpg')"></div>
			<div style="background-image: url('http://a3.espncdn.com/photo/2014/1016/as_skate_lay6_1536.jpg')"></div>
			<div><iframe width="100%" height="100%" src="https://www.youtube.com/embed/93YiIOswx0g" frameborder="0" allowfullscreen></iframe></div>
		</div>
	</div>
	@stop
	<script type="text/javascript" src="/main.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.5.8/slick.min.js"></script>

</body>
</html>