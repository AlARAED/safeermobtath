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
                    <a href="#">{{__('Email Activation')}}</a>
                </li>
            </ul>
            <div class="col-lg-7 m-auto text-center col-custom">
                <div class="section-content mt-3">
                    <h2 class="title-1">{{__('Email Activation')}}</h2>
                </div>
            </div>

            <div class="std_form">

                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif



                    <div class="row form-group">
                        <div class="col-12 col-md-12">
                    <h2 align="center">{{ __('Before proceeding, please check your email for a verification link.') }}
                                {{ __('If you did not receive the email') }},
                        <br>

                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>
                        </form>

                    </h2>

                        </div>
                    </div>



            </div>

        </div>

    </section>






@endsection
