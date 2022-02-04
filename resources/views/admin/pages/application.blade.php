@extends('admin.base')
@push('css')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
<link src="{{asset('https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css')}}"/>

@endpush('css')
@section('page_content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">


                    <div class="card">

                        <div class="card-body">
                            <table id="example" class="display nowrap  table table-bordered table-striped"
                                   style="width:100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th> الدولة الهدف</th>
                                    <th> المدينة الهدف </th>
                                    <th> الجامعة الهدف </th>
                                    <th> المجال الهدف </th>
                                    <th> التخصص الهدف </th>
                                    <th> الدرجة العلمية </th>
                                    <th> البريد الالكترونى </th>
                                    <th> التاريخ </th>

                                    <th>  الحالة </th>


                                    <th>الحدث</th>
                                </tr>
                                </thead>
                                <tbody>
                                  <!--not accept  #D6EAF8  -->
                                  <!-- accept   #E8F8F5-->

                                @foreach($Applications  as $Application)
                                    <tr style="
                                    <?php
                                    if($Application->is_accept == 0)
                                      echo  "background: #D6EAF8   ;"

                                        ?>">
                                        <td >{{ $loop->iteration }}</td>
                                        <td>{{$Application->Country()->name_ar}}</td>
                                        <td>{{$Application->City()->name_ar}}</td>
                                        <td>{{$Application->University()->name}}</td>
                                        <td>{{$Application->field}}</td>
                                        <td>{{$Application->specialty}}</td>
                                        <td>{{$Application->Degree()->name_ar}}</td>
                                        <td>{{$Application->email}}</td>
                                        <td>{{$Application->created_at}}</td>


                                        <td><?php if($Application->is_accept==0)
                                        echo "مقيد";
                                            else
                                        echo "قبول";
                                        ?></td>


                                        <td>
                                            <div class="btn-group">


                            <a class="btn btn-primary" href="{{url('admin/view_application/'.$Application->id)}}" >
                                <i class="fa fa-edit"></i>
                                                </a>

                                              <!--   <a class="btn btn-primary" href="" data-toggle="modal"
                                                   data-target="#myModal{{ $Application->id }}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
 -->



                                                <a class="btn btn-primary" href="" data-toggle="modal"
                                                   data-target="#myModal{{ $Application->id }}">
                                                    <i class="fa fa-envelope" ></i>
                                                </a>
                                                <a class="btn btn-primary" href="" data-toggle="modal"
                                                   data-target="#centralModalS{{ $Application->id }}" style="background: green">
                                                    <i class="fa fa-check" aria-hidden="true"></i>

                                                </a>



                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#centralModalSmedel{{ $Application->id }}" style="background: red">
                                                 <i class="fa fa-trash" aria-hidden="true"></i>

                                                </button>


                                            </div>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="centralModalSmedel{{ $Application->id }}" tabindex="-1"
                                         role="dialog" aria-labelledby="myModalLabel"
                                         aria-hidden="true">

                                        <!-- Change class .modal-sm to change the size of the modal -->
                                        <div class="modal-dialog modal-sm" role="document">


                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    {{--<h4 class="modal-title w-100" id="myModalLabel">الحذف </h4>--}}
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="">
                                                           <p style="    font-size: 16px;
    font-weight: 400;"> هل أنت متأكد من حذف هذا الطلب ؟ </p>
                                                </div>
                                                <div class="modal-footer">


                                                    <!--         <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">اعلاق</button>
                                                     -->
                                                    {!!  Form::open(['url' => ['admin/application/remove',$Application->id],'id' => 'delete_form' ,'method' => 'POST','files' => true]) !!}

                                                    <button type="submit" class="btn btn-primary btn-lg"  id="delete_form" style="font-size: 16px;
                                                            font-weight: 400;">نعم</button>
                                                    {!! Form::close() !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="centralModalS{{ $Application->id }}" tabindex="-1"
                                         role="dialog" aria-labelledby="myModalLabel"
                                         aria-hidden="true">

                                        <!-- Change class .modal-sm to change the size of the modal -->
                                        <div class="modal-dialog modal-sm" role="document">


                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    {{--<h4 class="modal-title w-100" id="myModalLabel">الحذف </h4>--}}
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p style="    font-size: 16px;
    font-weight: 400;">                                                     هل أنت متأكد من قبول الطلب؟
                                                    </p>
                                                </div>
                                                <div class="modal-footer">


                                                    <!--         <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">اعلاق</button>
                                                     -->
                                                    {!!  Form::open(['url' => ['admin/application/acceptance',$Application->id],'id' => 'delete_form' ,'method' => 'POST','files' => true]) !!}

                                                    <button type="submit" class="btn btn-primary btn-lg"  id="delete_form" style="font-size: 16px;
                                                            font-weight: 400;">نعم</button>
                                                    {!! Form::close() !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="myModal{{ $Application->id }}" role="dialog">

                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                {{--<div class="modal-header">--}}

                                                    {{--<h4 class="modal-title w-100" id="myModalLabel">رسالة </h4>--}}
                                                    {{--<button type="button" class="close" data-dismiss="modal"--}}
                                                            {{--aria-label="Close">--}}
                                                        {{--<span aria-hidden="true">&times;</span>--}}
                                                    {{--</button>--}}

                                                {{--</div>--}}
                                                <div class="modal-body">



                                                    {!!  Form::open(['url' => ['admin/application/send-mail',$Application->id] ,'method' => 'POST','files' => true]) !!}
                                                    <br>

                                                    <div class="form-group">

   <textarea id="w3review" name="answer" rows="10" cols="50"   class="form-control" required style="float: right
">Acceptance Letter Issues for Mr. *Applicant Name Space Here*
I am pleased to inform you that I’d like to accept you as a student under my supervision at palestine,  You will be studying and working on the project related to historical reservoir geology. Depend on the time you obtain the scholarship from Emirates, you might start your study here at Emirates University of History and Political Science, Arab in September, 2014, and finish the proposed master study in June, 2017.
                                                        </textarea>

                                                    </div>




                                                    <div class="margiv-top-10" >

                                                        <button type="submit" class="btn btn-primary btn-lg"  id="delete_form"   style="margin-top: 10px;"  >ارسال البريد  </button>

                                                    </div>


                                                    {!! Form::close() !!}
                                                </div>

                                            </div>

                                        </div>
                                    </div>



                                        <div class="modal fade" id="myModal{{ $Application->id }}" role="dialog">

                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <h4 class="modal-title w-100" id="myModalLabel">رسالة القبول أو الرفض </h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>

                                                    </div>
                                                    <div class="modal-body">



                                                        {!!  Form::open(['url' => ['admin/application/send-mail',$Application->id] ,'method' => 'POST','files' => true]) !!}
                                                        <br>

                                                        <div class="form-group">


                                                        <textarea id="w3review" name="answer" rows="4" cols="50"   class="form-control" required style="float: right
">
Welcome to the Ambassador Scholarship family
We inform you that your request has been accepted on 10-10-2015 and we would like to inform you that you are now part of the family of a Ambassador</textarea>





                                                            <div class="margiv-top-10" >

                                                                <button type="submit" class="btn btn-primary btn-lg"  id="delete_form"   style="margin-top: 10px;"  >ارسال البريد  </button>

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
@push('js')

<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
<!--editor-->


@endpush('js')


