<?php 

if($_POST[type]==='simple'){

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $siteurl.'/wp-json/wc/v3/products',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "name": '. $name . ',
    "type": '. $type . ',
    "regular_price": '. $rprice . ',
    "sale_price": '. $sprice . ',
    "sku": '. $sku .',
    "description": '. $desc . ',
    "short_description": '. $sdesc . ',
    "categories": [
      '. $categ .'
    ],
    "images": [
        '. $links .'
    ]
  }',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Basic ' . $config
),

));

 $response = curl_exec($curl);

curl_close($curl);

$det=json_decode($response,true);

}
//end of simple product 