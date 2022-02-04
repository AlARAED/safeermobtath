<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\City;
use App\Models\Country;
use App\Models\Degree;
use App\Models\Education;
use App\Models\Experience;
use App\Models\FieldPh;
use App\Models\FieldService;
use App\Models\Lesson;
use App\Models\LessonMaster;
use App\Models\MessageChat;
use App\Models\ReservationRequest;
use App\ModelS\Skill;
use App\Models\TeacherDepartment;
use App\Models\University;
use App\Repositories\Eloquent\TeacherDepartmentRepository;
use Illuminate\Http\Request;
use App\Models\Time;

class TeacherDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $TeacherDepartment;
    public function __construct(TeacherDepartmentRepository $TeacherDepartment)
    {

        $this->middleware('auth');
        $this->TeacherDepartment = $TeacherDepartment;
    }


    public function  index(){
        return view('pages.education.teachers.register');


    }



    public function applicationteacher()
    {


        $Applications = TeacherDepartment::orderBy('created_at')->get();

        $lessons=Lesson::all();

        $lessonmsters=LessonMaster::all();
        $FieldService=FieldService::all();
        $FieldPh=FieldPh::all();





        return view('admin.pages.applicationteacher', compact('Applications','lessons','lessonmsters','FieldService','FieldPh'));
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
        $id=$this->TeacherDepartment->store($request->all());
//        $teacher=TeacherDepartment::where('user_id',\auth::user()->id)
//            ->where('type_service',$request->type_service)
//            ->where('type_application_submitted',$request->type_application_submitted)->first();

            return   \Redirect::route(\App::getLocale() . '.teacher_language_second',['teacher'=>$id]);

    }



    public function teacher_language_second($id)
    {
        $teach=TeacherDepartment::find($id);
        $time= Time::where('teacher_department_id',$id)->get();
        $Skills= Skill::where('teacher_department_id',$id)->get();
        $Education= Education::where('teacher_department_id',$id)->get();
        $Experience= Experience::where('teacher_department_id',$id)->get();
        $days=array('السبت','الاحد','الاثنين','الثلاثاء','الاربعاء','الخميس','الجمعة');
        return view('pages.education.teachers.teacher_reg.teacher_language_second',compact('days','teach','Skills','Education','Experience','time'));

    }



    public function teacher_profile_complete($id=null)
    {
        $teach=TeacherDepartment::find($id);
        return view('pages.education.teachers.teacher_reg.profile_complete',compact('teach'));

    }



    public function student_choose_teacher_english()
    {
        $teaches=TeacherDepartment::where('language_type',2)->where('accepted',1)->get();
        return view('pages.education.teachers.student_reg.choose_teacher_english',compact('teaches'));

    }

    public function student_choose_teacher_french()
    {

        $teaches=TeacherDepartment::where('language_type',1)->where('accepted',1)->get();
        return view('pages.education.teachers.student_reg.student_choose_teacher_french',compact('teaches'));

    }

    public function student_choose_teacher_lesson()
    {

        $teach=TeacherDepartment::where('language_type',2);
        return view('pages.education.teachers.teacher_reg.profile_complete',compact('teach'));

    }
    public function student_choose_teacher_master()
    {
        $teach=TeacherDepartment::where('language_type',2);
        return view('pages.education.teachers.teacher_reg.profile_complete',compact('teach'));

    }
    public function view_applicationeacher($id)
    {

        $days=array('السبت','الاحد','الاثنين','الثلاثاء','الاربعاء','الخميس','الجمعة');
        $teach=TeacherDepartment::where('id',$id)->first();
        $time= Time::where('teacher_department_id',$id)->get();
        $Skills= Skill::where('teacher_department_id',$id)->get();
        $Education= Education::where('teacher_department_id',$id)->get();
        $Experience= Experience::where('teacher_department_id',$id)->get();
        return view('pages.education.teachers.teacher_reg.endprofileteacher',compact('days','teach','time','Skills','Education','Experience'));




    }



    public function teacher_language()
    {
//        $teach=TeacherDepartment::find($id);
        return view('pages.education.teachers.teacher_reg.teacher_language');

    }



    public function service_introducing()
    {
//        $teach=TeacherDepartment::find($id);
        return view('pages.education.teachers.teacher_reg.serviceintroducing');

    }



    public function teacher_master()
    {
//        $teach=TeacherDepartment::find($id);
        return view('pages.education.teachers.teacher_reg.teacher_master');

    }





    public function saveteacher(Request $request,$id)
    {
        $teach=TeacherDepartment::find($id);
        $teach->language_type=$request->language_type;
        $teach->short_cv=$request->short_cv;

        if (isset($request->vedio_cv)) {
            $ext = pathinfo($request->vedio_cv->getClientOriginalName(),
                PATHINFO_EXTENSION);




                $new_au = uniqid() . "." . $ext;


                $path = $request->vedio_cv->move('uploads', $new_au);

        }

        if (isset($new_au)) {
            if ($new_au != '' or $new_au != null) {
                $teach->vedio_cv = $new_au;

            }
        }

        $teach->save();
        return redirect(route(app()->getLocale() . '.teacher_calender',['id'=>$id]));


    }


    public function savestudent(Request $request,$id)
    {
        $teach=TeacherDepartment::find($id);
        $teach->short_cv=$request->short_cv;
        $teach->save();
        return redirect(route(app()->getLocale() . '.student_choose_teacher',['id'=>$id]));


    }




    public function save_student_complete(Request $request,$id)
    {
        $teach=TeacherDepartment::find($id);
        $teach->language_type=$request->language_type;
        $teach->level=$request->level;
        $teach->save();
        return redirect(route(app()->getLocale() . '.chooseteacherstudent',['id'=>$id]));


    }


    public function chooseteacherstudent($id=null)
    {

        //لازم يكون معلم ولازم يكون انجليزى مثلا ولازم يكون مقبول لحتى يظهر
        $teach=TeacherDepartment::find($id);
       $lang= $teach->language_type;
       $teachers=TeacherDepartment::where('type_application_submitted',1)
           ->where('language_type',$lang)
           ->where('accepted',1)
           ->paginate(5);

        return view('pages.education.teachers.student_reg.chooseteacherstudent',compact('teachers','id'));

    }

    public function student_choose_teacher($id=null)
    {
        $teach=TeacherDepartment::find($id);
        return view('pages.education.teachers.student_reg.choose_teacher',compact('teach'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function savedate(Request $request){
        $days=array('السبت','الاحد','الاثنين','الثلاثاء','الاربعاء','الخميس','الجمعة');
        $time= new Time();
        $time->teacher_department_id=$request->teacher_department_id;
        $time->day=$request->day;
        $time->time=$request->time;
        $time->user_id=\Auth::user()->id;

        $time->save();
        $time->day_name=$days[$time->day-1];
        return $time;

    }




    public function updatetime(Request $request,$id)
    {
        $days=array('السبت','الاحد','الاثنين','الثلاثاء','الاربعاء','الخميس','الجمعة');

        $time=Time::find($id);
        $time->day=$request->day;
        $time->time=$request->time;
        $time->update();
        $time->day_name=$days[$time->day-1];
        return $time;

    }




    public function teacher_calender(Request $request,$id)
    {

        return view('pages.education.teachers.teacher_reg.time',compact('id'));

    }


public function teacher_teacher_profile(Request $request,$id)
{


    $teach=TeacherDepartment::where('id',$id)->first();
    $time= Time::where('teacher_department_id',$id)->get();
    $Skill= Skill::where('teacher_department_id',$id)->get();
    $Education= Education::where('teacher_department_id',$id)->get();
    $Experience= Experience::where('teacher_department_id',$id)->get();
    return view('pages.education.teachers.teacher_reg.teacher_profile',compact('teach','time','Skill','Education','Experience'));

}





    public function teacher_End_profile(Request $request,$id)
    {

        $days=array('السبت','الاحد','الاثنين','الثلاثاء','الاربعاء','الخميس','الجمعة');
        $teach=TeacherDepartment::where('id',$id)->first();
        $time= Time::where('teacher_department_id',$id)->get();
        $Skills= Skill::where('teacher_department_id',$id)->get();
        $Education= Education::where('teacher_department_id',$id)->get();
        $Experience= Experience::where('teacher_department_id',$id)->get();
        return view('pages.education.teachers.teacher_reg.endprofileteacher',compact('days','teach','time','Skills','Education','Experience'));

    }




    public function send_message_teacher(Request $request,TeacherDepartment $id)
    {

        $reservation_req=new ReservationRequest();
        $reservation_req->teacher_department_id=$id->id;
        $reservation_req->student_id=auth()->id();
        $reservation_req->teacher_id=$id->user_id;
        $reservation_req->save();

        $message=new MessageChat();
        $message->content=$request->content_text;
        $message->sender_id=auth()->id();

            $message->reciver_id=$id->user_id;
        $message->reservation_id=$reservation_req->id;

        $message->file_url="";
        $message->sound_url="";
        $message->save();

        return redirect(app()->getLocale().'/request_page/'.$reservation_req->id);

    }


    public function research_correspondence_teacher($id,$teacher)
    {
      $teach=TeacherDepartment::where('user_id',$teacher)->first();

        $teach_depart=TeacherDepartment::where('id',$id)->first();




        return view('pages.education.teachers.research_plan.correspondence_teacher',compact('teach','time','Skill','Education','Experience'));
    }


    public function message_teacher($id)
    {

        $teach=TeacherDepartment::find($id);
        return view('pages.education.teachers.research_plan.correspondence_teacher',compact('teach'));


    }

    public function student_profile_complete($id)
    {


        $teach=TeacherDepartment::where('id',$id)->first();

        return view('pages.education.teachers.student_reg.profile_complete',compact('teach'));

    }


    public function Sendmail(Request $request,$id)
    {

        $Application = TeacherDepartment::find($id);

        $details = [
        'MESSAGE' => $request->answer,
              ];

        \Mail::to($Application->email)->send(new \App\Mail\StateApplication($details));

        $notification = array('message' => 'تم  ارسال  الرد  بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function acceptance(Request $request,$id)
    {

        $Application = TeacherDepartment::find($id);
        if(  $Application->accepted==1){
            $Application->accepted=0;
        }
        else{
            $Application->accepted=1;
        }

        if(isset($request->lesson_master_id))
        {
            $Application->lesson_master_id=$request->lesson_master_id;
        }

        if(isset($request->lesson_id))
        {
            $Application->lesson_id=$request->lesson_id;
        }

        if(isset($request->field_srvice_id))
        {
            $Application->field_srvice_id=$request->field_srvice_id;
        }


        if(isset($request->field_ph_id))
        {
            $Application->field_ph_id=$request->field_ph_id;
        }

        $Application->save();


        $notification = array('message' => 'تم قبول الطلب    بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
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
        $this->TeacherDepartment->delete($id);
        $notification = array('message' => 'تم حذف هذا الطلب بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function destroyTime($id)
    {
        $time=Time::where('id',$id)->delete();
    }




    public function teacher_lesson()
    {
//        $teach=TeacherDepartment::find($id);
        return view('pages.education.teachers.teacher_reg.teacher_lesson');

    }



    public function teacher_doctora()
    {
//        $teach=TeacherDepartment::find($id);
        return view('pages.education.teachers.teacher_reg.teacher_Ph');

    }


}
