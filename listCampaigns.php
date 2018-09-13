<?php

$apikey = "[redacted]-us8";
$lid = "d136ef38de";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://us8.api.mailchimp.com/3.0/campaigns?list_id=".$lid."&fields=campaigns.settings.title%2Ccampaigns.id&count=50",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: apikey ".$apikey."",
    "cache-control: no-cache",
    "postman-token: 5b282a8f-4b0e-be81-6adc-c10697956357"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}