<!DOCTYPE html>
<html>
    <head>
        <title>Volunteers</title>
        <link rel="icon" href="/images/sas_logo.jpg">
        <link href='https://fonts.googleapis.com/css?family=Pathway+Gothic+One|Raleway:300,400,500' rel='stylesheet' type='text/css'>
        <link href="/styles.css" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    </head>
    <body>
        @extends('master')

        @section('main_content')
        <div class="panel hero">
            <div class="vom_section">
                <div class="banner">
                    <div class="title"><span>Volunteers</span></div>
                </div>
                <div class="vom">
                    <div class="vom_title"><span>Volunteer of The Month</span></div>
                    <div class="vom_pic" style="background-image: url('/images/max_collay_couch.jpg')"></div>
                    <div class="vom_name"><a href="">Max Collay</a></div>
                </div>
            </div>
        </div>
        <div class="panel content">
            
            <div class="volunteers">
                <div class="vol_describe">
                    At Skate After School, we match talented and enthusiastic volunteers with Phoenix area schools to provide skateboard instruction to underserved youth. With donated skateboard equipment, we are able to engage students in a challenging and exciting extracurricular activity.
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
        @stop
    </body>
</html>
