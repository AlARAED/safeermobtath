@extends('layouts.app')
@section('title', __('Recharge'))
@section('content')
    <section class="recharge">
        <div class="container">
            <div class="profile_bg">
                <h3>{{__('Recharge')}}</h3>
                <div class="mb-5 mt-5 heig_255">
                    <label>
                        <input type="radio" name="payment" value="mastercard" checked>
                        <div class="checked_img">
                        <img src="{{asset('assets/images/icon/mastercard.svg')}}" alt="">
                        </div>
                    </label>

                    <label>
                        <input type="radio" name="payment" value="mada">
                        <div class="checked_img">
                        <img src="{{asset('assets/images/icon/mada.svg')}}" alt="">
                        </div>
                    </label>
                    <label>
                        <input type="radio" name="payment" value="stc-pay">
                        <div class="checked_img">
                        <img src="{{asset('assets/images/icon/stc-pay.svg')}}" alt="">
                        </div>
                    </label>
                    <label>
                        <input type="radio" name="payment" value="paypal">
                        <div class="checked_img">
                        <img src="{{asset('assets/images/icon/paypal.svg')}}" alt="">
                        </div>
                    </label>
                </div>
                <div class="recharge_form">
                <div class="row form-group mb-4">
                    <div class="col-12 col-md-3">
                        <label for="amount">{{__('Amount')}}</label>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="input-group">
                            <input type="text" id="amount" class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row form-group mb-4">
                    <div class="col-12 col-md-3">
                        <label for="name_card">{{__('Full name on the card')}}</label>
                    </div>
                    <div class="col-12 col-md-4">
                        <input type="text" id="name_card" class="form-control">
                    </div>
                </div>
                <div class="row form-group mb-4">
                    <div class="col-12 col-md-3">
                        <label for="card_info">{{__('Credit card information')}}</label>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                            </div>
                            <input type="text" id="card_info" placeholder="{{__('Card Number')}}                                  MM/ YY CVC" class="form-control pl-0">
                        </div>
                    </div>
                </div>
                    <div class="appoin_check text-left ml-3">
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">{{__('Save the card to facilitate future payments')}}</label>
                        </div>
                </div>
                    <div class="d-flex mt-5">
                    <h5 class="final_amount">{{__('The final amount after adding a procedural fee of 3% to the payment process')}}</h5>
                        <p class="amount_payment">0$</p>
                    </div>
            <div class="scholarship">
                <button class="form-control m-auto btn_complete">{{__('Recharge')}}</button>
            </div>
            </div>
        </div>
        </div>
    </section>

@endsection
