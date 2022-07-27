<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailContact extends Mailable
{
    use Queueable, SerializesModels;
    protected $name;
    protected $phoneNumber;
    protected $email;
    protected $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $phoneNumber, $email, $message)
    {
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $list=['name'=>$this->name,'phoneNumber'=>$this->phoneNumber,'email'=>$this->email,'message'=>$this->message];
        return $this->view('shop-page.email',compact('list'));
    }
}
