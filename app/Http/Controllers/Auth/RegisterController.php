<?php

namespace App\Http\Controllers\Auth;

use App\city_mobtath;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\country_mobtath;
use App\Models\University;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    public function showRegistrationForm()
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


    public function redirectTo()
    {
         return '/';

    }
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'country_mobtath_id' => ['required'],
            'city_mobtath_id' => ['required'],
        ]
            , [

                'email.unique' => trans('validation.unique'),
                'password.confirmed' => trans('validation.confirmed'),
            ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'country_mobtath_id' => $data['country_mobtath_id'],
            'city_mobtath_id' => $data['city_mobtath_id'],

        ]);
    }
}
