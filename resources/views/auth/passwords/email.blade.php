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
                    <a href="#">{{__('Login')}}</a>
                </li>
            </ul>
            <div class="col-lg-7 m-auto text-center col-custom">
                <div class="section-content mt-3">
                    <h2 class="title-1">{{__('Login')}}</h2>
                </div>
            </div>
            <div class="std_form">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="row form-group">
                        <div class="col-4 col-md-2">
                            <label for="email">{{__('Email')}}</label>
                        </div>
                        <div class="col-8 col-md-3">

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>



                    </div>




                    <div class="scholarship m-auto w_max_content">

                        <button type="submit" class="form-control btn_newsletter mt-5" type="submit">
                            {{ __('Send Password Reset Link') }}
                        </button>



                    </div>

                </form>
            </div>
        </div>
    </section>









@endsection
