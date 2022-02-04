@extends('layouts.app')
@section('title', __('Currency Exchange'))
@section('content')
    <section class="education cost_living">
        <div class="container">
            <ul class="nav_tab">
                <li>
                    <a href="/">{{__('Home')}}</a>
                    <i class="fas @if(App::getLocale() == 'en') fa-angle-right @else fa-angle-left @endif"></i>
                </li>
                <li>
                    <a href="#">{{__('Currency Exchange')}}</a>
                </li>
            </ul>
            <div class="col-lg-7 m-auto text-center col-custom">
                <div class="section-content mt-3">
                    <h2 class="title-1">{{__('Currency Exchange')}}</h2>
                </div>
            </div>

            <form class="mbtath_modal" id="currency-exchange-rate" name="Form">

                <div class="row std_form ">
                    <div class="col-md-10 m-auto">
                        <div class="m-auto d-flex d_block_mobile">
                            <div class="col-8 col-md-2 mb_3_mobile">
                                <label for="amount">{{__('Amount')}}</label>
                                <input type="number" id="amount" class="form-control" name="amount" required>
                            </div>

                            <div class="col-8 col-md-4 m-auto">
                                <label for="curr_from">{{__('From')}}</label>
                                <select name="from_currency" id="curr_from" class="form-control m-auto">
                                    <option value="0">{{__('Choose the currency')}}</option>
                                    <option value="1">{{__('USD')}}</option>
                                    <option value="2">{{__('SAR')}}</option>
                                </select>



                            </div>



                            <div class="col-md-1 m-auto text-center">
                                <i class="fas fa-exchange-alt"></i>
                            </div>
                            <div class="col-8 col-md-4 m-auto">
                                <label for="curr_from">{{__('To')}}</label>
                                <select name="to_currency"  id="curr_from2" class="form-control m-auto">
                                    <option value="0">{{__('Choose the currency')}}</option>
                                    <option value="1">{{__('USD')}}</option>
                                    <option value="2">{{__('SAR')}}</option>
                                </select>


                            </div>



                            <button  class="btn btn-primary mr-2" id="contact_form3" value="create" >done</button>


                            </button>
                        </div>

                    </div>

                </div>



                <div class="row">
                    <div class="col-md-9 m-auto">
                        <div class="curr_result">
                            <p id="from_cur">0 {{__('USD')}}</p>
                            <p class="m-2">=</p>
                            <p id="to_cur">0 {{__('SAR')}}</p>
                            {{--<p class="mt-4">{{__('Last updated')}}&nbsp;&nbsp;&nbsp; 8/11/2020 &nbsp;&nbsp;&nbsp;  6:20 {{__('PM')}}</p>--}}
                        </div>
                    </div>
                </div>


            </form>

        </div>



    </section>


@endsection

@section('js')
    <script>

        var rate=3.75;
        var cur_name1="";
        var cur_name2="";

        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#curr_from2').on('change',function () {
                var cur1=$('#curr_from').val();
                cur_name1=$('#curr_from option:selected').text();

                var cur2=$('#curr_from2').val();
                cur_name2=$('#curr_from2 option:selected').text();
                var amount=parseFloat($('#amount').val());
                if(Number.isNaN(amount))
                    amount=0;

                if(cur1!=0 && cur2!=0 && amount!=0){
                    exchange(cur2,cur1,amount);
                }
            });

            $('#curr_from').on('change',function () {
                var cur1=$('#curr_from').val();
                cur_name1=$('#curr_from option:selected').text();

                var cur2=$('#curr_from2').val();
                cur_name2=$('#curr_from2 option:selected').text();
                var amount=parseFloat($('#amount').val());
                if(Number.isNaN(amount))
                    amount=0;

                if(cur1!=0 && cur2!=0 && amount!=0){
                    exchange(cur2,cur1,amount);
                }
            });

            $('#amount').on('keyup',function () {
                var cur1=$('#curr_from').val();
                cur_name1=$('#curr_from option:selected').text();

                var cur2=$('#curr_from2').val();
                cur_name2=$('#curr_from2 option:selected').text();
                var amount=parseFloat($('#amount').val());
                if(Number.isNaN(amount))
                    amount=0;

                if(cur1!=0 && cur2!=0 && amount!=0){
                    exchange(cur2,cur1,amount);
                }
            });


        });
        function exchange( cur1, cur2,amount) {
            if(cur1==cur2){
                $('#from_cur').text(amount+" "+cur_name1);
                $('#to_cur').text(amount+" "+cur_name2);
            }

            else if(cur1==1 &&cur2 == 2) {
                $('#from_cur').text(amount+" "+cur_name1);
                $('#to_cur').text((amount / 3.75)+" "+cur_name2);

            }else if(cur1==2 &&cur2 == 1) {
                $('#from_cur').text(amount + " " + cur_name1);
                $('#to_cur').text((amount * 3.75) + " " + cur_name2);
            }
        }
    </script>
@stop
