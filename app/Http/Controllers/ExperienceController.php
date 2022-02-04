<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquent\ExperiencsRepository;
use App\Repositories\Eloquent\SkillRepository;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{



    protected $experience;
    public function __construct(ExperiencsRepository $experience)
    {
        $this->experience = $experience;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request,$id)
    {
       return  $this->experience->store($request->all(),$id);
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

        return $this->experience->update($request->all(),$id);
//        $notification = array('message' => 'تم تعديل  هذا العنصر بنجاح!', 'alert_type' => 'success');
//        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->experience->delete($id);
//        $notification = array('message' => 'تم حذف هذا العنصر بنجاح!', 'alert_type' => 'success');
//        return redirect()->back()->with($notification);
    }
}
