<?php
namespace App\Repositories\Eloquent;

use App\CompanyInformation;

use App\Models\Application;

use App\Models\Theme;
use App\Notifications\NewApplication;
use App\Repositories\interfaces\ApplicationRepositoryInterface;
use App\Repositories\interfaces\ThemeRepositoryInterface;
use App\User;

class ThemeRepository implements ThemeRepositoryInterface
{
    public function store(array $input)
    {


        $Theme = new Theme();
        $Theme->title = $input['title'];

        $Theme->descreption_ar = $input['descreption_ar'];
        $Theme->descreption_en = $input['descreption_en'];

        $Theme->city_id = $input['city_id'];
        $Theme->category_id = $input['category_id'];


        if (isset($input['image'])) {
            $ext = pathinfo($input['image']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                $new_au = uniqid() . "." . $ext;


                $path = $input['image']->move('uploads', $new_au);
            }
        }

        if (isset($new_au)) {
            if ($new_au != '' or $new_au != null) {
                $Theme->image = $new_au;

            }
        }


        $Theme->save();



    }

    public function update(array $input, $id)
    {



        $Theme = Theme::find($id);

        $Theme->title = $input['title'];

        $Theme->descreption_ar = $input['descreption_ar'];
        $Theme->descreption_en = $input['descreption_en'];        $Theme->city_id = $input['city_id'];
        $Theme->category_id = $input['category_id'];


        if (isset($input['image'])) {
            $ext = pathinfo($input['image']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                $new_au = uniqid() . "." . $ext;


                $path = $input['image']->move('uploads', $new_au);
            }
        }

        if (isset($new_au)) {
            if ($new_au != '' or $new_au != null) {
                $Theme->image = $new_au;

            }
        }




        $Theme->update();



    }

    public function delete($id)
    {

        $Theme= Theme::find($id);
        $Theme->delete();

    }


}


?>
