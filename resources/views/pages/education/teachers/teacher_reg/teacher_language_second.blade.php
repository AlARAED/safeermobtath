@extends('layouts.app')
@section('title', __('Student Registeration'))
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/iziModal.min.css')}}"> <!-- Original -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/izi-modal.min.css')}}">
@stop
@section('content')
    <section class="std_reg">
        <div class="bg_std">

        </div>

        <section class="profile_complete">
            <div class="container">



                <form method="POST" id="form_r" action="{{route(app()->getLocale().'.teacher_profile')}}"  enctype="multipart/form-data">
                    @csrf
                    <div class="profile_bg">
                        <div class="row">
                            <div class="col-6 col-md-6 m-auto">
                                <h5 class="mr-auto w_max_content">{{__('Experience')}}</h5>
                            </div>
                            <div class="col-6 col-md-6 d-flex float-right">
                                {{--                        <button class="form-control btn_newsletter ml-auto mr-0" onclick="document.getElementById('getFile2').click()">{{__('Add experience')}}</button>--}}
                                {{--                        <input id="getFile2" type="file" class="d-none">--}}

                                <a href="javascript:void(0)" id="create_skill" class="ml-auto"><i class="fa fa-plus"></i></a>

                            </div>
                        </div>
                        <div class="text-left d-flex flex-wrap skill_ skills__">
                            @foreach($Skills as $Skill)
                            <p>{{$Skill->description}}
                                <a href="javascript:void(0)" class="remove_skill"  data-id="{{$Skill->id}}" >
                                    <i class="fas fa-times"></i>
                                </a>
                            </p>
                                @endforeach

                        </div>
                    </div>
                    <div class="profile_bg">
                        <div class="row">
                            <div class="col-6 col-md-6 m-auto">
                                <h5 class="mr-auto w_max_content">{{__('Education')}}</h5>
                            </div>
                            <div class="col-6 col-md-6 d-flex float-right">
                                {{--                        <button class="form-control btn_newsletter ml-auto mr-0" onclick="document.getElementById('getFile3').click()">{{__('Add')}}</button>--}}
                                {{--                        <input id="getFile3" type="file" class="d-none">--}}
                                <a href="javascript:void(0)" id="create_education" class="ml-auto"><i class="fa fa-plus"></i></a>



                            </div>
                        </div>
                        <div class="text-left d-flex flex-wrap Education_ skills__">

                            @foreach($Education as $Educatio)
                                <p>{{$Educatio->description}}


                                    <a href="javascript:void(0)" class="remove_Education"  data-id="{{$Educatio->id}}" >
                                        <i class="fas fa-times"></i>
                                    </a>
                                </p>
                            @endforeach


                        </div>

                    </div>
                    <div class="profile_bg">
                        <div class="row">
                            <div class="col-6 col-md-6 m-auto">
                                <h5 class="mr-auto w_max_content">{{__('Skills')}}</h5>
                            </div>
                            <div class="col-6 col-md-6 d-flex float-right">
                                <a href="javascript:void(0)" id="create_Experience" class="ml-auto"><i class="fa fa-plus"></i></a>

                            </div>
                        </div>
                        <div class="text-left d-flex flex-wrap Experience_ skills__">
                            @foreach($Experience as $Experienc)
                                <p>{{$Experienc->description}}


                                    <a href="javascript:void(0)" class="remove_Experience"  data-id="{{$Experienc->id}}">
                                        <i class="fas fa-times"></i>
                                    </a>
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
                                <a href="javascript:void(0)" id="create_time" class="ml-auto"><i class="fa fa-plus"></i></a>

                            </div>
                        </div>

                        <div class="text-left d-flex flex-wrap Time_ skills__">
                            @foreach($time as $tim)
                                <p>{{$days[$tim->day-1]}}
                                    {{$tim->time}}


                                    <a href="javascript:void(0)" class="remove_Time"  data-id="{{$tim->id}}">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </p>
                            @endforeach


                        </div>


                    </div>


                    <div class="scholarship">
                        <A class="form-control m-auto btn_complete" HREF="{{route(app()->getLocale().'.teacher_End_profile',['id'=> $teach->id])}}
                      " >{{__('Next')}}</A>
                    </div>

                </form>
                {{--            <div class="modal fade" id="verificationModal" tabindex="-1" role="dialog" aria-labelledby="verificationModalLabel" aria-hidden="true">--}}
                {{--                <div class="modal-dialog" role="document">--}}
                {{--                    <div class="modal-content">--}}
                {{--                        <div class="modal-header">--}}
                {{--                            <h5 class="modal-title" id="verificationModalLabel">{{__('Verification Code')}}</h5>--}}
                {{--                        </div>--}}
                {{--                        <div class="modal-body">--}}
                {{--                            <form>--}}
                {{--                                <div class="form-group">--}}
                {{--                                    <div id="verif_code">--}}
                {{--                                        <input type="text" maxLength="4" size="4" min="4" max="4" pattern="[0-9]{1}"  STYLE="    WIDTH: 259PX;--}}
                {{--"/>--}}

                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </form>--}}
                {{--                        </div>--}}
                {{--                        <div class="modal-footer">--}}
                {{--                            <button type="button" class="btn btn-primary">{{__('Confirm and complete the account creation as a teacher')}}</button>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}


            </div>

            <div class="izi-modal"
                 data-iziModal-fullscreen="true"
                 data-iziModal-title=""
                 data-iziModal-icon=""
                 data-iziModal-padding="20"
                 data-iziModal-autoopen="false"
                 data-iziModal-headercolor="#4e7ea3"
                 id="ajax-modal">
                <form class="mbtath_modal" id="contact_us" name="Form">
                    <input type="hidden" name="archive_id" id="archive_id">
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


                        <textarea id="w3review" name="description" rows="4" cols="50"   class="form-control" >
</textarea>

                        </div>
                    </div>
                    <div class="form-group mt-5">
                        <button  class="btn btn-primary btn_complete mr-2" id="contact_form" value="create">{{__('Save')}}</button>
                        <button class="btn btn-primary-outline light btn_newsletter" id="close_m" data-izimodal-close>{{__('Cancel')}}</button>
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
                <form class="mbtath_modal" id="education_click" name="Form">
                    <input type="hidden" name="archive_id" id="archive_id">
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


                        <textarea id="w3review" name="description" rows="4" cols="50"   class="form-control" >
</textarea>

                        </div>
                    </div>
                    <div class="form-group mt-5">
                        <button  class="btn btn-primary btn_complete mr-2" id="contact_form2" value="create" >{{__('Save')}}</button>
                        <button class="btn btn-primary-outline light btn_newsletter" id="close_m2" data-izimodal-close>{{__('Cancel')}}</button>
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
                <form class="mbtath_modal" id="experience_click" name="Form" >
                    <input type="hidden" name="archive_id" id="archive_id">
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


                        <textarea id="w3review" name="description" rows="4" cols="50"   class="form-control" >
</textarea>

                        </div>
                    </div>
                    <div class="form-group mt-5">
                        <button  class="btn btn-primary btn_complete mr-2" id="contact_form3" value="create" >{{__('Save')}}</button>
                        <button class="btn btn-primary-outline light btn_newsletter" id="close_m3" data-izimodal-close>{{__('Cancel')}}</button>
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
                <form class="mbtath_modal" id="time_click" name="Form">

                    <input type="hidden" name="teacher_department_id" id="archive_id" value="{{$teach->id}}">
                    <div class="form-group">
                        <label>{{__('The Day')}}</label>


                        <select  type="text"
                                 id="name"
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
                                   id="description"
                                   name="time" placeholder="From 00:00 to 00:00"                             required=""

                            >
                        </div>
                    </div>
                    <div class="form-group mt-5">
                        <button  class="btn btn-primary btn_complete mr-2" id="contact_form4" value="create">{{__('Save')}}</button>
                        <button class="btn btn-primary-outline light btn_newsletter" data-izimodal-close  id="close_m4"  >{{__('Cancel')}}</button>
                    </div>
                </form>
            </div>






        </section>


    </section>

    <div class="modal fade" id="verificationModal" tabindex="-1" role="dialog" aria-labelledby="verificationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="verificationModalLabel">{{__('Verification Code')}}</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <div id="verif_code">
                                <input type="text" maxLength="4" size="4" min="4" max="4" pattern="[0-9]{1}"  STYLE="    WIDTH: 259PX;
"/>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">{{__('Confirm and complete the account creation as a teacher')}}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('assets/js/iziModal.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.all.min.js"></script>
    <script>
    $('#ajax-modal').iziModal();
    $('#ajax-modal2').iziModal();
    $('#ajax-modal3').iziModal();
    $('#ajax-modal4').iziModal();


    /* When click Add */
    $('#create_skill').click(function () {
    $('#contact_form').val("create_skill");
    $('#contact_us').trigger("reset");
    $('#ajax-modal').iziModal('open');
    $('#ajax-modal').iziModal('setTitle', "{{__('Add Skill')}}");
    $('#ajax-modal').iziModal('setIcon', 'fa fa-plus');

    });

    $('#contact_form').click(function () {
        $("#close_m").click();
    });






    $('#create_Experience').click(function () {
        $('#contact_form3').val("create_skill");
        $('#Experience_us').trigger("reset");
        $('#ajax-modal3').iziModal('open');
        $('#ajax-modal3').iziModal('setTitle', "{{__('Add Experience')}}");
        $('#ajax-modal3').iziModal('setIcon', 'fa fa-plus');
    });

    $('#contact_form3').click(function () {
        $("#close_m3").click();
    });



    $('#create_education').click(function () {
        $('#contact_form2').val("create_skill");
        $('#education_click').trigger("reset");
        $('#ajax-modal2').iziModal('open');
        $('#ajax-modal2').iziModal('setTitle', "{{__('Add Education')}}");
        $('#ajax-modal2').iziModal('setIcon', 'fa fa-plus');
    });

    $('#contact_form2').click(function () {
        $("#close_m2").click();
    });




    $('#create_time').click(function () {
        $('#contact_form4').val("create_skill");
        $('#education_click').trigger("reset");
        $('#ajax-modal4').iziModal('open');
        $('#ajax-modal4').iziModal('setTitle', "{{__('Time with Days')}}");
        $('#ajax-modal4').iziModal('setIcon', 'fa fa-plus');
    });

    $('#contact_form4').click(function () {
        $("#close_m4").click();
    });


    </script>
    <script>
        $('#eduction_type').change(function(){
            if($(this).val() == '3'){
                $('#service_type').removeClass('d-none');
            }
            if($(this).val() == '' || $(this).val() == '1' || $(this).val() == '2') {
                $('#service_type').addClass('d-none');
                $('#research_field').addClass('d-none');
                $('#search_title').addClass('d-none');
            }
            if($(this).val() == '3' && $('#register_as').val() == '1'){
                $('#research_field').removeClass('d-none');
                $('#search_title').addClass('d-none');
            }
            if($(this).val() == '3' && $('#register_as').val() == '2'){
                $('#research_field').removeClass('d-none');
                $('#search_title').removeClass('d-none');
            }
        });
        $('#register_as').change(function(){
            if($(this).val() == '1' && $('#eduction_type').val() == '3'){
                $('#research_field').removeClass('d-none');
                $('#search_title').addClass('d-none');
            }
            if($(this).val() == '2' && $('#eduction_type').val() == '3'){
                $('#search_title').removeClass('d-none');
                $('#research_field').removeClass('d-none');
            }
            if($(this).val() == '' && $('#eduction_type').val() == '3'){
                $('#search_title').addClass('d-none');
                $('#research_field').addClass('d-none');
            }
        });
        //        $('#register_as').change(function(){
        //            if($(this).val() == '1'){
        //                $('.eduction_type').removeClass('d-none');
        //            }
        //            if($(this).val() == '2' || $(this).val() == ''){
        //                $('.eduction_type').addClass('d-none');
        //
        //            }
        //        });


        var input = document.querySelector("#mobile_number");
        window.intlTelInput(input, {

            preferredCountries: ['ae', 'tr'],
            separateDialCode: true,
            utilsScript: "utils.js",
        });
    </script>

    <script>
        $('#form_r').on('submit',function (e){
            e.preventDefault();
            $('#conutry_code').remove();
            $('#form_r').append('<input type="hidden" id="conutry_code" name="conutry_code" value="'+$('.iti__selected-dial-code').text()+'"/>');

            $(this).unbind('submit').submit();
        });

    </script>


    <script>
        $(document).ready(function () {
            //alert('as');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#contact_form').click(function () {
                event.preventDefault();
                $.ajax({
                    type: 'post',
                    url: '{{route(app()->getLocale().'.skill',['id'=> $teach->id])}}',
                    data: $('#contact_us').serialize(),
                    success: function (data) {
                        if (status == 200) {
                            alert(0);
                        } else {
                            $('.skill_.skills__').append('<p>'+data.description +'<a href="javascript:void(0)" class="remove_skill"  data-id="'+data.id+'"><i class="fas fa-times"></i></a></p>')


                        }

                    }
                });
            });

            $('#contact_form2').click(function () {
                event.preventDefault();
                $.ajax({
                    type: 'post',
                    url: '{{route(app()->getLocale().'.Education',['id'=> $teach->id])}}',
                    data: $('#education_click').serialize(),
                    success: function (data) {
                        if (status == 200) {
                            alert('ttt');
                        } else {



                            $('.Education_.skills__').append('<p>'+data.description +'<a href="javascript:void(0)" class="remove_Education"  data-id="'+data.id+'"><i class="fas fa-times"></i></a></p>')
                        }

                    }
                });
            });

            $('#contact_form3').click(function () {
                event.preventDefault();
                $.ajax({
                    type: 'post',
                    url: '{{route(app()->getLocale().'.Experience',['id'=> $teach->id])}}',
                    data: $('#experience_click').serialize(),
                    success: function (data) {
                        if (status == 200) {
                            alert('ttt');
                        } else {
                            $('.Experience_.skills__').append('<p>'+data.description +'<a href="javascript:void(0)" class="remove_Experience"  data-id="'+data.id+'"><i class="fas fa-times"></i></a></p>')

                        }

                    }
                });
            });
            $('#contact_form4').click(function () {
                event.preventDefault();
                $.ajax({
                    type: 'post',
                    url: '{{route(app()->getLocale().'.savedate')}}',
                    data: $('#time_click').serialize(),
                    success: function (data) {
                        if (status == 200) {
                            alert('ttt');
                        } else {
                            $('.Time_.skills__').append('<p>'+data.day_name+'   ' + data.time +'<a href="javascript:void(0)" class="remove_Time"  data-id="'+data.id+'"><i class="fas fa-times"></i></a></p>')


                        }

                    }
                });
            });



        });


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
        $(document).on('click','.remove_Education',function () {
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
                        url: "{{url(app()->getLocale().'/Education/remove')}}"+"/"+skill.attr('data-id'),
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
        $(document).on('click','.remove_Experience',function () {
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
                        url: "{{url(app()->getLocale().'/Experience/remove')}}"+"/"+skill.attr('data-id'),
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
        $(document).on('click','.remove_Time',function () {
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
                        url: "{{url(app()->getLocale().'/time/remove')}}"+"/"+skill.attr('data-id'),
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




    </script>



@stop
