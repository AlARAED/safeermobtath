@extends('layouts.app')
@section('title', __('Contact Us'))
@section('content')
    <div class="bg__safeer">
        <div class="col-lg-5 m-auto text-center col-custom">
            <div class="section-content mb-5">
                <h2 class="title-1">{{__('Contact Us')}}</h2>
            </div>
        </div>
        <section class="contact_safeer">
        <div class="container">
            <form method="POST" action="{{route(app()->getLocale().'.send_contact_us')}}"  enctype="multipart/form-data">
                @csrf
{{--            <div class="form-group">--}}
{{--            <label for="contact_about">{{__('Contact us about')}}</label>--}}
{{--            <select name="" id="contact_about" class="form-control">--}}
{{--              <option value="">{{__('Choose a section of the site')}}</option>--}}
{{--            </select>--}}
{{--            </div>--}}

                <div class="form-group">
                    <label for="u_name">{{__('Your Name')}}</label>
                    <input type="text" id="u_name" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label for="mail">{{__('Your Mail')}}</label>
                    <input type="email" id="mail" class="form-control" name="email" required>
                </div>

                <div class="form-group">
                <label for="address">{{__('Address')}}</label>
                <input type="text" id="address" class="form-control" name="address" required>
            </div>
                <div class="form-group">
                    <label for="phone">{{__('Your Phone')}}</label>
                    <input type="text" id="phone" class="form-control" name="tel" required>
                </div>

            <div class="form-group">
                <label for="mobile">{{__('Your Mobile')}}</label>
                <input type="text" id="mobile" class="form-control" name="mobile" required>
            </div>
            <div class="form-group">
                <label for="message">{{__('Write your message here')}}</label>
                <div>
                <textarea class="form-control" id="message" rows="8"  name="message_content" required></textarea>
                </div>
            </div>
            <div class="scholarship">
                <button class="form-control btn_complete">{{__('Send')}}</button>
            </div>
            </form>

        </div>
    </section>
    </div>
@endsection
