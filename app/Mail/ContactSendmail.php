<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSendmail extends Mailable
{
    use Queueable, SerializesModels;

    private string $contents;
    private string $name;
    private string $tel;
    private string $email;

    /**
     * Create a new message instance.
     *
     * @param mixed $inputs
     * @return void
     */
    public function __construct($inputs)
    {
        $this->contents = $inputs['contents'];
        $this->name = $inputs['name'];
        $this->tel = $inputs['tel'];
        $this->email = $inputs['email'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('example@gmail.com')
            ->subject('自動送信メール')
            ->view('contact.mail')
            ->with([
            'contents' => $this->contents,
            'name' => $this->name,
            'tel' => $this->tel,
            'email' => $this->email,
        ]);
    }
}
