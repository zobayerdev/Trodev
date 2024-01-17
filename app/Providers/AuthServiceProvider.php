<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            $expirationTimeInMinutes = 15;
            $expiration = now()->addMinutes($expirationTimeInMinutes);

            // Append expiration timestamp to the URL
            $url .= '&expires=' . $expiration->timestamp;

            $verificationUrl = $url;
            $appName = config('app.name');
            $userName = $notifiable->name;

            return (new MailMessage)
                ->subject('Verify Your Email Address')
                ->markdown('design-email', [
                    'verificationUrl' => $verificationUrl,
                    'appName' => $appName,
                    'userName' => $userName,
                ]);
        });
    }
}
