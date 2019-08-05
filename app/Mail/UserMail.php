<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserMail extends Mailable 
{
    use Queueable, SerializesModels;
    
    public $subject = "Mensaje recibido";
    public $content;
    public $title;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content,$title)
    {
        $this->content  = $content;
        $this->title    = $title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        return $this->view('dashboard.emails.usermail')
                    ->subject($this->subject)
                    ->from('rodolfoprobando@gmail.com');
    }
}
