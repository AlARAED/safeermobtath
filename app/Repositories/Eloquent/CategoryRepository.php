<?php
namespace App\Repositories\Eloquent;
use App\CompanyInformation;
use App\Models\Category;
use App\Models\City;
use App\Repositories\interfaces\CategoryRepositoryInterface;
use App\Repositories\interfaces\CountryRepositoryInterface;

use App\Models\Country;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function store(array $input){
        Category::create([
            'name_ar' => $input['name_ar'],
            'name_en' => $input['name_en'],
        ]);



    }

    public function update(array $input,$id)
    {

        $Category = Category::find($id);
        $Category->name_ar=$input['name_ar'];
        $Category->name_en=$input['name_en'];
        $Category->save();

    }

    public function delete($id){

        $Category=Category::find($id);
        $Category->delete();

    }



}



?>
