<?php
$token = "dSqw92ByRd_VjG2WYjR-";
$target = "628996982837,6285244306330";


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.fonnte.com/send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array(
'target' => $target,
'message' => 'Ada bahaya di rt 03',
'delay' => '2', 
// 'countryCode' => '62', //optional
),
  CURLOPT_HTTPHEADER => array(
    "Authorization: $token"//change TOKEN to your actual token
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

sleep(4);
if ($response !== false) {
    header("Location: http://127.0.0.1:8000/landing-page");
    exit();
}
