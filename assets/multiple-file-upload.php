<?php
$arr=[];
$darr=[];
$count=count($_FILES['upload']['name']);

for($i=0; $i<$count; $i++){

$img_upload_path = 'uploads/'.'IMG-'.$_FILES['upload']['name'][$i];
move_uploaded_file($_FILES['upload']['tmp_name'][$i], $img_upload_path);
$darr[$i]=$img_upload_path;
$arr[$i]=$locfolder.'assets/'.$img_upload_path;
}

$links='';

foreach($arr as $x => $val){
 if($x==$count-1){
   $links.=linktojson($val);
}else{ $links.=linktojson($val).','; }}

 