@extends('layouts.app')
@section('title', __('Rate your experience'))
@section('content')
        <section class="rate_teacher">
        <div class="container">
            <div class="mb-5 mt-5 text-center">
                <h4 class="mb-4">{{__('Evaluation')}}</h4>
                <h5>{{__('Rate your experience with')}} {{__('Adam Ali')}}</h5>
            </div>
                <div class="col-12 col-md-9 m-auto text-center">
                    <div class="profile-rating mb-5">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <textarea class="form-control" name="" rows="8" placeholder="{{__('Write an evaluation of your experience with the student')}}"></textarea>
                    <div class="scholarship">
                        <button class="form-control btn_complete m-auto">{{__('Send')}}</button>
                    </div>
                </div>

        </div>
    </section>
@endsection