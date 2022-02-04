<?php
namespace App\Repositories\Eloquent;
use App\CompanyInformation;

use App\Models\Degree;

use App\Repositories\interfaces\DegreeRepositoryInterface;

class DegreeRepository implements DegreeRepositoryInterface
{
    public function store(array $input){
        Degree::create([
            'name_ar' => $input['name_ar'],
            'name_en' => $input['name_en'],
        ]);



    }

    public function update(array $input,$id)
    {

        $Degree = Degree::find($id);
        $Degree->name_ar=$input['name_ar'];
        $Degree->name_en=$input['name_en'];
        $Degree->save();

    }

    public function delete($id){

        $Degree=Degree::find($id);
        $Degree->delete();

    }



}



?>
