<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class Newsletter
{

    public function subscribe(string $email, string $list = null)
    {
        $list ??= config('services.mailchimp.lists.subscribers');


        return $this->client()->lists->addListMember(config('services.mailchimp.lists.subscribers'),
            ["email_address" => $email,
            "status" => "subscribed"
            ]);
    }

/*    private static $mailChimClient;

    public function __construct()
    {
        if (!isset(self::$mailChimClient)) {
            self::$mailChimClient = new ApiClient();
            self::connect();
        }
    }

    private static function Connect(?string $apikey = null, ?string $server = null)
    {
        self::$mailChimClient->setConfig([
            'apiKey' => $apikey ?? config('services.mailchimp.key'),
            'server' => $server ?? 'us13'
        ]);
    }*/

/*    public static function getClient()
    {
        if (!isset(self::$mailChimClient)) {
            self::$mailChimClient = new ApiClient();
            self::connect();
        }
        return self::$mailChimClient;
    }*/

    protected function client(){

      return (new ApiClient())->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us13'
        ]);
    }
}
