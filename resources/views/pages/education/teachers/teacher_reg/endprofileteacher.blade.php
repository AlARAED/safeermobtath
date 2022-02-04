@extends('layouts.app')
@section('title', __('Teacher Profile'))
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/iziModal.min.css')}}"> <!-- Original -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/izi-modal.min.css')}}">
@stop
@section('content')

    <section class="profile_complete teacher_profile">
        <div class="container">

            <div class="profile_bg prof_head">

                {{--@if($teach->accepted==0)--}}

                    @if($teach->user_id == Auth::user()->id)
                        <div class="alert alert-info">
                            <strong></strong>{{__('Wait for the website administration to accept, noting that your file does not appear to students until acceptance is completed')}}
                        </div>
                    @endif
                {{--@endif--}}
                <div class="prof_img">
                    <img class="profile_img" src="

                    {{asset('uploads/'.$teach->userName()->image)}}

                            " width="100" height="100" alt="">
                </div>


                {{--                <div class="edit_delete">--}}
                {{--                    <a href="#" class="ml-auto mr-2"><i class="fa fa-pen"></i></a>--}}
                {{--                </div>--}}
                <div class="profile_username d-flex">
                    <img src="{{asset('assets/images/icon/country.svg')}}" alt="">
                    <h5>{{$teach->first_name}}   {{$teach->last_name}}</h5>
                </div>
                <div class="profile-rating mb-2">

                    @for($i = 0; $i < $teach->rating; $i++)
                        @if($i <= $teach->rating)
                            <label for="star-1" class="star">
                                <i class="fas fa-star" class="star star--gold"></i>
                            </label>
                        @else
                        @endif
                    @endfor

                </div>

                <h5>

                    @if($teach->type_service==1)


                    @if($teach->language_type==1)
                        {{__('French teacher')}}
                    @else
                        {{__('English teacher')}}
                    @endif
                    @endif




                        @if($teach->type_service==2)
                            {{$teach->lesson_type}}
                        @endif
                        @if($teach->type_service==3)
                            {{$teach->lesson_master_type}}

                        @endif

                        @if($teach->type_service==4)
                            {{$teach->field_Ph_type}}

                        @endif





                </h5>

                @if($teach->user_id == Auth::user()->id)

                <a href="{{route(app()->getLocale() .'.message_teacher',['id'=> $teach->id])}}"  style="color: #fff;" class="form-control btn_newsletter ml-auto mr-0 btn_prof_head">{{__('Book a lesson')}}</a>
