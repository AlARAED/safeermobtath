@extends('layouts.app')
@section('title', __('Ask Safeer Mbtath'))
@section('content')
    <section class="safeer">
        <div class="col-lg-5 m-auto text-center col-custom">
            <div class="section-content mb-5">
                <h2 class="title-1">{{__('Ask Safeer Mbtath')}}</h2>
            </div>
        </div>
    </section>
    <section class="faq__">
        <div class="col-lg-5 m-auto text-center col-custom">
            <div class="section-content mb-5">
                {{--<h2 class="title-1">{{__('Frequently Questions')}}</h2>--}}
            </div>
        </div>
        <div class="accordion_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="accordion" class="card__accordion">
                            @foreach($ask as $asks)
                                <div class="card card_dipult">
                                    <div class="card-header card_accor" id="headingOne" style="font-weight: 700px;  font-size: large;
">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            {!! $asks->question !!}
                                            <i class="fa fa-plus"></i><i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <p> {!! $asks->answer !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection