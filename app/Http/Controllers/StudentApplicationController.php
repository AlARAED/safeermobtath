<?php

namespace App\Http\Controllers;

use App\Models\city_mobtath;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;
use App\Models\University;
use App\Models\Degree;
use App\Models\Application;
use App\Repositories\Eloquent\ApllicationRepository;
use App\Http\Requests\ApllicationRequest;


class StudentApplicationController extends Controller
{

    protected $application;

    public function __construct(ApllicationRepository $application)
    {
        $this->application = $application;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale = \app()->getLocale();
        if ($locale == 'ar') {
            $Countries = Country::select(['name_ar as name', 'id'])->get();
            $Degrees = Degree::select(['name_ar as name', 'id'])->get();
        } else {
            $Countries = Country::select(['name_en as  name', 'id'])->get();
            $Degrees = Degree::select(['name_en as name', 'id'])->get();

        }
        $universities = University::all();


        return view('pages.students.students_admissions', compact('Countries', 'universities', 'Degrees'));
    }


    public function getCity(Request $request)
    {
        $locale = app()->getLocale();
        $data['cities'] = City::where("country_id", $request->country_id)
            ->select('name_' . $locale . ' as name', 'id')->get();
        return response()->json($data);
    }


    public function getCitymobath(Request $request)
    {
        $locale = app()->getLocale();
        $data['cities'] = city_mobtath::where("country_id", $request->country_id)
            ->select('name_' . $locale . ' as name', 'id')->get();
        return response()->json($data);
    }

    public function indexpanel()
    {


        $Applications = Application::orderBy('created_at', 'desc')->get();

        return view('admin.pages.application', compact('Applications'));
    }


    public function get()
    {


       return Notification::all();

    }


    public function show_update($id)
    {

        $Countries = Country::select(['name_ar as name', 'id'])->get();
        $Cities = City::select(['name_ar as name', 'id'])->get();
        $Application = Application::where('id', $id)->first();
        $universities = University::all();
        $Degrees = Degree::select(['name_ar as name', 'id'])->get();


        return view('admin.pages.editapplication', compact('Countries', 'Application', 'Cities', 'universities', 'Degrees'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApllicationRequest $request)
    {

        $this->application->store($request->all());

        return redirect(route(app()->getLocale() . '.submission_completed'));
    }


    public function submission_completed()
    {


        return view('pages.students.submission_complete');
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->application->update($request->all(),$id);
        $notification = array('message' => 'تم تعديل  الطلب  بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->application->delete($id);
        $notification = array('message' => 'تم حذف هذا الطلب بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
    }


    public function Sendmail(Request $request,$id)
    {

        $Application = Application::find($id);

//        $details = [
//        'body' => $request->answer,
//              ];
//
//    \Mail::to($Application->email)->send(new \App\Mail\StateApplication($details));

    $notification = array('message' => 'تم  ارسال  الرد  بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function acceptance(Request $request,$id)
    {

        $Application = Application::find($id);
        $Application->is_accept=1;
        $Application->save();


        $notification = array('message' => 'تم قبول الطلب    بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
    }

}
