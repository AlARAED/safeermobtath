<?php
namespace App\Repositories\Eloquent;

use App\CompanyInformation;

use App\Models\Application;

use App\Notifications\NewApplication;
use App\Repositories\interfaces\ApplicationRepositoryInterface;
use App\User;

class ApllicationRepository implements ApplicationRepositoryInterface
{
    public function store(array $input)
    {

        $Application = new Application();
        $Application->country_id = $input['country_id'];
        $Application->city_id = $input['city_id'];
        $Application->university_id = $input['university_id'];
        $Application->field = $input['field'];
        $Application->specialty = $input['specialty'];
        $Application->degree_id = $input['degree_id'];
        $Application->email = $input['email'];
        $Application->is_grant = $input['is_grant'];


        if (isset($input['passport_img'])) {
            $ext = pathinfo($input['passport_img']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                $new_au = uniqid() . "." . $ext;


                $path = $input['passport_img']->move('uploads', $new_au);
            }
        }

        if (isset($new_au)) {
            if ($new_au != '' or $new_au != null) {
                $Application->passport_img = $new_au;

            }
        }


        if (isset($input['speach'])) {
            $ext = pathinfo($input['speach']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                $new_a = uniqid() . "." . $ext;


                $path = $input['speach']->move('uploads', $new_a);
            }
        }

        if (isset($new_a)) {
            if ($new_a != '' or $new_a != null) {
                $Application->speach = $new_a;

            }
        }


        if ($Application->degree_id == 1) {


            if (isset($input['degree_statment_img'])) {
                $ext = pathinfo($input['degree_statment_img']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_img = uniqid() . "." . $ext;


                    $path = $input['degree_statment_img']->move('uploads', $new_img);
                }
            }

            if (isset($new_img)) {
                if ($new_img != '' or $new_img != null) {
                    $Application->degree_statment_img = $new_img;

                }
            }


//            if (isset($input['recomendation_img'])) {
//                $ext = pathinfo($input['recomendation_img']->getClientOriginalName(),
//                    PATHINFO_EXTENSION);
//
//
//                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {
//
//                    $new_img = uniqid() . "." . $ext;
//
//
//                    $path = $input['recomendation_img']->move('uploads', $new_img);
//                }
//            }
//
//            if (isset($new_img)) {
//                if ($new_img != '' or $new_img != null) {
//                    $Application->recomendation_img = $new_img;
//
//                }
//            }


            if (isset($input['cv'])) {
                $ext = pathinfo($input['cv']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_im = uniqid() . "." . $ext;


                    $path = $input['cv']->move('uploads', $new_im);
                }
            }

            if (isset($new_im)) {
                if ($new_im != '' or $new_im != null) {
                    $Application->cv = $new_im;

                }
            }



            if (isset($input['good_study'])) {
                $ext = pathinfo($input['good_study']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new = uniqid() . "." . $ext;


                    $path = $input['good_study']->move('uploads', $new);
                }
            }

            if (isset($new)) {
                if ($new != '' or $new_im != null) {
                    $Application->good_study = $new;

                }
            }



            if (isset($input['Certificate_translation'])) {
                $ext = pathinfo($input['Certificate_translation']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_im = uniqid() . "." . $ext;


                    $path = $input['Certificate_translation']->move('uploads', $new_im);
                }
            }

            if (isset($new_im)) {
                if ($new_im != '' or $new_im != null) {
                    $Application->Certificate_translation = $new_im;

                }
            }


            if (isset($input['American_System_Certificates'])) {
                $ext = pathinfo($input['American_System_Certificates']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_i = uniqid() . "." . $ext;


                    $path = $input['American_System_Certificates']->move('uploads', $new_i);
                }
            }

            if (isset($new_i)) {
                if ($new_i != '' or $new_i != null) {
                    $Application->American_System_Certificates = $new_i;

                }
            }


        }


        if ($Application->degree_id == 2) {


            if (isset($input['high_school_certificate'])) {
                $ext = pathinfo($input['high_school_certificate']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_im = uniqid() . "." . $ext;


                    $path = $input['high_school_certificate']->move('uploads', $new_im);
                }
            }

            if (isset($new_im)) {
                if ($new_im != '' or $new_im != null) {
                    $Application->high_school_certificate = $new_im;

                }
            }


            if (isset($input['Certificate_good_conduct'])) {
                $ext = pathinfo($input['Certificate_good_conduct']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_im = uniqid() . "." . $ext;


                    $path = $input['Certificate_good_conduct']->move('uploads', $new_im);
                }
            }

            if (isset($new_im)) {
                if ($new_im != '' or $new_im != null) {
                    $Application->Certificate_good_conduct = $new_im;

                }
            }


            if (isset($input['Diploma_certificate'])) {
                $ext = pathinfo($input['Diploma_certificate']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_im = uniqid() . "." . $ext;


                    $path = $input['Diploma_certificate']->move('uploads', $new_im);
                }
            }

            if (isset($new_im)) {
                if ($new_im != '' or $new_im != null) {
                    $Application->Diploma_certificate = $new_im;

                }
            }


            if (isset($input['Explanation_description_materials'])) {
                $ext = pathinfo($input['Explanation_description_materials']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_im = uniqid() . "." . $ext;


                    $path = $input['Explanation_description_materials']->move('uploads', $new_im);
                }
            }

            if (isset($new_im)) {
                if ($new_im != '' or $new_im != null) {
                    $Application->Explanation_description_materials = $new_im;

                }
            }


            if (isset($input['American_System_Certificates'])) {
                $ext = pathinfo($input['American_System_Certificates']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_im = uniqid() . "." . $ext;


                    $path = $input['American_System_Certificates']->move('uploads', $new_im);
                }
            }

            if (isset($new_im)) {
                if ($new_im != '' or $new_im != null) {
                    $Application->American_System_Certificates = $new_im;

                }
            }


            if (isset($input['American_System_Certificates'])) {
                $ext = pathinfo($input['American_System_Certificates']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_im = uniqid() . "." . $ext;


                    $path = $input['American_System_Certificates']->move('uploads', $new_im);
                }
            }

            if (isset($new_im)) {
                if ($new_im != '' or $new_im != null) {
                    $Application->American_System_Certificates = $new_im;

                }
            }


        }


        if ($Application->is_grant == 1) {


            if (isset($input['Financial_guarantee_certificate'])) {
                $ext = pathinfo($input['Financial_guarantee_certificate']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_im = uniqid() . "." . $ext;


                    $path = $input['Financial_guarantee_certificate']->move('uploads', $new_im);
                }
            }

            if (isset($new_im)) {
                if ($new_im != '' or $new_im != null) {
                    $Application->Financial_guarantee_certificate = $new_im;

                }
            }


        }

//
//
//        if (isset($input['Financial_guarantee_certificate'])) {
//            $ext = pathinfo($input['Financial_guarantee_certificate']->getClientOriginalName(),
//                PATHINFO_EXTENSION);
//
//
//            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {
//
//                $new_im = uniqid() . "." . $ext;
//
//
//                $path = $input['Financial_guarantee_certificate']->move('uploads', $new_im);
//            }
//        }
//
//        if (isset($new_im)) {
//            if ($new_im != '' or $new_im != null) {
//                $Application->Financial_guarantee_certificate = $new_im;
//
//            }
//        }


        $Application->save();


        $admin=User::where('role',1)->first();
        $admin->notify(NEW NewApplication($Application));

        $details = [
            'MESSAGE' => '    طلب التحاق جديد من قسم الطلبة',
            'type'=>'NewApplication',
        ];

        event(new \App\Events\NewApplication($details));
        $details2 = [
            'title'=>'قسم الطلبة',
            'MESSAGE' => '    طلب التحاق جديد  ',
            'type'=>'NewApplication',
        ];
        \Mail::to(  $admin->email)->send(new \App\Mail\StateApplication($details2));

    }

