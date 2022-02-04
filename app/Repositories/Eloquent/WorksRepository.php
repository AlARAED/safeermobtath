<?php
namespace App\Repositories\Eloquent;
use App\CompanyInformation;
use App\Models\Application;
use App\Models\City;
use App\Models\Work;
use App\Repositories\interfaces\CityRepositoryInterface;

use App\Models\Skill;
use App\Repositories\interfaces\SkillRepositoryInterface;

class WorksRepository implements WorksRepositoryInterface
{
    public function store(array $input,$id){

        $Work = new Work();
        if (isset($input['image'])) {
            $ext = pathinfo($input['image']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                $new_au = uniqid() . "." . $ext;


                $path = $input['image']->move('uploads', $new_au);
                $Work->image = $new_au;

            }
        }


        if (isset($input['vedio'])) {
            $ext = pathinfo($input['vedio']->getClientOriginalName(),
                PATHINFO_EXTENSION);




            $new_au = uniqid() . "." . $ext;


            $path =$input['vedio']->move('uploads', $new_au);
            $Work->vedio =$path;
        }

        $Work->title_work = $input['title_work'];
        $Work->short_description = $input['short_description'];
        $Work->teacher_department_id =$id;
        $Work->save();
        return $Work;



    }

    public function update(array $input,$id)
    {
        $Work = Work::find($id);



        if (isset($input['image'])) {
            $ext = pathinfo($input['image']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                $new_au = uniqid() . "." . $ext;


                $path = $input['image']->move('uploads', $new_au);
                $Work->image = $new_au;

            }
        }


        if (isset($input['vedio'])) {
            $ext = pathinfo($input['vedio']->getClientOriginalName(),
                PATHINFO_EXTENSION);




            $new_au = uniqid() . "." . $ext;


            $path =$input['vedio']->move('uploads', $new_au);
            $Work->vedio =$path;
        }

        $Work->title_work = $input['title_work'];
        $Work->short_description = $input['short_description'];
        $Work->teacher_department_id =$id;
        $Work->save();
        return $Work;


    }

    public function delete($id){

        Work::where('id',$id)->delete();



    }



}



?>
