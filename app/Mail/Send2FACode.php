<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Send2FACode extends Mailable
{
    use Queueable, SerializesModels;

    public $code;
    public $purpose;

    public function __construct($code, $purpose = '2FA Verification')
    {
        $this->code = $code;
        $this->purpose = $purpose;
    }

    public function build()
    {
        return $this->subject($this->purpose)
                    ->view('emails.templates.2fa-code')
                    ->with([
                        'code' => $this->code,
                        'purpose' => $this->purpose,
                    ]);
    }
}
