<!DOCTYPE html>
<html>
<head>
    <title>New Volunteer</title>
    <link href='https://fonts.googleapis.com/css?family=Pathway+Gothic+One|Raleway:300,400,500' rel='stylesheet' type='text/css'>
    <link href="/styles.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body>
    @extends('master')

    @section('main_content')
    <div class="panel">
        <div class="main">
            <div class="new_title"><span>New Volunteer</span></div>
            <div class="new_volunteer">
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
                        <div class="row_name">Profile Image</div>
                        <div class="input"><input type="text" placeholder="Cool Pictures" name="profile_image_url"></div>
                    </div>
                    <div class="form_row">
                        <div class="row_name">Bio</div>
                        <div class="input"><textarea class="bio_textarea"name="bio" placeholder="Why this person is awesome!"></textarea></div>
                    </div>
                <button class="vol_save">Save Volunteer</button>
                </form>
            </div>
        </div>
    </div>
    @stop
</body>
</html>
