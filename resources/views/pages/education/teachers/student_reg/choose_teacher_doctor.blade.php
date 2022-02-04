@extends('layouts.app')
@section('title', __('Choose Teacher'))
@section('content')
    <section class="profile_complete choose_teacher">
        <div class="container">
            <div class="search_teacher">
                <div class="profile_bg">
                    <div class="appoin_check d-flex">
                        <p class="s_rating mr-5">{{__('Search by rating')}}</p>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                            <label class="custom-control-label" for="customCheck5">{{__('Most Employed')}}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                            <label class="custom-control-label" for="customCheck6">{{__('Online Now')}}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                            <label class="custom-control-label" for="customCheck7">{{__('Transact with them previously')}}</label>
                        </div>
                        <div class="custom-control custom-checkbox pr-0">
                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                            <label class="custom-control-label" for="customCheck8">{{__('Top rated')}}</label>
                        </div>
                    </div>
                </div>
                <div class="profile_bg">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="prof_img">
                                <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="100" height="100" alt="">
                            </div>
                            <div class="profile-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="text-left">
                                <div class="d-flex">
                                    <h5 class="s_emp_info mb-2">{{__('Employment rate')}}</h5><p>100%</p>
                                </div>
                                <h5 class="s_emp_info">{{__('English teacher')}}</h5>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 d-flex float-right">
                            <button type="submit" class="form-control btn_newsletter ml-auto mr-0">{{__('Book a lesson')}}</button>
                            <div class="s_emp_icon">
                                <i class="fas fa-heart m_0_50"></i>
                                <i class="fas fa-flag"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="profile_bg">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="prof_img">
                                <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="100" height="100" alt="">
                            </div>
                            <div class="profile-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="text-left">
                                <div class="d-flex">
                                    <h5 class="s_emp_info mb-2">{{__('Employment rate')}}</h5><p>100%</p>
                                </div>
                                <h5 class="s_emp_info">{{__('English teacher')}}</h5>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 d-flex float-right">
                            <button type="submit" class="form-control btn_newsletter ml-auto mr-0">{{__('Book a lesson')}}</button>
                            <div class="s_emp_icon">
                                <i class="far fa-heart m_0_50"></i>
                                <i class="fas fa-flag"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="profile_bg">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="prof_img">
                                <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="100" height="100" alt="">
                            </div>
                            <div class="profile-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="text-left">
                                <div class="d-flex">
                                    <h5 class="s_emp_info mb-2">{{__('Employment rate')}}</h5><p>100%</p>
                                </div>
                                <h5 class="s_emp_info">{{__('English teacher')}}</h5>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 d-flex float-right">
                            <button type="submit" class="form-control btn_newsletter ml-auto mr-0">{{__('Book a lesson')}}</button>
                            <div class="s_emp_icon">
                                <i class="far fa-heart m_0_50"></i>
                                <i class="fas fa-flag"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="profile_bg">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="prof_img">
                                <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="100" height="100" alt="">
                            </div>
                            <div class="profile-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="text-left">
                                <div class="d-flex">
                                    <h5 class="s_emp_info mb-2">{{__('Employment rate')}}</h5><p>100%</p>
                                </div>
                                <h5 class="s_emp_info">{{__('English teacher')}}</h5>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 d-flex float-right">
                            <button type="submit" class="form-control btn_newsletter ml-auto mr-0">{{__('Book a lesson')}}</button>
                            <div class="s_emp_icon">
                                <i class="fas fa-heart m_0_50"></i>
                                <i class="fas fa-flag"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="profile_bg">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="prof_img">
                                <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="100" height="100" alt="">
                            </div>
                            <div class="profile-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="text-left">
                                <div class="d-flex">
                                    <h5 class="s_emp_info mb-2">{{__('Employment rate')}}</h5><p>100%</p>
                                </div>
                                <h5 class="s_emp_info">{{__('English teacher')}}</h5>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 d-flex float-right">
                            <button type="submit" class="form-control btn_newsletter ml-auto mr-0">{{__('Book a lesson')}}</button>
                            <div class="s_emp_icon">
                                <i class="fas fa-heart m_0_50"></i>
                                <i class="fas fa-flag"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="profile_bg">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="prof_img">
                                <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="100" height="100" alt="">
                            </div>
                            <div class="profile-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="text-left">
                                <div class="d-flex">
                                    <h5 class="s_emp_info mb-2">{{__('Employment rate')}}</h5><p>100%</p>
                                </div>
                                <h5 class="s_emp_info">{{__('English teacher')}}</h5>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 d-flex float-right">
                            <button type="submit" class="form-control btn_newsletter ml-auto mr-0">{{__('Book a lesson')}}</button>
                            <div class="s_emp_icon">
                                <i class="fas fa-heart m_0_50"></i>
                                <i class="fas fa-flag"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="profile_bg">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="prof_img">
                                <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="100" height="100" alt="">
                            </div>
                            <div class="profile-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="text-left">
                                <div class="d-flex">
                                    <h5 class="s_emp_info mb-2">{{__('Employment rate')}}</h5><p>100%</p>
                                </div>
                                <h5 class="s_emp_info">{{__('English teacher')}}</h5>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 d-flex float-right">
                            <button type="submit" class="form-control btn_newsletter ml-auto mr-0">{{__('Book a lesson')}}</button>
                            <div class="s_emp_icon">
                                <i class="fas fa-heart m_0_50"></i>
                                <i class="fas fa-flag"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

@endsection
@section('js')
    <script>
        $('#search_teacher').click(function() {
            $('.search_teacher').removeClass('d-none');

        });
    </script>
@stop
