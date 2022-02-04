@extends('layouts.app')
@section('title', __('About Us'))
@section('content')
    <div class="bg__safeer">
        <div class="col-lg-5 m-auto text-center col-custom">
            <div class="section-content mb-5">
                <h2 class="title-1">{{__('About Safeer Mbtath')}}</h2>
            </div>
        </div>
        <section class="about_safeer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9 mt-4">
                    <div class="about_content">
                    <h5>{{__('Definition of Safeer Mbtath')}}</h5>
                    <p>{{__("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur beatae commodi consectetur consequatur corporis dolores dolorum ducimus eum ex iste minima modi, nihil quasi, quo reprehenderit repudiandae similique ullam.")}}</p>
                    </div>
                    <div class="about_content">
                    <h5>{{__('Safeer Mbtath Goals')}}</h5>
                        <p>{{__("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur beatae commodi consectetur consequatur corporis dolores dolorum ducimus eum ex iste minima modi, nihil quasi, quo reprehenderit repudiandae similique ullam.")}}</p>
                    </div>
                        <div class="about_content">
                        <h5>{{__('Safeer Mbtath Visibility')}}</h5>
                            <p>{{__("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur beatae commodi consectetur consequatur corporis dolores dolorum ducimus eum ex iste minima modi, nihil quasi, quo reprehenderit repudiandae similique ullam.")}}</p>
                        </div>
                            <div class="about_content">
                            <h5>{{__('Safeer Mbtath Services')}}</h5>
                                <p>{{__("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur beatae commodi consectetur consequatur corporis dolores dolorum ducimus eum ex iste minima modi, nihil quasi, quo reprehenderit repudiandae similique ullam.")}}</p>
                            </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection