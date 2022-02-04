<?php
namespace App\Repositories\Eloquent;
use App\CompanyInformation;
use App\Models\City;
use App\Repositories\interfaces\CountryRepositoryInterface;

use App\Models\Country;

class CountryRepository implements CountryRepositoryInterface
{
    public function store(array $input){
        Country::create([
            'name_ar' => $input['name_ar'],
            'name_en' => $input['name_en'],
        ]);



    }

    public function update(array $input,$id)
    {

        $Country = Country::find($id);
        $Country->name_ar=$input['name_ar'];
        $Country->name_en=$input['name_en'];
        $Country->save();

    }

    public function delete($id){

        $Country=Country::find($id);
        $states = City::where('country_id',$Country->id)->get();

        foreach ($states as $key => $value) {

            City::where('country_id',$value->id)->delete();

        }

        $Country->delete();

    }



}



?>
