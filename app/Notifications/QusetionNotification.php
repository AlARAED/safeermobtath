<?php

namespace App\Notifications;

use App\Models\Application;
use App\Models\Ask;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class QusetionNotification extends Notification implements ShouldQueue,ShouldBroadcast
{
    use Queueable;
swal("تحذير!", "امتداد الصورة غير صحيح  !", "error");

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $Ask;
    public $data;
    public $user;
    public $message;
    public $type;
    public function __construct(Ask $Ask)
    {
        $this->Ask=$Ask;
        $this->data=$Ask;
        $this->user->$Ask->userName();
       // $this->message=$this->user->name.'قام بطرح سؤال ';
        $this->type="QusetionNotification";
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
//    public function toMail($notifiable)
//    {
//        return (new MailMessage)
//                    ->line('There New Application')
//                    ->action('GO TO Applications', url('/admin/application'))
//                    ->line('Thank you for using Safeer Mobtath!');
//    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'MESSAGE'=>' سؤال جديد',
            'type'=>'QusetionNotification',
            'Ask'=>$this->Ask,

        ];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'data'=>[
                'message'=>'There New Question'

            ]
        ]);

    }

}
