<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquent\CityRepository;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Country;



class CityController extends Controller
{
    protected $city;
    public function __construct(CityRepository $city)
    {
        $this->city = $city;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cities= City::all();
        $Countries= Country::all();


        return view('admin.pages.city',compact('Cities','Countries'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->city->store($request->all());
        $notification = array('message' => 'تم اضافة  المدينة   بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->city->update($request->all(),$id);
        $notification = array('message' => 'تم تعديل  هذا العنصر بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->city->delete($id);
        $notification = array('message' => 'تم حذف هذا العنصر بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);//
    }
}
