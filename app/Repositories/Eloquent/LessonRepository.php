<?php
namespace App\Repositories\Eloquent;
use App\CompanyInformation;
use App\Models\Category;
use App\Models\City;
use App\Models\Lesson;
use App\Models\LessonMaster;
use App\Repositories\interfaces\CategoryRepositoryInterface;
use App\Repositories\interfaces\CountryRepositoryInterface;

use App\Models\Country;
use App\Repositories\interfaces\LessonRepositoryInterface;
use App\Repositories\interfaces\MasterRepositoryInterface;

class LessonRepository implements LessonRepositoryInterface
{
    public function store(array $input){
        Lesson::create([
            'name_ar' => $input['name_ar'],
            'name_en' => $input['name_en'],
        ]);



    }

    public function update(array $input,$id)
    {

        $Lesson= Lesson::find($id);
        $Lesson->name_ar=$input['name_ar'];
        $Lesson->name_en=$input['name_en'];
        $Lesson->save();

    }

    public function delete($id){

        $Lesson=Lesson::find($id);
        $Lesson->delete();

    }



}



?>
