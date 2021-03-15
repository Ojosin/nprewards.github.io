<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendRegistration extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $regis;
    public function __construct($regis)
    {
        //
        $this->regis = $regis;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('manggala.corp@gmail.com')
        ->markdown('emails.sendRegistration')
        ->subject('Sbu Inkindo - Konfirmasi Pendaftaran')
        ->with(
            [
                'name' => $this->regis['name'],
                'password'=>$this->regis['password'],
                'email'=>$this->regis['email'],
                'id'=>$this->regis['id'],
            ]
        );
    }
}
