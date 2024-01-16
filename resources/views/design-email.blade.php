@component('mail::message')
    # Verify Your Email Address

    Hello!

    Thank you for signing up with {{ $appName }}. To continue, please verify your email address by clicking the button below:

    @component('mail::button', ['url' => $verificationUrl, 'color' => 'blue'])
        Verify Email Address
    @endcomponent

    If you did not create an account, no further action is required.

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent

