@extends('admin.base')
@section('page_content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" style="float: right;">  مجال التدريس المتاح    </h3>

                            <a class="btn btn-primary"   style="float: left;"    data-toggle="modal"
                               data-target="#myModaladd" >اضافة جديد<i
                                        class="fas fa-plus"></i></a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example" class="display nowrap  table table-bordered table-striped"
                                   style="width:100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الاسم باللغة العربية</th>
                                    <th>الاسم باللغة الانجليزية</th>
                                    <th>الحدث</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Categories  as $Category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$Category->name_ar}}</td>
                                        <td>{{$Category->name_en}}</td>
                                        <td>
                                            <div class="btn-group">

                                                <a class="btn btn-primary" href="" data-toggle="modal"
                                                   data-target="#myModal{{ $Category->id }}">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#centralModalSmedel{{ $Category->id }}">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>


                                            </div>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="centralModalSmedel{{ $Category->id }}" tabindex="-1"
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
                                                    هل أنت متأكد من حذف هذا العنصر هذا الاجراء؟
                                                </div>
                                                <div class="modal-footer">


                                                    <!--         <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">اعلاق</button>
                                                     -->
                                                    {!!  Form::open(['url' => ['admin/field_Ph/remove',$Category->id],'id' => 'delete_form' ,'method' => 'POST','files' => true]) !!}

                                                    <button type="submit" class="btn btn-primary btn-lg"  id="delete_form">نعم</button>
                                                    {!! Form::close() !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="modal fade" id="myModal{{ $Category->id }}" role="dialog">

                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <h4 class="modal-title w-100" id="myModalLabel">تعديل </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>

                                                </div>
                                                <div class="modal-body">



                                                    {!!  Form::open(['url' => ['admin/field_Ph/update',$Category->id] ,'method' => 'POST','files' => true]) !!}
                                                    <br>
                                                    <div class="form-group">
                                                        <label class="control-label">اسم  باللغةالعربية</label>
                                                        <input type="text" placeholder="" class="form-control" name="name_ar"  required  value="{{$Category->name_ar}}"/> </div>

                                                    <div class="form-group">
                                                        <label class="control-label">اسم  باللغة الانجليزية</label>
                                                        <input type="text" placeholder="" class="form-control" name="name_en"  required  value="{{$Category->name_en}}"/> </div>




                                                    <div class="margiv-top-10">
                                                        <button type="submit" class="btn btn-primary btn-lg"  id="delete_form">حفظ</button>

                                                    </div>

                                                    {!! Form::close() !!}
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                @endforeach

                                <div class="modal fade" id="myModaladd" role="dialog">

                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <h4 class="modal-title w-100" id="myModalLabel">اضافة جديد </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>

                                            </div>
                                            <div class="modal-body">



                                                {!!  Form::open(['url' => ['admin/field_Ph'] ,'method' => 'POST','files' => true]) !!}
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label">اسم الدولة باللغةالعربية</label>
                                                    <input type="text" placeholder="" class="form-control" name="name_ar"  required/> </div>

                                                <div class="form-group">
                                                    <label class="control-label">اسم الدولة باللغة الانجليزية</label>
                                                    <input type="text" placeholder="" class="form-control" name="name_en"  required  /> </div>




                                                <div class="margiv-top-10">
                                                    <button type="submit" class="btn btn-primary btn-lg"  id="delete_form">حفظ</button>

                                                </div>

                                                {!! Form::close() !!}
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->

    </section>

@endsection

