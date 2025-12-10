<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageFromCustomer extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $email, $subject, $comment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $subject, $comment)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): static
    {
        return $this->from($this->email, $this->name)
            ->view('email.customer')
            ->with(
                [
                    'subject' => $this->subject,
                    'comment' => $this->comment
                ]);
    }
}
