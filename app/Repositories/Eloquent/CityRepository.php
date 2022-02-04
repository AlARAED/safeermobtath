<?php
namespace App\Repositories\Eloquent;
use App\CompanyInformation;
use App\Repositories\interfaces\CityRepositoryInterface;

use App\Models\City;

class CityRepository implements CityRepositoryInterface
{
    public function store(array $input){
        City::create([
            'name_ar' => $input['name_ar'],
            'name_en' => $input['name_en'],
            'country_id' => $input['country_id'],
        ]);



    }

    public function update(array $input,$id)
    {

        $City = City::find($id);
        $City->name_ar=$input['name_ar'];
        $City->name_en=$input['name_en'];
        $City->country_id=$input['country_id'];
        $City->save();

    }

    public function delete($id){

        $City=City::find($id);

        $City->delete();

    }



}



?>
