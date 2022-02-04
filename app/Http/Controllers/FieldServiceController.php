<?php

namespace App\Http\Controllers;

use App\Models\FieldPh;
use App\Models\FieldService;
use App\Repositories\Eloquent\ServicefieldRepository;
use App\Repositories\interfaces\ServiceFieldRepositoryInterface;
use Illuminate\Http\Request;

class FieldServiceController extends Controller
{
    protected $fieldservice;
    public function __construct(ServicefieldRepository $fieldservice)
    {
        $this->fieldservice = $fieldservice;
    }

    public function index()
    {
        $Categories= FieldService::all();
        return view('admin.pages.fieldservice',compact('Categories'));
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
        $this->fieldservice->store($request->all());

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

        $this->fieldservice->update($request->all(),$id);
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
        $this->fieldservice->delete($id);
        $notification = array('message' => 'تم حذف هذا العنصر بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);    }
}
