<?php

namespace App\Http\Controllers;

use App\Models\TranslationService;
use App\Repositories\Eloquent\TranslationRepository;
use Illuminate\Http\Request;

class TranslationServicesController extends Controller
{

    protected $translation;

    public function __construct(TranslationRepository $translation)
    {
        $this->translation = $translation;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.education.translate.translate_service');

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
        $this->translation->store($request->all());
        return view('pages.students.submission_complete');

    }

    public function indexpanel()
    {


        $TranslationServices = TranslationService::orderBy('created_at', 'desc')->get();

        return view('admin.pages.translationservice', compact('TranslationServices'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->translation->delete($id);
        $notification = array('message' => 'تم حذف هذا الطلب بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
    }
}
