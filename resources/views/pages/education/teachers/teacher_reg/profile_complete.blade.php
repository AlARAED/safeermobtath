@extends('layouts.app')
@section('title', __('Profile Complete'))
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/iziModal.min.css')}}"> <!-- Original -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/izi-modal.min.css')}}">
@stop
@section('content')

    <section class="profile_complete">
        <div class="container">
            <div class="profile_bg prof_head">
                <div class="prof_img">
                    <img class="profile_img" src="{{asset('uploads/'.Auth::user()->image)}}" width="100" height="100" alt="">
                </div>
                <div class="profile_username d-flex">
                    <img src="{{asset('assets/images/icon/country.svg')}}" alt="">
                    <h5>{{$teach->first_name}}   {{$teach->last_name}}</h5>
                </div>
                <div class="profile-rating mb-3">

                    @for($i = 0; $i < $teach->rating; $i++)
                        @if($i <= $teach->rating)
                            <label for="star-1" class="star">
                                <i class="fas fa-star" class="star star--gold"></i>
                            </label>
                        @else
                        @endif
                    @endfor

                </div>
                <div class="row prof_content">
                    <div class="col-12 col-md-10 d-flex m-auto">
                        <div class="col-12 col-md-6 border__">
                            <div class="d-flex mb-2">
                                <i class="far fa-clock"></i><h5>{{__('Timing')}}</h5><p><?php echo \Carbon\Carbon::now()->format('H:i:s A')?></p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="fas fa-shield-alt"></i><h5>{{__('Join Safeer Mbtath with date')}}</h5><p>{{Auth::user()->created_at->format('d/m/Y')}}</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="far fa-heart"></i><h5>{{__('Likes')}}</h5><p>{{$teach->no_like}}</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="ml-auto w_max_content">
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

            <form method="POST" id="form_r" action="{{route(app()->getLocale().'.saveteacher',['id'=>$teach->id])}}"  enctype="multipart/form-data">
                @csrf
            <div class="profile_bg">
                <div class="row">
                    <div class="col-12 col-md-6 m-auto">
                        <h5 class="mr-auto w_max_content">{{__('The language you will study')}}</h5>
                    </div>
                    <div class="col-12 col-md-6 d-flex float-right">
                        <input type="radio" id="male" name="language_type" value="1"  class="form-control" checked>
                        <label >{{__('French')}}</label><br>
                        <input type="radio" id="female" name="language_type" value="2"  class="form-control">
                        <label >{{__('English')}}</label><br>


{{--                        <button type="submit" class="form-control btn_newsletter ml-auto">{{__('French')}}</button>--}}
{{--                        <button type="submit" class="form-control btn_newsletter m-0 ml-3">{{__('English')}}</button>--}}
                    </div>
                </div>

            </div>
            <div class="profile_bg">
                <h5 class="prof_info">{{__("Please introduce yourself by sharing the information: Why are you interested in learning languages and what is your main motivation; You can write about yourself as a person, stating your main accomplishments and life goals; Any other interesting information about you that you would like to share would be appreciated. Note: You can write in different languages, so that different language speakers can read and understand the text")}}</h5>
                <textarea name="short_cv" id="" cols="30" rows="15" class="form-control safeer_textarea" required ></textarea>
            </div>
            <div class="profile_bg">
                <div class="row">
                    <div class="col-6 col-md-6 m-auto">
                        <h5 class="mr-auto w_max_content">{{__('Definition Video')}}</h5>
                    </div>
                    <div class="col-6 col-md-6 d-flex float-right">
                        <span class="form-control btn_newsletter ml-auto mr-0" onclick="document.getElementById('getFile300').click()">{{__('Attach')}}</span>
                        <input id="getFile300" type="file" class="d-none" name="vedio_cv">

                    </div>
                </div>

            </div>

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

            </div>
            <div class="profile_bg">
                <div class="row">
                    <div class="col-6 col-md-6 m-auto">
                        <h5 class="mr-auto w_max_content">{{__('Education')}}</h5>
                    </div>
                    <div class="col-6 col-md-6 d-flex float-right">
{{--                        <button class="form-control btn_newsletter ml-auto mr-0" onclick="document.getElementById('getFile3').click()">{{__('Add')}}</button>--}}
{{--                        <input id="getFile3" type="file" class="d-none">--}}
                        <a href="javascript:void(0)" id="create_Education" class="ml-auto"><i class="fa fa-plus"></i></a>



                    </div>
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

            </div>

            <div class="scholarship">
                <button class="form-control m-auto btn_complete">{{__('Next')}}</button>
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
            <form class="mbtath_modal" id="experience_click" name="Form">
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





    </section>
    <!-- Modal Add-Edit -->








@endsection
@section('js')

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
    alert('ttt');
    } else {
    @if(App::getLocale()=='en')
        toastr.success("Your request has been sent successfully. Wait for response from admin");
    @else
        toastr.success("Ihre Anfrage wurde erfolgreich gesendet. Warten Sie auf die Antwort des Administrators");
    @endif

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
                        @if(App::getLocale()=='en')
                        toastr.success("Your request has been sent successfully. Wait for response from admin");
                        @else
                        toastr.success("Ihre Anfrage wurde erfolgreich gesendet. Warten Sie auf die Antwort des Administrators");
                        @endif

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
                        @if(App::getLocale()=='en')
                        toastr.success("Your request has been sent successfully. Wait for response from admin");
                        @else
                        toastr.success("Ihre Anfrage wurde erfolgreich gesendet. Warten Sie auf die Antwort des Administrators");
                        @endif

                    }

                }
            });
        });


    });
</script>





    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/iziModal.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.all.min.js"></script>

    <script>
        $('#ajax-modal').iziModal();
        $('#ajax-modal2').iziModal();
        $('#ajax-modal3').iziModal();

        /* When click Add */
        $('#create_skill').click(function () {
            $('#contact_form').val("create_skill");
            $('#contact_us').trigger("reset");
            $('#ajax-modal').iziModal('open');
            $('#ajax-modal').iziModal('setTitle', "{{__('Add Skill')}}");
            $('#ajax-modal').iziModal('setIcon', 'fa fa-plus');

        });



        $('#contact_form').click(function (){
            $('#close_m').click();

        });




        $('#create_Education').click(function () {

            $('#contact_form2').val("create_education");
            $('#contact_us2').trigger("reset");
            $('#ajax-modal2').iziModal('open');
            $('#ajax-modal2').iziModal('setTitle', "{{__('Add Education')}}");
            $('#ajax-modal2').iziModal('setIcon', 'fa fa-plus');

        });
        $('#contact_form2').click(function (){
            $('#close_m2').click();

        });





        $('#create_Experience').click(function () {

            $('#contact_form3').val("create_education");
            $('#contact_us3').trigger("reset");
            $('#ajax-modal3').iziModal('open');
            $('#ajax-modal3').iziModal('setTitle', "{{__('Add Education')}}");
            $('#ajax-modal3').iziModal('setIcon', 'fa fa-plus');

        });
        $('#contact_form3').click(function (){
            $('#close_m3').click();

        });


    </script>
@stop
