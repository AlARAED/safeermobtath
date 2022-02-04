<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Repositories\Eloquent\CountryRepository;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    protected $country;
    public function __construct(CountryRepository $country)
    {
        $this->country = $country;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Countries= Country::all();
        return view('admin.pages.country',compact('Countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.country.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->country->store($request->all());

        $notification = array('message' => 'تم اضافة  الدولة   بنجاح!', 'alert_type' => 'success');
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
        $this->country->update($request->all(),$id);
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
        $this->country->delete($id);
        $notification = array('message' => 'تم حذف هذا العنصر بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);

    }
}
