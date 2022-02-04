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
                            <h3 class="card-title" style="float: right;"> الأسئلة  </h3>

                            <a class="btn btn-primary"   style="float: left;"    data-toggle="modal"
                               data-target="#myModaladd" >اضافة جديد<i
                                        class="fas fa-plus"></i></a>
                        </div>

                        <div class="card-body">
                            <table id="example" class="display nowrap  table table-bordered table-striped"
                                   style="width:100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th> الاسم</th>
                                    <th> السؤال </th>
                                    <th>الحدث</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!--not accept  #D6EAF8  -->
                                <!-- accept   #E8F8F5-->

                                @foreach($asks  as $ask)
                                    <tr style="
                                    <?php
                                    if($ask->is_publish == 1)
                                        echo  "background: #D6EAF8   ;"

                                    ?>"
                                    >
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$ask->userName()->name}}</td>
                                        <td> {!!$ask->question!!}   </td>




                                        <td>
                                            <div class="btn-group">

                                                <a class="btn btn-primary" href="{{url('admin/view_question/'.$ask->id)}}" >
                                                    <i class="fa fa-edit"></i>
                                                </a>




                                                {{--<a class="btn btn-primary" href="" data-toggle="modal"--}}
                                                   {{--data-target="#myModal{{ $ask->id }}">--}}
                                                    {{--<i class="fa fa-envelope" ></i>--}}
                                                {{--</a>--}}
                                                <a class="btn btn-primary" href="" data-toggle="modal"
                                                   data-target="#centralModalS{{ $ask->id }}" style="background: green;"  >


                                                    <i class="fa fa-check" aria-hidden="true"></i>

                                                </a>



                                                <a class="btn btn-primary" href="" data-toggle="modal"
                                                   data-target="#myModal{{ $ask->id }}">
                                                    <i class="fas fa-file-alt"></i>
                                                </a>





                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#centralModalSmedel{{ $ask->id }}" style="background: red;" >
                                                    <i class="fa fa-trash" aria-hidden="true" ></i>

                                                </button>


                                            </div>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="centralModalSmedel{{ $ask->id }}" tabindex="-1"
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
                                                    هل أنت متأكد من حذف هذا السؤال ؟
                                                </div>
                                                <div class="modal-footer">


                                                    <!--         <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">اعلاق</button>
                                                     -->
                                                    {!!  Form::open(['url' => ['admin/question/remove',$ask->id],'id' => 'delete_form' ,'method' => 'POST','files' => true]) !!}

                                                    <button type="submit" class="btn btn-primary btn-lg"  id="delete_form">نعم</button>
                                                    {!! Form::close() !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="centralModalS{{ $ask->id }}" tabindex="-1"
                                         role="dialog" aria-labelledby="myModalLabel"
                                         aria-hidden="true">

                                        <!-- Change class .modal-sm to change the size of the modal -->
                                        <div class="modal-dialog modal-sm" role="document">


                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title w-100" id="myModalLabel">نشر  </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    هل أنت متأكد من نشر  السؤال؟
                                                </div>
                                                <div class="modal-footer">


                                                    <!--         <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">اعلاق</button>
                                                     -->
                                                    {!!  Form::open(['url' => ['admin/question/update',$ask->id] ,'method' => 'POST','files' => true]) !!}
<input type="hidden" value="1" name="is_publish">
                                                    <button type="submit" class="btn btn-primary btn-lg"  id="delete_form">نعم</button>
                                                    {!! Form::close() !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="myModal{{ $ask->id }}" role="dialog">

                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <h4 class="modal-title w-100" id="myModalLabel">تعديل السؤال </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>

                                                </div>
                                                <div class="modal-body">



                                                    {!!  Form::open(['url' => ['admin/question/update',$ask->id] ,'method' => 'POST','files' => true]) !!}
                                                    <br>
                                                    <div class="form-group">
                                                        <textarea id="w3review" name="question" rows="4" cols="50"   class="form-control" required style="float: right
">
                                                            {{$ask->question}}
                                                            </textarea>
                                                        <br>






                                                    <div class="margiv-top-10">
                                                        <button type="submit" class="btn btn-primary btn-lg"  id="delete_form">حفظ</button>

                                                    </div>

                                                    {!! Form::close() !!}
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    </div>


                                    <div class="modal fade" id="myModaladd" role="dialog">

                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <h4 class="modal-title w-100" id="myModalLabel"> اضافة سؤال </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>

                                                </div>
                                                <div class="modal-body">



                                                    {!!  Form::open(['url' => ['admin/question/storequestion'] ,'method' => 'POST','files' => true]) !!}
                                                    <br>
                                                    <div class="form-group">
                                                        <textarea id="w3review" name="question" rows="4" cols="50"   class="form-control" required style="float: right
">
                                                            </textarea>
                                                        <br>






                                                        <div class="margiv-top-10">
                                                            <button type="submit" class="btn btn-primary btn-lg"  id="delete_form">حفظ</button>

                                                        </div>

                                                        {!! Form::close() !!}
                                                    </div>

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

