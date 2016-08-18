<?php

namespace Iridium\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Iridium\LoginToken;

class UserInvite extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var LoginToken
     */
    protected $token;

    public function __construct(LoginToken $token)
    {
        $this->token = $token;
    }

    public function build()
    {
        $message = (new MailMessage())
            ->line('You\'ve requested to get into iridium?')
            ->line('Here is your link!')
            ->action('GET IN', url('/get-in/' . $this->token));
        $this->subject('Your login link');
        return $this->view('vendor.notifications.email', $message->data());
    }
}
