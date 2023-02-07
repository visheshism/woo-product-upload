<?php

if($_POST[type]=='variable'){

$color=$_POST[color];
$color=ucwords(ucwords($color),',');
$size=$_POST[size];
$size=ucwords(ucwords($size),',');
$step=$_POST[step];
$pattern = "/[,]/m";
$size=preg_split($pattern,$size);
$color=preg_split($pattern,$color);

//functions

function brktform($element){
    return '{'.$element.'}';
}

function dqform($element){
    return '"'.$element.'"';
}

//size attribute terms
    if(count($size)>0){
    
    for($i=0; $i<count($size); $i++){
        $nsize=ucfirst($size[$i]);
       
        $size[$i]=apvd("name",$size[$i]);
        $size[$i]=brktform($size[$i]);
       
        $attr=$size[$i];
        $url=$siteurl.'/wp-json/wc/v3/products/attributes/'.$sizeid.'/terms';
    
    
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS =>$attr,
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: Basic '.$config  ),
    ));
    
    $sresponse = curl_exec($curl);
    $sresponse=json_decode($sresponse,true);

        if($sresponse[code]==='term_exists'){
          $sattrid[$i]= $sresponse[data][resource_id];
        $sattrname[$i]= $nsize;

    
        }else{
        $sattrid[$i]= $sresponse[id];
        $sattrname[$i]= $sresponse[name];

    }
  }
    curl_close($curl);
}

// color attribute terms
    if(count($color)>0){
    
    for($i=0; $i<count($color); $i++){
        $ncolor=ucfirst($color[$i]);
       
        $color[$i]=apvd("name",$color[$i]);
        $color[$i]=brktform($color[$i]);

        $attr=$color[$i];
        $url=$siteurl.'/wp-json/wc/v3/products/attributes/'.$colorid.'/terms';
    
    
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS =>$attr,
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: Basic '.$config  ),
    ));
    
    $cresponse = curl_exec($curl);
    $cresponse=json_decode($cresponse,true);

        if($cresponse[code]==='term_exists'){
          $cattrid[$i]= $cresponse[data][resource_id];
        $cattrname[$i]= $ncolor;

    
        }else{
        $cattrid[$i]= $cresponse[id];
        $cattrname[$i]= $cresponse[name];

    }
    }
    
    curl_close($curl);
    }
    
    
    
    
//array form to attr form 

    //color 
       for($o=0; $o<count($cattrname); $o++){
       $cattrname[$o]='"'.ucfirst($cattrname[$o]).'"';
     
        if(count($cattrname)>1){
        
            if($o===count($cattrname)-1){
                 $coptions.=$cattrname[$o];
            }else{$coptions.=$cattrname[$o].',';   

            }
        
    }else if(count($sattrname)==1){
     $coptions=$cattrname[$o];   
    }}
    $coptions='['.$coptions.']';

    //size
    for($k=0; $k<count($sattrname); $k++){
    $sattrname[$k]='"'.ucfirst($sattrname[$k]).'"';
     
        if(count($sattrname)>1){
        
            if($k===count($sattrname)-1){
              $soptions.=$sattrname[$k]; 
            }else{ $soptions.=$sattrname[$k].',';
            }
        
    }else if(count($sattrname)==1){
     $soptions=$sattrname[$k];   
    }}
    $soptions='['.$soptions.']';


//product creation
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
        ],
      "attributes": [
        
    {
          "id":'.$sizeid.',
        "variation" : true,
        "visible"  : true,
        "options": '.$soptions.'
        },
        {
          "id":'.$colorid.',
        "variation" : true,
        "visible"  : true,
        "options": '.$coptions.'
        }
      ] }',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: Basic '.$config
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    $det=json_decode($response,true);
    
    
//create variations

    //pre-req
    $pid=$det[id];
    console.log("product id".$pid);
    $purl=$siteurl.'/wp-json/wc/v3/products/'.$pid.'/variations/batch/';
    $imgid=$det[images][0][id];
    $orgprice=($_POST[rprice]);    


    


