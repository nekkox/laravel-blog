<?php

namespace App\Providers;

use App\Services\iNewsletter;
use App\Services\MailchimpNewsletter;
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
        $this->app->bind(iNewsletter::class, function(){
            $client = new ApiClient();

            $client->setConfig([
                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us13'
            ]);
            return new MailchimpNewsletter($client);
        } );

        //$this->app->bind(iNewsletter::class, MailchimpNewsletter::class);



    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }


}
