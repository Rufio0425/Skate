<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

            
                    
                        <div class="fn">First Name
                        <input type="text" name="first_name" value="{{ old('first_name') }}"></div>
                        
                    
                        <div>Last Name
                       
                            <input type="text" name="last_name" value="{{ old('last_name') }}"></div>
                        
                        <div>Email
                        
                            <input type="email" name="email" value="{{ old('email') }}">@if(count($errors) > 0)
                        @if(count($errors->getBags()['default']->get('email'))>0)
                            <span>
                                {{$errors->getBags()['default']->get('email')[0]}}
                            </span>
                        @endif 
                     @endif
                        </div>
                    
                        <div> Password
                        <input type="password" name="password"></div>
                    
                   <div> Confirm Password
                       <input type="password" name="password_confirmation"></div>
                    
                           <button type="submit">Register</button>
                            </div>
                            </div>

                            </div>

            </form>
        </div>