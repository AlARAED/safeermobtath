<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Repositories\Eloquent\CollageRepository;
use Illuminate\Http\Request;
use App\Models\Collage;

class CollageController extends Controller
{

    protected $collage;

    public function __construct(CollageRepository $collage)
    {
        $this->collage = $collage;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function indexpanel()
    {


        $collages = Collage::orderBy('created_at', 'desc')->get();

        return view('admin.pages.colleg', compact('collages'));
    }


    public function addpanel($id = null)
    {

        $Countries = Country::orderBy('created_at', 'desc')->get();
        return view('admin.pages.addcollage', compact('Countries'));



    }

    public function index(Request $request)
    {

        if($request->ajax()){

            $city=$request->city;
            $from=$request->from;
            $locale=app()->getLocale();
            $collages = Collage::where('city_id',$city)->get();

            return response()->json(['data'=>$collages]);
        }
        else{
            $collages = Collage::orderBy('created_at', 'desc')->paginate(5);
            $cities= City::all();

            return view('pages.education.university.international_universities', compact('collages','cities'));

        }

    }
    public function load_collages($id){

        $locale=app()->getLocale();
        $collage=Collage::Where('id',$id)->first();
        return view('pages.sub-pages.load_collages',compact('collage'));
    }

    public function university_details($id)
    {
        $collages = Collage::find($id);



        return view('pages.education.university.university_details',compact('collages'));


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
        $this->collage->store($request->all());
        $notification = array('message' => 'تم اضافة  الكلية    بنجاح!', 'alert_type' => 'success');
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
        $colleges = Collage::where('id',$id)->first();
            return view('admin.pages.updatecollage', compact('Countries', 'colleges'));


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

        $this->collage->update($request->all(),$id);
        $notification = array('message' => 'تم تعديل  الكلية  بنجاح!', 'alert_type' => 'success');
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
        $this->collage->delete($id);
        $notification = array('message' => 'تم حذف الكلية  بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);    }
}


