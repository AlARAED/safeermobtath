@extends('layouts.app')
@section('title', __('Submit request for translation'))
@section('content')
<section class="safeer std_form translate_srv">
    <div class="col-lg-5 m-auto text-center col-custom">
        <div class="section-content mb-5">
            <h2 class="title-1">{{__('Professional document translation service')}}</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 m-auto text-center mt-4">
                <h5>{{__('The total word count')}} 570</h5>
                <h5>{{__('Translation languages')}}: {{__('English / Albanian')}}</h5>
                <h5>{{__('Field of Specialization')}}: {{__('General')}}</h5>
                <h5>{{__('Certified translator, standard speed')}}</h5>
                <h5>{{__('Estimated completion time')}}: 10/26/2020 6:10 {{__('PM')}}</h5>

                <h4 class="color_red mt-5 mb-5">89.23 $ {{__('US')}}</h4>

                <div class="scholarship">
                    <button class="form-control btn_complete m-auto">{{__('Submit your request')}}</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection