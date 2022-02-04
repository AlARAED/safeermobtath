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


                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" style="float: right;"> المدن  </h3>

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
                                    <th>الدولة</th>
                                    <th>الحدث</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Cities  as $City)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$City->name_ar}}</td>
                                        <td>{{$City->name_en}}</td>
                                        <td>{{$City->Country()->name_ar}}</td>
                                        <td>
                                            <div class="btn-group">

                                                <a class="btn btn-primary" href="" data-toggle="modal"
                                                   data-target="#myModal{{ $City->id }}">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#centralModalSmedel{{ $City->id }}" style="background: red">
                                                    <i class="fa fa-trash" aria-hidden="true" ></i>
                                                </button>


                                            </div>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="centralModalSmedel{{ $City->id }}" tabindex="-1"
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
                                                    هل أنت متأكد من حذف هذا العنصر ؟
                                                </div>
                                                <div class="modal-footer">


                                                    <!--         <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">اعلاق</button>
                                                     -->
                                                    {!!  Form::open(['url' => ['admin/city/remove',$City->id],'id' => 'delete_form' ,'method' => 'POST','files' => true]) !!}

                                                    <button type="submit" class="btn btn-primary btn-lg"  id="delete_form">نعم</button>
                                                    {!! Form::close() !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="modal fade" id="myModal{{ $City->id }}" role="dialog">

                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    {{--<h4 class="modal-title w-100" id="myModalLabel">تعديل </h4>--}}
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>

                                                </div>
                                                <div class="modal-body">



                                                    {!!  Form::open(['url' => ['admin/city/update',$City->id] ,'method' => 'POST','files' => true]) !!}
                                                    <br>
                                                    <div class="form-group">
                                                        <label class="control-label">اسم  باللغةالعربية</label>
                                                        <input type="text" placeholder="" class="form-control" name="name_ar"  required  value="{{$City->name_ar}}"/> </div>

                                                    <div class="form-group">
                                                        <label class="control-label">اسم  باللغة الانجليزية</label>
                                                        <input type="text" placeholder="" class="form-control" name="name_en"  required  value="{{$City->name_en}}"/> </div>






                                                    <div class="form-group">
                                                        <label class="control-label"> الدولة</label>
                                                        <select name="country_id" id="cars"  class="form-control" required>
                                                            <option value="{{ $City->country_id }}">{{$City->Country()->name_ar}}</option>
                                                            @foreach($Countries  as $Country)
                                                                @if($City->country_id!= $Country->id)

                                                                <option value="{{$Country->id}}">{{$Country->name_ar}}</option>
                                                                @endif
                                                            @endforeach

                                                        </select>
                                                    </div>



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

                                                {{--<h4 class="modal-title w-100" id="myModalLabel">اضافة جديد </h4>--}}
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>

                                            </div>
                                            <div class="modal-body">



                                                {!!  Form::open(['url' => ['admin/city/store'],'method' => 'POST','files' => true]) !!}
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label">اسم  باللغةالعربية</label>
                                                    <input type="text" placeholder="" class="form-control" name="name_ar"  required  /> </div>

                                                <div class="form-group">
                                                    <label class="control-label">اسم  باللغة الانجليزية</label>
                                                    <input type="text" placeholder="" class="form-control" name="name_en"  required  /> </div>






                                                <div class="form-group">
                                                    <label class="control-label"> الدولة</label>
                                                    <select name="country_id" id="cars"  class="form-control" required>
                                                        @foreach($Countries  as $Country)
{{--                                                            @if($City->country_id!= $Country->id)--}}

                                                                <option value="{{$Country->id}}">{{$Country->name_ar}}</option>
{{--                                                            @endif--}}
                                                        @endforeach

                                                    </select>                                                    </div>



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
    <script src="{{asset('js/form.js')}}"></script>

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

