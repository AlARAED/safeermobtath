<?php

namespace App\Http\Controllers;

use App\Models\Ask;
use App\Notifications\AnswerQusetionNotification;
use App\Notifications\QusetionNotification;
use App\User;
use Illuminate\Http\Request;

class AskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ask=Ask::all()->where('is_publish',1)->sortBy("created_at");
        return view('pages.support.faq',compact('ask'));
    }



    public function indexpanel()
    {

        $asks=Ask::all()->sortByDesc("created_at");
        return view('admin.pages.faq.faq',compact('asks'));

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
        $Ask = new Ask();
        $Ask->question = $request->question;
        $Ask->user_id = \Auth::user()->id;
        $Ask->is_publish = 0;

        $Ask->save();

        $admin=User::where('role',1)->first();
        $admin->notify(NEW QusetionNotification($Ask));

        $details = [
            'MESSAGE' => ' سؤال جديد',
            'type'=>'QusetionNotification',
        ];

        event(new \App\Events\QusetionEvent($details));

        return view('pages.students.submission_complete');

    }




    public function storequestion(Request $request)
    {
        $Ask = new Ask();
        $Ask->question = $request->question;
        $Ask->user_id = \Auth::user()->id;
        $Ask->is_publish = 0;

        $Ask->save();

        $notification = array('message' => 'تم  اضافة السؤال  بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);


    }




    public function myquestion(Request $request)
    {
        $ask=Ask::where('user_id',\Auth::user()->id)->get();
        return view('pages.support.myquestion',compact('ask'));



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
        $ask=Ask::find($id);
        return view('admin.pages.faq.updatequestion',compact('ask'));
    }


    public function add_answer(Request $request,$id)
    {
        $ask=Ask::find($id);
        $ask->answer=$request->answer;
        $ask->save();
//        $user=User::where('id',$ask->user_id)->first();
//        $user->notify(NEW AnswerQusetionNotification($ask));

//        $details = [
//            'MESSAGE' => ' تم اجابة على سؤالك من قبل ادارة الموقع ',
//            'type'=>'AnswerQusetionNotification',
//        ];
//
//        event(new \App\Events\QusetionEvent($details));
        return $ask;


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
        $Ask=Ask::find($id);
        if(isset($request->question)){
            $Ask->question = $request->question;
            $notification = array('message' => 'تم تعديل  هذا السؤال بنجاح!', 'alert_type' => 'success');
        }

        if(isset($request->is_publish)){
            if($Ask->is_publish==1){
                $Ask->is_publish=0;
            }
            else{
                $Ask->is_publish = $request->is_publish;

            }
            $notification = array('message' => 'تم نشر   هذا السؤال بنجاح!', 'alert_type' => 'success');


        }

        $Ask->save();

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
        $Ask=Ask::where('id',$id)->delete();
        $notification = array('message' => 'تم حذف هذا السؤال بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);

    }
}
