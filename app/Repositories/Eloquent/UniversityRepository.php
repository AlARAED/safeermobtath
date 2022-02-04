<?php
namespace App\Repositories\Eloquent;
use App\CompanyInformation;

use App\Models\University;

use App\Repositories\interfaces\UniversityRepositoryInterface;

class UniversityRepository implements UniversityRepositoryInterface
{
    public function store(array $input){
        University::create([
            'name' => $input['name'],
        ]);



    }

    public function update(array $input,$id)
    {

        $University = University::find($id);
        $University->name=$input['name'];
        $University->save();

    }

    public function delete($id){

        $University=University::find($id);
        $University->delete();

    }



}



?>
