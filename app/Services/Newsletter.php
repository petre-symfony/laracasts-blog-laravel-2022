<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class Newsletter {
    public function subscribe(String $email){
        $mailchimp = new ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us21'
        ]);

        return $mailchimp->lists->addListMember('49393ad7f3', [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }
}
