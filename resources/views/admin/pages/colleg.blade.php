@extends('admin.base')
@section('page_content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" style="float: right;"> أشهر الجامعات </h3>

                            <a href="{{url('admin/collage/store')}}" class="btn btn-primary"   style="float: left;" >اضافة جديد<i
                                    class="fas fa-plus"></i></a>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">

                            <table id="example" class="display nowrap  table table-bordered table-striped"
                                   style="width:100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الاسم باللغة العربية</th>
                                    <th>الاسم باللغة الانجليزية</th>
                                    <th>الدولة</th>
                                    <th>المدينة</th>
                                    <th>الحدث</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($collages  as $collage)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$collage->name_ar}}</td>
                                        <td>{{$collage->name_en}}</td>
                                        <td>{{$collage->Country()->name_ar}}</td>
                                        <td>{{$collage->City()->name_ar}}</td>
                                        <td>
                                            <div class="btn-group">

                                                <a class="btn btn-primary" href="{{url('admin/view_collage/'.$collage->id)}}" >
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#centralModalSmedel{{ $collage->id }}">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>


                                            </div>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="centralModalSmedel{{ $collage->id }}" tabindex="-1"
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
                                                    {!!  Form::open(['url' => ['admin/collage/remove',$collage->id],'id' => 'delete_form' ,'method' => 'POST','files' => true]) !!}

                                                    <button type="submit" class="btn btn-primary btn-lg"  id="delete_form">نعم</button>
                                                    {!! Form::close() !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                @endforeach

                                </tbody>

                            </table>



                </div>
                <!--/.col (left) -->
                <!-- right column -->

                <!--/.col (right) -->
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
    </section>

@endsection

