@extends('admin.base')
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
                                    <th> نوع الخدمة</th>

                                    <th> الاسم</th>
                                    <th> البريد الالكترونى</th>
                                    <th> رقم الموبايل</th>
                                    <th> الحالة</th>


                                    <th>الحدث</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!--not accept  #D6EAF8  -->
                                <!-- accept   #E8F8F5-->

                                @foreach($Applications  as $Application)
                                    <tr style="
                                    <?php
                                    if ($Application->accepted == 0)
                                        echo "background: #D6EAF8   ;"

                                    ?>">
                                        <td>{{ $loop->iteration }}</td>


                                        <td> <?php
                                            if ($Application->type_service == 1)
                                                echo "لغة";

                                            if ($Application->type_service == 2)
                                                echo " درس";
                                            if ($Application->type_service ==3)
                                                echo " ماستر";
                                            if ($Application->type_service ==4)
                                                echo " مشرف دكتوراة";
                                            if ($Application->type_service == 5)
                                                echo "مقدم خدمة";


                                            ?>
                                            </td>
                                        <td>{{$Application->first_name}}     {{$Application->last_name}}</td>
                                        <td>{{$Application->email}}</td>
                                        <td>{{$Application->phone_no}}</td>

                                        <td><?php if ($Application->accepted == 0)
                                                echo "مقيد";
                                            else
                                                echo "قبول";
                                            ?></td>


                                        <td>
                                            <div class="btn-group">


                                                <a class="btn btn-primary"
                                                   href="{{url('admin/view_applicationeacher/'.$Application->id)}}">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                            <!--   <a class="btn btn-primary" href="" data-toggle="modal"
                                                   data-target="#myModal{{ $Application->id }}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
 -->


                                                <a class="btn btn-primary" href="" data-toggle="modal"
                                                   data-target="#myModal{{ $Application->id }}">
                                                    <i class="fa fa-envelope"></i>
                                                </a>
                                                <a class="btn btn-primary" href="" data-toggle="modal"
                                                   data-target="#centralModalS{{ $Application->id }}"  style="background: green">
                                                    <i class="fa fa-check" aria-hidden="true" ></i>

                                                </a>


                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#centralModalSmedel{{ $Application->id }}"  style="background: red">
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
                                                    {!!  Form::open(['url' => ['admin/applicationteacher/remove',$Application->id],'id' => 'delete_form' ,'method' => 'POST','files' => true]) !!}

                                                    <button type="submit" class="btn btn-primary btn-lg"
                                                            id="delete_form">نعم
                                                    </button>
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

                                            {!!  Form::open(['url' => ['admin/applicationteacher/acceptance',$Application->id],'id' => 'delete_form' ,'method' => 'POST','files' => true]) !!}

                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title w-100" id="myModalLabel"> </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">




                                                    هل أنت متأكد من قبول الطلب؟

                                                    @if ($Application->type_service == 2)

                                                        <div class="form-group">
                                                            <label class="control-label"> الدروس المتاحة</label>
                                                            <select name="lesson_id" id="cars"  class="form-control" required>
                                                                @foreach($lessons  as $lesson)

                                                                        <option value="{{$lesson->id}}">{{$lesson->name_ar}}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    @endif

                                                    @if ($Application->type_service ==3)
                                                            <div class="form-group">
                                                                <label class="control-label"> المجالات المتاحة</label>
                                                                <select name="lesson_master_id" id="cars"  class="form-control" required>
                                                                    @foreach($lessonmsters  as $lessonmster)

                                                                            <option value="{{$lessonmster->id}}">{{$lessonmster->name_ar}}</option>

                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                    @endif


                                                    @if ($Application->type_service == 4)

                                                        <div class="form-group">
                                                            <label class="control-label"> الدروس المتاحة</label>
                                                            <select name="field_ph_id" id="cars"  class="form-control" required>
                                                                @foreach($FieldPh  as $FieldP)

                                                                    <option value="{{$FieldP->id}}">{{$FieldP->name_ar}}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    @endif


                                                    @if ($Application->type_service == 5)

                                                        <div class="form-group">
                                                            <label class="control-label"> الدروس المتاحة</label>
                                                            <select name="field_srvice_id" id="cars"  class="form-control" required>
                                                                @foreach($FieldService  as $FieldServic)

                                                                    <option value="{{$FieldServic->id}}">{{$FieldServic->name_ar}}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    @endif

                                                </div>
                                                <div class="modal-footer">


                                                    <!--         <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">اعلاق</button>
                                                     -->

                                                    <button type="submit" class="btn btn-primary btn-lg"
                                                            id="delete_form">نعم
                                                    </button>


                                                </div>
                                            </div>   {!! Form::close() !!}
                                        </div>
                                    </div>

                                    <div class="modal fade" id="myModal{{ $Application->id }}" role="dialog">

                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <h4 class="modal-title w-100" id="myModalLabel">رسالة القبول أو
                                                        الرفض </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>

                                                </div>
                                                <div class="modal-body">


                                                    {!!  Form::open(['url' => ['admin/applicationteacher/send-mail',$Application->id] ,'method' => 'POST','files' => true]) !!}
                                                    <br>

                                                    <div class="form-group">

   <textarea id="w3review" name="answer" rows="4" cols="50" class="form-control" required style="float: right
">
     Hello!
     You are receiving this email because we send application to join to Safeer Mobtath .
     we inform you that your request has been accepted on 10-10-2015 and we would like to inform you that you are now part of the family of a Ambassador
                                                        </textarea>

                                                    </div>


                                                    <div class="margiv-top-10">

                                                        <button type="submit" class="btn btn-primary btn-lg"
                                                                id="delete_form" style="margin-top: 10px;">ارسال البريد
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

