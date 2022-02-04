@extends('layouts.app')
@section('title', __('Cost Living'))
@section('content')
<section class="education cost_living">
    <div class="container">
        <ul class="nav_tab">
            <li>
                <a href="/">{{__('Home')}}</a>
                <i class="fas @if(App::getLocale() == 'en') fa-angle-right @else fa-angle-left @endif"></i>
            </li>
            <li>
                <a href="#">{{__('Cost Living')}}</a>
            </li>
        </ul>
        <div class="col-lg-7 m-auto text-center col-custom">
            <div class="section-content mt-3">
                <h2 class="title-1">{{__('Cost Living')}}</h2>
            </div>
        </div>
        <select name="city_id" id="select_city" class="form-control m-auto determine_city">
            <option value="0"></option>
            @foreach($Cities as $city)
            <option value="{{$city->id}}"> @if(App::getLocale() == 'en')
                    {{$city->name_en}}
                @else {{$city->name_ar}}@endif</option>
                @endforeach


        </select>
        <div class="row cost_l">
            </div>
        <!--here-->
        </div>
</section>
@endsection

@section('js')
    <script>
        var url="{{url(app()->getLocale().'/cost_living')}}"
        $('#select_city').on('change',function () {

            $('.cost_l').load(url+"/"+$(this).val());
        });

        $(window).on('load',function () {
            $('#select_city option:eq(0)').remove();
            $('#select_city').val($('#select_city option:eq(0)').val());
            $('.cost_l').load(url+"/"+$('#select_city').val());
        });
    </script>
    @endsection