@endif
                <div class="row prof_content">
                    <div class="col-12 col-md-10 d-flex m-auto">
                        <div class="col-12 col-md-6 border__">
                            <div class="d-flex mb-2">
                                <i class="far fa-clock"></i><h5>{{__('Timing')}}</h5><p><?php echo \Carbon\Carbon::now()->format('H:i:s A')?></p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="fas fa-shield-alt"></i><h5>{{__('Join Safeer Mbtath with date')}}</h5><p>{{$teach->userName()->created_at->format('d/m/Y')}}</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="far fa-heart"></i><h5>{{__('Likes')}}</h5><p>{{$teach->no_like}}</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="position-relative ml-auto w_max_content">
                                <div class="ev_time_table">
                                    {{--                                    <a href="javascript:void(0)"><h5>{{__('Ratings')}}</h5></a>--}}
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#availableAppointments"><h5>{{__('Schedule available appointments')}}</h5></a>
                                </div>
                                <div class="d-flex mb-2">
                                    <h5>{{__('Number of lessons completed')}}</h5><p>{{$teach->no_lesson_completed}}</p>
                                </div>
                                <div class="d-flex mb-2">
                                    <h5>{{__('Re-employment rate')}}</h5><p>{{$teach->Re_employment_rate}}%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            @if($teach->vedio_cv!=null)

                <div class="profile_bg">
                    <div class="row">
                        <div class="col-6 col-md-6 m-auto">
                            <h5 class="mr-auto w_max_content">{{__('Definition Video')}}</h5>
                        </div>
                        <div class="col-6 col-md-6 d-flex float-right edit_delete">
                            {{--                        <a href="javascript:void(0)" onclick="return update_video();" class="ml-auto"><i class="fa fa-pen"></i></a>--}}
                            {{--                        <a href="javascript:void(0)" class="m-0 ml-2"><i class="fa fa-trash"></i></a>--}}
                        </div>
                    </div>
                    <div class="feature-image position-relative mt-4">
                        <img src="{{asset('uploads/'.$teach->vedio_cv)}}" alt="">
                        <div class="popup-video position-absolute">
                            <a class="popup-vimeo" href="{{asset('uploads/'.$teach->vedio_cv)}}">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>

                </div>

            @endif


            <div class="profile_bg">
                <div class="row">
                    <div class="col-6 col-md-6 m-auto">
                        <h5 class="mr-auto w_max_content">{{__('Experience')}}</h5>
                    </div>
                    <div class="col-6 col-md-6 d-flex float-right edit_delete">
                        {{--                        <a href="javascript:void(0)" class="ml-auto"><i class="fa fa-plus"></i></a>--}}
                        {{--                        <a href="javascript:void(0)" class="m-0 ml-2"><i class="fa fa-trash"></i></a>--}}
                    </div>
                </div>


                <div class="text-left d-flex flex-wrap experience_ skills__">
                    @foreach($Skills as $Skill)
                        <p id="skill_{{$Skill->id}}">{{$Skill->description}}
                            @if($teach->user_id == Auth::user()->id)


                                <a href="javascript:void(0)"   class="edit_skill"  data-id="{{$Skill->id}}"   data-name="{{$Skill->description}}"   >
                                    <i class="fa fa-edit" style="position: sticky!important;" ></i>
                                </a>
                                <a href="javascript:void(0)" class="remove_skill"  data-id="{{$Skill->id}}" >
                                    <i class="fas fa-times"></i>
                                </a>
                            @endif
                        </p>
                    @endforeach

                </div>

            </div>


            <div class="profile_bg">
                <div class="row">
                    <div class="col-6 col-md-6 m-auto">
                        <h5 class="mr-auto w_max_content">{{__('Education')}}</h5>
                    </div>
                    <div class="col-6 col-md-6 d-flex float-right edit_delete">
                        {{--                        <a href="javascript:void(0)" class="ml-auto"><i class="fa fa-plus"></i></a>--}}
                        {{--                        <a href="javascript:void(0)" class="m-0 ml-2"><i class="fa fa-trash"></i></a>--}}
                    </div>


                </div>
                <div class="text-left d-flex flex-wrap education_ skills__">
                    @foreach($Education as $Educatio)
                        <p id="education_{{$Educatio->id}}">{{$Educatio->description}}
                            @if($teach->user_id == Auth::user()->id)


                                <a href="javascript:void(0)"   class="edit_education"  data-id="{{$Educatio->id}}"   data-name="{{$Educatio->description}}"   >
                                    <i class="fa fa-edit" style="position: sticky!important;" ></i>
                                </a>
                                <a href="javascript:void(0)" class="remove_education"  data-id="{{$Educatio->id}}" >
                                    <i class="fas fa-times"></i>
                                </a>
                            @endif
                        </p>
                    @endforeach

                </div>


            </div>
            <div class="profile_bg">
                <div class="row">
                    <div class="col-6 col-md-6 m-auto">
                        <h5 class="mr-auto w_max_content">{{__('Skills')}}</h5>
                    </div>
                    <div class="col-6 col-md-6 d-flex float-right edit_delete">
                        {{--                        <a href="javascript:void(0)" id="create_skill" class="ml-auto"><i class="fa fa-plus"></i></a>--}}
                        {{--                        <a href="javascript:void(0)" onclick="return deleted_();" class="m-0 ml-2"><i class="fa fa-trash"></i></a>--}}
                    </div>
                </div>

                <div class="text-left d-flex flex-wrap experience_ skills__">
                    @foreach($Experience as $Experienc)
                        <p id="experience_{{$Experienc->id}}">{{$Experienc->description}}
                            @if($teach->user_id == Auth::user()->id)


                                <a href="javascript:void(0)"   class="edit_experience"  data-id="{{$Experienc->id}}"   data-name="{{$Experienc->description}}"   >
                                    <i class="fa fa-edit" style="position: sticky!important;" ></i>
                                </a>
                                <a href="javascript:void(0)" class="remove_experience"  data-id="{{$Experienc->id}}" >
                                    <i class="fas fa-times"></i>
                                </a>
                            @endif
                        </p>
                    @endforeach

                </div>


            </div>

            <div class="profile_bg">
                <div class="row">
                    <div class="col-6 col-md-6 m-auto">
                        <h5 class="mr-auto w_max_content">{{__('Time with Days')}}</h5>
                    </div>
                    <div class="col-6 col-md-6 d-flex float-right">
                        {{--<a href="javascript:void(0)" id="create_skill" class="ml-auto"><i class="fa fa-plus"></i></a>--}}

                    </div>
                </div>


                <div class="text-left d-flex flex-wrap time_ skills__">
                    @foreach($time as $tim)
                        <p id="time_id_{{$tim->id}}">
                            {{$days[$tim->day-1]}}
                            {{$tim->time}}
                            @if($teach->user_id == Auth::user()->id)


                                <a href="javascript:void(0)"   class="edit_time"  data-id="{{$tim->id}}"   data-day="{{$tim->day}}"  data-description="{{$tim->time}}" >
                                    <i class="fa fa-edit" style="position: sticky!important;" ></i>
                                </a>
                                <a href="javascript:void(0)" class="remove_time"  data-id="{{$tim->id}}" >
                                    <i class="fas fa-times"></i>
                                </a>
                            @endif
                        </p>
                    @endforeach

                </div>




            </div>


        </div>
    </section>

    <!-- Modal Available Appointments -->
    <div class="modal fade" id="availableAppointments" tabindex="-1" role="dialog" aria-labelledby="availableAppointmentsLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center p-4">
                <div class="modal-header m-auto">
                    <h5 class="modal-title color_red font_17" id="availableAppointmentsLabel">{{__('Appointments are available')}} </h5>
                </div>
                <div class="modal-body mt-4">
                    <div class="row mb-3">
                        @foreach($time  as $tim)
                            <div class="col-md-12 col-4 m-auto">

                                <div class="col-md-6 col-4 m-auto">

                                    {{$days[$tim->day-1]}}

                                </div>

                                <div class="col-md-6 col-4 m-auto">
                                    {{$tim->time}}
                                </div>
                            </div>
                            <br>
                        @endforeach

                        {{--                        <div class="col-md-4 col-4 m-auto">--}}
                        {{--                            <span class="form-control btn_complete reserv_">{{__('Reservation')}}</span>--}}
                        {{--                        </div>--}}
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Add-Edit -->
    <div class="izi-modal"
         data-iziModal-fullscreen="true"
         data-iziModal-title=""
         data-iziModal-icon=""
         data-iziModal-padding="20"
         data-iziModal-autoopen="false"
         data-iziModal-headercolor="#4e7ea3"
         id="ajax-modal">
        <form class="mbtath_modal" id="skill_form" name="Form">
            @csrf
            <input type="hidden" name="archive_id" id="skill_id">
            <div class="form-group">
                {{--<label>{{__('Name')}}</label>--}}
                {{--<input type="text"--}}
                {{--id="name"--}}
                {{--class="form-control"--}}
                {{--required=""--}}
                {{--placeholder="{{__('Enter Name')}}"--}}
                {{--data-validation="required"--}}
                {{--data-validation-error-msg-required="{{__('The Field required')}}"--}}
                {{--name="name">--}}
            </div>
            <div class="form-group">
                <label>{{__('Description')}}</label>
                <div class="form-group">
                    <input class="form-control" type="text"
                           id="skill_desc_name"
                           name="description" value="">
                </div>
            </div>
            <div class="form-group mt-5">
                <button type="submit" class="btn btn-primary btn_complete mr-2" id="btn-save-ed-skill" value="create">{{__('Save')}}</button>
                <button class="btn btn-primary-outline light btn_newsletter" id="btn-save-ed-skill2" data-izimodal-close>{{__('Cancel')}}</button>
            </div>
        </form>

    </div>


    <div class="izi-modal"
         data-iziModal-fullscreen="true"
         data-iziModal-title=""
         data-iziModal-icon=""
         data-iziModal-padding="20"
         data-iziModal-autoopen="false"
         data-iziModal-headercolor="#4e7ea3"
         id="ajax-modal2">
        <form class="mbtath_modal" id="education_form" name="Form">

            <input type="hidden" name="archive_id"   id="education_id">
            <div class="form-group">
                {{--                    <label>{{__('Name')}}</label>--}}
                {{--                    <input type="text"--}}
                {{--                           id="name"--}}
                {{--                           class="form-control"--}}
                {{--                           required=""--}}
                {{--                           data-validation="required"--}}
                {{--                           data-validation-error-msg-required="{{__('The Field required')}}"--}}
                {{--                           name="title">--}}
            </div>
            <div class="form-group">
                <label>{{__('Description')}}</label>
                <div class="form-group">
                    <input class="form-control" type="text"
                           id="education_desc_name"
                           name="description" value="">



                </div>
            </div>
            <div class="form-group mt-5">
                <button  class="btn btn-primary btn_complete mr-2" id="btn-save-ed-education" value="create" >{{__('Save')}}</button>
                <button class="btn btn-primary-outline light btn_newsletter" id="btn-save-ed-education2" data-izimodal-close>{{__('Cancel')}}</button>
            </div>
        </form>
    </div>

    <div class="izi-modal"
         data-iziModal-fullscreen="true"
         data-iziModal-title=""
         data-iziModal-icon=""
         data-iziModal-padding="20"
         data-iziModal-autoopen="false"
         data-iziModal-headercolor="#4e7ea3"
         id="ajax-modal3">
        <form class="mbtath_modal" id="experience_form" name="Form">

            <input type="hidden" name="archive_id"   id="experience_id">
            <div class="form-group">
                {{--                    <label>{{__('Name')}}</label>--}}
                {{--                    <input type="text"--}}
                {{--                           id="name"--}}
                {{--                           class="form-control"--}}
                {{--                           required=""--}}
                {{--                           data-validation="required"--}}
                {{--                           data-validation-error-msg-required="{{__('The Field required')}}"--}}
                {{--                           name="title">--}}
            </div>
            <div class="form-group">
                <label>{{__('Description')}}</label>
                <div class="form-group">
                    <input class="form-control" type="text"
                           id="experience_desc_name"
                           name="description" value="">



                </div>
            </div>
            <div class="form-group mt-5">
                <button  class="btn btn-primary btn_complete mr-2" id="btn-save-ed-experience" value="create" >{{__('Save')}}</button>
                <button class="btn btn-primary-outline light btn_newsletter" id="btn-save-ed-experience2" data-izimodal-close>{{__('Cancel')}}</button>
            </div>
        </form>
    </div>

    <div class="izi-modal"
         data-iziModal-fullscreen="true"
         data-iziModal-title=""
         data-iziModal-icon=""
         data-iziModal-padding="20"
         data-iziModal-autoopen="false"
         data-iziModal-headercolor="#4e7ea3"
         id="ajax-modal4">
        <form class="mbtath_modal" id="time_form" name="Form">

            <input type="hidden" name="archive_id"   id="time_id" >
            <div class="form-group">
                <label>{{__('The Day')}}</label>


                <select  type="text"
                         id="day_no"
                         class="form-control"
                         required=""

                         data-validation="required"
                         data-validation-error-msg-required="{{__('The Field required')}}"
                         name="day">
                    <option value="1">{{__('Saturday')}}</option>
                    <option value="2">{{__('Sunday')}}</option>
                    <option value="3">{{__('Monday')}}</option>
                    <option value="4">{{__('Tuesday')}}</option>
                    <option value="5">{{__('Wednesday')}}</option>
                    <option value="6">{{__('Thursday')}}</option>
                    <option value="7">{{__('Friday')}}</option>
                </select>



            </div>
            <div class="form-group">
                <label>{{__('The Time')}}</label>
                <div class="form-group">
                    <input class="form-control" type="text"
                           id="time_desc_name"
                           name="time" placeholder="From 00:00 to 00:00"                             required=""

                    >
                </div>
            </div>
            <div class="form-group mt-5">
                <button  class="btn btn-primary btn_complete mr-2"   id="btn-save-ed-time" value="create">{{__('Save')}}</button>
                <button class="btn btn-primary-outline light btn_newsletter" data-izimodal-close  id="btn-save-ed-time2"  >{{__('Cancel')}}</button>
            </div>
        </form>
    </div>




