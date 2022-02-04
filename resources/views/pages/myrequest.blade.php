@extends('layouts.app')
@section('title', __('My Ads'))
@section('content')
    <section class="education cost_living my_ads_">
        <div class="container">
            <ul class="nav_tab">
                <li>
                    <a href="/">{{__('Home')}}</a>
                    <i class="fas @if(App::getLocale() == 'en') fa-angle-right @else fa-angle-left @endif"></i>
                </li>
                <li>
                    <a href="#">{{__('My Ads')}}</a>
                </li>
            </ul>
            <div class="col-lg-12 m-auto text-center col-custom">
                <div class="section-content mt-3">
                    <h2 class="title-1">{{__('My Ads')}}</h2>
                </div>
                <div>
                    <a href="" class="add_ads"><i class="fas fa-plus mr-2"></i>{{__('Add Your Ad')}}</a>
                </div>
            </div>

            <input type="text" id="" placeholder="{{__('Type a keyword to search')}}" class="form-control ads_search">

        </div>
        <section class="ads_raised mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 mb_30">
                        <div class="ads_p_box position-relative">
                            <div class="ads_feature_">
                                <div class="m-auto w_max_content"><i class="fa fa-star"></i></div>
                                <p>{{__('Feature')}}</p>
                            </div>
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
                                <nav class="navbar navbar-expand-lg p-0">
                                    <li class="nav-item dropdown d-inline-block m-auto">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-cog mr-2"></i>{{__('options')}}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">{{__('Update your ad')}}</a>
                                            <a class="dropdown-item" href="#">{{__('Edit your ad')}}</a>
                                            <a class="dropdown-item" href="{{route(app()->getLocale() .'.distinguish_ur_ad')}}">{{__('Distinguish your ad')}}</a>
                                            <a class="dropdown-item" href="#">{{__('Delete your ad')}}</a>
                                        </div>
                                    </li>
                                </nav>
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
                                <nav class="navbar navbar-expand-lg p-0">
                                    <li class="nav-item dropdown d-inline-block m-auto">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-cog mr-2"></i>{{__('options')}}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">{{__('Update your ad')}}</a>
                                            <a class="dropdown-item" href="#">{{__('Edit your ad')}}</a>
                                            <a class="dropdown-item" href="{{route(app()->getLocale() .'.distinguish_ur_ad')}}">{{__('Distinguish your ad')}}</a>
                                            <a class="dropdown-item" href="#">{{__('Delete your ad')}}</a>
                                        </div>
                                    </li>
                                </nav>
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
                                <nav class="navbar navbar-expand-lg p-0">
                                    <li class="nav-item dropdown d-inline-block m-auto">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-cog mr-2"></i>{{__('options')}}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">{{__('Update your ad')}}</a>
                                            <a class="dropdown-item" href="#">{{__('Edit your ad')}}</a>
                                            <a class="dropdown-item" href="{{route(app()->getLocale() .'.distinguish_ur_ad')}}">{{__('Distinguish your ad')}}</a>
                                            <a class="dropdown-item" href="#">{{__('Delete your ad')}}</a>
                                        </div>
                                    </li>
                                </nav>
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
                                <nav class="navbar navbar-expand-lg p-0">
                                    <li class="nav-item dropdown d-inline-block m-auto">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-cog mr-2"></i>{{__('options')}}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">{{__('Update your ad')}}</a>
                                            <a class="dropdown-item" href="#">{{__('Edit your ad')}}</a>
                                            <a class="dropdown-item" href="{{route(app()->getLocale() .'.distinguish_ur_ad')}}">{{__('Distinguish your ad')}}</a>
                                            <a class="dropdown-item" href="#">{{__('Delete your ad')}}</a>
                                        </div>
                                    </li>
                                </nav>
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
                                <nav class="navbar navbar-expand-lg p-0">
                                    <li class="nav-item dropdown d-inline-block m-auto">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-cog mr-2"></i>{{__('options')}}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">{{__('Update your ad')}}</a>
                                            <a class="dropdown-item" href="#">{{__('Edit your ad')}}</a>
                                            <a class="dropdown-item" href="{{route(app()->getLocale() .'.distinguish_ur_ad')}}">{{__('Distinguish your ad')}}</a>
                                            <a class="dropdown-item" href="#">{{__('Delete your ad')}}</a>
                                        </div>
                                    </li>
                                </nav>
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
                                <nav class="navbar navbar-expand-lg p-0">
                                    <li class="nav-item dropdown d-inline-block m-auto">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-cog mr-2"></i>{{__('options')}}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">{{__('Update your ad')}}</a>
                                            <a class="dropdown-item" href="#">{{__('Edit your ad')}}</a>
                                            <a class="dropdown-item" href="{{route(app()->getLocale() .'.distinguish_ur_ad')}}">{{__('Distinguish your ad')}}</a>
                                            <a class="dropdown-item" href="#">{{__('Delete your ad')}}</a>
                                        </div>
                                    </li>
                                </nav>
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