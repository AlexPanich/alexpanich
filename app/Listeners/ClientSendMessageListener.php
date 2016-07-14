<?php

namespace App\Listeners;

use App\Events\ClientSendMessage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class ClientSendMessageListener implements ShouldQueue
{
    use InteractsWithQueue;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ClientSendMessage  $event
     * @return void
     */
    public function handle(ClientSendMessage $event)
    {
        Mail::send('mail.message', [
            'name' => $event->message->name,
            'email' => $event->message->email,
            'content' => $event->message->content
        ], function($message) {
            $message->from('nisidi@yandex.ru');
            $message->to('nasada@yandex.ru')->subject('Сообщение с сайта');
        });
    }
}
