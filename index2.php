<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
$sid    = "***********************";
$token  = "************************";
$twilio = new Client($sid, $token);
$message = $twilio->messages->create("+966558758631", // to
	array("body" => "Test Message Hafeez", "from" => "+12565636082")
);


print($message->sid);
