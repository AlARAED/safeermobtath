@extends('layouts.app')
@section('title', __('Ads Raised'))
@section('content')
<section class="education cost_living">
    <div class="container">
        <ul class="nav_tab">
            <li>
                <a href="/">{{__('Home')}}</a>
                <i class="fas @if(App::getLocale() == 'en') fa-angle-right @else fa-angle-left @endif"></i>
            </li>
            <li>
                <a href="#">{{__('Ads Raised')}}</a>
            </li>
        </ul>
        <div class="col-lg-12 m-auto text-center col-custom">
            <div class="section-content mt-3">
                <h2 class="title-1">{{__('Ads')}}</h2>
            </div>
            <div>
            <a href="" class="add_ads"><i class="fas fa-plus mr-2"></i>{{__('Add Your Ad')}}</a>
            </div>
        </div>
        <select name="" class="form-control m-auto determine_city">
            <option value="">{{__('Determine the city')}}</option>
            <option value="">{{__('Riyadh')}}</option>
            <option value="">{{__('Mecca')}}</option>
        </select>
        </div>
        <section class="featured_ads featured_ads_page mb-5">
            <div class="container">
            <h3 class="text-left mb-3">{{__('Ads Featured')}}</h3>

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
                        <h4 class="mt-3">{{__("Grow your business and Profits NOW")}}<br>{{__("Safeer Mubta'th offers digital advertisement services for various businesses achieving its goals of increasing profits, sales and customers.")}}<br>{{__("Order now!")}}</h4>
                    </div>
                </div>
            </div>
        </section>
    <section class="ads_raised mb-5">
        <div class="container">
            <div class="d-flex mb-5">
            <h3 class="text-left">{{__('Ads Raised')}}</h3>
            <div class="d-flex ml-auto">
                <select name="" class="form-control service_type input_radius w_200">
                    <option value="">{{__('By department')}}</option>
                    <option value="1">{{__('Furniture')}}</option>
                    <option value="2">{{__('Car')}}</option>
                    <option value="3">{{__('Housing')}}</option>
                </select>
                <div class="input-group ads_inp ml-3 w_200">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-map-marker-alt color_red"></i></span>
                    </div>
                    <input type="text" id="" class="form-control input_radius pl-0 pt-1" placeholder="{{__('Determine Location')}}">
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb_30">
                    <div class="ads_p_box">
                        <a href="#">
                        <img class="ads_img_page" src="{{asset('assets/images/ads1.png')}}" alt="{{__('ads')}}">
                        </a>
                        <div class="ads_content">
                            <div class="ads_con_header d-flex">
                                <a href="#"><h5>{{__('Buying furniture')}}</h5></a>
                            <a href="#" class="ml-auto color_red">{{__('Furniture department')}}</a>
                            </div>
                            <p class="ads_con_text">{{__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem blanditiis cumque dolore eaque eligendi, enim facere harum hic iusto molestiae pariatur perferendis praesentium reiciendis rerum, similique temporibus voluptatem voluptates.')}} </p>
                            <div class="ads_con_footer d-flex">
                                <div class="mr-auto d-flex">
                                <div class="prof_img mr-2">
                                    <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="40" height="40" alt="">
                                </div>
                                <p class="m-auto">{{__('Advertiser')}}</p>
                                </div>
                                <p class="m-auto"><i class="far fa-clock mr-1 color_red"></i>{{__('Two days ago')}}</p>
                                <p class="ml-auto mt-auto mb-auto"><i class="fas fa-map-marker-alt mr-1 color_red"></i>{{__('Location')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb_30">
                    <div class="ads_p_box">
                        <a href="#">
                            <img class="ads_img_page" src="{{asset('assets/images/ads2.png')}}" alt="{{__('ads')}}">
                        </a>
                        <div class="ads_content">
                            <div class="ads_con_header d-flex">
                                <a href="#"><h5>{{__('Cars Check')}}</h5></a>
                                <a href="#" class="ml-auto color_red">{{__('Cars department')}}</a>
                            </div>
                            <p class="ads_con_text">{{__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem blanditiis cumque dolore eaque eligendi, enim facere harum hic iusto molestiae pariatur perferendis praesentium reiciendis rerum, similique temporibus voluptatem voluptates.')}} </p>
                            <div class="ads_con_footer d-flex">
                                <div class="mr-auto d-flex">
                                    <div class="prof_img mr-2">
                                        <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="40" height="40" alt="">
                                    </div>
                                    <p class="m-auto">{{__('Advertiser')}}</p>
                                </div>
                                <p class="m-auto"><i class="far fa-clock mr-1 color_red"></i>{{__('Two days ago')}}</p>
                                <p class="ml-auto mt-auto mb-auto"><i class="fas fa-map-marker-alt mr-1 color_red"></i>{{__('Location')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb_30">
                    <div class="ads_p_box">
                        <a href="#">
                            <img class="ads_img_page" src="{{asset('assets/images/ads5.png')}}" alt="{{__('ads')}}">
                        </a>
                        <div class="ads_content">
                            <div class="ads_con_header d-flex">
                                <a href="#"><h5>{{__('Apartment for sale')}}</h5></a>
                                <a href="#" class="ml-auto color_red">{{__('Housing department')}}</a>
                            </div>
                            <p class="ads_con_text">{{__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem blanditiis cumque dolore eaque eligendi, enim facere harum hic iusto molestiae pariatur perferendis praesentium reiciendis rerum, similique temporibus voluptatem voluptates.')}} </p>
                            <div class="ads_con_footer d-flex">
                                <div class="mr-auto d-flex">
                                    <div class="prof_img mr-2">
                                        <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="40" height="40" alt="">
                                    </div>
                                    <p class="m-auto">{{__('Advertiser')}}</p>
                                </div>
                                <p class="m-auto"><i class="far fa-clock mr-1 color_red"></i>{{__('Two days ago')}}</p>
                                <p class="ml-auto mt-auto mb-auto"><i class="fas fa-map-marker-alt mr-1 color_red"></i>{{__('Location')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb_30">
                    <div class="ads_p_box">
                        <a href="#">
                            <img class="ads_img_page" src="{{asset('assets/images/ads1.png')}}" alt="{{__('ads')}}">
                        </a>
                        <div class="ads_content">
                            <div class="ads_con_header d-flex">
                                <a href="#"><h5>{{__('Buying furniture')}}</h5></a>
                                <a href="#" class="ml-auto color_red">{{__('Furniture department')}}</a>
                            </div>
                            <p class="ads_con_text">{{__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem blanditiis cumque dolore eaque eligendi, enim facere harum hic iusto molestiae pariatur perferendis praesentium reiciendis rerum, similique temporibus voluptatem voluptates.')}} </p>
                            <div class="ads_con_footer d-flex">
                                <div class="mr-auto d-flex">
                                    <div class="prof_img mr-2">
                                        <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="40" height="40" alt="">
                                    </div>
                                    <p class="m-auto">{{__('Advertiser')}}</p>
                                </div>
                                <p class="m-auto"><i class="far fa-clock mr-1 color_red"></i>{{__('Two days ago')}}</p>
                                <p class="ml-auto mt-auto mb-auto"><i class="fas fa-map-marker-alt mr-1 color_red"></i>{{__('Location')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb_30">
                    <div class="ads_p_box">
                        <a href="#">
                            <img class="ads_img_page" src="{{asset('assets/images/ads2.png')}}" alt="{{__('ads')}}">
                        </a>
                        <div class="ads_content">
                            <div class="ads_con_header d-flex">
                                <a href="#"><h5>{{__('Cars Check')}}</h5></a>
                                <a href="#" class="ml-auto color_red">{{__('Cars department')}}</a>
                            </div>
                            <p class="ads_con_text">{{__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem blanditiis cumque dolore eaque eligendi, enim facere harum hic iusto molestiae pariatur perferendis praesentium reiciendis rerum, similique temporibus voluptatem voluptates.')}} </p>
                            <div class="ads_con_footer d-flex">
                                <div class="mr-auto d-flex">
                                    <div class="prof_img mr-2">
                                        <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="40" height="40" alt="">
                                    </div>
                                    <p class="m-auto">{{__('Advertiser')}}</p>
                                </div>
                                <p class="m-auto"><i class="far fa-clock mr-1 color_red"></i>{{__('Two days ago')}}</p>
                                <p class="ml-auto mt-auto mb-auto"><i class="fas fa-map-marker-alt mr-1 color_red"></i>{{__('Location')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb_30">
                    <div class="ads_p_box">
                        <a href="#">
                            <img class="ads_img_page" src="{{asset('assets/images/ads5.png')}}" alt="{{__('ads')}}">
                        </a>
                        <div class="ads_content">
                            <div class="ads_con_header d-flex">
                                <a href="#"><h5>{{__('Apartment for sale')}}</h5></a>
                                <a href="#" class="ml-auto color_red">{{__('Housing department')}}</a>
                            </div>
                            <p class="ads_con_text">{{__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem blanditiis cumque dolore eaque eligendi, enim facere harum hic iusto molestiae pariatur perferendis praesentium reiciendis rerum, similique temporibus voluptatem voluptates.')}} </p>
                            <div class="ads_con_footer d-flex">
                                <div class="mr-auto d-flex">
                                    <div class="prof_img mr-2">
                                        <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="40" height="40" alt="">
                                    </div>
                                    <p class="m-auto">{{__('Advertiser')}}</p>
                                </div>
                                <p class="m-auto"><i class="far fa-clock mr-1 color_red"></i>{{__('Two days ago')}}</p>
                                <p class="ml-auto mt-auto mb-auto"><i class="fas fa-map-marker-alt mr-1 color_red"></i>{{__('Location')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb_30">
                    <div class="ads_p_box">
                        <a href="#">
                            <img class="ads_img_page" src="{{asset('assets/images/ads1.png')}}" alt="{{__('ads')}}">
                        </a>
                        <div class="ads_content">
                            <div class="ads_con_header d-flex">
                                <a href="#"><h5>{{__('Buying furniture')}}</h5></a>
                                <a href="#" class="ml-auto color_red">{{__('Furniture department')}}</a>
                            </div>
                            <p class="ads_con_text">{{__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem blanditiis cumque dolore eaque eligendi, enim facere harum hic iusto molestiae pariatur perferendis praesentium reiciendis rerum, similique temporibus voluptatem voluptates.')}} </p>
                            <div class="ads_con_footer d-flex">
                                <div class="mr-auto d-flex">
                                    <div class="prof_img mr-2">
                                        <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="40" height="40" alt="">
                                    </div>
                                    <p class="m-auto">{{__('Advertiser')}}</p>
                                </div>
                                <p class="m-auto"><i class="far fa-clock mr-1 color_red"></i>{{__('Two days ago')}}</p>
                                <p class="ml-auto mt-auto mb-auto"><i class="fas fa-map-marker-alt mr-1 color_red"></i>{{__('Location')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb_30">
                    <div class="ads_p_box">
                        <a href="#">
                            <img class="ads_img_page" src="{{asset('assets/images/ads2.png')}}" alt="{{__('ads')}}">
                        </a>
                        <div class="ads_content">
                            <div class="ads_con_header d-flex">
                                <a href="#"><h5>{{__('Cars Check')}}</h5></a>
                                <a href="#" class="ml-auto color_red">{{__('Cars department')}}</a>
                            </div>
                            <p class="ads_con_text">{{__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem blanditiis cumque dolore eaque eligendi, enim facere harum hic iusto molestiae pariatur perferendis praesentium reiciendis rerum, similique temporibus voluptatem voluptates.')}} </p>
                            <div class="ads_con_footer d-flex">
                                <div class="mr-auto d-flex">
                                    <div class="prof_img mr-2">
                                        <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="40" height="40" alt="">
                                    </div>
                                    <p class="m-auto">{{__('Advertiser')}}</p>
                                </div>
                                <p class="m-auto"><i class="far fa-clock mr-1 color_red"></i>{{__('Two days ago')}}</p>
                                <p class="ml-auto mt-auto mb-auto"><i class="fas fa-map-marker-alt mr-1 color_red"></i>{{__('Location')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb_30">
                    <div class="ads_p_box">
                        <a href="#">
                            <img class="ads_img_page" src="{{asset('assets/images/ads5.png')}}" alt="{{__('ads')}}">
                        </a>
                        <div class="ads_content">
                            <div class="ads_con_header d-flex">
                                <a href="#"><h5>{{__('Apartment for sale')}}</h5></a>
                                <a href="#" class="ml-auto color_red">{{__('Housing department')}}</a>
                            </div>
                            <p class="ads_con_text">{{__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem blanditiis cumque dolore eaque eligendi, enim facere harum hic iusto molestiae pariatur perferendis praesentium reiciendis rerum, similique temporibus voluptatem voluptates.')}} </p>
                            <div class="ads_con_footer d-flex">
                                <div class="mr-auto d-flex">
                                    <div class="prof_img mr-2">
                                        <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="40" height="40" alt="">
                                    </div>
                                    <p class="m-auto">{{__('Advertiser')}}</p>
                                </div>
                                <p class="m-auto"><i class="far fa-clock mr-1 color_red"></i>{{__('Two days ago')}}</p>
                                <p class="ml-auto mt-auto mb-auto"><i class="fas fa-map-marker-alt mr-1 color_red"></i>{{__('Location')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb_30">
                    <div class="ads_p_box">
                        <a href="#">
                            <img class="ads_img_page" src="{{asset('assets/images/ads1.png')}}" alt="{{__('ads')}}">
                        </a>
                        <div class="ads_content">
                            <div class="ads_con_header d-flex">
                                <a href="#"><h5>{{__('Buying furniture')}}</h5></a>
                                <a href="#" class="ml-auto color_red">{{__('Furniture department')}}</a>
                            </div>
                            <p class="ads_con_text">{{__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem blanditiis cumque dolore eaque eligendi, enim facere harum hic iusto molestiae pariatur perferendis praesentium reiciendis rerum, similique temporibus voluptatem voluptates.')}} </p>
                            <div class="ads_con_footer d-flex">
                                <div class="mr-auto d-flex">
                                    <div class="prof_img mr-2">
                                        <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="40" height="40" alt="">
                                    </div>
                                    <p class="m-auto">{{__('Advertiser')}}</p>
                                </div>
                                <p class="m-auto"><i class="far fa-clock mr-1 color_red"></i>{{__('Two days ago')}}</p>
                                <p class="ml-auto mt-auto mb-auto"><i class="fas fa-map-marker-alt mr-1 color_red"></i>{{__('Location')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb_30">
                    <div class="ads_p_box">
                        <a href="#">
                            <img class="ads_img_page" src="{{asset('assets/images/ads2.png')}}" alt="{{__('ads')}}">
                        </a>
                        <div class="ads_content">
                            <div class="ads_con_header d-flex">
                                <a href="#"><h5>{{__('Cars Check')}}</h5></a>
                                <a href="#" class="ml-auto color_red">{{__('Cars department')}}</a>
                            </div>
                            <p class="ads_con_text">{{__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem blanditiis cumque dolore eaque eligendi, enim facere harum hic iusto molestiae pariatur perferendis praesentium reiciendis rerum, similique temporibus voluptatem voluptates.')}} </p>
                            <div class="ads_con_footer d-flex">
                                <div class="mr-auto d-flex">
                                    <div class="prof_img mr-2">
                                        <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="40" height="40" alt="">
                                    </div>
                                    <p class="m-auto">{{__('Advertiser')}}</p>
                                </div>
                                <p class="m-auto"><i class="far fa-clock mr-1 color_red"></i>{{__('Two days ago')}}</p>
                                <p class="ml-auto mt-auto mb-auto"><i class="fas fa-map-marker-alt mr-1 color_red"></i>{{__('Location')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb_30">
                    <div class="ads_p_box">
                        <a href="#">
                            <img class="ads_img_page" src="{{asset('assets/images/ads5.png')}}" alt="{{__('ads')}}">
                        </a>
                        <div class="ads_content">
                            <div class="ads_con_header d-flex">
                                <a href="#"><h5>{{__('Apartment for sale')}}</h5></a>
                                <a href="#" class="ml-auto color_red">{{__('Housing department')}}</a>
                            </div>
                            <p class="ads_con_text">{{__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem blanditiis cumque dolore eaque eligendi, enim facere harum hic iusto molestiae pariatur perferendis praesentium reiciendis rerum, similique temporibus voluptatem voluptates.')}} </p>
                            <div class="ads_con_footer d-flex">
                                <div class="mr-auto d-flex">
                                    <div class="prof_img mr-2">
                                        <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="40" height="40" alt="">
                                    </div>
                                    <p class="m-auto">{{__('Advertiser')}}</p>
                                </div>
                                <p class="m-auto"><i class="far fa-clock mr-1 color_red"></i>{{__('Two days ago')}}</p>
                                <p class="ml-auto mt-auto mb-auto"><i class="fas fa-map-marker-alt mr-1 color_red"></i>{{__('Location')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        <nav class="mt-5">
            <ul class="pagination">
                <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                    <span class="page-link" aria-hidden="true">‹</span>
                </li>
                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" rel="next" aria-label="Next »">›</a>
                </li>
            </ul>
        </nav>
    </section>

    </section>
@endsection