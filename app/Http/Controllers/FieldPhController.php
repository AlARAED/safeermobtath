<?php

namespace App\Http\Controllers;

use App\Models\FieldPh;
use App\Repositories\Eloquent\FieldPhRepository;
use Illuminate\Http\Request;

class FieldPhController extends Controller
{
    protected $fieldph;
    public function __construct(FieldPhRepository $fieldph)
    {
        $this->fieldph = $fieldph;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Categories= FieldPh::all();
        return view('admin.pages.fieldph',compact('Categories'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->fieldph->store($request->all());

        $notification = array('message' => 'تم الاضافة بنجاح!', 'alert_type' => 'success');
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
        $this->fieldph->store($request->all());

        $notification = array('message' => 'تم  الاضافة  بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->fieldph->delete($id);
        $notification = array('message' => 'تم حذف هذا العنصر بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
    }
}
