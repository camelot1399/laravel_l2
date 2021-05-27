<?php

namespace App\Providers;

use App\Events\Orders\OrderCreated;
use App\Listeners\Orders\CreateOrderRecipe;
use App\Listeners\Orders\SendEmailToCustomer;
use App\Listeners\Orders\WriteLogToFile;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        OrderCreated::class => [
            CreateOrderRecipe::class,
            SendEmailToCustomer::class,
            WriteLogToFile::class
        ],
        \SocialiteProviders\Manager\SocialiteWasCalled::class => [
            // ... other providers
            'SocialiteProviders\\VKontakte\\VKontakteExtendSocialite@handle',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
