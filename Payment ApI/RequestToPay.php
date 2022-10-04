<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sandbox.momodeveloper.mtn.com/collection/v1_0/requesttopay',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "amount": "5",
  "currency": "EUR",
  "externalId": "sdgsdv",
  "payer": {
    "partyIdType": "MSISDN",
    "partyId": "0247587896"
  },
  "payerMessage": "fdvscaf",
  "payeeNote": "fsdvac"
}',
  CURLOPT_HTTPHEADER => array(
    'X-Reference-Id: 78d3ad34-e072-4b3f-ba33-943f125a1c04',
    'X-Target-Environment: sandbox',
    'Ocp-Apim-Subscription-Key: 82aa81db30d24c4eaa61c2590c2d1e39',
    'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSMjU2In0.eyJjbGllbnRJZCI6IjI3Zjc0MjdiLTFmMTktNDU0NS1hZjMyLTQ1YWU4YWM4YjFhMiIsImV4cGlyZXMiOiIyMDIyLTA5LTI4VDIzOjU5OjM0LjM3OCIsInNlc3Npb25JZCI6ImIzN2Q3M2EwLTMxYzUtNDhlNi1hNmZhLTUzMGQyOTU3YWFlMSJ9.elm6FcbYRr0KCf0id94DdyDsk-Wna08OM0Fn35Fi0w7CFdY-VCsNEDKUAlzklhFpKnff7MlMWnOftvM57taApgJN2BzRMxe-qIrIiDcrT7mk0nKa6pdO1_Z9tu_r522K6EXeFC_C6KY5y_pw__0ThH4iE1Sl8vCBuKfKXsBSwNH4biVfrJj8z6-cPWPkgCBE2pib_s3dKPSVBF4A-hVxYLXEUKZJKez54ltfXBZmdr-zdgKopaDw7-KW0WXCHfssGRCyJK7CTs83Cf6aGQOZnB080mLGVRu-3pmOOBu8sfGofkgIbh_lgiRFBKdeniMbKdz1OcTF5LM1f_TjwHDAvg',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
