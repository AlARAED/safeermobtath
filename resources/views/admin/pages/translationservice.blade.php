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
                                    <th> البريد الالكترونى  </th>
                                    <th> نوع الملف  </th>
                                    <th> اللغة  الاصل  </th>
                                    <th> اللغة الهدف   </th>
                                    <th>  نوع الخدمة </th>
                                    {{--<th>  تفاصيل   </th>--}}
                                    <th>   الملف </th>


                                    <th>الحدث</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!--not accept  #D6EAF8  -->
                                <!-- accept   #E8F8F5-->

                                @foreach($TranslationServices  as $TranslationServic)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$TranslationServic->email}} </td>
                                        <td>
                                            <?php
                                            if($TranslationServic->type_file==1)
                                                echo "legal";
                                            elseif($TranslationServic->type_file==2)
                                                echo "geometric";
                                             elseif($TranslationServic->type_file==3)
                                                 echo "medical";
                                            elseif($TranslationServic->type_file==4)
                                                echo "Technical";
                                            elseif($TranslationServic->type_file==5)
                                                echo "academic";
                                            elseif($TranslationServic->type_file==6)
                                                echo "generally";

                                            ?>

                                        </td>
                                        <td>
                                        <?php
                                        if($TranslationServic->Original_language==1)
                                            echo "arabic";
                                        elseif($TranslationServic->Original_language==2)
                                            echo "English";

                                        ?>
                                        </td>
                                        <td>
                                            <?php
                                            if($TranslationServic->Target_language==1)
                                                echo "arabic";
                                            elseif($TranslationServic->Target_language==2)
                                                echo "English";

                                            ?>
                                        </td>


                                        <td>
                                            <?php
                                            if($TranslationServic->type_service=='translation')
                                                echo "translation";
                                            elseif($TranslationServic->type_service=='reformulate')
                                                echo "reformulate";
                                            elseif($TranslationServic->type_service=='review')
                                                echo "review";

                                            ?>
                                        </td>
                                        {{--<td>{{$TranslationServic->deatils}}--}}
                                        {{--</td>--}}

                                        <td><a href="{{asset('uploads/'.$TranslationServic->file)}}" target="_blank">
                                                Open File
                                              </a>
                                        </td>







                                        <td>
                                            <div class="btn-group">


                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#centralModalSmedel{{ $TranslationServic->id }}">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>

                                                </button>


                                            </div>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="centralModalSmedel{{ $TranslationServic->id }}" tabindex="-1"
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
                                                    {!!  Form::open(['url' => ['admin/translation/remove',$TranslationServic->id],'id' => 'delete_form' ,'method' => 'POST','files' => true]) !!}

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

