<html lang="en">
<head>
</head>
<body>
	<div class="background"></div>
	<header>
        <div class="logo"><a href=""><img src="http://www.skateafterschool.org/wp-content/uploads/2014/02/sas-wordmark.png"></a></div>
        <div class="nav">
            <a href="/volunteer">Who's Helping</a>
            @if(Auth::User())
                <a href="/vol_new">New Volunteer</a>
                <button class="logout"><a href="/auth/logout">Logout</a></button>
            @else
                <button class="logout"><a href="/">Login</a></button>
            @endif
        </div>
    </header>
	@yield('main_content')
</body>
</html>