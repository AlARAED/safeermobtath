<?php
namespace App\Repositories\Eloquent;

use App\CompanyInformation;

use App\Models\Collage;

use App\Models\TranslationService;
use App\Repositories\interfaces\CollageRepositoryInterface;
use App\Repositories\interfaces\TranslationRepositoryInterface;
use App\User;

class TranslationRepository implements TranslationRepositoryInterface
{
    public function store(array $input)
    {

        $TranslationService = new TranslationService();
        $TranslationService->email = $input['email'];
        $TranslationService->type_file = $input['type_file'];
        $TranslationService->Original_language = $input['Original_language'];
        $TranslationService->Target_language = $input['Target_language'];
        $TranslationService->type_service = $input['type_service'];
        $TranslationService->deatils = $input['deatils'];

        if (isset($input['file'])) {
            $ext = pathinfo($input['file']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf" || $ext == "jfif") {

                $new_au = uniqid() . "." . $ext;


                $path = $input['file']->move('uploads', $new_au);
            }
        }

        if (isset($new_au)) {
            if ($new_au != '' or $new_au != null) {
                $TranslationService->file = $new_au;

            }
        }

        $admin=User::where('role',1)->first();
        $details = [
            'MESSAGE' => ' طلب جديد قسم الترجمة',
            'type'=>'NewTranslation',
        ];


        $admin->notify(NEW NewTranslationApplication($TranslationService));



        $details2 = [
            'title'=>'Translation department',
            'MESSAGE' => ' A new translation request has been attached to a  Safeer Mobtath',
            'type'=>'NewTranslation',
        ];
        \Mail::to( $user->email)->send(new \App\Mail\StateApplication($details2));

        $TranslationService->save();



    }

    public function update(array $input, $id)
    {

        $TranslationService =TranslationService::find($id);
        $TranslationService->email = $input['email'];
        $TranslationService->type_file = $input['type_file'];
        $TranslationService->Original_language = $input['Original_language'];
        $TranslationService->Target_language = $input['Target_language'];
        $TranslationService->type_service = $input['type_service'];
        $TranslationService->deatils = $input['deatils'];

        if (isset($input['file'])) {
            $ext = pathinfo($input['file']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf" || $ext == "jfif") {

                $new_au = uniqid() . "." . $ext;


                $path = $input['file']->move('uploads', $new_au);
            }
        }

        if (isset($new_au)) {
            if ($new_au != '' or $new_au != null) {
                $TranslationService->file = $new_au;

            }
        }

        $TranslationService->save();



    }

    public function delete($id)
    {
        $TranslationService=TranslationService::find($id);

        $TranslationService->delete();

    }


}


?>
