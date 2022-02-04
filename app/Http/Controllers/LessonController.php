<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Lesson;
use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\Eloquent\CountryRepository;
use App\Repositories\Eloquent\LessonRepository;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    protected $lesson;
    public function __construct(LessonRepository $lesson)
    {
        $this->lesson = $lesson;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Categories= Lesson::all();
        return view('admin.pages.Lesson',compact('Categories'));
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
        $this->lesson->store($request->all());

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
        $this->lesson->update($request->all(),$id);
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
        $this->lesson->delete($id);
        $notification = array('message' => 'تم حذف هذا العنصر بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);

    }
}
