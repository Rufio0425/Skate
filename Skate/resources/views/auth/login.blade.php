<form method="POST" action="/auth/login">
{!! csrf_field() !!}
<div>Email
    <input class="inputemail" type="email" name="email" value="{{ old('email') }}" size="35" >
    @if(count($errors) > 0)
        @if(count($errors->getBags()['default']->get('email'))>0)
            <span>
                {{$errors->getBags()['default']->get('email')[0]}}
            </span>
        @endif 
    @endif
</div>

<div class="loginpw"> Password</div>
    <div><input class="inputpw"type="password" name="password" id="password" size="35"></div>
    <div class="remember"><input type="checkbox" name="remember"> Remember Me</div>
    <div class="loginbutton1"> <button  type="submit">Login</button></div>
</div>

</form>