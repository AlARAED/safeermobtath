<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


////
//Route::get('/trst', function () {
//    $details = [
//        'MESSAGE' => 'طلب التحاق جديد',
//        'type'=>'NewApplication',
//
//    ];
//
//    event(new \App\Events\NewApplication($details));
//    return 'dfdsfds';
//});


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'IsAdmin']], function () {
    Route::get('/index', 'AdminController@index')->name('admin.index');

    Route::get('/country', 'CountryController@index');
    Route::POST('country/store', 'CountryController@store');
    Route::POST('/country/remove/{id}', 'CountryController@destroy');
    Route::POST('/country/update/{id}', 'CountryController@update');

    Route::get('/category', 'CategoryController@index');
    Route::POST('/store', 'CategoryController@store');
    Route::POST('/category/remove/{id}', 'CategoryController@destroy');
    Route::POST('/category/update/{id}', 'CategoryController@update');

    Route::get('/city', 'CityController@index');
    Route::POST('/city/store', 'CityController@store');
    Route::POST('/city/remove/{id}', 'CityController@destroy');
    Route::POST('/city/update/{id}', 'CityController@update');


    Route::get('/degree', 'DegreeController@index');
    Route::POST('/degree/store', 'DegreeController@store');
    Route::POST('/degree/remove/{id}', 'DegreeController@destroy');
    Route::POST('/degree/update/{id}', 'DegreeController@update');


    Route::get('/university', 'UniversityController@index');
    Route::POST('/university/store', 'UniversityController@store');
    Route::POST('/university/remove/{id}', 'UniversityController@destroy');
    Route::POST('/university/update/{id}', 'UniversityController@update');


    Route::get('/application', 'StudentApplicationController@indexpanel');
    Route::get('/view_application/{id}', 'StudentApplicationController@show_update');
    Route::POST('/application/update/{id}', 'StudentApplicationController@update');

    Route::POST('/application/remove/{id}', 'StudentApplicationController@destroy');
    Route::POST('/application/send-mail/{id}', 'StudentApplicationController@Sendmail');
    Route::POST('/application/acceptance/{id}', 'StudentApplicationController@acceptance');
    //contact us in dashboard
    Route::get('/contactus', 'ContactUsController@indexpanel');
    Route::POST('/contactus/send-mail/{id}', 'ContactUsController@Sendmail');
    Route::POST('/contactus/remove/{id}', 'ContactUsController@destroy');

    //collage
    Route::get('/collage', 'CollageController@indexpanel');
    Route::get('/collage/store', 'CollageController@addpanel');
    Route::POST('/collage/store', 'CollageController@store')->name('admin.collage.store');

    Route::get('/view_collage/{id}', 'CollageController@edit');
    Route::POST('/collage/update/{id}', 'CollageController@update');
    Route::POST('/collage/remove/{id}', 'CollageController@destroy');
    //school

    Route::get('/school', 'SchoolController@indexpanel');
    Route::get('/school/store', 'SchoolController@addpanel');
    Route::POST('/school/store', 'SchoolController@store')->name('admin.school.store');
    Route::get('/view_school/{id}', 'SchoolController@edit');
    Route::POST('/school/update/{id}', 'SchoolController@update');
    Route::POST('/school/remove/{id}', 'SchoolController@destroy');

    //nurse

    Route::get('/nurse', 'NurseController@indexpanel');
    Route::get('/nurse/store', 'NurseController@addpanel');
    Route::POST('/nurse/store', 'NurseController@store')->name('admin.nurse.store');
    Route::get('/view_nurse/{id}', 'NurseController@edit');
    Route::POST('/nurse/update/{id}', 'NurseController@update');
    Route::POST('/nurse/remove/{id}', 'NurseController@destroy');

    //theme
    Route::get('/Theme', 'ThemeController@indexpanel');
    Route::get('/Theme/store', 'ThemeController@addpanel');
    Route::POST('/Theme/store', 'ThemeController@store')->name('admin.Theme.store');

    Route::get('/view_Theme/{id}', 'ThemeController@edit');
    Route::POST('/Theme/update/{id}', 'ThemeController@update');
    Route::POST('/Theme/remove/{id}', 'ThemeController@destroy');
    Route::get('/service_after_arrive', 'InsuranceController@indexpanel');





//service after arrive
    Route::get('/Insurance', 'InsuranceController@indexpanel');
    Route::POST('/insurance/remove/{id}', 'InsuranceController@destroy');


    //faq
    Route::get('/Faq', 'AskController@indexpanel');
    Route::get('/view_question/{id}', 'AskController@edit');
    Route::POST('/add_answer/{id}', 'AskController@add_answer')->name('add_answer');
    Route::POST('/question/update/{id}', 'AskController@update')->name('question.update');
    Route::POST('/question/remove/{id}', 'AskController@destroy')->name('question.remove');
    Route::POST('/question/storequestion', 'AskController@storequestion')->name('question.storequestion');

    //evaluation

    Route::get('/evaluation', 'EvaluationController@indexpanel');
    Route::get('/view_question/{id}', 'AskController@edit');
    Route::POST('/add_answer/{id}', 'AskController@add_answer')->name('add_answer');
    Route::POST('/question/update/{id}', 'AskController@update')->name('question.update');
    Route::POST('/question/remove/{id}', 'AskController@destroy')->name('question.remove');
    Route::POST('/question/storequestion', 'AskController@storequestion')->name('question.storequestion');

    //application teacher

    Route::get('/applicationteacher', 'TeacherDepartmentController@applicationteacher');
    Route::get('/view_applicationeacher/{id}', 'TeacherDepartmentController@view_applicationeacher');
    Route::POST('/applicationteacher/remove/{id}', 'TeacherDepartmentController@destroy');
    Route::POST('/applicationteacher/send-mail/{id}', 'TeacherDepartmentController@Sendmail');
    Route::POST('/applicationteacher/acceptance/{id}', 'TeacherDepartmentController@acceptance');


    //lesson
    Route::get('/Lesson', 'LessonController@index');
    Route::POST('/storelesson', 'LessonController@store');
    Route::POST('/Lesson/remove/{id}', 'LessonController@destroy');
    Route::POST('/Lesson/update/{id}', 'LessonController@update');




    //lesson master
    Route::get('/Lessonmaster', 'LessonMasterController@index');
    Route::POST('/storelessonmaster', 'LessonMasterController@store');
    Route::POST('/Lessonmaster/remove/{id}', 'LessonMasterController@destroy');
    Route::POST('/Lessonmaster/update/{id}', 'LessonMasterController@update');



    //field ph
    Route::get('/field_Ph', 'FieldPhController@index');
    Route::POST('/field_Ph', 'FieldPhController@store');
    Route::POST('/field_Ph/remove/{id}', 'FieldPhController@destroy');
    Route::POST('/field_Ph/update/{id}', 'FieldPhController@update');




    //translation
    //service after arrive
    Route::get('/translation', 'TranslationServicesController@indexpanel');
    Route::POST('/translation/remove/{id}', 'TranslationServicesController@destroy');

    Route::get('/allnotification', function () {
        return view('admin.pages.allnotification');
    })->name('allnotification');

    Route::get('/myaccount', 'AdminController@myaccount');

    Route::get('/allnotification', function () {
        return view('admin.pages.allnotification');
    })->name('allnotification');











});

