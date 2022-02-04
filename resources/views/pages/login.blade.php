@extends('layouts.app')
@section('title', __('Login'))
@section('content')
<section class="cost_living bg__safeer sign_up">
    <div class="container">
        <ul class="nav_tab mt-0">
            <li>
                <a href="/">{{__('Home')}}</a>
                <i class="fas @if(App::getLocale() == 'en') fa-angle-right @else fa-angle-left @endif"></i>
            </li>
            <li>
                <a href="#">{{__('Login')}}</a>
            </li>
        </ul>
        <div class="col-lg-7 m-auto text-center col-custom">
            <div class="section-content mt-3">
                <h2 class="title-1">{{__('Login')}}</h2>
            </div>
        </div>

        <div class="std_form">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row form-group">
                <div class="col-4 col-md-2">
                    <label for="email">{{__('Email')}}</label>
                </div>
                <div class="col-8 col-md-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus aria-required="">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror                </div>
            </div>
            <div class="row form-group">
                <div class="col-4 col-md-2">
                    <label for="password">{{__('Password')}}</label>
                </div>
                <div class="col-8 col-md-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>




                <div class="scholarship m-auto w_max_content">
                <button class="form-control btn_newsletter mt-5" type="submit">{{__('Login')}}</button>

            </div>

            </form>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif

        </div>

        </div>

</section>
@endsection
