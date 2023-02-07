<?php 
require('./creds.php');

$config=base64_encode($ckey.':'.$csec);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $siteurl.'/wp-json/wc/v3/products/categories?per_page=100',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic '.$config
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$categ=json_decode($response,true);