@endsection
@section('js')
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/iziModal.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.all.min.js"></script>

    <script>

        $('#ajax-modal').iziModal();
        $('#ajax-modal2').iziModal();
        $('#ajax-modal3').iziModal();
        $('#ajax-modal4').iziModal();


        function update_video() {
            $('#name-error').hide();
            $('#btn-save').val("update_video");
            $('#ajax-modal').iziModal('open');
            $('#ajax-modal').iziModal('setTitle', "{{__('Edit Video')}}");
            $('#ajax-modal').iziModal('setIcon', 'fa fa-edit');
        }

        /* When click deleted */
        function deleted_() {
            Swal.fire({
                title: "{{__('Are you sure?')}}",
                text: "{{__('Deleted will now be done!')}}",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "{{__('Yes, delete')}}",
                cancelButtonText: "{{__('Not Now')}}",
                customClass: {
                    confirmButton: "btn btn-danger",
                    cancelButton: "btn btn-default"
                },
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        success: function (data) {
                            Swal.fire({
                                icon: "success",
                                title: "{{__('Deleted was successful!')}}",
                                {{--                            text: "{{__('Sent to trash!')}}",--}}
                                showConfirmButton: false,
                                timer: 3000
                            });
                        },
                        error: function (data) {
                            Swal.fire({
                                icon: "error",
                                title: "{{__('Error!')}}",
                                text: "{{__('Not deleted!')}}",
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                    });
                }
            });
        }



        $(document).on('click','.remove_skill',function () {
            var skill=$(this);
            Swal.fire({
                title: "{{__('Are you sure?')}}",
                text: "{{__('Deleted will now be done!')}}",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "{{__('Yes, delete')}}",
                cancelButtonText: "{{__('Not Now')}}",
                customClass: {
                    confirmButton: "btn btn-danger",
                    cancelButton: "btn btn-default"
                },
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        type: 'post',
                        url: "{{url(app()->getLocale().'/skill/remove')}}"+"/"+skill.attr('data-id'),
                        success: function (data) {
                            skill.parent().remove();
                            Swal.fire({
                                icon: "success",
                                title: "{{__('Deleted was successful!')}}",
                                {{--                            text: "{{__('Sent to trash!')}}",--}}
                                showConfirmButton: false,
                                timer: 3000
                            });
                        },
                        error: function (data) {
                            Swal.fire({
                                icon: "error",
                                title: "{{__('Error!')}}",
                                text: "{{__('Not deleted!')}}",
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                    });
                }
            });
        });


        $(document).on('click','.remove_education',function () {
            var skill=$(this);
            Swal.fire({
                title: "{{__('Are you sure?')}}",
                text: "{{__('Deleted will now be done!')}}",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "{{__('Yes, delete')}}",
                cancelButtonText: "{{__('Not Now')}}",
                customClass: {
                    confirmButton: "btn btn-danger",
                    cancelButton: "btn btn-default"
                },
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        type: 'post',
                        url: "{{url(app()->getLocale().'/Education/remove/')}}"+"/"+skill.attr('data-id'),
                        success: function (data) {
                            skill.parent().remove();
                            Swal.fire({
                                icon: "success",
                                title: "{{__('Deleted was successful!')}}",
                                {{--                            text: "{{__('Sent to trash!')}}",--}}
                                showConfirmButton: false,
                                timer: 3000
                            });
                        },
                        error: function (data) {
                            Swal.fire({
                                icon: "error",
                                title: "{{__('Error!')}}",
                                text: "{{__('Not deleted!')}}",
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                    });
                }
            });
        });



        $(document).on('click','.remove_experience',function () {
            var skill=$(this);
            Swal.fire({
                title: "{{__('Are you sure?')}}",
                text: "{{__('Deleted will now be done!')}}",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "{{__('Yes, delete')}}",
                cancelButtonText: "{{__('Not Now')}}",
                customClass: {
                    confirmButton: "btn btn-danger",
                    cancelButton: "btn btn-default"
                },
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        type: 'post',
                        url: "{{url(app()->getLocale().'/Experience/remove/')}}"+"/"+skill.attr('data-id'),
                        success: function (data) {
                            skill.parent().remove();
                            Swal.fire({
                                icon: "success",
                                title: "{{__('Deleted was successful!')}}",
                                {{--                            text: "{{__('Sent to trash!')}}",--}}
                                showConfirmButton: false,
                                timer: 3000
                            });
                        },
                        error: function (data) {
                            Swal.fire({
                                icon: "error",
                                title: "{{__('Error!')}}",
                                text: "{{__('Not deleted!')}}",
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                    });
                }
            });
        });

        $(document).on('click','.remove_time',function () {
            var skill=$(this);
            Swal.fire({
                title: "{{__('Are you sure?')}}",
                text: "{{__('Deleted will now be done!')}}",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "{{__('Yes, delete')}}",
                cancelButtonText: "{{__('Not Now')}}",
                customClass: {
                    confirmButton: "btn btn-danger",
                    cancelButton: "btn btn-default"
                },
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        type: 'post',
                        url: "{{url(app()->getLocale().'/time/remove/')}}"+"/"+skill.attr('data-id'),
                        success: function (data) {
                            skill.parent().remove();
                            Swal.fire({
                                icon: "success",
                                title: "{{__('Deleted was successful!')}}",
                                {{--                            text: "{{__('Sent to trash!')}}",--}}
                                showConfirmButton: false,
                                timer: 3000
                            });
                        },
                        error: function (data) {
                            Swal.fire({
                                icon: "error",
                                title: "{{__('Error!')}}",
                                text: "{{__('Not deleted!')}}",
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                    });
                }
            });
        });


        $(document).on('click','.edit_skill',function () {
            var skill=$(this);


            $('#btn-save').val("edit_skill");
            $('#Form_').trigger("reset");
            $('#skill_id').val(skill.attr('data-id')) ;
            $('#skill_desc_name').val(skill.attr('data-name'));
            $('#ajax-modal').iziModal('open');
            $('#ajax-modal').iziModal('setTitle', "{{__('Edit Skill')}}");




        });



        $(document).on('click','.edit_education',function () {
            var skill=$(this);


            $('#btn-save').val("edit_education");
            $('#education_click').trigger("reset");
            $('#education_id').val(skill.attr('data-id')) ;
            $('#education_desc_name').val(skill.attr('data-name'));
            $('#ajax-modal2').iziModal('open');
            $('#ajax-modal2').iziModal('setTitle', "{{__('Edit experience')}}");




        });




        $(document).on('click','.edit_experience',function () {
            var skill=$(this);


            $('#btn-save').val("edit_experience");
            $('#education_click').trigger("reset");
            $('#experience_id').val(skill.attr('data-id')) ;
            $('#experience_desc_name').val(skill.attr('data-name'));
            $('#ajax-modal3').iziModal('open');
            $('#ajax-modal3').iziModal('setTitle', "{{__('Edit Experience')}}");




        });
        $(document).on('click','.edit_time',function () {
            var skill=$(this);


            $('#btn-save').val("edit_time");
            $('#time_form').trigger("reset");
            $('#time_id').val(skill.attr('data-id')) ;
            $('#day_no').val(skill.attr('data-day')) ;
            $('#time_desc_name').val(skill.attr('data-description'));
            $('#ajax-modal4').iziModal('open');
            $('#ajax-modal4').iziModal('setTitle', "{{__('Edit Time')}}");




        });



        $(document).ready(function () {
            //alert('as');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#btn-save-ed-skill').click(function () {
                event.preventDefault();
                $.ajax({
                    type: 'post',
                    url: '{{url(app()->getLocale().'/skill/update')}}'+"/"+$('#skill_id').val(),
                    data: $('#skill_form').serialize(),
                    success: function (data) {
                        if (status == 200) {

                        } else {
                            $('#btn-save-ed-skill2').click();
                            var skill_id=$('#skill_id').val();
                            $('#skill_'+skill_id).html(data.description +'<a href="javascript:void(0)"   class="edit_skill"  data-id="'+data.id+'"   data-name="'+data.description +'">'+
                                    '<i class="fa fa-edit" style="position: sticky!important;" ></i></a>'+
                                    '<a href="javascript:void(0)" class="remove_skill"  data-id="'+data.id+'"><i class="fas fa-times"></i></a>');
                            // $('.skill_.skills__').append('<p>'+data.description +'<a href="javascript:void(0)" class="remove_skill"  data-id="'+data.id+'"><i class="fas fa-times"></i></a></p>')


                        }

                    }
                });
            });



            $('#btn-save-ed-education').click(function () {
                event.preventDefault();
                $.ajax({
                    type: 'post',
                    url: '{{url(app()->getLocale().'/Education/update')}}'+"/"+$('#education_id').val(),
                    data: $('#education_form').serialize(),
                    success: function (data) {
                        if (status == 200) {

                        } else {
                            $('#btn-save-ed-education2').click();
                            var education_id=$('#education_id').val();
                            $('#education_'+education_id).html(data.description +'<a href="javascript:void(0)"   class="edit_education"  data-id="'+education_id+'"   data-name="'+data.description +'">'+
                                    '<i class="fa fa-edit" style="position: sticky!important;" ></i></a>'+
                                    '<a href="javascript:void(0)" class="remove_education"  data-id="'+data.id+'"><i class="fas fa-times"></i></a>');
                            // $('.skill_.skills__').append('<p>'+data.description +'<a href="javascript:void(0)" class="remove_skill"  data-id="'+data.id+'"><i class="fas fa-times"></i></a></p>')


                        }

                    }
                });
            });
            $('#btn-save-ed-experience').click(function () {
                event.preventDefault();
                $.ajax({
                    type: 'post',
                    url: '{{url(app()->getLocale().'/Experience/update')}}'+"/"+$('#experience_id').val(),
                    data: $('#experience_form').serialize(),
                    success: function (data) {
                        if (status == 200) {

                        } else {
                            $('#btn-save-ed-experience2').click();
                            var education_id=$('#experience_id').val();
                            $('#experience_'+education_id).html(data.description +'<a href="javascript:void(0)"   class="edit_experience"  data-id="'+education_id+'"   data-name="'+data.description +'">'+
                                    '<i class="fa fa-edit" style="position: sticky!important;" ></i></a>'+
                                    '<a href="javascript:void(0)" class="remove_experience"  data-id="'+data.id+'"><i class="fas fa-times"></i></a>');
                            // $('.skill_.skills__').append('<p>'+data.description +'<a href="javascript:void(0)" class="remove_skill"  data-id="'+data.id+'"><i class="fas fa-times"></i></a></p>')


                        }

                    }
                });
            });
            $('#btn-save-ed-time').click(function () {


                event.preventDefault();
                $.ajax({
                    type: 'post',
                    url: '{{url(app()->getLocale().'/time/update')}}'+"/"+$('#time_id').val(),
                    data: $('#time_form').serialize(),
                    success: function (data) {

                        var id=$('#time_id').val();

                        $('#time_id_'+id).html(data.day_name+" "+data.time +'<a href="javascript:void(0)"   class="edit_time"  data-id="'+data.id+'"   data-day="'+data.day +'" data-description="'+data.time +'" >'+
                                '<i class="fa fa-edit" style="position: sticky!important;" ></i></a>'+
                                '<a href="javascript:void(0)" class="remove_time"  data-id="'+data.id+'"><i class="fas fa-times"></i></a>');

                        $('#btn-save-ed-time2').click();




                        if (status == 200) {

                        } else {

                        }

                    }
                });
            });







        });
    </script>

@stop
