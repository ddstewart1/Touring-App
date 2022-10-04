<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sandbox.momodeveloper.mtn.com/collection/token/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'Ocp-Apim-Subscription-Key: 82aa81db30d24c4eaa61c2590c2d1e39',
    'Authorization: Basic MjdmNzQyN2ItMWYxOS00NTQ1LWFmMzItNDVhZThhYzhiMWEyOmExNDUzYmRkNzkyOTRiYWQ5ZWZiMjU2M2QzZDlhZjE0'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
