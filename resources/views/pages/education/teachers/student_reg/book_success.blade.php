@extends('layouts.app')
@section('title', __('Book Success'))
@section('content')
    <section class="success_submission">
        <div class="container">
            <div class="col-12 col-md-8 m-auto text-center">
                <div class="bg_submission">
                    <p>{{__('The process of reserving your lesson with the English language teacher was successful')}}</p>
                    <p>{{__('You will be reminded of the lesson date')}}</p>
                    <a href="">{{__('Correspondence the teacher')}}</a>
                </div>
            </div>
        </div>
    </section>

@endsection
