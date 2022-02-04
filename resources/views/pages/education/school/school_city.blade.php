@extends('layouts.app')
@section('title', __('Schools'))
@section('content')
<section class="education">
    <div class="container">
        <ul class="nav_tab">
            <li>
                <a href="">{{__('Home')}}</a>
                <i class="fas @if(App::getLocale() == 'en') fa-angle-right @else fa-angle-left @endif"></i>
            </li>
            <li>
                <a href="">{{__('Education')}}</a>
                <i class="fas @if(App::getLocale() == 'en') fa-angle-right @else fa-angle-left @endif"></i>
            </li>
            <li>
                <a href="">{{__('Schools')}}</a>
            </li>
        </ul>
        <div class="col-7 col-md-3 eduction_select m-auto">
            <select name="" id="practical_degree" class="form-control">
                <option value="">{{__('Choose City')}}</option>
                <option selected value="1">{{__('Toronto')}}</option>
                <option value="2">{{__('Canda')}}</option>
                <option value="3">{{__('America')}}</option>
            </select>
        </div>
        <div class="col-lg-7 m-auto text-center col-custom">
            <div class="section-content mt-3">
                <h2 class="title-1">{{__('The International Schools/Toronto')}}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 univ_sc">
                <a href="{{route(app()->getLocale() .'.school_details')}}"><h2>{{__('Brentwood School')}}</h2></a>
                <h3>{{__("The MIT community is driven by a shared purpose: to make a better world through education, research, and innovation, obsessed with numbers of students registered, and welcoming to talented people regardless of where they come from")}}</h3>
                <a href="{{route(app()->getLocale() .'.school_details')}}"><img src="{{asset('assets/images/school2.PNG')}}" alt=""></a>
            </div>
            <div class="col-12 col-md-12 univ_sc">
                <a href="{{route(app()->getLocale() .'.school_details')}}"><h2>{{__('Brentwood School')}}</h2></a>
                <h3>{{__("The MIT community is driven by a shared purpose: to make a better world through education, research, and innovation, obsessed with numbers of students registered, and welcoming to talented people regardless of where they come from")}}</h3>
                <a href="{{route(app()->getLocale() .'.school_details')}}"><img src="{{asset('assets/images/school2.PNG')}}" alt=""></a>
            </div>
            <div class="col-12 col-md-12 univ_sc">
                <a href="{{route(app()->getLocale() .'.school_details')}}"><h2>{{__('Brentwood School')}}</h2></a>
                <h3>{{__("The MIT community is driven by a shared purpose: to make a better world through education, research, and innovation, obsessed with numbers of students registered, and welcoming to talented people regardless of where they come from")}}</h3>
                <a href="{{route(app()->getLocale() .'.school_details')}}"><img src="{{asset('assets/images/school2.PNG')}}" alt=""></a>
            </div>
            <div class="col-12 col-md-12 univ_sc">
                <a href="{{route(app()->getLocale() .'.school_details')}}"><h2>{{__('Brentwood School')}}</h2></a>
                <h3>{{__("The MIT community is driven by a shared purpose: to make a better world through education, research, and innovation, obsessed with numbers of students registered, and welcoming to talented people regardless of where they come from")}}</h3>
                <a href="{{route(app()->getLocale() .'.school_details')}}"><img src="{{asset('assets/images/school2.PNG')}}" alt=""></a>
            </div>
            <div class="col-12 col-md-12 univ_sc">
                <a href="{{route(app()->getLocale() .'.school_details')}}"><h2>{{__('Brentwood School')}}</h2></a>
                <h3>{{__("The MIT community is driven by a shared purpose: to make a better world through education, research, and innovation, obsessed with numbers of students registered, and welcoming to talented people regardless of where they come from")}}</h3>
                <a href="{{route(app()->getLocale() .'.school_details')}}"><img src="{{asset('assets/images/school2.PNG')}}" alt=""></a>
            </div>
        </div>
        <nav>
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
        </div>
</section>
@endsection