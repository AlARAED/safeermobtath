<?php
namespace App\Repositories\Eloquent;
use App\CompanyInformation;
use App\Models\Section;


class SectionRepository implements SectionRepositoryInterface
{
    public function store(array $input){
        Section::create([
            'name_ar' => $input['name_ar'],
            'name_en' => $input['name_en'],
        ]);



    }

    public function update(array $input,$id)
    {

        $Lesson= Section::find($id);
        $Lesson->name_ar=$input['name_ar'];
        $Lesson->name_en=$input['name_en'];
        $Lesson->save();

    }

    public function delete($id){

        $Lesson=Section::find($id);
        $Lesson->delete();

    }



}



?>
