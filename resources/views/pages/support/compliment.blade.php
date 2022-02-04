@extends('layouts.app')
@section('title', __('Compliment'))
@section('content')
<section class="safeer">
    <div class="col-lg-5 m-auto text-center col-custom">
        <div class="section-content mb-5">
            <h2 class="title-1">{{__('Compliment')}}</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 m-auto mt-4">
                <h5>{{__('Write your compliment here')}}</h5>

                <textarea name="" id="" cols="30" rows="6" class="form-control safeer_textarea"></textarea>
                <div class="scholarship">
                    <button class="form-control btn_newsletter m-auto">{{__('Send')}}</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection