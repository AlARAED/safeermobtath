<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use App\Repositories\Eloquent\InsuranceRepository;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{


    protected $insurance;

    public function __construct(InsuranceRepository $insurance)
    {
        $this->insurance = $insurance;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexpanel()
    {


        $Insurances = Insurance::orderBy('created_at', 'desc')->get();

        return view('admin.pages.serviceafterarrive', compact('Insurances'));
    }



    public function index()
    {



        return view('pages.arrival_services..insurance');
    }


    public function residence_service()
    {

        return view('pages.arrival_services.residence');
    }


    public function visa_service()
    {

        return view('pages.arrival_services.visa');
    }
    public function reception_airport_service()
    {

        return view('pages.arrival_services.reception_airport');
    }
    public function bank_account_service()
    {

        return view('pages.arrival_services.bank_account');
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
        $this->insurance->store($request->all());

        return view('pages.students.submission_complete');
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
        $this->insurance->delete($id);
        $notification = array('message' => 'تم  حذف الطلب   بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
    }
}
