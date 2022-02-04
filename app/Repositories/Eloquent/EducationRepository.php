<?php
namespace App\Repositories\Eloquent;
use App\CompanyInformation;
use App\Models\Education;
use App\Models\Experience;
use App\ModelS\Skill;
use App\Repositories\interfaces\CityRepositoryInterface;

use App\Models\City;
use App\Repositories\interfaces\EducationRepositoryInterface;

class EducationRepository implements EducationRepositoryInterface
{
    public function store(array $input,$id){


        $Education = new Education();
        $Education->description = $input['description'];
        $Education->user_id = \Auth::user()->id;
        $Education->teacher_department_id =$id;
        $Education->save();
        return $Education;


    }

    public function update(array $input,$id)
    {
        $skil=Education::find($id);
        $skil->description = $input['description'];
        $skil->update();

        return $skil;
    }

    public function delete($id){

        $Skill=Education::find($id);

        $Skill->delete();

    }



}



?>
