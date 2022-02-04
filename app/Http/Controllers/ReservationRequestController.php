<?php

namespace App\Http\Controllers;

use App\Models\MessageChat;
use App\Models\ReservationRequest;
use App\Models\TeacherDepartment;
use Illuminate\Http\Request;
use File;
class ReservationRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function show(ReservationRequest $id)
    {
        $teach=$id;
        $messages=MessageChat::where('reservation_id',$id->id)->get();

        return view('pages.education.teachers.student_reg.reservationrequest',compact('teach','messages'));

    }

    public function send_message(Request $request,ReservationRequest $id)
    {

        $message=new MessageChat();
     //   dd($request->all());
        $voice_url="";
        if (!File::isDirectory(public_path() . '/uploads/voices/' . date('Y') . '/' . date('m') . '/' . date('d'))) {
            File::makeDirectory(public_path() . '/uploads/voices/' . date('Y') . '/' . date('m') . '/' . date('d'), 0777, true);
        }

        if (isset($request->audio_data)) {
            $voice_url = time() . '.mp3' ;


            $request->audio_data->move(public_path('uploads/voices/' . date('Y') . '/' . date('m') . '/' . date('d') . '/'),  $voice_url);
            $message->sound_url='uploads/voices/'.$voice_url;

        }

        $message->content=$request->content_text;

        $message->sender_id=auth()->id();
        if($id->teacher_id==auth()->id())
        $message->reciver_id=$id->student_id;
        else
            $message->reciver_id=$id->teacher_id;
        $message->reservation_id=$id->id;

        if (isset($request->file_url)) {

            $ext = pathinfo($request->file_url->getClientOriginalName(),
                PATHINFO_EXTENSION);



                $new_au = uniqid() . "." . $ext;


                $path =$request->file_url->move('uploads', $new_au);
            $message->file_url=$path;
        }else{
            $message->file_url="";
        }




        /*if (isset($request->sound_url)) {
            $ext = pathinfo($request->sound_url->getClientOriginalName(),
                PATHINFO_EXTENSION);



            $new_au = uniqid() . "." . $ext;


            $path = $request->sound_url->move('uploads', $new_au);
            $message->sound_url=$path;
        }else{
            $message->sound_url="";
        }*/



        $message->save();
        $message=MessageChat::where('id',$message->id)->with('sender')->with('reciver')->first();
        $details = [
            'message' => $message,
            'type'=>'Newmessage',
        ];

        event(new \App\Events\ChatEvent($details));
        return $message;

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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
        //
    }
}
