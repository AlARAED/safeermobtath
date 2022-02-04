<?php
namespace App\Repositories\Eloquent;

use App\Models\Application;
use App\Models\ContactUs;
use App\Notifications\ContactNotification;
use App\Notifications\NewApplication;
use App\Repositories\interfaces\ContactUSRepositoryInterface;
use App\User;

class ContactUsRepository implements ContactUSRepositoryInterface
{
    public function store(array $input){
        ContactUs::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'address' => $input['address'],
            'tel' => $input['tel'],
            'mobile' => $input['mobile'],
            'message_content' => $input['message_content'],
        ]);
        $admin=User::where('role',1)->first();
        $admin->notify(NEW ContactNotification());

        $details = [
            'MESSAGE' => 'جديد اتصل بنا   ',
            'type'=>'ContactNotification',
        ];

        event(new \App\Events\Contactus($details));

    }

    public function update(array $input,$id)
    {


    }

    public function delete($id){

        $ContactUs= ContactUs::find($id);
        $ContactUs->delete();
    }



}



?>
