<?php
namespace App\Repositories\Eloquent;

use App\CompanyInformation;

use App\Models\School;

use App\Repositories\interfaces\ShoolRepositoryInterface;

class SchoolRepository implements ShoolRepositoryInterface
{
    public function store(array $input)
    {

        $School = new School();
        $School->name_ar = $input['name_ar'];
        $School->name_en = $input['name_en'];
        $School->country_id = $input['country_id'];
        $School->city_id = $input['city_id'];
        $School->content_ar = $input['content_ar'];
        $School->content_en = $input['content_en'];
        $School->descreption_ar = $input['descreption_ar'];
        $School->descreption_en = $input['descreption_en'];
        $School->address_ar = $input['address_ar'];
        $School->address_en = $input['address_en'];
        $School->fields_ar = $input['fields_ar'];
        $School->fields_en = $input['fields_en'];
        $School->more_info_ar = $input['more_info_ar'];
        $School->more_info_en = $input['more_info_en'];





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
                $School->image = $new_au;

            }
        }


        $School->save();



    }

    public function update(array $input, $id)
    {

        $School =School::find($id);

        $School->name_ar = $input['name_ar'];
        $School->name_en = $input['name_en'];
        $School->country_id = $input['country_id'];
        $School->city_id = $input['city_id'];
        $School->content_ar = $input['content_ar'];
        $School->content_en = $input['content_en'];
        $School->descreption_ar = $input['descreption_ar'];
        $School->descreption_en = $input['descreption_en'];
        $School->address_ar = $input['address_ar'];
        $School->address_en = $input['address_en'];
        $School->fields_ar = $input['fields_ar'];
        $School->fields_en = $input['fields_en'];
        $School->more_info_ar = $input['more_info_ar'];
        $School->more_info_en = $input['more_info_en'];



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
                $School->image = $new_au;

            }
        }


        $School->save();



    }

    public function delete($id)
    {
        $School=School::find($id);

        $School->delete();

    }


}


?>
