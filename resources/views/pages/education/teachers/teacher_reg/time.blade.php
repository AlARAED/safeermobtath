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


                <div class="profile_bg">
                    <div class="row">
                        <div class="col-6 col-md-6 m-auto">
                            <h5 class="mr-auto w_max_content">{{__('Time with Days')}}</h5>
                        </div>
                        <div class="col-6 col-md-6 d-flex float-right">
                            <a href="javascript:void(0)" id="create_skill" class="ml-auto"><i class="fa fa-plus"></i></a>

                        </div>
                    </div>

                </div>

                <div class="scholarship">

                    <a class="form-control m-auto btn_complete" href="{{route(app()->getLocale().'.teacher_teacher_profile',['id'=>$id])}}"> {{__('Next')}}</a>
                </div>

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

                <input type="hidden" name="teacher_department_id" id="archive_id" value="{{$id}}">
                <div class="form-group">
                    <label>{{__('The Day')}}</label>


                    <select  type="text"
                            id="name"
                            class="form-control"
                            required=""

                            data-validation="required"
                            data-validation-error-msg-required="{{__('The Field required')}}"
                            name="day">
                        <option value="0">Monday</option>
                        <option value="1">Tuesday</option>
                        <option value="2">Wednesday</option>
                        <option value="3">Thursday</option>
                        <option value="4">Friday</option>
                        <option value="5">Saturday</option>
                        <option value="6">Sunday</option>
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
                    <button  class="btn btn-primary btn_complete mr-2" id="contact_form" value="create">{{__('Save')}}</button>
                    <button class="btn btn-primary-outline light btn_newsletter" data-izimodal-close  id="close_m"  >{{__('Cancel')}}</button>
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
                    url: '{{route(app()->getLocale().'.savedate')}}',
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

        });
    </script>





    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/iziModal.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.all.min.js"></script>

    <script>
        $('#ajax-modal').iziModal();

        /* When click Add */
        $('#create_skill').click(function () {
            $('#btn-save').val("create_skill");
            $('#Form_').trigger("reset");
            $('#ajax-modal').iziModal('open');
            $('#ajax-modal').iziModal('setTitle', "{{__('Add TIME ')}}");
            $('#ajax-modal').iziModal('setIcon', 'fa fa-plus');

        });
        $('#contact_form').click(function (){
            $('#close_m').click();

        });








    </script>
@stop
