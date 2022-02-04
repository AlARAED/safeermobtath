<?php
namespace App\Repositories\Eloquent;
use App\CompanyInformation;
use App\Models\Category;
use App\Models\City;
use App\Models\LessonMaster;
use App\Repositories\interfaces\CategoryRepositoryInterface;
use App\Repositories\interfaces\CountryRepositoryInterface;

use App\Models\Country;
use App\Repositories\interfaces\MasterRepositoryInterface;

class MasterRepository implements MasterRepositoryInterface
{
    public function store(array $input){
        LessonMaster::create([
            'name_ar' => $input['name_ar'],
            'name_en' => $input['name_en'],
        ]);



    }

    public function update(array $input,$id)
    {

        $LessonMaster= LessonMaster::find($id);
        $LessonMaster->name_ar=$input['name_ar'];
        $LessonMaster->name_en=$input['name_en'];
        $LessonMaster->save();

    }

    public function delete($id){

        $LessonMaster=LessonMaster::find($id);
        $LessonMaster->delete();

    }



}



?>
