<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CustomReetPassword extends Mailable
{
    use Queueable, SerializesModels;
    
    public $subject = "Reseteo de Password";
    public $content;
    public $title;
    public $url;
    
    public function __construct($content,$title, $url)
    {
        $this->content  = $content;
        $this->title    = $title;
        $this->url    = $url;
    }

    public function build()
    {
        //return $this->view('view.name');
        return $this->view('dashboard.emails.adminresetpassword')
                    ->subject($this->subject)
                    ->from('rodolfoprobando@gmail.com');
    }

}
