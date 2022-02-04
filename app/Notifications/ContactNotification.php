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

class ContactNotification extends Notification implements ShouldQueue,ShouldBroadcast
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
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
            'MESSAGE'=>'جديد اتصل بنا  ',
            'type'=>'ContactNotification',

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
