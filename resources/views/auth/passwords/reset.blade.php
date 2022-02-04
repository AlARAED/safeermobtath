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
                    <a href="#">{{ __('Reset Password') }}</a>
                </li>
            </ul>
            <div class="col-lg-7 m-auto text-center col-custom">
                <div class="section-content mt-3">
                    <h2 class="title-1">{{ __('Reset Password') }}</h2>
                </div>
            </div>
            <div class="std_form">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="row form-group">
                        <div class="col-4 col-md-2">
                            <label for="email">{{__('Email')}}</label>
                        </div>
                        <div class="col-8 col-md-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required >

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>



                    </div>

                    <div class="row form-group">
                        <div class="col-4 col-md-2">
                            <label for="email">{{ __('Password') }}</label>
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
                            <label for="email">{{ __('Confirm Password') }}</label>
                        </div>
                        <div class="col-8 col-md-3">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">


                        </div>



                    </div>



                    <div class="scholarship m-auto w_max_content">

                        <button type="submit" class="form-control btn_newsletter mt-5" type="submit">
                            {{ __('Reset Password') }}
                        </button>



                    </div>

                </form>
            </div>
        </div>
    </section>



@endsection
