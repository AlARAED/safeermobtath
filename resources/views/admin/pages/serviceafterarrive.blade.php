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
                                    <th> النوع </th>
                                    <th> الاسم </th>
                                    <th> الموبايل </th>
                                    <th> البريد الالكترونى </th>
                                    <th> عدد الأفراد </th>
                                    <th> الدولة الأم  </th>
                                    <th>  الدولة الهدف </th>
                                    <th>   أريد</th>
                                    <th>   الصورة</th>


                                    <th>الحدث</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!--not accept  #D6EAF8  -->
                                <!-- accept   #E8F8F5-->

                                @foreach($Insurances  as $Insurance)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>@if($Insurance->type==1)
التأمين
                                            @endif
                                            @if($Insurance->type==2)
                                                السكن
                                            @endif
                                            @if($Insurance->type==3)
                                                التأشيرة
                                            @endif
                                            @if($Insurance->type==4)
                                                الاستقبال فى المطار
                                            @endif
                                            @if($Insurance->type==5)
                                                خطوات فتح حساب بنكى
                                            @endif
                                        </td>
                                        <td>{{$Insurance->userName()->name}}</td>
                                        <td>{{$Insurance->phone}}</td>
                                        <td>{{$Insurance->email}}</td>

                                        <td> @if($Insurance->no_family != null)
                                            {{$Insurance->no_family}}
                                            @endif
                                       </td>

                                        <td>
                                            @if($Insurance->your_country != null)
                                                {{$Insurance->your_country}}
                                            @endif
                                        </td>
                                        <td>
                                            @if($Insurance->to_country != null)
                                                {{$Insurance->to_country}}
                                            @endif
                                               </td>
                                        <td>@if($Insurance->what_required==1)
                                                سكن معهد
                                            @endif
                                            @if($Insurance->what_required==2)
                                                عائلة
                                            @endif
                                            @if($Insurance->what_required==3)
                                                فندق
                                            @endif
                                         </td>
                                        <td>




                                            @if($Insurance->tecket_image!=null)
                                                <a href="{{ asset('uploads/' .$Insurance->tecket_image) }}" data-fancybox="img-attachment" >
                                                    <img src="{{asset('uploads/'.$Insurance->tecket_image)}}" style="width:200px;height:200px;">
                                         </a>
                                            @endif
                                             </td>


                                        {{--<td><?php if($Application->is_accept==0)--}}
                                                {{--echo "مقيد";--}}
                                            {{--else--}}
                                                {{--echo "قبول";--}}
                                            {{--?></td>--}}


                                        <td>
                                            <div class="btn-group">


                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#centralModalSmedel{{ $Insurance->id }}">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>

                                                </button>


                                            </div>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="centralModalSmedel{{ $Insurance->id }}" tabindex="-1"
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
                                                    {!!  Form::open(['url' => ['admin/insurance/remove',$Insurance->id],'id' => 'delete_form' ,'method' => 'POST','files' => true]) !!}

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

