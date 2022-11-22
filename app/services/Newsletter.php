<?php

namespace App\services;
use \MailchimpMarketing\ApiClient;

 class Newsletter
 {

    protected function mailChimpConfig(){

    }
public function subcribe( String $email){


    $mailchimp = new ApiClient();
    $mailchimp->setConfig([
	'apiKey' => config('services.mailchimp.key'),
	'server' => 'us17'
]);
$list_id_list= config('services.subcriber.key');

try {
    $response = $mailchimp->lists->addListMember($list_id_list, [
        "email_address" => $email,
        "status" => "subscribed",

    ]);

    return redirect('/')->with('message', 'you have suceesfully subcribed');

} catch (\Exception $e) {
    $e->getMessage();
     return redirect('/')->with('Errormessage','This email could not be added to subcrition list');

}

}
 }



