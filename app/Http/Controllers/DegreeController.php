<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquent\DegreeRepository;
use Illuminate\Http\Request;
use App\Models\Degree;


class DegreeController extends Controller
{

    protected $degree;
    public function __construct(DegreeRepository $degree)
    {
        $this->degree = $degree;
    }

    public function index()
    {
        $Degrees= Degree::all();
        return view('admin.pages.degree',compact('Degrees'));
    }


    public function store(Request $request)
    {
        $this->degree->store($request->all());
        $notification = array('message' => 'تم   اضافة درجة علمية جديدة بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);

    }

    public function update(Request $request, $id)
    {
        $this->degree->update($request->all(),$id);
        $notification = array('message' => 'تم تعديل  هذا العنصر بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);

    }
    public function destroy($id)
    {
        $this->degree->delete($id);
        $notification = array('message' => 'تم حذف هذا العنصر بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);

    }


}
