<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class HelloWorld extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var string
     */
    public $what;

    /**
     * Create a new message instance.
     *
     * @param string $what
     * @return void
     */
    public function __construct(string $what)
    {
        $this->what = $what;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): HelloWorld
    {
        return $this->view('mails.hello')
            ->subject('Hello ' . $this->what)
            ->attach(storage_path('app/mail/mapa.pdf'));
    }
}
