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
        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
            return (new MailMessage)
                ->greeting("Dobro Došli na sajt pronadji-trenera.rs")
                ->subject('Verifikacija profila na sajtu pronadji-trenera.rs')
                ->line('Klikom na dugme ispod verifikujte svoj profil.')
                ->action('Verifikuj profil', $url)
                ->line("Ako niste napravili nalog, molimo Vas ne preduzimajte nikakve akcije.") ;
        });
    }
}
