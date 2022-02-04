@extends('layouts.app')
@section('title', __('Choose Success'))
@section('content')
    <section class="success_submission">
        <div class="container">
            <div class="col-12 col-md-8 m-auto text-center">
                <div class="bg_submission">
                    <p>{{__('Thank you')}}</p>
                    <p>{{__('We will contact the student')}}<br> {{__('We notify you of all new things')}}</p>
                    <a href="">{{__('Return to the home page')}}</a>
                </div>
            </div>
        </div>
    </section>

@endsection
