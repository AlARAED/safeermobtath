@extends('layouts.app')
@section('title', __('home'))
@section('content')
    <div class="container" @if(App::getLocale() == 'en') dir="rtl" @else dir="ltr" @endif>
    <div class="chat_mbtath">
        <a href="#">
            <img src="{{asset('assets/images/icon/chat.svg')}}" width="30" class="chat" alt="">
            <p>{{__("Join Safeer mobtaath's community")}}</p>
        </a>
    </div>
    </div>
    <div class="bg_std bg_home">
        <div class="content__">
            <img class="img-full" src="{{asset('assets/images/logo/logo.png')}}" alt="{{__('Logo Image')}}">
            <h1>{{__('Safeer Mbtath ')}}</h1>
            <h3>{{__("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book")}}</h3>
        </div>
    </div>
    <section class="safeer_mbtath">
        <div class="container">
            <div class="col-lg-5 m-auto text-center col-custom">
                <div class="section-content mb-5">
                    <h2 class="title-1">{{__('Safeer Mbtath Services')}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="sections_box">
                        <img src="{{asset('assets/images/icon/quotation-mark.svg')}}" class="mb-3 mt-2" width="40" alt="">
                        <h3 class="s_content">{{__('Study admissions for')}}<br>{{__('students ')}}<br>{{__('in the best universal universities')}}</h3>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sections_box">
                        <img src="{{asset('assets/images/icon/quotation-mark.svg')}}" class="mb-3 mt-2" width="40" alt="">
                        <h3 class="s_content">{{__('E-learning within the kingdom of Saudi Arabia')}}</h3>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sections_box">
                        <img src="{{asset('assets/images/icon/quotation-mark.svg')}}" class="mb-3 mt-2" width="40" alt="">
                        <h3 class="s_content">{{__('Professional Arabic and French teaching')}}</h3>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sections_box">
                        <img src="{{asset('assets/images/icon/quotation-mark.svg')}}" class="mb-3 mt-2" width="40" alt="">
                        <h3 class="s_content">{{__('Post-arrival services and insurances services offering')}}</h3>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sections_box">
                        <img src="{{asset('assets/images/icon/quotation-mark.svg')}}" class="mb-3 mt-2" width="40" alt="">
                        <h3 class="s_content">{{__('Experience exchanges')}} @if(App::getLocale() == 'en')<br>{{__('between')}}<br>@endif{{__("the members and students of Safeer Mubta'th")}}</h3>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sections_box">
                        <img src="{{asset('assets/images/icon/quotation-mark.svg')}}" class="mb-3 mt-2" width="40" alt="">
                        <h3 class="s_content">{{__('Presentation of the nature of the country')}}<br>{{__('to which the student will go and its costs')}}</h3>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sections_box">
                        <img src="{{asset('assets/images/icon/quotation-mark.svg')}}" class="mb-3 mt-2" width="40" alt="">
                        <h3 class="s_content">{{__('Currency exchange services')}}</h3>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sections_box">
                        <img src="{{asset('assets/images/icon/quotation-mark.svg')}}" class="mb-3 mt-2" width="40" alt="">
                        <h3 class="s_content">{{__('Advertisement services to grow business')}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="featured_ads mb-5">
        <div class="container">
            <div class="col-lg-5 m-auto text-center col-custom">
                <div class="section-content mb-5">
                    <h2 class="title-1">{{__('Featured ads')}}</h2>
                </div>
            </div>


            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('assets/images/ads.png')}}" alt="{{__('ads')}}">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('assets/images/ads.png')}}" alt="{{__('ads')}}">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('assets/images/ads.png')}}" alt="{{__('ads')}}">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">{{__('Previous')}}</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">{{__('Next')}}</span>
                </a>
            </div>
            <div class="row">
                <div class="col-12 col-md-7 m-auto">
                    <h4 class="mt-3 mb-5">{{__("Grow your business and Profits NOW")}}<br>{{__("Safeer Mubta'th offers digital advertisement services for various businesses achieving its goals of increasing profits, sales and customers.")}}<br>{{__("Order now!")}}</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="achievements">
        <div class="container">
            <div class="col-lg-5 m-auto text-center col-custom">
                <div class="section-content mb-5">
                    <h2 class="title-1">{{__('Achievements of Safeer Mbtath')}}</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-10 m-auto d-flex achiev_">
                    <div class="col-6 col-md-6 m-auto achiev_content">
                        <a href="#"><h5 class="achiev_title mb-3">{{__('Providing services for scholarship students')}}</h5></a>
                        <p class="achiev_text">{{__("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book")}}</p>
                    </div>
                    <div class="col-6 col-md-6 m-auto">
                            <div class="border_rads_1 hover-style">
                            <a href="#"><img class="img-full border_rads_1" src="{{asset('assets/images/achiev1.png')}}" alt=""></a>
                            </div>
                        </div>
                </div>
                <div class="col-12 col-md-10 m-auto d-flex achiev_">
                    <div class="col-6 col-md-6 m-auto">
                        <div class="border_rads_2 hover-style">
                        <a href="#"><img  class="img-full border_rads_2" src="{{asset('assets/images/achiev2.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 m-auto achiev_content">
                        <a href="#"><h5 class="achiev_title mb-3">{{__('Providing services for scholarship students')}}</h5></a>
                        <p class="achiev_text">{{__("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book")}}</p>
                    </div>

                </div>
            </div>


        </div>
    </section>
    <section class="evaluation">
        <div class="container">
            <div class="col-lg-5 m-auto text-center col-custom">
                <div class="section-content mb-5">
                    <h2 class="title-1">{{__('Safeer Mbtaath evaluation')}}</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="d-flex">
                        <img class="ev_user_img" src="{{asset('assets/images/ev_img.png')}}" width="100" alt="">
                        <p class="ev_username">{{__('User Name ')}}</p>
                    </div>
                    <p class="ev_content">{{__("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book")}}</p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="d-flex">
                        <img class="ev_user_img" src="{{asset('assets/images/ev_img.png')}}" width="100" alt="">
                        <p class="ev_username">{{__('User Name ')}}</p>
                    </div>
                    <p class="ev_content">{{__("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book")}}</p>
                </div>
            </div>
            <div class="ev_btn">
            <a href="#">{{__('Rate your experience')}}</a>
            </div>


        </div>
    </section>
    <section class="news_letter mb-5">
        <div class="container">
            <div class="row">
                <div class="col-10 col-md-7 m-auto text-center">
                    <img src="{{asset('assets/images/icon/email.svg')}}" width="50" alt="">
                    <h4>{{__('Subscribe to receive our news')}}</h4>
                    <form action="#">
                        <div class="form-group">
                        <input type="email" id="email" class="form-control" placeholder="{{__('Write your email here')}}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control m-auto btn_newsletter">{{__('Subscribe Now')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    {{--<script>--}}
        {{--$("#carouselExampleControls").owlCarousel({--}}
            {{--rtl: true,--}}
            {{--loop: true,--}}
            {{--nav: true,--}}
            {{--dots: false,--}}
            {{--autoplay: true,--}}
            {{--navText:["<i class='fas fa-chevron-right'></i>","<i class='fas fa-chevron-left'></i>"],--}}
            {{--autoplayHoverPause: true,--}}
            {{--smartSpeed: 1000,--}}
            {{--responsive: {--}}
                {{--0: {items: 1},--}}
                {{--600: {items: 1},--}}
                {{--768: {items: 1}--}}
            {{--}--}}
        {{--});--}}
    {{--</script>--}}
    @stop