@extends('admin.base')
@section('page_content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <section class="content">

        {!!  Form::open(['url' => ['admin/application/update',$Application->id] ,'method' => 'POST','files' => true]) !!}

        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" style="float: right">تفاصيل الطلب </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- select -->
                                            <div class="form-group">
                                                <label>اسم الدولة</label>

                                                <select name="country_id" id="country_name" class="form-control" id="country-dropdown">
                                                    <option
                                                        value="{{$Application->country_id}}">{{$Application->Country()->name_ar}}</option>
                                                    @foreach($Countries  as $Country)
                                                        @if($Application->country_id != $Country->id)
                                                        <option value="{{$Country->id}}">{{$Country->name}}</option>
                                                        @endif
                                                    @endforeach


                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> اسم المدينة</label>
                                                <select name="city_id" id="city_id" class="form-control"  id="city-dropdown"   required="">

                                                    <option
                                                        value="{{$Application->city_id}}">{{$Application->City()->name_ar}}</option>




                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>





                                <div class="form-group">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- select -->
                                            <div class="form-group">
                                                <label>الجامعة </label>
                                                <select class="form-control"  name="university_id">
                                                    <option
                                                        value="{{$Application->university_id}}">{{$Application->University()->name}}</option>

                                                    @foreach($universities  as $university)
                                                        @if($Application->university_id != $university->id)
                                                            <option
                                                                value="{{$university->id}}">{{$university->name}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> المجال </label>
                                                <input type="text" class="form-control" id="exampleInputPassword1"
                                                       value="{{$Application->field}}" name="field">

                                            </div>
                                        </div>
                                    </div>

                                </div>



                                <div class="form-group">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- select -->
                                            <div class="form-group">
                                                <label> التخصص </label>
                                                <input type="text" class="form-control" id="exampleInputPassword1"
                                                       value="{{$Application->specialty}}" name="specialty">

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> الدرجة العلمية </label>
                                                <select class="form-control" name="degree_id" id="practical_degree" >
                                                    <option
                                                        value="{{$Application->degree_id}}">{{$Application->Degree()->name_ar}}</option>

                                                    @foreach($Degrees  as $Degree)
                                                        @if($Application->degree_id != $Degree->id)
                                                            <option value="{{$Degree->id}}">{{$Degree->name}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- select -->
                                            <div class="form-group">
                                                <label> التخصص </label>
                                                <input type="email" class="form-control" id="exampleInputPassword1"
                                                       value="{{$Application->email}}" name="email">

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> هل مبتعث </label>
                                                <br>


                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" name="is_grant"
                                                           value="1" {{ ($Application->is_grant=="1")? "checked" : "" }}>
                                                    <label class="custom-control-label">نعم </label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" name="is_grant"
                                                           value="2"
                                                        {{ ($Application->is_grant=="2")? "checked" : "" }}>
                                                    <label for="customRadio2" class="custom-control-label">لا </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>




                                                       </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">حفظ</button>
                            </div>
                    </div>
                    <!-- /.card -->



                    <!-- /.card -->
                    <!-- Input addon -->
                    <!-- /.card -->
                    <!-- Horizontal Form -->
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">

                        <div class="card-body">




                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <!-- The timeline -->
                                    <div class="timeline timeline-inverse">




                                        <div>
                                            <i class="fas fa-camera bg-purple"></i>

                                            <div class="timeline-item">

                                                <h3 class="timeline-header"><a href="#"> </a> المرفقات </h3>

                                                <div class="timeline-body">




                                                        <button onclick="document.getElementById('passport_img').click()" type="button" class="btn btn-info float-right"  style="background-color: #007bff;"><i class="fas fa-plus"></i> جواز السفر </button>

                                                 <div class="d-flex">



                                                                <div class="mt-auto mb-auto ml-5 col-md-4">

                                                        <input type='file' id="passport_img" style="display:none"
                                                               name="passport_img">
                                                                </div>
                                                                @if($Application->passport_img!=null )
                                                                    <a href="{{ asset('uploads/' .$Application->passport_img) }}" data-fancybox="img-attachment" >
                                                                        <img src="{{ asset('uploads/' .$Application->passport_img) }}"
                                                                         width="250px" height="200px" style=" border-radius: 8px;"></a>
                                                                @else
                                                                    <img src="{{ asset('uploads/addimage.png' )}}"
                                                                         width="300px" height="200px" style=" border-radius: 8px;">
                                                                @endif

                                                            </div>
                                                 <br>
                                                 <hr>
                                                    <button onclick="document.getElementById('degree_statment_img').click()"  type="button" class="btn btn-info float-right" style="background-color: #007bff;"><i class="fas fa-plus"></i>  كشف الدرجات </button>


                                                    <div class="d-flex">
                                                        <div class="mt-auto mb-auto ml-5 col-md-4">


                                                            <input type='file' id="degree_statment_img" style="display:none"
                                                                   name="degree_statment_img"> </div>
                                                        @if($Application->degree_statment_img!=null )
                                                            <a href="{{ asset('uploads/' .$Application->degree_statment_img) }}" data-fancybox="img-attachment">
                                                                <img
                                                                    src="{{ asset('uploads/' .$Application->degree_statment_img) }}"
                                                                    width="250px" height="200px" style=" border-radius: 8px;"></a>


                                                        @else
                                                            <img src="{{ asset('uploads/addimage.png' )}}"
                                                                 width="300px" height="200px" style=" border-radius: 8px;">
                                                        @endif
                                                    </div>
                                                    <hr>
                                                    <br>


                                                    <button  onclick="document.getElementById('speach').click()"  type="button" class="btn btn-info float-right" style="background-color: #007bff;"><i class="fas fa-plus"></i>   الخطاب البنكى </button>

                                                    <div class="d-flex">
                                                        <div class="mt-auto mb-auto ml-5 col-md-4">

                                                            <input type='file' id="speach" style="display:none"
                                                                   name="speach">
                                                        </div>
                                                        @if($Application->speach!=null )
                                                         {{--   <img src="{{ asset('thumb.php?src=uploads/' .$Application->speach.'&size=163x200') }}"
                                                                 width="163px" height="200px">--}}
                                                            <a href="{{ asset('uploads/' .$Application->speach )}}" data-fancybox="img-attachment">
                                                                <img src="{{ asset('uploads/' .$Application->speach )}}" width="250px" height="200px" style=" border-radius: 8px;"></a>

                                                        @else
                                                            <img src="{{ asset('uploads/addimage.png' )}}"
                                                                 width="300px" height="200px" style=" border-radius: 8px;">
                                                        @endif


                                                    </div>
                                                    <br>
                                                    <hr>


                                                    <button   style="background-color: #007bff;" onclick="document.getElementById('recomendation_img').click()" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i>    التوصيات الأكاديمية </button>

                                                    <div class="d-flex">
                                                        <div class="mt-auto mb-auto ml-5 col-md-4">

                                                            <input type='file' id="recomendation_img" style="display:none"
                                                                   name="recomendation_img"> </div>

                                                        @if($Application->recomendation_img  != null )
                                                            <a href="{{ asset('uploads/' .$Application->recomendation_img) }}" data-fancybox="img-attachment">
                                                                <img
                                                                    src="{{ asset('uploads/' .$Application->recomendation_img) }}"
                                                                    width="250px" height="200px" style=" border-radius: 8px;"> </a>


                                                        @else
                                                            <img src="{{ asset('uploads/addimage.png' )}}"
                                                                 width="300px" height="200px" style=" border-radius: 8px;">
                                                        @endif
                                                    </div>
                                                    <hr>
                                                    <br>











                                                    <button    style="background-color: #007bff;" onclick="document.getElementById('a').click()" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> الغرض من الدراسة    </button>


                                                    <div class="d-flex">
                                                        <div class="mt-auto mb-auto ml-5 col-md-4">


                                                            <input type='file' id="a" style="display:none"
                                                                   name="good_study"> </div>
                                                        @if($Application->good_study != null )
                                                            <a href="{{ asset('uploads/' .$Application->good_study) }}" data-fancybox="img-attachment">
                                                                <img
                                                                    src="{{ asset('uploads/' .$Application->good_study) }}"
                                                                    width="250px" height="200px" style=" border-radius: 8px;" ></a>

                                                                @else
                                                                    <img src="{{ asset('uploads/addimage.png' )}}"
                                                                         width="300px" height="200px" style=" border-radius: 8px;">
                                                        @endif
                                                    </div>
                                                    <hr>
                                                    <br>


                                                    <button    style="background-color: #007bff;" onclick="document.getElementById('cv').click()" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> السيرة الذاتية </button>

                                                    <div class="d-flex">
                                                        <div class="mt-auto mb-auto ml-5 col-md-4">


                                                            <input type='file' id="cv" style="display:none"
                                                                   name="cv"> </div>
                                                        @if($Application->cv != null )
                                                            <a href="{{ asset('uploads/' .$Application->cv) }}" data-fancybox="img-attachment"><img
                                                                    src="{{ asset('uploads/' .$Application->cv) }}"
                                                                    width="250px" height="200px" style=" border-radius: 8px;"></a>

                                                        @else
                                                            <img src="{{ asset('uploads/addimage.png' )}}"
                                                                 width="300px" height="200px" style=" border-radius: 8px;">
                                                        @endif
                                                    </div>
                                                    <hr>
                                                    <br>









                                                    <button   style="background-color: #007bff;" onclick="document.getElementById('cv').click()" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i>  شهادة الثانوية  </button>



                                                    <div class="d-flex">
                                                        <div class="mt-auto mb-auto ml-5 col-md-4">


                                                            <input type='file' id="high_school_certificate" style="display:none"
                                                                   name="high_school_certificate"> </div>

                                                        @if($Application->high_school_certificate  != null )
                                                            <a href="{{ asset('uploads/' .$Application->high_school_certificate) }}" data-fancybox="img-attachment">
                                                                <img
                                                                    src="{{ asset('uploads/' .$Application->high_school_certificate) }}"
                                                                    width="250px" height="200px" style=" border-radius: 8px;" ></a>


                                                                @else
                                                                    <img src="{{ asset('uploads/addimage.png' )}}"
                                                                         width="300px" height="200px" style=" border-radius: 8px;" >
                                                        @endif
                                                    </div>
                                                    <hr>
                                                    <br>








                                                    <button  style="background-color: #007bff;" onclick="document.getElementById('Certificate_good_conduct').click()"  type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i>  حسن سير وسلوك   </button>


                                                            <div class="d-flex">
                                                                <div class="mt-auto mb-auto ml-5 col-md-4">


                                                                    <input type='file' id="Certificate_good_conduct" style="display:none"
                                                                           name="Certificate_good_conduct"> </div>

                                                                @if($Application->Certificate_good_conduct  != null )
                                                                    <a href="{{ asset('uploads/' .$Application->Certificate_good_conduct) }}" data-fancybox="img-attachment">
                                                                        <img
                                                                            src="{{ asset('uploads/' .$Application->Certificate_good_conduct) }}"
                                                                            width="250px" height="200px" style=" border-radius: 8px;" > </a>


                                                                @else
                                                                    <img src="{{ asset('uploads/addimage.png' )}}"
                                                                         width="300px" height="200px"  style=" border-radius: 8px;" >
                                                                @endif
                                                            </div>

                                                            <hr>
                                                            <br>







                       <button   style="background-color: #007bff;" onclick="document.getElementById('Diploma_certificate').click()"  type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i>شهادة الدبلوم </button>


                                                    <div class="d-flex">
                                                        <div class="mt-auto mb-auto ml-5 col-md-4">


                                                            <input type='file' id="Diploma_certificate" style="display:none"
                                                                   name="Diploma_certificate"> </div>

                                                        @if($Application->Diploma_certificate  != null )
                                                            <a href="{{ asset('uploads/' .$Application->Diploma_certificate) }}" data-fancybox="img-attachment">
                                                                <img
                                                                    src="{{ asset('uploads/' .$Application->Diploma_certificate) }}"
                                                                    width="250px" height="200px"  style=" border-radius: 8px;"  > </a>


                                                        @else
                                                            <img src="{{ asset('uploads/addimage.png' )}}"
                                                                 width="300px" height="200px">
                                                        @endif
                                                    </div>

                                                    <hr>
                                                    <br>




                                                    <button  style="background-color: #007bff;" onclick="document.getElementById('Explanation_description_materials').click()"  type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i>وصف المواد  </button>


                                                    <div class="d-flex">
                                                        <div class="mt-auto mb-auto ml-5 col-md-4">


                                                            <input type='file' id="Explanation_description_materials" style="display:none"
                                                                   name="Explanation_description_materials"> </div>

                                                        @if($Application->Explanation_description_materials  != null )
                                                            <a href="{{ asset('uploads/' .$Application->Explanation_description_materials) }}" data-fancybox="img-attachment">
                                                                <img
                                                                    src="{{ asset('uploads/' .$Application->Explanation_description_materials) }}"
                                                                    width="250px" height="200px"  style=" border-radius: 8px;"  > </a>


                                                        @else
                                                            <img src="{{ asset('uploads/addimage.png' )}}"
                                                                 width="300px" height="200px">
                                                        @endif
                                                    </div>

                                                    <hr>
                                                    <br>

                                                    <button  style="background-color: #007bff;"  onclick="document.getElementById('Certificate_translation').click()"  type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> شهادات للترجمة </button>



                                                              <div class="d-flex">
                                                        <div class="mt-auto mb-auto ml-5 col-md-4">


                                                            <input type='file' id="Certificate_translation" style="display:none"
                                                                   name="Certificate_translation"> </div>

                                                        @if($Application->Certificate_translation  != null )
                                                            <a href="{{ asset('uploads/' .$Application->Certificate_translation) }}" data-fancybox="img-attachment">
                                                                <img
                                                                    src="{{ asset('uploads/' .$Application->Certificate_translation) }}"
                                                                    width="250px" height="200px"  style=" border-radius: 8px;" > </a>


                                                        @else
                                                            <img src="{{ asset('uploads/addimage.png' )}}"
                                                                 width="300px" height="200px">
                                                        @endif
                                                    </div>

                                                    <hr>
                                                    <br>




                                                    <button   style="background-color: #007bff;" onclick="document.getElementById('American_System_Certificates').click()"  type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i>ترجمة بالنظام الامريكى   </button>


                                                    <div class="d-flex">
                                                        <div class="mt-auto mb-auto ml-5 col-md-4">

                                                            <input type='file' id="American_System_Certificates" style="display:none"
                                                                   name="American_System_Certificates"> </div>

                                                        @if($Application->American_System_Certificates  != null )
                                                            <a href="{{ asset('uploads/' .$Application->American_System_Certificates) }}" data-fancybox="img-attachment">
                                                                <img
                                                                    src="{{ asset('uploads/' .$Application->American_System_Certificates) }}"
                                                                    width="250px" height="200px" style=" border-radius: 8px;"  >  </a>


                                                        @else
                                                            <img src="{{ asset('uploads/addimage.png' )}}"
                                                                 width="300px" height="200px">
                                                        @endif
                                                    </div>

                                                    <hr>
                                                    <br>

                                                    <button   style="background-color: #007bff;" onclick="document.getElementById('Financial_guarantee_certificate').click()"  type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i>  الضمان المالى   </button>



                                                    <div class="d-flex">
                                                        <div class="mt-auto mb-auto ml-5 col-md-4">


                                                            <input type='file' id="Financial_guarantee_certificate" style="display:none"
                                                                   name="Financial_guarantee_certificate"> </div>

                                                        @if($Application->Financial_guarantee_certificate  != null )
                                                            <a href="{{ asset('uploads/' .$Application->Financial_guarantee_certificate) }}" data-fancybox="img-attachment">
                                                                <img
                                                                    src="{{ asset('uploads/' .$Application->Financial_guarantee_certificate) }}"
                                                                    width="250px" height="200px" style=" border-radius: 8px;" > </a>


                                                        @else
                                                            <img src="{{ asset('uploads/addimage.png' )}}"
                                                                 width="300px" height="200px">
                                                        @endif
                                                    </div>

                                                    <hr>
                                                    <br>


                                                    <div>






                                                    </div>
                                        <!-- END timeline item -->
                                        <div>
                                            <i class="far fa-clock bg-gray"></i>
                                        </div>
                                    </div>
                                </div>



</div>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- general form elements disabled -->

                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        {!! Form::close() !!}


    </section>

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

    </script>
@stop
