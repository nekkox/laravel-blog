<?php

namespace App\Providers;

use App\Services\Newsletter;
use Closure;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use MailchimpMarketing\ApiClient;
use Nette\Utils\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * RegisterController any application services.
     */
    public function register(): void
    {
        // Bind the ApiClient to the service container
        $this->app->bind(Newsletter::class, function(){
            $client = new ApiClient();

            $client->setConfig([
                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us13'
            ]);
            return new Newsletter($client);
        } );

        // Bind the string parameter

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }


}
