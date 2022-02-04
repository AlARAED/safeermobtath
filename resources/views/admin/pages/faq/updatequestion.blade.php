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
                            <h3 class="card-title" style="float: right">السؤال </h3>
                        </div>

                        <div class="card-body">

                            <section class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Default box -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title" style="float: right">{!! $ask->question !!}</h3>

                                                    <div class="card-tools" style="float: left">
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                                            <i class="fas fa-minus" style="color: black;"></i></button>
                                                        {{--<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">--}}
                                                            {{--<i class="fas fa-times"></i></button>--}}
                                                    </div>
                                                </div>
                                                <div class="card-body">
<div class="skill_ skills__">

    <p> {{$ask->answer}} </p>
</div>
                                                      <!--here answer-->
                                                </div>
                                                <!-- /.card-body -->
                                                <div class="card-footer ">
                                                <form method="POST" id="contact_form" action=""  >


                                                    <input type="text" class="col-12" style="border-radius: 8px;height: 100px;"  name="answer" id="quest">

                                                </form>
                                                    <br><br>
                                                <button class="btn btn-primary " style="float: right;border-radius: 12px;" id="cc" >ارسال</button>
                                                </div>
                                                <!-- /.card-footer-->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--here-->
                        </div>




                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </section>

@endsection
@section('js')

    <script>
        $(document).ready(function () {
            //alert('as');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#cc').on('click',function () {
                event.preventDefault();
                $.ajax({
                    type: 'post',
                    url: '{{url('admin/add_answer/'.$ask->id)}}',
                    data: $('#contact_form').serialize(),
                    success: function (data) {
                        if (status == 200) {
                            alert('ttt');
                        } else {

                            $("input:text").val("");
                            $('.skill_.skills__').html("");
                            $('.skill_.skills__').append('<p>'+data.answer +'</p>')

                        }

                    }
                });
            });
        });
    </script>
@stop

