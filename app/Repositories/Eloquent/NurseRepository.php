<?php
namespace App\Repositories\Eloquent;

use App\CompanyInformation;

use App\Models\nurse;

use App\Repositories\interfaces\CollageRepositoryInterface;

class NurseRepository implements CollageRepositoryInterface
{
    public function store(array $input)
    {

        $Nurse = new nurse();
        $Nurse->name_ar = $input['name_ar'];
        $Nurse->name_en = $input['name_en'];
        $Nurse->country_id = $input['country_id'];
        $Nurse->city_id = $input['city_id'];
        $Nurse->content_ar = $input['content_ar'];
        $Nurse->content_en = $input['content_en'];
        $Nurse->descreption_ar = $input['descreption_ar'];
        $Nurse->descreption_en = $input['descreption_en'];
        $Nurse->address_ar = $input['address_ar'];
        $Nurse->address_en = $input['address_en'];
        $Nurse->fields_ar = $input['fields_ar'];
        $Nurse->fields_en = $input['fields_en'];
        $Nurse->more_info_ar = $input['more_info_ar'];
        $Nurse->more_info_en = $input['more_info_en'];





        if (isset($input['image'])) {
            $ext = pathinfo($input['image']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf" || $ext == "jfif") {

                $new_au = uniqid() . "." . $ext;


                $path = $input['image']->move('uploads', $new_au);
            }
        }

        if (isset($new_au)) {
            if ($new_au != '' or $new_au != null) {
                $Nurse->image = $new_au;

            }
        }


        $Nurse->save();



    }

    public function update(array $input, $id)
    {

        $Nurse =nurse::find($id);
        $Nurse->name_ar = $input['name_ar'];
        $Nurse->name_en = $input['name_en'];
        $Nurse->country_id = $input['country_id'];
        $Nurse->city_id = $input['city_id'];
        $Nurse->content_ar = $input['content_ar'];
        $Nurse->content_en = $input['content_en'];
        $Nurse->descreption_ar = $input['descreption_ar'];
        $Nurse->descreption_en = $input['descreption_en'];
        $Nurse->address_ar = $input['address_ar'];
        $Nurse->address_en = $input['address_en'];
        $Nurse->fields_ar = $input['fields_ar'];
        $Nurse->fields_en = $input['fields_en'];
        $Nurse->more_info_ar = $input['more_info_ar'];
        $Nurse->more_info_en = $input['more_info_en'];



        if (isset($input['image'])) {
            $ext = pathinfo($input['image']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf" || $ext == "jfif") {

                $new_au = uniqid() . "." . $ext;


                $path = $input['image']->move('uploads', $new_au);
            }
        }

        if (isset($new_au)) {
            if ($new_au != '' or $new_au != null) {
                $Nurse->image = $new_au;

            }
        }


        $Nurse->save();



    }

    public function delete($id)
    {
        $Nurse=nurse::find($id);

        $Nurse->delete();

    }


}


?>
