<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\city_mobtath;
use App\Models\Country;
use App\Models\country_mobtath;
use App\Models\Degree;
use App\Models\University;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified'])->except('index','inde','sign_up');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }
    public function inde()
    {
        return view('index');

    }

    public function sign_up()
    {

        $locale = \app()->getLocale();
        if ($locale == 'ar') {
            $Countries = country_mobtath::select(['name_ar as name', 'id'])->get();

            $Cities = city_mobtath::select(['name_ar as name', 'id'])->get();
        } else {
            $Countries = country_mobtath::select(['name_en as  name', 'id'])->get();
            $Cities = city_mobtath::select(['name_en as name', 'id'])->get();

        }
        $universities = University::all();


        return view('pages.sign_up',compact('Countries','Cities'));

    }

    public function update(Request $request)
    {

        $user=User::find(Auth::user()->id);
        $user->name=$request->name;
        $user->email=$request->email;
        if(isset($request->password)){

        $user->password= Hash::make($request->password);
        }
        $user->country_mobtath_id= $request->country_mobtath_id;
        $user->city_mobtath_id= $request->city_mobtath_id;


        if (isset($request->image)) {
            $ext = pathinfo($request->image->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf" || $ext == "jfif") {

                $new_au = uniqid() . "." . $ext;


                $path = $request->image->move('uploads', $new_au);
            }
        }

        if (isset($new_au)) {
            if ($new_au != '' or $new_au != null) {
                $user->file = $new_au;

            }
        }





        $TranslationService->type_file = $input['type_file'];
        $TranslationService->Original_language = $input['Original_language'];
        $TranslationService->Target_language = $input['Target_language'];
        $TranslationService->type_service = $input['type_service'];
        $TranslationService->deatils = $input['deatils'];

        if (isset($input['file'])) {
            $ext = pathinfo($input['file']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf" || $ext == "jfif") {

                $new_au = uniqid() . "." . $ext;


                $path = $input['file']->move('uploads', $new_au);
            }
        }

        if (isset($new_au)) {
            if ($new_au != '' or $new_au != null) {
                $TranslationService->file = $new_au;

            }
        }

        $admin=User::where('role',1)->first();
        $details = [
            'MESSAGE' => ' طلب جديد قسم الترجمة',
            'type'=>'NewTranslation',
        ];


        $admin->notify(NEW NewTranslationApplication($TranslationService));



        $details2 = [
            'title'=>'Translation department',
            'MESSAGE' => ' A new translation request has been attached to a  Safeer Mobtath',
            'type'=>'NewTranslation',
        ];
        \Mail::to( $user->email)->send(new \App\Mail\StateApplication($details2));

        $TranslationService->save();



    }

}
