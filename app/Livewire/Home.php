<?php

namespace App\Livewire;

use App\Mail\MessageFromCustomer;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Home extends Component
{
    public $name, $email, $subject, $comment;
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('livewire.home');
    }

    public function store(): void
    {
        $this->validate([
            'name' => ['required', 'max:100'],
            'email' => ['required', 'max:200', 'email'],
            'subject' => ['required', 'max:100'],
            'comment' => ['required', 'max:1000'],
        ]);

        Mail::to('arrokm053@gmail.com')->send(new MessageFromCustomer($this->name, $this->email, $this->subject, $this->comment));

        $this->name = null;
        $this->email = null;
        $this->subject = null;
        $this->comment = null;

        session()->flash('success', 'The message was sent successfully, wait for a reply from the admin.');
    }
}