Route::get('/notification/get', 'StudentApplicationController@get');



Route::get('/', function () {
    $locale = app()->getLocale();
    return redirect('/' . $locale);
})->name('home');
Route::post('/chat', 'ChatController@send')->name('chat');

Localizater::group(function () {


    Route::get('/', 'HomeController@inde')->name('home');
    Route::get('/sign_up', 'HomeController@sign_up')->name('sign_up');
    Route::post('get-cities-by-country', 'StudentApplicationController@getCity')->name('get_cities_by_country');
    Route::post('get-cities-by-countrymobtath', 'StudentApplicationController@getCitymobath')->name('get-cities-by-countrymobtath');
    Route::get('/register','HomeController@sign_up');

    Route::post('/send_students_admissions', 'StudentApplicationController@store')->name('send_students_admissions');
    Route::get('/students_admissions', 'StudentApplicationController@index')->name('students_admissions');

    Route::get('/contact_us', 'ContactUsController@index')->name('contact_us');
    Route::POST('/send_contact_us', 'ContactUsController@store')->name('send_contact_us');
    Route::get('/submission_completed', 'StudentApplicationController@submission_completed')->name('submission_completed');

    Route::get('/international_universities','CollageController@index')->name('international_universities');
    Route::get('/university_details/{id}','CollageController@university_details')->name('university_details');
    Route::get('load_collages/{id}', 'CollageController@load_collages')->name('load_collages');
    Route::get('load_collages', 'CollageController@load_collages')->name('load_collages2');


    //school
    Route::get('/international_schools','SchoolController@index')->name('international_schools');
    Route::get('/school_details/{id}','SchoolController@school_details')->name('school_details');
    Route::get('load_collages/{id}', 'SchoolController@load_collages')->name('load_collages');

    //end school


    //nursery
    Route::get('/international_nurseries','NurseController@index')->name('international_nurseries');
    Route::get('/nursery_details/{id}','NurseController@nursery_details')->name('nursery_details');
    Route::get('load_collages/{id}', 'SchoolController@load_collages')->name('load_collages');

    //translation
    Route::GET('/translate_service', 'TranslationServicesController@index')->name('translate_service');
    Route::post('/translate_service', 'TranslationServicesController@store')->name('translate_service');



    Route::group(['middleware' => ['verified','auth']], function () {



        //end nursery
        Route::get('/teachers_reg', 'TeacherDepartmentController@index')->name('teachers_reg');
        Route::get('/code/{id}', 'TeacherDepartmentController@code');


        Route::post('/teacher_profile', 'TeacherDepartmentController@store')->name('teacher_profile');

        Route::GET('/teacher_profile_complete/{teacher}', 'TeacherDepartmentController@teacher_profile_complete')->name('teacher_profile_complete');
        Route::post('/skill/{id}', 'SkillController@store')->name('skill');
        Route::post('/skill/update/{id}', 'SkillController@update')->name('skill_update');
        Route::post('/skill/remove/{id}', 'SkillController@destroy')->name('skill_remove');

        Route::GET('/teacher_language', 'TeacherDepartmentController@teacher_language')->name('teacher_language');
        Route::post('/teacher_lang', 'TeacherDepartmentController@store')->name('teacher_lang');
        Route::GET('/teacher_language_second/{teacher}', 'TeacherDepartmentController@teacher_language_second')->name('teacher_language_second');

        Route::post('/Education/update/{id}', 'EducationController@update')->name('Education_update');
        Route::post('/Education/remove/{id}', 'EducationController@destroy')->name('Education_remove');
        Route::post('/Education/{id}', 'EducationController@store')->name('Education');


        Route::post('/Experience/update/{id}', 'ExperienceController@update')->name('Experience_update');
        Route::post('/Experience/remove/{id}', 'ExperienceController@destroy')->name('Experience_remove');
        Route::post('/Experience/{id}', 'ExperienceController@store')->name('Experience');


        Route::post('/saveteacher/{id}', 'TeacherDepartmentController@saveteacher')->name('saveteacher');
        Route::post('/saveteacher/{id}', 'TeacherDepartmentController@saveteacher')->name('saveteacher');
        Route::post('/savedate', 'TeacherDepartmentController@savedate')->name('savedate');
        Route::post('/time/remove/{id}', 'TeacherDepartmentController@destroyTime')->name('time_remove');
        Route::post('/time/update/{id}', 'TeacherDepartmentController@updatetime')->name('updatedate');


        Route::get('/teacher_calender/{id}', 'TeacherDepartmentController@teacher_calender')->name('teacher_calender');
        Route::get('/teacher_teacher_profile/{id}', 'TeacherDepartmentController@teacher_teacher_profile')->name('teacher_teacher_profile');
        Route::get('/teacher_End_profile/{id}', 'TeacherDepartmentController@teacher_End_profile')->name('teacher_End_profile');

        Route::get('/student_profile_complete/{id}', 'TeacherDepartmentController@student_profile_complete')->name('student_profile_complete');
        Route::post('/savestudent/{id}', 'TeacherDepartmentController@savestudent')->name('savestudent');

        Route::get('/student_choose_teacher/{id}', 'TeacherDepartmentController@student_choose_teacher')->name('student_choose_teacher');
        Route::post('/save_student_complete/{id}', 'TeacherDepartmentController@save_student_complete')->name('save_student_complete');
        Route::get('/chooseteacherstudent/{id}', 'TeacherDepartmentController@chooseteacherstudent')->name('chooseteacherstudent');
        Route::get('/research_correspondence_teacher/{id}/{teacher}', 'TeacherDepartmentController@research_correspondence_teacher')->name('research_correspondence_teacher');

        Route::get('/insurance_service', 'InsuranceController@index')->name('insurance_service');
        Route::post('insurance', 'InsuranceController@store')->name('insurance');
        Route::get('/residence_service', 'InsuranceController@residence_service')->name('residence_service');
        Route::get('/visa_service', 'InsuranceController@visa_service')->name('visa_service');
        Route::get('/reception_airport_service', 'InsuranceController@reception_airport_service')->name('reception_airport_service');
        Route::get('/bank_account_service', 'InsuranceController@bank_account_service')->name('bank_account_service');
        Route::get('/cost_living', 'ThemeController@cost_living')->name('cost_living');
        Route::get('/cost_living/{city}', 'ThemeController@cost_living_city')->name('cost_living.city');
        Route::get('/currency_exchange', 'CurrencyController@index')->name('currency_exchange');
        //faq
        Route::get('/ask_safeer', 'AskController@index')->name('ask_safeer');
        Route::post('/ask_safeer', 'AskController@store')->name('ask_safeer');
        Route::get('/myquestion', 'AskController@myquestion')->name('myquestion');

       //teacher lesson
        Route::GET('/teacher_lesson', 'TeacherDepartmentController@teacher_lesson')->name('teacher_lesson');
        Route::GET('/teacher_master', 'TeacherDepartmentController@teacher_master')->name('teacher_master');

        Route::GET('/student_choose_teacher_english', 'TeacherDepartmentController@student_choose_teacher_english')->name('student_choose_teacher_english');
        Route::GET('/student_choose_teacher_French', 'TeacherDepartmentController@student_choose_teacher_French')->name('student_choose_teacher_French');
        Route::GET('/student_choose_teacher_lesson', 'TeacherDepartmentController@student_choose_teacher_lesson')->name('student_choose_teacher_lesson');
        Route::GET('/student_choose_teacher_master', 'TeacherDepartmentController@student_choose_teacher_master')->name('student_choose_teacher_master');
        Route::GET('/message_teacher/{id}', 'TeacherDepartmentController@message_teacher')->name('message_teacher');

        Route::POST('/message_teacher/{id}', 'TeacherDepartmentController@send_message_teacher')->name('message_teacher_MESS');
        Route::get('/request_page/{id}', 'ReservationRequestController@show')->name('request_page');
        Route::post('/send_message/{id}', 'ReservationRequestController@send_message')->name('send_message');


        Route::GET('/teacher_doctora', 'TeacherDepartmentController@teacher_doctora')->name('teacher_doctora');
        Route::post('/teacher_doctor', 'TeacherDepartmentController@store')->name('teacher_doctor');


        Route::GET('/service_introducing', 'TeacherDepartmentController@service_introducing')->name('service_introducing');
        Route::GET('/rate_teacher', 'EvaluationController@rate_teacher')->name('rate_teacher');


//        Route::get('/research_correspondence_teacher_3', function () {
//            return view('pages.education.teachers.research_plan.correspondence_teacher_3');
//        })->name('research_correspondence_teacher_3');
//
//



        Route::get('/student_teacher_profile', function () {
            return view('pages.education.teachers.student_reg.teacher_profile');
        })->name('student_teacher_profile');

        Route::get('/student_set_appointments', function () {
            return view('pages.educatiofvn.teachers.student_reg.set_appointments');
        })->name('student_set_appointments');

//        Route::get('/student_recharge', function () {
//            return view('pages.education.teachers.student_reg.recharge');
//        })->name('student_recharge');

        Route::get('/book_success', function () {
            return view('pages.education.teachers.student_reg.book_success');
        })->name('book_success');

        Route::get('/correspondence_teacher', function () {
            return view('pages.education.teachers.student_reg.correspondence_teacher');
        })->name('correspondence_teacher');

        Route::get('/correspondence_teacher_2', function () {
            return view('pages.education.teachers.student_reg.correspondence_teacher_2');
        })->name('correspondence_teacher_2');



        //    research_plan

        Route::get('/research_correspondence_teacher_2', function () {
            return view('pages.education.teachers.research_plan.correspondence_teacher_2');
        })->name('research_correspondence_teacher_2');





        Route::get('/research_recharge', function () {
            return view('pages.education.teachers.research_plan.recharge');
        })->name('research_recharge');

        Route::get('/research_student_profile', function () {
            return view('pages.education.teachers.research_plan.student_profile');
        })->name('research_student_profile');

        //    education - translate



        //    eduction - providing_service
        Route::get('/service_reg', function () {
            return view('pages.education.providing_service.register');
        })->name('service_reg');

        Route::get('/provider_profile_complete', function () {
            return view('pages.education.providing_service.provider_profile_complete');
        })->name('provider_profile_complete');

        Route::get('/service_correspondence_teacher', function () {
            return view('pages.education.providing_service.correspondence_teacher');
        })->name('service_correspondence_teacher');

        Route::get('/service_correspondence_teacher_2', function () {
            return view('pages.education.providing_service.correspondence_teacher_2');
        })->name('service_correspondence_teacher_2');

        Route::get('/service_correspondence_teacher_3', function () {
            return view('pages.education.providing_service.correspondence_teacher_3');
        })->name('service_correspondence_teacher_3');

        Route::get('/request_profile_complete', function () {
            return view('pages.education.providing_service.request_profile_complete');
        })->name('request_profile_complete');

        Route::get('/choose_provider', function () {
            return view('pages.education.providing_service.choose_provider');
        })->name('choose_provider');

        Route::get('/service_recharge', function () {
            return view('pages.education.providing_service.recharge');
        })->name('service_recharge');

        Route::get('/service_works', function () {
            return view('pages.education.providing_service.works');
        })->name('service_works');


        //    support

        Route::get('/suggestion', function () {
            return view('pages.support.suggestion');
        })->name('suggestion');

        Route::get('/complaint', function () {
            return view('pages.support.complaint');
        })->name('complaint');

        Route::get('/compliment', function () {
            return view('pages.support.compliment');
        })->name('compliment');

        //    cost living





        //    PhD Supervisors
        Route::get('/phd_supervisors_register', function () {
            return view('pages.phd_supervisors.register');
        })->name('phd_supervisors_register');

        Route::get('/supervisor_profile', function () {
            return view('pages.phd_supervisors.supervisor_profile');
        })->name('supervisor_profile');

        Route::get('/phd_supervisors_choose_success', function () {
            return view('pages.phd_supervisors.choose_success');
        })->name('phd_supervisors_choose_success');

//    ads

        Route::get('/ads_raised', function () {
            return view('pages.ads.ads_raised');
        })->name('ads_raised');

        Route::get('/ads_featured', function () {
            return view('pages.ads.ads_featured');
        })->name('ads_featured');

        Route::get('/my_ads', function () {
            return view('pages.ads.my_ads');
        })->name('my_ads');

        Route::get('/ads_details', function () {
            return view('pages.ads.ads_details');
        })->name('ads_details');

        Route::get('/distinguish_ur_ad', function () {
            return view('pages.ads.distinguish_ur_ad');
        })->name('distinguish_ur_ad');


        Route::get('/about_us', function () {
            return view('pages.about_us');
        })->name('about_us');


        Route::get('/rate_experience', function () {
            return view('pages.rate_experience');
        })->name('rate_experience');


        Route::get('/login', function () {
            return view('pages.login');
        })->name('login');

        Route::get('/email', function () {
            return view('mail.StateApplication');
        })->name('email');
    });

});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
