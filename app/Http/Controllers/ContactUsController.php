<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Repositories\Eloquent\ContactUsRepository;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{

    protected $contactus;
    public function __construct(ContactUsRepository $contactus)
    {
        $this->contactus = $contactus;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.contact_us');
    }


    public function indexpanel()
    {


        $ContactUs = ContactUs::orderBy('created_at', 'desc')->get();

        return view('admin.pages.contactus', compact('ContactUs'));
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

        $this->contactus->store($request->all());

        return redirect(route(app()->getLocale() . '.submission_completed'));
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
        $this->contactus->delete($id);
        $notification = array('message' => 'تم حذف هذا الطلب بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
    }


    public function Sendmail(Request $request,$id)
    {

        $ContactUs = ContactUs::find($id);

        $details = [
            'MESSAGE' => $request->answer,
        ];

        \Mail::to($ContactUs->email)->send(new \App\Mail\StateApplication($details));

        $notification = array('message' => 'تم  ارسال  الرد  بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
    }

}
