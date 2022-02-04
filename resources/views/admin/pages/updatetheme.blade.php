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
                            <h3 class="card-title" style="float: right">تعديل </h3>
                        </div>

                        <div class="card-body">
                        <form method="POST" action="{{url('admin/Theme/update/'.$Theme->id)}}"  enctype="multipart/form-data"  accept-charset="utf-8">
                        @csrf

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label> العنوان</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                   name="title" value="{{$Theme->title}}" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label> المدن</label>
                                            <select class="form-control" name="city_id"   id="country_name"  required>
                                                <option value="{{$Theme->city_id}}"> {{$Theme->city()->name_ar}}</option>
                                                @foreach($Cities  as $City)
                                                    @if($Theme->city_id!=$City->id)

                                                    <option value="{{$City->id}}">{{$City->name_ar}}</option>
                                                @endif
                                                @endforeach



                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label> التصنيف</label>
                                            <select class="form-control" name="category_id"   id="country_name"  required>

                                                <option value="{{$Theme->category_id}}"> {{$Theme->category()->name_ar}}</option>

                                                @foreach($Categories  as $Category)
                                                    @if($Theme->category_id!=$Category->id)

                                                    <option value="{{$Category->id}}">{{$Category->name_ar}}</option>
                                               @endif
                                                @endforeach



                                            </select>
                                        </div>
                                    </div>



                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label> الوصف  باللغة العربية</label>

                                            <textarea  name="descreption_ar" rows="4" cols="50"  >
                                                {!! $Theme->descreption_ar !!}
</textarea>   </div>


                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label> الوصف  باللغة الانجليزية</label>

                                            <textarea  name="descreption_en" rows="4" cols="50"   >
                                                {!! $Theme->descreption_en !!}

</textarea>   </div>


                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>   صورة الجامعة</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image" >
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="">Upload</span>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <br><br> <br><br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- select -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <img src="{{asset('uploads/'.$Theme->image)}}"  style=" border-radius: 8px;" height="200px" width="300px">
                                                </div>

                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <br><br> <br><br>

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

@endsection

