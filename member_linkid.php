<?php

$apikey = "[redacted]-us8";
$lid = "d136ef38de";
$cid ="a0ea6d4530";
$link = "2e4f07c35a";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://us8.api.mailchimp.com/3.0/reports/".$cid."/click-details/".$link."/members?fields=members.email_id%2Cmembers.email_address",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: apikey ".$apikey."",
    "cache-control: no-cache",
    "postman-token: d0c89304-8b5d-2630-669d-f46a0370f6a5"
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