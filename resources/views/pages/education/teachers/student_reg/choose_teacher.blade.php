@extends('layouts.app')
@section('title', __('Choose Teacher'))
@section('content')
    <section class="profile_complete choose_teacher">
        <div class="container">
            <div class="profile_bg prof_head">
                <div class="messages_profile">
{{--                    <div class="msg_prof_bg mb-3">--}}
{{--                        <div class="d-flex mb-4">--}}
{{--                        <h5>{{__('New messages')}}</h5><p>0</p>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex mb-4">--}}
{{--                            <h5>{{__('Import messages')}}</h5><p>22</p>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex">--}}
{{--                            <h5>{{__('Export messages')}}</h5><p>10</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="msg_prof_bg">--}}
{{--                        <div class="d-flex mb-4">--}}
{{--                            <h5>{{__('Activities')}}</h5><p>0</p>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex">--}}
{{--                            <h5>{{__('Financial transactions')}}</h5><p>22</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="prof_img">
                    <img class="profile_img" src="{{asset('uploads/'.Auth::user()->image)}}" width="100" height="100" alt="">
                </div>
                <div class="profile_username d-flex">
                    <img src="{{asset('assets/images/icon/country.svg')}}" alt="">
                    <h5>{{$teach->first_name}}   {{$teach->last_name}}</h5>
                </div>
                <form method="POST" id="form_r" action="{{route(app()->getLocale().'.save_student_complete',['id'=>$teach->id])}}"  enctype="multipart/form-data">
                    @csrf

                <div class="row prof_content">
                    <div class="col-10 col-md-10 m-auto">

                        <select name="language_type" class="form-control" required>
                            <option value="1">{{__('French')}}</option>
                            <option value="2">{{__('English')}}</option>

                        </select>
                        <select name="level" class="form-control" required>
                            <option value="1">{{__('Academic')}}</option>
                            <option value="2">{{__('secondary')}}</option>
                            <option value="3">{{__('primary')}}</option>

                        </select>
{{--                        <div class="appoin_check d-flex m-auto w_max_content">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input  name="Skill_required" type="checkbox" class="custom-control-input" id="customCheck1" value="1" checked>--}}
{{--                                <label class="custom-control-label" for="customCheck1">{{__('Speak')}}</label>--}}
{{--                            </div>--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input  name="Skill_required" type="checkbox" class="custom-control-input" id="customCheck2"  value="2" >--}}
{{--                                <label class="custom-control-label" for="customCheck2" >{{__('Writing')}}</label>--}}
{{--                            </div>--}}
{{--                            <div class="custom-control custom-checkbox pr-0">--}}
{{--                                <input  name="Skill_required"type="checkbox" class="custom-control-input" id="customCheck3"   value="3">--}}
{{--                                <label class="custom-control-label" for="customCheck3">{{__('listening')}}</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="scholarship">
                    <button class="form-control m-auto btn_complete" id="search_teacher" type="submit">{{__('Search for a teacher')}}</button>
                </div>
                </form>

            </div>

            </div>

    </section>

@endsection
@section('js')
    <script>
        $('#search_teacher').click(function() {
                $('.search_teacher').removeClass('d-none');

        });
    </script>
    @stop
