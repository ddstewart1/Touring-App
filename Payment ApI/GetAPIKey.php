<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sandbox.momodeveloper.mtn.com/v1_0/apiuser/27f7427b-1f19-4545-af32-45ae8ac8b1a2/apikey',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'Ocp-Apim-Subscription-Key: 82aa81db30d24c4eaa61c2590c2d1e39'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
