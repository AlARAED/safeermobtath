<?php
namespace App\Repositories\Eloquent;
use App\CompanyInformation;
use App\ModelS\Experience;
use App\ModelS\Skill;
use App\Repositories\interfaces\CityRepositoryInterface;

use App\Models\City;
use App\Repositories\interfaces\ExperienceRepositoryInterface;

class ExperiencsRepository implements ExperienceRepositoryInterface
{
    public function store(array $input,$id){

        $Experience = new Experience();
        $Experience->description = $input['description'];
        $Experience->user_id = \Auth::user()->id;
        $Experience->teacher_department_id =$id;
        $Experience->save();
        return $Experience;




    }


    public function update(array $input,$id)
    {
        $skil=Experience::find($id);
        $skil->description = $input['description'];
        $skil->update();
        return $skil;


    }

    public function delete($id){

        $Skill=Experience::find($id);

        $Skill->delete();


    }


}



?>
