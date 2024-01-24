<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VerifyEmailNoti extends Notification
{
    use Queueable;

    protected $verificationUrl;
    protected $appName;
    protected $userName;

    /**
     * Create a new notification instance.
     */
    public function __construct($verificationUrl, $appName, $userName)
    {
        $this->verificationUrl = $verificationUrl;
        $this->appName = $appName;
        $this->userName = $userName;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */


    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Verify Your Email Address')
            ->markdown('design-email', [
                'verificationUrl' => $this->verificationUrl,
                'appName' => $this->appName,
                'userName' => $this->userName,
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
