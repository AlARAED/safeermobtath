@extends('layouts.app')
@section('title', __('Students admissions'))
@section('content')
<div class="bg_std">
    <div class="bg_h2">
        <h2>{{__('Choose your specialization carefully, and university admission will be upon us')}}</h2>
    </div>
</div>
<form method="POST" action="{{route(app()->getLocale().'.send_students_admissions')}}"  enctype="multipart/form-data">
    @csrf
<section class="std_form">
<div class="container">
    <div class="row form-group">
        <div class="col-4 col-md-2">
            <label for="country_name">{{__('Country Name')}}</label>
        </div>
        <div class="col-8 col-md-4">
            <select name="country_id" id="country_name" class="form-control" id="country-dropdown">
              <option value="">{{__('Country Name')}}</option>

               @foreach($Countries  as $Country)
              <option value="{{$Country->id}}">{{$Country->name}}</option>
              @endforeach


            </select>
        </div>

        {{--<div class="col-12 col-md-4 ml-auto">--}}
            {{--<a href="#"><button class="form-control help_proposal">{{__('Click here to help you write a research proposal')}}</button></a>--}}

        {{--</div>--}}
    </div>
    <div class="row form-group">
        <div class="col-4 col-md-2">
            <label for="city_name">{{__('City Name')}}</label>
        </div>
        <div class="col-8 col-md-4">
            <select name="city_id" id="city_id" class="form-control"  id="city-dropdown"   required="">

            </select>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-4 col-md-2">
            <label for="university_name">{{__('University Name')}}</label>
        </div>
        <div class="col-8 col-md-4">
            <select name="university_id" id="university_id" class="form-control" >
            @foreach($universities  as $university)

              <option value="{{$university->id}}">{{$university->name}}</option>
            @endforeach

            </select>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-4 col-md-2">
            <label for="field_study">{{__('Field of Study')}}</label>
        </div>
        <div class="col-8 col-md-4">
            <input type="text" id="field_study" class="form-control" name="field" required="">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-4 col-md-2">
            <label for="specialization">{{__('Specialization')}}</label>
        </div>
        <div class="col-8 col-md-4">
            <input type="text" id="specialization" class="form-control" name="specialty" required="">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-4 col-md-2">
            <label for="practical_degree">{{__('Practical Degree')}}</label>
        </div>
        <div class="col-8 col-md-4">
            <select name="degree_id" id="practical_degree" class="form-control" required="">
                 <option value="">{{__('Choose Practical Degree')}}</option>

                 @foreach($Degrees  as $Degree)

             <option value="{{$Degree->id}}">{{$Degree->name}}</option>
              @endforeach
            </select>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-4 col-md-2">
            <label for="email">{{__('Email')}}</label>
        </div>
        <div class="col-8 col-md-4">
            <input type="email" id="email" class="form-control" name="email" required=""  value="@auth{{Auth::user()->email}}@endauth">
        </div>
    </div>
