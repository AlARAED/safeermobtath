<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\city_mobtath;
use App\Models\Country;
use App\Models\Theme;
use App\Repositories\Eloquent\CollageRepository;
use App\Repositories\Eloquent\ThemeRepository;
use Illuminate\Http\Request;
use App\Models\Collage;

class ThemeController extends Controller
{

    protected $theme;

    public function __construct(ThemeRepository $theme)
    {
        $this->theme = $theme;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function indexpanel()
    {


        $Themes = Theme::orderBy('created_at', 'desc')->get();


        return view('admin.pages.theme', compact('Themes'));
    }



    public function cost_living()
    {

        $Cities=City::all();
        return view('pages.cost_living.cost_living',compact('Cities'));
    }

    public function cost_living_city($city)
    {
        $theems=Theme::where('city_id',$city)->get();
        $Categories=Theme::select('category_id')->where('city_id',$city)->get();
        return view('pages.cost_living.categories',compact('theems','Categories'));
    }

    public function addpanel($id = null)
    {

        $Cities = City::orderBy('created_at', 'desc')->get();
        $Categories = Category::orderBy('created_at', 'desc')->get();


        return view('admin.pages.addtheme', compact('Cities','Categories'));



    }

    public function index(Request $request)
    {

        if($request->ajax()){

            $city=$request->city;
            $from=$request->from;
            $locale=app()->getLocale();
            $collages = Collage::where('city_id',$city)->get();

            return response()->json(['data'=>$collages]);
        }else{
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
        $this->theme->store($request->all());
        $notification = array('message' => 'تم الاضافة  بنجاح!', 'alert_type' => 'success');
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
        $Cities = City::orderBy('created_at', 'desc')->get();
        $Categories = Category::orderBy('created_at', 'desc')->get();
        $Theme = Theme::where('id',$id)->first();


        return view('admin.pages.updatetheme', compact('Cities', 'Categories','Theme'));


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

        $this->theme->update($request->all(),$id);
        $notification = array('message' => 'تم  التعديل   بنجاح!', 'alert_type' => 'success');
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
        $this->theme->delete($id);
        $notification = array('message' => 'تم  الحذف  بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);    }
}


