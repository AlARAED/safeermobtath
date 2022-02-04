<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\School;
use App\Models\Country;
use App\Repositories\Eloquent\SchoolRepository;
use Illuminate\Http\Request;

class SchoolController extends Controller
{

    protected $school;

    public function __construct(SchoolRepository $school)
    {
        $this->school = $school;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function indexpanel()
    {


        $Schools = School::orderBy('created_at', 'desc')->get();

        return view('admin.pages.school', compact('Schools'));
    }


    public function addpanel($id = null)
    {

        $Countries = Country::orderBy('created_at', 'desc')->get();
        return view('admin.pages.addschool', compact('Countries'));



    }

    public function index(Request $request)
    {



        if($request->ajax()){

            $city=$request->city;
            $from=$request->from;
            $locale=app()->getLocale();
            $Schools = School::where('city_id',$city)->get();

            return response()->json(['data'=>$Schools]);
        }else{
            $Schools = School::orderBy('created_at', 'desc')->paginate(5);
            $cities= City::all();

            return view('pages.education.school.international_schools', compact('Schools','cities'));

        }




    }
    public function load_collages($id){

        $locale=app()->getLocale();
        $School=School::Where('id',$id)->first();
        return view('pages.sub-pages.load_shools',compact('School'));
    }

    public function school_details($id)
    {
        $School= School::find($id);



        return view('pages.education.school.school_details',compact('School'));


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
        $this->school->store($request->all());
        $notification = array('message' => 'تم اضافة  المدرسة    بنجاح!', 'alert_type' => 'success');
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
        $Schools = School::where('id',$id)->first();
        return view('admin.pages.updateschool', compact('Countries', 'Schools'));


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

        $this->school->update($request->all(),$id);
        $notification = array('message' => 'تم تعديل  المدرسة  بنجاح!', 'alert_type' => 'success');
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
        $this->school->delete($id);
        $notification = array('message' => 'تم حذف المدرسة  بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);

    }
}


