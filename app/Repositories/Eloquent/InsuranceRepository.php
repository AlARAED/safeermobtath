<?php
namespace App\Repositories\Eloquent;

use App\CompanyInformation;

use App\Events\NewAppServiceAfterArrive;
use App\Models\Collage;

use App\Models\Insurance;
use App\Repositories\interfaces\CollageRepositoryInterface;
use App\Repositories\interfaces\InsuranceRepositoryInterface;
use App\User;

class InsuranceRepository implements InsuranceRepositoryInterface
{
    public function store(array $input)
    {

        $Insurance = new Insurance();
        $Insurance->phone = $input['phone'];
        $Insurance->email = $input['email'];
        $Insurance->type = $input['type'];
        $Insurance->phone = $input['phone'];
        $Insurance->user_id = \Auth::user()->id;
        if(isset($input['no_family'])){

            $Insurance->no_family = $input['no_family'];

        }

        if(isset($input['your_country'])){
            $Insurance->your_country = $input['your_country'];

        }
        if(isset($input['to_country'])){
            $Insurance->to_country = $input['to_country'];

        }
        if(isset($input['what_required'])){
            $Insurance->what_required = $input['what_required'];

        }


        if(isset($input['what_required'])){
            $Insurance->what_required = $input['what_required'];

        }
        if (isset($input['tecket_image'])) {
            $ext = pathinfo($input['tecket_image']->getClientOriginalName(),
                    PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf" || $ext == "jfif") {

                $new_au = uniqid() . "." . $ext;


                $path = $input['tecket_image']->move('uploads', $new_au);
            }
        }

        if (isset($new_au)) {
            if ($new_au != '' or $new_au != null) {
                $Insurance->tecket_image = $new_au;

            }
        }


        $Insurance->save();

        $admin=User::where('role',1)->first();

        return $admin->notify(NEW  \App\Notifications\NewAppServiceAfterArrive($Insurance));

        $details = [
            'MESSAGE' => 'طلب التحاق جديد خدمات ما بعد الوصول',
            'type'=>'NewAppServiceAfterArrive',
        ];

        event(new \App\Events\NewAppServiceAfterArrive($details));
        \Mail::to(  $admin->email)->send(new \App\Mail\StateApplication($details));




    }

    public function update(array $input, $id)
    {


    }

    public function delete($id)
    {
        Insurance::where('id',$id)->delete();


    }


}


?>