    public function update(array $input, $id)
    {



        $new="";

        $Application = Application::find($id);
        $Application->country_id = $input['country_id'];
        $Application->city_id = $input['city_id'];
        $Application->university_id = $input['university_id'];
        $Application->field = $input['field'];
        $Application->specialty = $input['specialty'];
        $Application->degree_id = $input['degree_id'];
        $Application->email = $input['email'];


        if (isset($input['passport_img'])) {
            $ext = pathinfo($input['passport_img']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                $new_au = uniqid() . "." . $ext;


                    $path = $input['passport_img']->move('uploads', $new_au);
            }
        }




        if (isset($new_au)) {
            if ($new_au != '' or $new_au != null) {
                $Application->passport_img = $new_au;

            }
        }


        if (isset($input['speach'])) {
            $ext = pathinfo($input['speach']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                $new = uniqid() . "." . $ext;


                $path = $input['speach']->move('uploads', $new);
            }
        }

        if (isset($new)) {
            if ($new != '' or $new!= null) {
                $Application->speach = $new;

            }
        }





            if (isset($input['degree_statment_img'])) {
                $ext = pathinfo($input['degree_statment_img']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_img = uniqid() . "." . $ext;


                    $path = $input['degree_statment_img']->move('uploads', $new_img);
                }
            }

            if (isset($new_img)) {
                if ($new_img != '' or $new_img != null) {
                    $Application->degree_statment_img = $new_img;

                }
            }


            if (isset($input['recomendation_img'])) {
                $ext = pathinfo($input['recomendation_img']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_ = uniqid() . "." . $ext;


                    $path = $input['recomendation_img']->move('uploads', $new_);
                }
            }

            if (isset($new_)) {
                if ($new_ != '' or $new_ != null) {
                    $Application->recomendation_img = $new_;

                }
            }


            if (isset($input['cv'])) {
                $ext = pathinfo($input['cv']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_im = uniqid() . "." . $ext;


                    $path = $input['cv']->move('uploads', $new_im);
                }
            }

            if (isset($new_im)) {
                if ($new_im != '' or $new_im != null) {
                    $Application->cv = $new_im;

                }
            }


            if (isset($input['good_study'])) {
                $ext = pathinfo($input['good_study']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_im = uniqid() . "." . $ext;


                    $path = $input['good_study']->move('uploads', $new_im);
                }
            }

            if (isset($new_im)) {
                if ($new_im != '' or $new_im != null) {
                    $Application->good_study = $new_im;

                }
            }


            if (isset($input['Certificate_translation'])) {
                $ext = pathinfo($input['Certificate_translation']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_im = uniqid() . "." . $ext;


                    $path = $input['Certificate_translation']->move('uploads', $new_im);
                }
            }

            if (isset($new_im)) {
                if ($new_im != '' or $new_im != null) {
                    $Application->Certificate_translation = $new_im;

                }
            }


            if (isset($input['American_System_Certificates'])) {
                $ext = pathinfo($input['American_System_Certificates']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_im = uniqid() . "." . $ext;


                    $path = $input['American_System_Certificates']->move('uploads', $new_im);
                }
            }

            if (isset($new_im)) {
                if ($new_im != '' or $new_im != null) {
                    $Application->American_System_Certificates = $new_im;

                }
            }








            if (isset($input['high_school_certificate'])) {
                $ext = pathinfo($input['high_school_certificate']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_im = uniqid() . "." . $ext;


                    $path = $input['high_school_certificate']->move('uploads', $new_im);
                }
            }

            if (isset($new_im)) {
                if ($new_im != '' or $new_im != null) {
                    $Application->high_school_certificate = $new_im;

                }
            }


            if (isset($input['Certificate_good_conduct'])) {
                $ext = pathinfo($input['Certificate_good_conduct']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_im = uniqid() . "." . $ext;


                    $path = $input['Certificate_good_conduct']->move('uploads', $new_im);
                }
            }

            if (isset($new_im)) {
                if ($new_im != '' or $new_im != null) {
                    $Application->Certificate_good_conduct = $new_im;

                }
            }


            if (isset($input['Diploma_certificate'])) {
                $ext = pathinfo($input['Diploma_certificate']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_im = uniqid() . "." . $ext;


                    $path = $input['Diploma_certificate']->move('uploads', $new_im);
                }
            }

            if (isset($new_im)) {
                if ($new_im != '' or $new_im != null) {
                    $Application->Diploma_certificate = $new_im;

                }
            }


            if (isset($input['Explanation_description_materials'])) {
                $ext = pathinfo($input['Explanation_description_materials']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_im = uniqid() . "." . $ext;


                    $path = $input['Explanation_description_materials']->move('uploads', $new_im);
                }
            }

            if (isset($new_im)) {
                if ($new_im != '' or $new_im != null) {
                    $Application->Explanation_description_materials = $new_im;

                }
            }






            if (isset($input['Financial_guarantee_certificate'])) {
                $ext = pathinfo($input['Financial_guarantee_certificate']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


                if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                    $new_im = uniqid() . "." . $ext;


                    $path = $input['Financial_guarantee_certificate']->move('uploads', $new_im);
                }
            }

            if (isset($new_im)) {
                if ($new_im != '' or $new_im != null) {
                    $Application->Financial_guarantee_certificate = $new_im;

                }
            }


        $Application->update();



    }

    public function delete($id)
    {

        $Application= Application::find($id);
        $Application->delete();

    }


}


?>
