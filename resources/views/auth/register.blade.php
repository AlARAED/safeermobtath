@extends('layouts.app')

@section('content')


<section class="cost_living bg__safeer sign_up">
    <div class="container">
        <ul class="nav_tab mt-0">
            <li>
                <a href="/">{{__('Home')}}</a>
                <i class="fas @if(App::getLocale() == 'en') fa-angle-right @else fa-angle-left @endif"></i>
            </li>
            <li>
                <a href="#">{{__('Sign Up')}}</a>
            </li>
        </ul>
        <div class="col-lg-7 m-auto text-center col-custom">
            <div class="section-content mt-3">
                <h2 class="title-1">{{__('New Account')}}</h2>
            </div>
        </div>
        <div class="prof_img mb-5">
            <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="100" height="100" alt="">
        </div>



                    <form method="POST" action="{{ route('register') }}">
                        @csrf
<div class="std_form">
            <div class="row form-group">
                <div class="col-4 col-md-2">
                    <label for="user_name">{{__('User Name')}}</label>
                </div>
                <div class="col-8 col-md-3">

                      
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>
            </div>


               <div class="row form-group">
                <div class="col-4 col-md-2">
                    <label for="email">{{__('Email')}}</label>
                </div>
                <div class="col-8 col-md-3">
                           
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        

                        </div>
            </div>




             <div class="row form-group">
                <div class="col-4 col-md-2">
                    <label for="password">{{__('Password')}}</label>
                </div>
                <div class="col-8 col-md-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  
                    </div>
            </div>
            <div class="row form-group">
                <div class="col-4 col-md-2">
                    <label for="password_confirm">{{__('Password Confirm')}}</label>
                </div>
                <div class="col-8 col-md-3">

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                           

                           </div>
            </div>
            <div class="scholarship m-auto w_max_content">
                                <button type="submit"  class="form-control btn_newsletter mt-5">
                                    {{ __('Register') }}
                                </button>

                                  </div>

</form>

            
        </div>
        </div>
</section>
                            
                    
             
@endsection
