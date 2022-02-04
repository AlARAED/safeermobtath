@extends('admin.base')
@section('page_content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <section class="content">


        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" style="float: right">اضافة المدرسة    </h3>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{route('admin.school.store')}}"  enctype="multipart/form-data">
                                @csrf


                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>اسم المدرسة باللغة العربية</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                   name="name_ar" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>اسم المدرسة باللغة الانجليزية</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                   name="name_en" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label> الدولة</label>
                                            <select class="form-control" name="country_id"   id="country_name"  required>
                                                <option>اختيار دولة</option>
                                                @foreach($Countries  as $Country)
                                                    <option value="{{$Country->id}}">{{$Country->name_ar}}</option>
                                                @endforeach



                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label> المدينة</label>
                                            <select name="city_id" id="city_id" class="form-control"  id="city-dropdown"   required="">

                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label> المحتوى باللغة العربية</label>

                                            <textarea name="content_ar" rows="4" cols="50"  >

</textarea>
                                        </div>


                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label> المحتوى باللغة الانجليزية</label>

                                            <textarea  name="content_en" rows="4" cols="50"  >
</textarea>   </div>


                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label> الوصف  باللغة العربية</label>

                                            <textarea  name="descreption_ar" rows="4" cols="50"  >
</textarea>   </div>


                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label> الوصف  باللغة الانجليزية</label>

                                            <textarea  name="descreption_en" rows="4" cols="50"  >
</textarea>   </div>


                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label> العنوان  باللغة العربية</label>

                                            <textarea  name="address_ar" rows="4" cols="50"  >
</textarea>   </div>


                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label> العنوان  باللغة الانجليزية</label>

                                            <textarea  name="address_en" rows="4" cols="50"  >
</textarea>   </div>


                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label> المجالات  باللغة العربية</label>

                                            <textarea  name="fields_ar" rows="4" cols="50"  >
</textarea>   </div>


                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label> المجالات  باللغة الانجليزية</label>

                                            <textarea  name="fields_en" rows="4" cols="50"  >
</textarea>   </div>


                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label> مزيد من المعلومات   باللغة العربية</label>

                                            <textarea  name="more_info_ar" rows="4" cols="50"  >
</textarea>   </div>


                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label> مزيد من المعلومات   باللغة الانجليزية</label>

                                            <textarea  name="more_info_en" rows="4" cols="50"  >
</textarea>   </div>


                                    </div>

                                </div>




                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>   صورة المدرسة</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image" required>
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="">Upload</span>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">حفظ</button>
                                </div>

                            </form>
                            <!-- /.card-body -->
                        </div>




                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </section>
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

@endsection

