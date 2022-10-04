<?php

session_start();



if(isset($_SESSION["user_id"])){

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM  user
            WHERE id= {$_SESSION["user_id"]} ";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}



   // $CustomerName =  htmlspecialchars($user["fname"].' '.$user["lname"] );
  //  $mobileNumbers =  htmlspecialchars($user["tel"] );



 //import libcurl;

const mobileNumber = "+233247587896";
$curl = curl_init();

$payload = array(
  "amount" => 1,
  "title" => "Trip Payment",
  "description" => "Pay Here",
  "clientReference" => "Payment from Derrick",
  "callbackUrl" => "http://localhost/dynasty_tours/payment_success.html",
  "cancellationUrl" => "http://localhost/dynasty_tours/unsuccessful_transaction.html",
  "returnUrl" => "http://localhost/dynasty_tours/payment_success.html",
  "logo" => "http://localhost/dynasty_tours/imgs/lighthouse.jpeg"
);

curl_setopt_array($curl, [
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/json",
    "Authorization: Basic " . base64_encode("eHhscnRtcXA6dWF6cHhyamI=")
  ],
  CURLOPT_POSTFIELDS => json_encode($payload),
  CURLOPT_URL => "https://devp-reqsendmoney-230622-api.hubtel.com/request-money/" . mobileNumber,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
]);

$response = curl_exec($curl);
$error = curl_error($curl);

curl_close($curl);

if ($error) {
  echo "cURL Error #:" . $error;
} else {
  echo $response;
}

