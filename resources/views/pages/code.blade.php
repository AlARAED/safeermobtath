@extends('layouts.app')
@section('title', __('Profile Complete'))
@section('content')
    <section class="profile_complete">
        <div class="container">
            <div class="profile_bg prof_head">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="verificationModalLabel">{{__('Verification Code')}}</h5>
                            </div>
                            <div class="modal-body">
                                <form >
                                    <div class="form-group">
                                        <div id="verif_code">
                                            <input type="text" maxLength="4" size="4" min="4" max="4" pattern="[0-9]{1}"  STYLE="    WIDTH: 259PX;
" name="verf_code"/>

                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">{{__('Confirm and complete the account creation as a teacher')}}</button>
                            </div>
                        </div>
                    </div>
                </div>




            <div class="scholarship">
                <button class="form-control m-auto btn_complete">{{__('Next')}}</button>
            </div>
        </div>
    </section>

@endsection
