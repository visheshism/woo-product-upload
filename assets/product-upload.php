<?php
include('./creds.php');
include('./functions.php');
$config=base64_encode($ckey.':'.$csec);
$sku=c2cf(v2pn('sku'));
$name=c2cf(ucwords(v2pn('name')));
$type=c2cf(v2pn('type'));
$rprice=c2cf(v2pn('rprice'));
$sprice=c2cf(v2pn('sprice'));
$desc=v2pn('desc');
$sdesc=v2pn('sdesc');

if($sdesc==='' || count(trim($sdesc))===0){
$sdesc=substr(ucfirst(v2pn('desc')),0,8);
$sdesc=c2cf($sdesc);
}else{
$sdesc=c2cf($sdesc);
}

$ct1=v2pn('ct1');
$ct2=v2pn('ct2');

$categ=json_encode(array("id"=> "$ct1")).','.json_encode(array("id"=> "$ct2"));

if($ct2=='minus'){
  $categ=json_encode(array("id"=> "$ct1")); }
  
//images which will be uploaded if none uploaded from user-side

$dlink1='http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg';
$dlink2='http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg';


if(!is_dir('uploads')){
  mkdir('uploads'); }
  
include('./multiple-file-upload.php');

if($_FILES['upload']['error'][0]!==0){
$links=linktojson($dlink1).','.linktojson($dlink2);
}

include('./variable-product.php');

include('./simple-product.php');

if($det['status']=='publish' && $det['id']!=='0'){
include('./del.php');
  if(strlen($det[name])>38){
  $titlesubstr= substr($det[name], 0, 35);
    $titlesubstr=$titlesubstr.'...';
  }else{
  $titlesubstr= substr($det[name], 0, 30);
  }
include('./success-upload.php');
  
}
   
   
if($det['status']!=='publish' && $det['code']!=''){
include('./del.php');
include('./err.php');
}

