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

class AnswerQusetionNotification extends Notification implements ShouldQueue,ShouldBroadcast
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $ask;
    public function __construct(Ask $ask)
    {
        $this->ask=$ask;
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
            'MESSAGE'=>' تم الاجابة على سؤالك من قبل ادارة الموقع',
            'type'=>'AnswerQusetionNotification',
            'Ask'=>$this->ask,

        ];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'data'=>[
                'message'=>'There Answer For Your  Question'

            ]
        ]);

    }

}
