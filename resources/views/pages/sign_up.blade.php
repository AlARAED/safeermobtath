@extends('layouts.app')
@section('title', __('Sign Up'))
@section('content')
<section class="cost_living bg__safeer sign_up">
    <div class="container">
        <ul class="nav_tab mt-0">
            <li>
                <a href="/">{{__('Home')}}</a>
                <i class="fas @if(App::getLocale() == 'en') fa-angle-right @else fa-angle-left @endif"></i>
            </li>
            <li>
                <a href="#">{{__('Sign Up')}}</a>
            </li>
        </ul>
        <div class="col-lg-7 m-auto text-center col-custom">
            <div class="section-content mt-3">
                <h2 class="title-1">{{__('New Account')}}</h2>
            </div>
        </div>
        <div class="prof_img mb-5">
            <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="100" height="100" alt="">
        </div>




                    <form method="POST" action="{{ route('register') }}">
                        @csrf
        <div class="std_form">
            <div class="row form-group">
                <div class="col-4 col-md-2">
                    <label for="user_name">{{__('User Name')}}</label>
                </div>
                <div class="col-8 col-md-3">
                    <input type="text" id="user_name" class="form-control @error('name') is-invalid @enderror" name="name" required>
                     @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col-4 col-md-2">
                    <label for="email">{{__('Email')}}</label>
                </div>
                <div class="col-8 col-md-3">
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" required>
                      @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                </div>
            </div>
            <div class="row form-group">
                <div class="col-4 col-md-2">
                    <label for="country">{{__('Country')}}</label>
                </div>
                <div class="col-8 col-md-3">
                    <select name="country_mobtath_id" id="country_name" class="form-control" id="country-dropdown" required>
                        <option value="">{{__('Country Name')}}</option>

                        @foreach($Countries  as $Country)
                            <option value="{{$Country->id}}">{{$Country->name}}</option>
                        @endforeach


                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-4 col-md-2">
                    <label for="city">{{__('City')}}</label>
                </div>
                <div class="col-8 col-md-3">
                    <select name="city_mobtath_id" id="city_id" class="form-control"  id="city-dropdown"   required="">

                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-4 col-md-2">
                    <label for="password">{{__('Password')}}</label>
                </div>
                <div class="col-8 col-md-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                </div>
            </div>
            <div class="row form-group">
                <div class="col-4 col-md-2">
                    <label for="password_confirm">{{__('Password Confirm')}}</label>
                </div>
                <div class="col-8 col-md-3">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <div class="scholarship m-auto w_max_content">
                <button class="form-control btn_newsletter mt-5">{{__('Sign Up')}}</button>
            </div>



        </div>
                    </form>
        </div>
</section>


@endsection

@section('js')
    <script>



        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#country_name').change(function () {

                var country_id =  $(this).children("option:selected").val();


                $("#city_id").html('');
                $.ajax({
                    url:"{{route(app()->getLocale().'.get-cities-by-countrymobtath')}}",
                    type: "POST",
                    data: {
                        country_id: country_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType : 'json',
                    success: function(result){
                        $('#city_id').html('<option value="">@lang('mobath.CityName')</option>');
                        $.each(result.cities,function(key,value){
                            $("#city_id").append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                    }
                });
            });



        });






    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var elements = document.getElementsByTagName("INPUT");
            for (var i = 0; i < elements.length; i++) {
                elements[i].oninvalid = function(e) {
                    e.target.setCustomValidity("");
                    if (!e.target.validity.valid) {
                        e.target.setCustomValidity({{__("This field cannot be left blank")}});
                    }
                };
                elements[i].oninput = function(e) {
                    e.target.setCustomValidity("");
                };
            }
        })

    </script>

@stop
