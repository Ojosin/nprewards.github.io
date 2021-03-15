<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class send_forgot extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $change;
    public function __construct($change)
    {
        //
        $this->change = $change;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('manggala.corp@gmail.com')
        ->markdown('emails.send_forgot')
        ->subject('Sbu Inkindo - Send Link Forgot Password')
        ->with(
            [
                'name' => $this->change['name'],
                'password'=>$this->change['password'],
                'type_user'=>$this->change['type_user'],
                'email'=>$this->change['email'],
                'id'=>$this->change['id'],
            ]
        );
    }
}
