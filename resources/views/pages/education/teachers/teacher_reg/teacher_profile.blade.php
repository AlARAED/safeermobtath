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

            <div class="profile_bg prof_head">ش

                @if($teach->accepted==0)
                    @if($teach->user_id == Auth::user()->id)
                    <div class="alert alert-info">
                        <strong></strong>{{__('Wait for the website administration to accept, noting that your file does not appear to students until acceptance is completed')}}
                    </div>
               @endif
                @endif
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
                    @if($teach->language_type==1)
                         {{__('French teacher')}}
                    @else
                        {{__('English teacher')}}
                        @endif

                   </h5>
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
                @foreach($Skill  as $Skil)

       <p class="text-left mt-4 font_17">{{$Skil->description}}</p>

                    @if($teach->user_id == Auth::user()->id)

                    <a href=""   class="ml-auto   edit_delete"  data-toggle="modal"
                       data-target="#centralModalSmedeledit{{ $Skil->id }}"  >
                        <i class="fa fa-edit" ></i>
                    </a>

                    <a href=""   class="m-0 ml-2   edit_delete"    data-toggle="modal"
                       data-target="#centralModalSmedel{{ $Skil->id }}">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
@endif
                    <div class="modal fade" id="centralModalSmedel{{ $Skil->id }}" tabindex="-1"
                         role="dialog" aria-labelledby="myModalLabel"
                         aria-hidden="true">

                        <!-- Change class .modal-sm to change the size of the modal -->
                        <div class="modal-dialog modal-sm" role="document">


                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title w-100" id="myModalLabel">الحذف </h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    هل أنت متأكد من حذف هذا العنصر ؟
                                </div>
                                <div class="modal-footer">


                                    <!--         <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">اعلاق</button>
                                     -->
                                    <form method="POST" id="form_r" action="{{route(app()->getLocale().'.skill_remove',['id'=> $Skil->id])}}"  enctype="multipart/form-data">

@csrf
                                        <button type="submit" class="btn btn-primary"  style="background-color: #007bff;    padding: 13px;

" id="delete_form">نعم</button>
                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="centralModalSmedeledit{{ $Skil->id }}" tabindex="-1"
                         role="dialog" aria-labelledby="myModalLabel"
                         aria-hidden="true">

                        <!-- Change class .modal-sm to change the size of the modal -->
                        <div class="modal-dialog modal-lg" role="document">


                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title w-100" id="myModalLabel">التعديل </h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form method="POST" id="form_r" action="{{route(app()->getLocale().'.skill_update',['id'=> $Skil->id])}}"  enctype="multipart/form-data">
                                    @csrf
                                <div class="modal-body">
                      <textarea name="description" id="" cols="25" rows="4" class="form-control safeer_textarea" required >
 {{ $Skil->description }}

                                    </textarea>

                                </div>
                                <div class="modal-footer">


                                    <button type="submit" class="btn btn-primary"  style="background-color: #007bff;    padding: 13px;

" id="delete_form">نعم</button>
                                    {!! Form::close() !!}

                                </div>

                                </form>

                            </div>
                        </div>
                    </div>

                @endforeach
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
                @foreach($Education  as $Educati)

                    @if($teach->user_id == Auth::user()->id)

                    <a href=""   class="ml-auto   edit_delete"  data-toggle="modal"
                       data-target="#centralModalSmedeledited{{ $Educati->id }}"  >
                        <i class="fa fa-edit" ></i>
                    </a>

                    <a href=""   class="m-0 ml-2   edit_delete"    data-toggle="modal"
                       data-target="#centralModalSdu{{ $Educati->id }}">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                    @endif
                    <p class="text-left mt-4 font_17">{{$Educati->description}}</p>

                    <div class="modal fade" id="centralModalSdu{{ $Educati->id }}" tabindex="-1"
                         role="dialog" aria-labelledby="myModalLabel"
                         aria-hidden="true">

                        <!-- Change class .modal-sm to change the size of the modal -->
                        <div class="modal-dialog modal-sm" role="document">


                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title w-100" id="myModalLabel">الحذف </h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    هل أنت متأكد من حذف هذا العنصر ؟
                                </div>
                                <div class="modal-footer">


                                    <!--         <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">اعلاق</button>
                                     -->
                                    <form method="POST" id="form_r" action="{{route(app()->getLocale().'.Education_remove',['id'=> $Educati->id])}}"  enctype="multipart/form-data">

                                        @csrf
                                        <button type="submit" class="btn btn-primary"  style="background-color: #007bff;    padding: 13px;

