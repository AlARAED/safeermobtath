<?php
namespace App\Repositories\Eloquent;

use App\CompanyInformation;

use App\Models\TeacherDepartment;

use App\Notifications\NewApplication;
use App\Repositories\interfaces\TeacherDepartmentRepositoryInterface;
use App\User;

class TeacherDepartmentRepository implements TeacherDepartmentRepositoryInterface
{
    public function store(array $input)
    {

        $TeacherDepartment= new TeacherDepartment();
        $TeacherDepartment->type_service = $input['type_service'];
        $TeacherDepartment->type_application_submitted = $input['type_application_submitted'];
        $TeacherDepartment->first_name = $input['first_name'];
        $TeacherDepartment->last_name = $input['last_name'];
        $TeacherDepartment->email = $input['email'];
        $TeacherDepartment->user_id = \Auth::user()->id;
        $TeacherDepartment->phone_no =$input['phone_no'];
        if(isset($input['language_type'])){
            $TeacherDepartment->language_type =$input['language_type'];

        }

        if(isset($input['lesson_master_type'])){
            $TeacherDepartment->lesson_master_type =$input['lesson_master_type'];

        }

        if(isset($input['field_Ph_type'])){
            $TeacherDepartment->field_Ph_type =$input['field_Ph_type'];

        }
        if(isset($input['lesson_type'])){
            $TeacherDepartment->lesson_type =$input['lesson_type'];

        }



        if(isset($input['Service_type'])){
            $TeacherDepartment->Service_type =$input['Service_type'];

        }




        $TeacherDepartment->short_cv =$input['short_cv'];
        if (isset($input['vedio_cv'])) {
            $ext = pathinfo($input['vedio_cv']->getClientOriginalName(),
                PATHINFO_EXTENSION);




            $new_au = uniqid() . "." . $ext;


            $path =$input['vedio_cv']->move('uploads', $new_au);

        }

        if (isset($new_au)) {
            if ($new_au != '' or $new_au != null) {
                $input['vedio_cv'] = $new_au;

            }
        }


        $TeacherDepartment->save();
//        \Session::put('valueid', $TeacherDepartment->id);
        return $TeacherDepartment->id;





    }

    public function update(array $input, $id)
    {



    }

    public function delete($id)
    {

        $Application= TeacherDepartment::where('id',$id)->delete();

    }


    public function Sendmail(Request $request,$id)
    {

        $Application = TeacherDepartment::find($id);

//        $details = [
//        'body' => $request->answer,
//              ];
//
//    \Mail::to($Application->email)->send(new \App\Mail\StateApplication($details));

        $notification = array('message' => 'تم  ارسال  الرد  بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
    }


}


?>
