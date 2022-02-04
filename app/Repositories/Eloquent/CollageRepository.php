<?php
namespace App\Repositories\Eloquent;

use App\CompanyInformation;

use App\Models\Collage;

use App\Repositories\interfaces\CollageRepositoryInterface;

class CollageRepository implements CollageRepositoryInterface
{
    public function store(array $input)
    {

        $Collage = new Collage();
        $Collage->name_ar = $input['name_ar'];
        $Collage->name_en = $input['name_en'];
        $Collage->country_id = $input['country_id'];
        $Collage->city_id = $input['city_id'];
        $Collage->content_ar = $input['content_ar'];
        $Collage->content_en = $input['content_en'];
        $Collage->descreption_ar = $input['descreption_ar'];
        $Collage->descreption_en = $input['descreption_en'];
        $Collage->address_ar = $input['address_ar'];
        $Collage->address_en = $input['address_en'];
        $Collage->fields_ar = $input['fields_ar'];
        $Collage->fields_en = $input['fields_en'];
        $Collage->more_info_ar = $input['more_info_ar'];
        $Collage->more_info_en = $input['more_info_en'];





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
                $Collage->image = $new_au;

            }
        }


        $Collage->save();



    }

    public function update(array $input, $id)
    {

        $Collage =Collage::find($id);

        $Collage->name_ar = $input['name_ar'];
        $Collage->name_en = $input['name_en'];
        $Collage->country_id = $input['country_id'];
        $Collage->city_id = $input['city_id'];
        $Collage->content_ar = $input['content_ar'];
        $Collage->content_en = $input['content_en'];
        $Collage->descreption_ar = $input['descreption_ar'];
        $Collage->descreption_en = $input['descreption_en'];
        $Collage->address_ar = $input['address_ar'];
        $Collage->address_en = $input['address_en'];
        $Collage->fields_ar = $input['fields_ar'];
        $Collage->fields_en = $input['fields_en'];
        $Collage->more_info_ar = $input['more_info_ar'];
        $Collage->more_info_en = $input['more_info_en'];




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
                $Collage->image = $new_au;

            }
        }


        $Collage->save();



    }

    public function delete($id)
    {
        $Collage=Collage::find($id);

        $Collage->delete();

    }


}


?>