" id="delete_form">نعم</button>
                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="centralModalSmedeledited{{ $Educati->id }}" tabindex="-1"
                         role="dialog" aria-labelledby="myModalLabel"
                         aria-hidden="true">

                        <!-- Change class .modal-sm to change the size of the modal -->
                        <div class="modal-dialog modal-lg" role="document">


                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title w-100" id="myModalLabel">التعديل </h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form method="POST" id="form_r" action="{{route(app()->getLocale().'.Education_update',['id'=> $Educati->id])}}"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                      <textarea name="description" id="" cols="25" rows="4" class="form-control safeer_textarea" required >
 {{ $Educati->description }}

                                    </textarea>

                                    </div>
                                    <div class="modal-footer">


                                        <button type="submit" class="btn btn-primary"  style="background-color: #007bff;    padding: 13px;

" id="delete_form">نعم</button>
                                        {!! Form::close() !!}

                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>




                @endforeach


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
                @foreach($Experience  as $Experienc)

                    <p class="text-left mt-4 font_17">{{$Experienc->description}}</p>
                    @if($teach->user_id == Auth::user()->id)

                    <a href=""   class="ml-auto   edit_delete"  data-toggle="modal"
                       data-target="#centralModalSmedelediteded{{ $Experienc->id }}"  >
                        <i class="fa fa-edit" ></i>
                    </a>

                    <a href=""   class="m-0 ml-2   edit_delete"    data-toggle="modal"
                       data-target="#centralModalSdueexp{{ $Experienc->id }}">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                    @endif


                    <div class="modal fade" id="centralModalSdueexp{{ $Experienc->id }}" tabindex="-1"
                         role="dialog" aria-labelledby="myModalLabel"
                         aria-hidden="true">

                        <!-- Change class .modal-sm to change the size of the modal -->
                        <div class="modal-dialog modal-sm" role="document">


                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title w-100" id="myModalLabel">الحذف </h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    هل أنت متأكد من حذف هذا العنصر ؟
                                </div>
                                <div class="modal-footer">


                                    <!--         <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">اعلاق</button>
                                     -->
                                    <form method="POST" id="form_r" action="{{route(app()->getLocale().'.Experience_remove',['id'=> $Experienc->id])}}"  enctype="multipart/form-data">

                                        @csrf
                                        <button type="submit" class="btn btn-primary"  style="background-color: #007bff;    padding: 13px;

" id="delete_form">نعم</button>
                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="centralModalSmedelediteded{{ $Experienc->id }}" tabindex="-1"
                         role="dialog" aria-labelledby="myModalLabel"
                         aria-hidden="true">

                        <!-- Change class .modal-sm to change the size of the modal -->
                        <div class="modal-dialog modal-lg" role="document">


                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title w-100" id="myModalLabel">التعديل </h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form method="POST" id="form_r" action="{{route(app()->getLocale().'.Experience_update',['id'=> $Experienc->id])}}"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                      <textarea name="description" id="" cols="25" rows="4" class="form-control safeer_textarea" required >
 {{ $Experienc->description }}

                                    </textarea>

                                    </div>
                                    <div class="modal-footer">


                                        <button type="submit" class="btn btn-primary"  style="background-color: #007bff;    padding: 13px;

" id="delete_form">نعم</button>
                                        {!! Form::close() !!}

                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>

                @endforeach

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
                            @if($tim->day==0)
                                {{__('Monday')}}
                                @elseif($tim->day==1)
                                {{__('Tuesday')}}
                            @elseif($tim->day==2)
                                {{__('Wednesday')}}
                            @elseif($tim->day==3)
                                {{__('Thursday')}}
                            @elseif($tim->day==4)
                                {{__('Friday')}}
                            @elseif($tim->day==5)
                                {{__('Saturday')}}
                            @elseif($tim->day==6)
                                {{__('Sunday')}}
@endif

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
        <form class="mbtath_modal" id="Form" name="Form">
            <input type="hidden" name="archive_id" id="archive_id">
            <div class="form-group">
                <label>{{__('Name')}}</label>
                <input type="text"
                       id="name"
                       class="form-control"
                       required=""
                       placeholder="{{__('Enter Name')}}"
                       data-validation="required"
                       data-validation-error-msg-required="{{__('The Field required')}}"
                       name="name">
            </div>
            <div class="form-group">
                <label>{{__('Description')}}</label>
                <div class="form-group">
                    <input class="form-control" type="text"
                           id="description"
                           name="description">
                </div>
            </div>
            <div class="form-group mt-5">
                <button type="submit" class="btn btn-primary btn_complete mr-2" id="btn-save" value="create">{{__('Save')}}</button>
                <button class="btn btn-primary-outline light btn_newsletter" data-izimodal-close>{{__('Cancel')}}</button>
            </div>
        </form>

    </div>

@endsection
@section('js')
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/iziModal.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.all.min.js"></script>

    <script>
        /* When click Add */
        $('#create_skill').click(function () {
            $('#btn-save').val("create_skill");
            $('#Form_').trigger("reset");
            $('#ajax-modal').iziModal('open');
            $('#ajax-modal').iziModal('setTitle', "{{__('Add Skill')}}");
            $('#ajax-modal').iziModal('setIcon', 'fa fa-plus');

        });
        /* When click edit */
        $('#ajax-modal').iziModal();
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
    </script>
@stop