</div>
</section>
    <section class="std_attachments d-none">
        <div class="container">

        <h5>{{__('Certificates required')}}</h5>
            <span class="std_notes">* {{__('Attached papers must be in English')}}</span>
            <div class="row form-group">
                <div class="col-8 col-md-5 attach_label">
                    <label for="">{{__('Passport Copy')}}</label>
                </div>
                <div class="col-4 col-md-7 attach_btn">
                    <span class="form-control btn_attach_" onclick="document.getElementById('getFile1').click()">{{__('Attach')}}</span>

                    <input id="getFile1" type="file"  class="d-none" name="passport_img" required>
                </div>
            </div>

            <div class="row form-group bachelor_">
                <div class="col-8 col-md-5 attach_label">
                    <label for="">{{__('High School certificate')}}</label>
                </div>
                <div class="col-4 col-md-7 attach_btn">
                    <span class="form-control btn_attach_" onclick="document.getElementById('getFile11').click()">{{__('Attach')}}</span>
                    <input id="getFile11" type="file" class="d-none bachelor_" name="high_school_certificate">
                </div>
            </div>
            <div class="row form-group bachelor_">
                <div class="col-8 col-md-5 attach_label">
                    <label for="">{{__('Certificate of good conduct')}}</label>
                </div>
                <div class="col-4 col-md-7 attach_btn">
                    <span class="form-control btn_attach_" onclick="document.getElementById('getFile12').click()">{{__('Attach')}}</span>
                    <input id="getFile12" type="file" class="d-none bachelor_" name="Certificate_good_conduct">
                </div>
            </div>
            <div class="row form-group bachelor_">
                <div class="col-8 col-md-5 attach_label">
                    <label for="">{{__('Diploma certificate and academic record For diploma holders')}}</label>
                </div>
                <div class="col-4 col-md-7 attach_btn">
                    <span class="form-control btn_attach_" onclick="document.getElementById('getFile13').click()">{{__('Attach')}}</span>
                    <input id="getFile13" type="file" class="d-none bachelor_" name="Diploma_certificate">
                </div>
            </div>
            <div class="row form-group bachelor_">
                <div class="col-8 col-md-5 attach_label">
                    <label for="">{{__('An explanation or description of the major In the diploma')}}</label>
                </div>
                <div class="col-4 col-md-7 attach_btn">
                    <span class="form-control btn_attach_" onclick="document.getElementById('getFile14').click()">{{__('Attach')}}</span>
                    <input id="getFile14" type="file" class="d-none bachelor_" name="Explanation_description_materials">
                </div>
            </div>
            <div class="row form-group master_">
                <div class="col-8 col-md-5 attach_label">
                    <label for="">{{__('Graduation document and transcript')}}</label>
                </div>
                <div class="col-4 col-md-7 attach_btn">
                    <span class="form-control btn_attach_" onclick="document.getElementById('getFile2').click()">{{__('Attach')}}</span>
                    <input id="getFile2" type="file" class="d-none master_" name="degree_statment_img">
                </div>
            </div>
            <div class="row form-group master_">
                <div class="col-8 col-md-5 attach_label">
                    <label for="">{{__('Academic recommendations')}}</label>
                </div>
                <div class="col-4 col-md-7 attach_btn">
                    <span class="form-control btn_attach_" onclick="document.getElementById('getFile3').click()">{{__('Attach')}}</span>
                    <input id="getFile3" type="file" class="d-none master_" name="recomendation_img" >
                </div>
            </div>
            <div class="row form-group master_">
                <div class="col-8 col-md-5 attach_label">
                    <label for="">{{__('Work experiences and CV')}}</label>
                </div>
                <div class="col-4 col-md-7 attach_btn">
                    <span class="form-control btn_attach_" onclick="document.getElementById('getFile4').click()">{{__('Attach')}}</span>
                    <input id="getFile4" type="file"  class="d-none master_" name="cv">
                </div>
            </div>



            <div class="row form-group">
                <div class="col-8 col-md-5 attach_label">
                    <label for="">{{__('Bank letter for non-scholarships')}}</label>
                </div>
                <div class="col-4 col-md-7 attach_btn">
                    <span class="form-control btn_attach_" onclick="document.getElementById('getFile5').click()">{{__('Attach')}}</span>
                    <input id="getFile5" type="file" class="d-none" name="speach" >
                </div>
            </div>



            <div class="row form-group master_">
                <div class="col-8 col-md-5 attach_label">
                    <label for="">{{__('The purpose of the study')}}</label>
                </div>
                <div class="col-4 col-md-7 attach_btn">
                    <span class="form-control btn_attach_" onclick="document.getElementById('getFile6').click()">{{__('Attach')}}</span>
                    <input id="getFile6" type="file" class="d-none master_" name="good_study">
                </div>
            </div>
            <div class="row form-group master_bachelor">
                <div class="col-8 col-md-5 attach_label mt-2">
                    <label for="">{{__('Certificates that need translation')}}</label>
                    <div class="std_notes">{{__('The certificate translation service will incur an additional fee')}}</div>
                </div>
                <div class="col-4 col-md-7 attach_btn d-flex">
                    <span class="form-control btn_attach_" onclick="document.getElementById('getFile7').click()">{{__('Attach')}}</span>
                    <input id="getFile7" type="file" class="d-none master_bachelor" name="Certificate_translation">

                    <span class="form-control ml-3 american_ btn_attach_" onclick="document.getElementById('getFile10').click()">{{__('American system translation')}}</span>
                    <input id="getFile10" type="file" class="d-none master_bachelor" name="American_System_Certificates">
                </div>
            </div>
        </div>
    </section>
    <section class="scholarship">
        <div class="container">
        <div class="row scholarship_question d-none">
            <div class="col-7 col-md-3">
                <h5>{{__('Are you on scholarship?')}}</h5>
            </div>
            <div class="col-5 col-md-9">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="is_grant" id="scholarship_yes" value="1" required="">
                    <label class="form-check-label" for="exampleRadios1">
                        {{__('Yes')}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="is_grant" id="scholarship_no" value="2" checked="">
                    <label class="form-check-label" for="exampleRadios2">
                        {{__('No')}}
                    </label>
                </div>
                <span class="form-control financial_g d-none" onclick="document.getElementById('getFile8').click()">{{__('Attach the financial guarantee')}}</span>
                <input id="getFile8" type="file" class="d-none" name="Financial_guarantee_certificate">
            </div>
        </div>
            <button type="submit" class="form-control m-auto btn_complete"
           >{{__('Complete the process')}}</button>
        </div>

    </section>
</form>
@endsection
@section('js')
    <script>

        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#country_name').change(function () {

                var country_id =  $(this).children("option:selected").val();



                $("#city_id").html('');
                $.ajax({
                    url:"{{route(app()->getLocale().'.get_cities_by_country')}}",
                    type: "POST",
                    data: {
                        country_id: country_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType : 'json',
                    success: function(result){
                        $('#city_id').html('<option value="">@lang('mobath.CityName')</option>');
                        $.each(result.cities,function(key,value){
                            $("#city_id").append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                    }
                });
            });



        });







        $('#practical_degree').change(function(){
            if($(this).val() == '1'){
                $('.std_attachments, .scholarship_question').removeClass('d-none');
                $('.master_ , .master_bachelor').css('display' , 'flex');
                  $('.master_ , .master_bachelor').attr('required', true);

                $('.bachelor_').css('display' , 'none');
                 $('.bachelor_').attr('required', false);

                 $('#getFile7').attr('required', false);
                 $('#getFile10').attr('required', false);

            }
            if($(this).val() == '2'){
                $('.std_attachments, .scholarship_question').removeClass('d-none');
                $('.bachelor_, .master_bachelor').css('display' , 'flex');
                $('.bachelor_ , .master_bachelor').attr('required', true);
                $('.master_').css('display' , 'none');
                $('.master_').attr('required', false);

                 $('#getFile7').attr('required', false);
                 $('#getFile10').attr('required', false);


            }
            if($(this).val() == '3'){
                $('.std_attachments, .scholarship_question').removeClass('d-none');
                $('.bachelor_,.master_,.master_bachelor').css('display' , 'none');
$('.bachelor_,.master_,.master_bachelor').attr('required', false);
 $('#getFile7').attr('required', false);
                 $('#getFile10').attr('required', false);

            }
            if($(this).val() == '') {
                $('.std_attachments, .scholarship_question').addClass('d-none');

                  $('#getFile7').attr('required', false);
                 $('#getFile10').attr('required', false);
            }
            $('#scholarship_yes').click(function() {
                if($('#scholarship_yes').is(':checked')){
                    $('.financial_g').removeClass('d-none');
                }


            });
            $('#scholarship_no').click(function() {
                if($('#scholarship_no').is(':checked')){
                    $('.financial_g').addClass('d-none');
                }
            });
        });





    /*$('#application_form').click(function () {
        event.preventDefault();
        $.ajax({
            type: 'post',
            url: '/students_admissions',
            data: $('#application_us').serialize(),

            success: function (data) {
                if (status == 200) {
                    alert('ttt');
                } else {
                   // @if(App::getLocale()=='en')
                  // toastr.success("Your request has been sent successfully. Wait for response from admin");
                   // @else
                    toastr.success("تم اضافة الدولة بنجاح !");
                   // @endif

                }

            }
        });
        });*/

   </script>




    @stop
