<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class Newsletter {
    public function __construct(protected ApiClient $client) {
    }

    public function subscribe(String $email, String $list = null){
        $list ??= config('services.mailchimp.lists.subscribers');

        return $this->client()->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }

    protected function client(){

        return $this->client->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us21'
        ]);
    }
}
