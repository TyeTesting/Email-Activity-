<?php
$apikey = "[redacted]-us8";
$lid = "d136ef38de";
$cid ="a0ea6d4530";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://us8.api.mailchimp.com/3.0/reports/".$cid."/click-details?fields=urls_clicked.id,urls_clicked.url&count=50",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: apikey ".$apikey."",
    "cache-control: no-cache",
    "postman-token: 256e2d96-8e3e-4d54-31f1-049a1b082c3f"
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