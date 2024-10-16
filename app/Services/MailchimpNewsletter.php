<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class MailchimpNewsletter implements iNewsletter
{
    protected ApiClient $client;
    protected string $foo;

    public function __construct(ApiClient $client)
    {
        $this->client = $client;

    }

    public function subscribe(string $email, string $list = null)
    {
        $list ??= config('services.mailchimp.lists.subscribers');


        return $this->client->lists->addListMember(config('services.mailchimp.lists.subscribers'),
            ["email_address" => $email,
                "status" => "subscribed"
            ]);
    }

}
