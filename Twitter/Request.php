<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.twitter.com/1.1/trends/place.json?id=23424803",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: OAuth oauth_consumer_key=\"55XO9qDjb1j4mzSiscPnCYg1M\",oauth_token=\"2478483809-iZuZxUD6E76phZRbf10eXZd6rSVf8J0UTJNYpav\",oauth_signature_method=\"HMAC-SHA1\",oauth_timestamp=\"1479425517\",oauth_nonce=\"nvii0G\",oauth_version=\"1.0\",oauth_signature=\"SXIohqYYCHncF9kYJlITKO14njc%3D\"",
    "cache-control: no-cache",
    "postman-token: df510d31-394d-6bf2-689d-e635a0641b0b"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
echo $response;
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  
}