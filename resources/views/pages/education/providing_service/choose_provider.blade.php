@extends('layouts.app')
@section('title', __('Choose Service Provider'))
@section('content')
    <section class="profile_complete choose_teacher choose_provider">
        <div class="container">
            <div class="profile_bg prof_head">
                <div class="messages_profile">
                    <div class="msg_prof_bg mb-3">
                        <div class="d-flex mb-4">
                        <h5>{{__('New messages')}}</h5><p>0</p>
                        </div>
                        <div class="d-flex mb-4">
                            <h5>{{__('Import messages')}}</h5><p>22</p>
                        </div>
                        <div class="d-flex">
                            <h5>{{__('Export messages')}}</h5><p>10</p>
                        </div>
                    </div>
                    <div class="msg_prof_bg">
                        <div class="d-flex mb-4">
                            <h5>{{__('Activities')}}</h5><p>0</p>
                        </div>
                        <div class="d-flex">
                            <h5>{{__('Financial transactions')}}</h5><p>22</p>
                        </div>
                    </div>
                </div>
                <div class="prof_img">
                    <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="100" height="100" alt="">
                </div>
                <div class="profile_username d-flex">
                    <img src="{{asset('assets/images/icon/country.svg')}}" alt="">
                    <h5>{{__('Adam Ali')}}</h5>
                </div>
                <div class="profile-rating mb-3">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="row prof_content">
                    <div class="col-10 col-md-10 m-auto">
                        <select name="" class="form-control">
                            <option value="">{{__('Writing research papers')}}</option>
                        </select>
                    </div>
                </div>
                <div class="scholarship">
                    <button class="form-control m-auto btn_complete" id="search_teacher">{{__('Search of service provider')}}</button>
                </div>
            </div>
            <div class="search_teacher d-none">
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
                                    <h5 class="s_emp_info">{{__('Writing research papers')}}</h5>
                                </div>

                            </div>
                            <div class="col-12 col-md-6 d-flex float-right">
                                <button type="submit" class="form-control btn_newsletter ml-auto mr-0">{{__('Correspondence')}}</button>
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
                                <h5 class="s_emp_info">{{__('Writing research papers')}}</h5>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 d-flex float-right">
                            <button type="submit" class="form-control btn_newsletter ml-auto mr-0">{{__('Correspondence')}}</button>
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
                                <h5 class="s_emp_info">{{__('Writing research papers')}}</h5>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 d-flex float-right">
                            <button type="submit" class="form-control btn_newsletter ml-auto mr-0">{{__('Correspondence')}}</button>
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
                                <h5 class="s_emp_info">{{__('Writing research papers')}}</h5>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 d-flex float-right">
                            <button type="submit" class="form-control btn_newsletter ml-auto mr-0">{{__('Correspondence')}}</button>
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
                                <h5 class="s_emp_info">{{__('Writing research papers')}}</h5>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 d-flex float-right">
                            <button type="submit" class="form-control btn_newsletter ml-auto mr-0">{{__('Correspondence')}}</button>
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
                                <h5 class="s_emp_info">{{__('Writing research papers')}}</h5>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 d-flex float-right">
                            <button type="submit" class="form-control btn_newsletter ml-auto mr-0">{{__('Correspondence')}}</button>
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
                                <h5 class="s_emp_info">{{__('Writing research papers')}}</h5>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 d-flex float-right">
                            <button type="submit" class="form-control btn_newsletter ml-auto mr-0">{{__('Correspondence')}}</button>
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
