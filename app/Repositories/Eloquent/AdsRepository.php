<?php
namespace App\Repositories\Eloquent;

use App\CompanyInformation;

use App\Models\Application;

use App\Notifications\NewApplication;
use App\Repositories\interfaces\AdsRepositoryInterface;
use App\Models\Ads;

class AdsRepository implements AdsRepositoryInterface
{
    public function store(array $input)
    {

        $Ads = new Ads();
        $Ads->type_membership = $input['type_membership'];
        $Ads->user_id = ;
        $Ads->owner = $input['owner'];
        $Ads->country_mobtath_id = $input['country_mobtath_id'];
        $Ads->city_mobtath_id = $input['city_mobtath_id'];
        $Ads->address = $input['address'];
        $Ads->phone = $input['phone'];
        $Ads->email = $input['email'];
        $Ads->website_url = $input['website_url'];
        $Ads->section_id = $input['section_id'];
        $Ads->featured = $input['featured'];
        $Ads->repeated = $input['repeated'];


        if (isset($input['image'])) {
            $ext = pathinfo($input['image']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                $new_au = uniqid() . "." . $ext;


                $path = $input['image']->move('uploads', $new_au);
                $Ads->image = $new_au;

            }
        }


        if (isset($input['vedio'])) {
            $ext = pathinfo($input['vedio']->getClientOriginalName(),
                PATHINFO_EXTENSION);




            $new_au = uniqid() . "." . $ext;


            $path =$input['vedio']->move('uploads', $new_au);
            $Ads->vedio =$path;
        }

        $Ads->save();


        $admin=User::where('role',1)->first();
        $admin->notify(NEW NewApplication($Application));

        $details = [
            'MESSAGE' => '    طلب التحاق جديد من قسم الطلبة',
            'type'=>'NewApplication',
        ];

        event(new \App\Events\NewApplication($details));
        $details2 = [
            'title'=>'قسم الطلبة',
            'MESSAGE' => '    طلب التحاق جديد  ',
            'type'=>'NewApplication',
        ];
        \Mail::to(  $admin->email)->send(new \App\Mail\StateApplication($details2));

    }

    public function update(array $input, $id)
    {
        $Ads = new Ads();
        $Ads->type_membership = $input['type_membership'];
        $Ads->user_id = ;
        $Ads->owner = $input['owner'];
        $Ads->country_mobtath_id = $input['country_mobtath_id'];
        $Ads->city_mobtath_id = $input['city_mobtath_id'];
        $Ads->address = $input['address'];
        $Ads->phone = $input['phone'];
        $Ads->email = $input['email'];
        $Ads->website_url = $input['website_url'];
        $Ads->section_id = $input['section_id'];
        $Ads->featured = $input['featured'];
        $Ads->repeated = $input['repeated'];


        if (isset($input['image'])) {
            $ext = pathinfo($input['image']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf") {

                $new_au = uniqid() . "." . $ext;


                $path = $input['image']->move('uploads', $new_au);
                $Ads->image = $new_au;

            }
        }


        if (isset($input['vedio'])) {
            $ext = pathinfo($input['vedio']->getClientOriginalName(),
                PATHINFO_EXTENSION);




            $new_au = uniqid() . "." . $ext;


            $path =$input['vedio']->move('uploads', $new_au);
            $Ads->vedio =$path;
        }

        $Ads->save();




    }

    public function delete($id)
    {

        $Ads= Ads::find($id);
        $Ads->delete();

    }


}


?>
