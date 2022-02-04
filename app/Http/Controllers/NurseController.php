<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\nurse;
use App\Repositories\Eloquent\CollageRepository;
use App\Repositories\Eloquent\NurseRepository;
use Illuminate\Http\Request;
use App\Models\Collage;

class NurseController extends Controller
{

    protected $nurse;

    public function __construct(NurseRepository $nurse)
    {
        $this->nurse = $nurse;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function indexpanel()
    {


        $nurses = nurse::orderBy('created_at', 'desc')->get();

        return view('admin.pages.nurse', compact('nurses'));
    }


    public function addpanel($id = null)
    {
        $Countries = Country::orderBy('created_at', 'desc')->get();

        $nurses = nurse::orderBy('created_at', 'desc')->get();
        return view('admin.pages.addnurse', compact('nurses','Countries'));



    }

    public function index(Request $request)
    {

        if($request->ajax()){

            $city=$request->city;
            $from=$request->from;
            $locale=app()->getLocale();
            $nurses = nurse::where('city_id',$city)->get();

            return response()->json(['data'=>$nurses]);
        }else{
            $nurses = nurse::orderBy('created_at', 'desc')->paginate(5);
            $cities= City::all();

            return view('pages.education.nursery.international_nurseries', compact('nurses','cities'));

        }

    }
    public function load_collages($id){

        $locale=app()->getLocale();
        $nurse=nurse::Where('id',$id)->first();
        return view('pages.sub-pages.load_nursis',compact('nurse'));
    }

    public function university_details($id)
    {
        $nurse = nurse::find($id);



        return view('pages.education.nursery.nursery_details',compact('nurse'));


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->nurse->store($request->all());
        $notification = array('message' => 'تم اضافة  الحضانة    بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
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
        $Countries = Country::orderBy('created_at', 'desc')->get();
        $nurses = nurse::where('id',$id)->first();
        return view('admin.pages.updatenurse', compact('Countries', 'nurses'));


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

        $this->nurse->update($request->all(),$id);
        $notification = array('message' => 'تم تعديل  الحضانة  بنجاح!', 'alert_type' => 'success');
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
        $this->nurse->delete($id);
        $notification = array('message' => 'تم حذف الحضانة  بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);    }
}