//if both attribute terms are sent

if($_POST[color]!=='' && $_POST[size]!==''){
 
  for($i=0;$i<count($sattrname);$i++){

//step pricing
if($_POST[varpricing]=='same'){
$vrprice=$_POST[rprice];
}else if($_POST[varpricing]==='step'){
$vrprice=$orgprice+($step*$i);    
}


//sale price
if($_POST[sprice]==='' || count(trim($_POST[sprice]))==0 ){
    $vsprice='';
}else if(count(trim($_POST[sprice]))>0 ){
$diff=($_POST[rprice])-($_POST[sprice]);
if($_POST[varpricing]=='same'){
$vsprice=$_POST[rprice]-$diff;
}else{
$vsprice=$vrprice-$diff;
}}

//dqform
$vrprice=dqform($vrprice);
$vsprice=dqform($vsprice);

$data='{"create":[
{
  "regular_price": '.$vrprice.',
  "sale_price": '.$vsprice.',
  "image": {
    "id": '.$imgid.'
  },
  
  "attributes": [
    {
      "id": '.$sizeid.',
    "option":'.$sattrname[$i].' 
    }
  ]
}
]
}';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL =>$purl,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$data,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Basic '.$config
  ),
));

$response = curl_exec($curl);
curl_close($curl);
}}

 //if only size is send
if($_POST[color]=='' && $_POST[size]!==''){
  
  for($i=0;$i<count($sattrname);$i++){

//step pricing
if($_POST[varpricing]=='same'){
    $vrprice=$_POST[rprice];
    
}else if($_POST[varpricing]==='step'){
$vrprice=$orgprice+($step*$i);    
}


//sale price
if($_POST[sprice]==='' || count(trim($_POST[sprice]))==0 ){$vsprice='';}else if(count(trim($_POST[sprice]))>0 ){
  $diff=($_POST[rprice])-($_POST[sprice]); 
if($_POST[varpricing]=='same'){

$vsprice=$_POST[rprice]-$diff;
    
}else{
$vsprice=$vrprice-$diff;
}}

//dqform
$vrprice=dqform($vrprice);
$vsprice=dqform($vsprice);

$data='{"create":[
{
  "regular_price": '.$vrprice.',
  "sale_price": '.$vsprice.',
  "image": {
    "id": '.$imgid.'
  },
  
  "attributes": [
    {
      "id": '.$sizeid.',
    "option":'.$sattrname[$i].' 
    }
  ]
}
]
}';
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL =>$purl,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$data,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Basic '.$config
  ),
));

$response = curl_exec($curl);
curl_close($curl);
}
    
}

 //if only color is send
if($_POST[color]!=='' && $_POST[size]==''){

     for($i=0;$i<count($cattrname);$i++){

//step pricing
if($_POST[varpricing]=='same'){
    $vrprice=$_POST[rprice];
    
}else if($_POST[varpricing]==='step'){
$vrprice=$orgprice+($step*$i);    
}


//sale price
if($_POST[sprice]==='' || count(trim($_POST[sprice]))==0 ){
    $vsprice='';
    
}else if(count(trim($_POST[sprice]))>0 ){
$diff=($_POST[rprice])-($_POST[sprice]); 
if($_POST[varpricing]=='same'){

$vsprice=$_POST[rprice]-$diff;
    
}else{
$vsprice=$vrprice-$diff;
}}


//dqform
$vrprice=dqform($vrprice);
$vsprice=dqform($vsprice);

$data='{"create":[
{
  "regular_price": '.$vrprice.',
  "sale_price": '.$vsprice.',
  "image": {
    "id": '.$imgid.'
  },
  
  "attributes": [
    {
      "id": '.$colorid.',
    "option":'.$cattrname[$i].' 
    }
  ]
}
]
}';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL =>$purl,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$data,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Basic '.$config
  ),
));

$response = curl_exec($curl);
curl_close($curl);
}
    
}   
    
    
}
//end of variable product
    