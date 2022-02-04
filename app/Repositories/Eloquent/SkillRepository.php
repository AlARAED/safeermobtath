<?php
namespace App\Repositories\Eloquent;
use App\CompanyInformation;
use App\Models\Application;
use App\Models\City;
use App\Repositories\interfaces\CityRepositoryInterface;

use App\Models\Skill;
use App\Repositories\interfaces\SkillRepositoryInterface;

class SkillRepository implements SkillRepositoryInterface
{
    public function store(array $input,$id){

        $Skill = new Skill();
        $Skill->description = $input['description'];
        $Skill->user_id = \Auth::user()->id;
        $Skill->teacher_department_id =$id;
        $Skill->save();
        return $Skill;



    }

    public function update(array $input,$id)
    {
        $skil=Skill::find($id);
        $skil->description = $input['description'];
        $skil->update();
        return $skil;


    }

    public function delete($id){

      Skill::where('id',$id)->delete();



    }



}



?>
