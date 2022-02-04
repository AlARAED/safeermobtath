@extends('layouts.app')
@section('title', __('Choose Teacher'))
@section('content')
    <section class="profile_complete choose_teacher">
        <div class="container">
            <div class="search_teacher ">
{{--                <div class="profile_bg">--}}
{{--                    <div class="appoin_check d-flex">--}}
{{--                        <p class="s_rating mr-5">{{__('Search by rating')}}</p>--}}
{{--                        <div class="custom-control custom-checkbox">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="customCheck5">--}}
{{--                            <label class="custom-control-label" for="customCheck5">{{__('Most Employed')}}</label>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-checkbox">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="customCheck6">--}}
{{--                            <label class="custom-control-label" for="customCheck6">{{__('Online Now')}}</label>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-checkbox">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="customCheck7">--}}
{{--                            <label class="custom-control-label" for="customCheck7">{{__('Transact with them previously')}}</label>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-checkbox pr-0">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="customCheck8">--}}
{{--                            <label class="custom-control-label" for="customCheck8">{{__('Top rated')}}</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                @foreach($teachers as $teach)

                <div class="profile_bg">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="prof_img">
                             <a href="{{route(app()->getLocale().'.teacher_teacher_profile',['id'=>$teach->id])}}" >  <img class="profile_img" src="{{asset('uploads/'.$teach->userName()->image)}}" width="100" height="100" alt="">
                                </a>

                            </div>

                            <div class="profile-rating">

                                @for($i = 0; $i < $teach->rating; $i++)
                                    @if($i <= $teach->rating)
                                        <label for="star-1" class="star">
                                            <i class="fas fa-star" class="star star--gold"></i>
                                        </label>
                                    @else
                                    @endif
                                @endfor


                            </div>
                            <div class="text-left">
                                <div class="d-flex">
                                    <h5 class="s_emp_info mb-2">{{__('Employment rate')}}</h5><p>{{$teach->Re_employment_rate}}%</p>
                                </div>
                            </div>


                            <div class="text-left">
                                <div class="d-flex">
                                    <a href="{{route(app()->getLocale().'.teacher_teacher_profile',['id'=>$teach->id])}}">  <h5 class="s_emp_info mb-2">{{$teach->first_name}}   {{$teach->last_name}}</h5></a>
                                </div>
                                <h5 class="s_emp_info">
                                    @if($teach->language_type==1)
                                        {{__('French teacher')}}
                                    @else
                                        {{__('English teacher')}}
                                    @endif</h5>


                                <h5 class="s_emp_info">
                                    {{$teach->price_per_hour}}$  H </h5>
                            </div>






                        </div>







                        <div class="col-12 col-md-6 d-flex float-right">
                            <a type="submit" class="form-control btn_newsletter" href="{{route(app()->getLocale().'.research_correspondence_teacher',['id'=>$id,'teacher'=>$teach->user_id])}}" style="width: 400px">{{__('Correspondence the teacher')}}</a>
                            <div class="s_emp_icon">
                                <i class="fas fa-heart m_0_50"></i>
                                <i class="fas fa-flag"></i>
                            </div>
                        </div>



                    </div>

                </div>

                @endforeach
                {{$teachers->links()}}

            </div>
        </div>

    </section>

@endsection
{{--@section('js')--}}
{{--    <script>--}}
{{--        $('#search_teacher').click(function() {--}}
{{--            $('.search_teacher').removeClass('d-none');--}}

{{--        });--}}
{{--    </script>--}}
{{--@stop--}}
