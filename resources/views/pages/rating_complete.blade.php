@extends('layouts.app')
@section('title', __('Submission Complete'))
@section('content')
    <section class="success_submission">
        <div class="container">
            <div class="col-12 col-md-8 m-auto text-center">
                <div class="bg_submission">
                    {{--<strong>{{__('Thank you for submission')}}</strong>--}}
                    <p>{{__('Thank you for your evaluation, it will be reviewed by the administration')}}</p>
                    <p>{{__('Wish you good luck')}}</p>
                    <a href="{{route(app()->getLocale() .'.home')}}">{{__('Go to the home page')}}</a>
                </div>
            </div>
        </div>
    </section>

@endsection
