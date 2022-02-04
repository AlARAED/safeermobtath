@extends('layouts.app')
@section('title', __('Email'))
@section('content')
<section class="email_address_ text-center sign_up">
    <div class="container">
       <div class="row">
           <div class="col-12 col-md-7 m-auto">
               <h4>{{__('Email Address')}}</h4>
               <p class="mt-4 mb-5 font_17">{{__("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur beatae commodi consectetur consequatur corporis dolores dolorum ducimus eum ex iste minima modi, nihil quasi, quo reprehenderit repudiandae similique ullam.")}}</p>
               <div class="scholarship d-flex m-auto w_max_content">
                   <button class="form-control btn_complete">{{__('Acceptance')}}</button>
                   <button class="form-control btn_newsletter">{{__('Refusal')}}</button>
               </div>
           </div>
       </div>
        </div>
</section>
@endsection
