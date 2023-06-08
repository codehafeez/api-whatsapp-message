<?php
$curl = curl_init();
$id = "********************************";
$token = "******************************";
$url = "https://api.twilio.com/2010-04-01/Accounts/$id/SMS/Messages";
$from = "+12565636082";
$to = "+966558758631";
$body = "using twilio rest api from hafeez";
$data = array (
    'From' => $from,
    'To' => $to,
    'Body' => $body,
);
$post = http_build_query($data);
$x = curl_init($url);
curl_setopt($x, CURLOPT_POST, true);
curl_setopt($x, CURLOPT_RETURNTRANSFER, true);
curl_setopt($x, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($x, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($x, CURLOPT_USERPWD, "$id:$token");
curl_setopt($x, CURLOPT_POSTFIELDS, $post);
$y = curl_exec($x);
curl_close($x);
var_dump($post);
var_dump($y);