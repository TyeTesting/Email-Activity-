<?php
$apikey = "[redacted]-us8";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://us8.api.mailchimp.com/3.0/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: apikey ".$apikey."",
    "cache-control: no-cache",
    "postman-token: a3e03598-4337-4ca2-a220-d3088ecd8a01"
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
?>