<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class Newsletter {
    public function subscribe(String $email, String $list = null){
        $list ??= config('services.mailchimp.lists.subscribers');

        $mailchimp = new ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us21'
        ]);

        return $mailchimp->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }
}
