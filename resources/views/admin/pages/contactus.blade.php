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
                            <h3 class="card-title" style="float: right;">اتصل بنا</h3>


                        </div>
                        <div class="card-body">
                            <table id="example" class="display nowrap  table table-bordered table-striped"
                                   style="width:100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th> الاسم</th>
                                    <th> البريد الالكترونى</th>
                                    <th> العنوان</th>
                                    <th> الهاتف</th>
                                    <th> الهاتف المحمول</th>
                                    <th> المحتوى</th>
                                    <th>الحدث</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!--not accept  #D6EAF8  -->
                                <!-- accept   #E8F8F5-->

                                @foreach($ContactUs  as $Contact)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$Contact->name}}</td>
                                        <td>{{$Contact->email}}</td>
                                        <td>{{$Contact->address}}</td>
                                        <td>{{$Contact->tel}}</td>
                                        <td>{{$Contact->mobile}}</td>
                                        <td>{{ Str::limit($Contact->message_content, 80) }}
                                        </td>

                                        <td>
                                            <div class="btn-group">


                                                <a class="btn btn-primary" href="" data-toggle="modal"
                                                   data-target="#myModaless{{ $Contact->id }}">
                                                    <i class="fa fa-edit"></i>
                                                </a>


                                                <a class="btn btn-primary" href="" data-toggle="modal"
                                                   data-target="#myModal{{ $Contact->id }}">
                                                    <i class="fa fa-envelope"></i>
                                                </a>


                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#centralModalSmedel{{ $Contact->id }}">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>

                                                </button>


                                            </div>
                                        </td>
                                    </tr>


                                    <div class="modal fade" id="myModaless{{ $Contact->id }}" role="dialog">

                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <h4 class="modal-title w-100" id="myModalLabel">عرض محتوى
                                                        الرسالة </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>

                                                </div>
                                                <div class="modal-body">


                                                    <br>

                                                    <div class="form-group">


                <textarea id="w3review" name="answer" rows="15" cols="50" class="form-control" required style="text-align: right
" disabled>{{$Contact->message_content}}
</textarea>


                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                        <div class="modal fade" id="centralModalSmedel{{ $Contact->id }}" tabindex="-1"
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
                                                        هل أنت متأكد من حذف هذا الطلب ؟
                                                    </div>
                                                    <div class="modal-footer">


                                                        <!--         <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">اعلاق</button>
                                                         -->
                                                        {!!  Form::open(['url' => ['admin/contactus/remove',$Contact->id],'id' => 'delete_form' ,'method' => 'POST','files' => true]) !!}

                                                        <button type="submit" class="btn btn-primary btn-lg"
                                                                id="delete_form">نعم
                                                        </button>
                                                        {!! Form::close() !!}

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="myModal{{ $Contact->id }}" role="dialog">

                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <h4 class="modal-title w-100" id="myModalLabel">رسالة
                                                            البريد </h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>

                                                    </div>
                                                    <div class="modal-body">


                                                        {!!  Form::open(['url' => ['admin/contactus/send-mail',$Contact->id] ,'method' => 'POST','files' => true]) !!}
                                                        <br>

                                                        <div class="form-group">


                                                        <textarea id="w3review" name="answer" rows="4" cols="50"
                                                                  class="form-control" required style="float: right
">
Welcome to the Ambassador Scholarship family
We inform you that your request has been accepted on 10-10-2015 and we would like to inform you that you are now part of the family of a Ambassador</textarea>


                                                            <div class="margiv-top-10">

                                                                <button type="submit" class="btn btn-primary btn-lg"
                                                                        id="delete_form" style="margin-top: 10px;">ارسال
                                                                    البريد
                                                                </button>

                                                            </div>


                                                            {!! Form::close() !!}
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>





                                @endforeach

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

