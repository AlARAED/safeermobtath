@extends('layouts.app')
@section('title', __('International Schools'))
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
                <select name="country_id" class="form-control" id="country_name">
                    <option value="ALL">{{__('Choose City')}}</option>
                    @foreach($cities as $city)
                        <option value="{{$city->id}}">

                            @if(App::getLocale() == 'en') {{$city->name_en}}@else {{$city->name_ar}}@endif
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-lg-7 m-auto text-center col-custom">
                <div class="section-content mt-3">
                    <h2 class="title-1">{{__('The International Schools')}}</h2>
                </div>
            </div>
            <div class="row"  id="collages">
                @foreach($Schools  as $School)
                    <div class="col-12 col-md-12 univ_sc">
                        <a href="{{url(app()->getLocale() .'/school_details/'.$School->id)}}"><h2>
                                @if(App::getLocale() == 'en')   {{$School->name_en}} @else   {{$School->name_ar}} @endif
                            </h2></a>
                        <h3>
                            @if(App::getLocale() == 'en')
                                {!!  $School->content_en !!}
                            @else
                                {!! $School->content_ar !!}
                            @endif
                        </h3>
                        <a href=""><img src="{{asset('uploads/'.$School->image)}}" alt="" width="1555px" height="550px"></a>
                    </div>

                @endforeach

                {{$Schools->links()}}


            </div>
            {{--        <nav>--}}
            {{--            <ul class="pagination">--}}
            {{--                <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">--}}
            {{--                    <span class="page-link" aria-hidden="true">‹</span>--}}
            {{--                </li>--}}
            {{--                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>--}}
            {{--                <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
            {{--                <li class="page-item">--}}
            {{--                    <a class="page-link" href="#" rel="next" aria-label="Next »">›</a>--}}
            {{--                </li>--}}
            {{--            </ul>--}}
            {{--        </nav>--}}
        </div>
    </section>
@endsection
@section('js')


    <script>

        $('#country_name').on('change', function() {
            city= this.value ;
            $('#collages').html('');
            $.ajax({
                url: "{{route(app()->getLocale().'.international_schools')}}",
                type: 'get',
                data: {
                    'city':city},
                success: function(data) {
                    $.each(data['data'], function (key, val) {
                        var col='<div class="col-12 col-md-12 univ_sc"></div>';
                        $('#collages').append(col);
                        $('#collages .univ_sc').last().load("{{locale_route(app()->getLocale().'.load_collages2')}}/"+val.id);
                    });
                },
                error: function(data) {


                }
            });
        });
        {{--$('.view_more').on('click',function (e) {--}}
        {{--    $.ajax({--}}
        {{--        url: "{{route(app()->getLocale().'.international_universities')}}",--}}
        {{--        type: 'get',--}}
        {{--        data: {'from':from,--}}
        {{--            'city':city},--}}
        {{--        success: function(data) {--}}
        {{--            if(data['data'].length<5){--}}
        {{--                $('.view_more').hide();--}}
        {{--            }else{--}}
        {{--                $('.view_more').show();--}}
        {{--            }--}}
        {{--            $.each(data['data'], function (key, val) {--}}
        {{--                var col='<div class="col-12 col-md-12 univ_sc"></div>';--}}
        {{--                $('#collages').append(col);--}}
        {{--                $('#collages .univ_sc').last().load("{{locale_route(app()->getLocale().'.load_collages2')}}/"+val.id);--}}
        {{--                from=from+1;--}}
        {{--            });--}}
        {{--        },--}}
        {{--        error: function(data) {--}}


        {{--        }--}}
        {{--    });--}}

        {{--});--}}
    </script>
@endsection
