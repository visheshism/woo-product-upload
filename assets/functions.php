
<?php

function c2cf($phpform){
    return '"'.$phpform.'"';
}


function br(){
    return '<br>';
}

$rcode=$randcode.br();

function dq(){
    return '&quot;';
  }

  function sq(){
      return '&apos;';
    }
    
    function scx(){
        return '&nbsp;';
    }
    
    function cma(){
        return ',';
    }
    
    
    function apvd($prop,$val){
        return '"'.$prop.'": "'.$val.'"';
    }
 
    function v2pn($varname){
        return $_POST[$varname];
    }

    function linktojson($link){
        return '{ "src": "'.$link.'" }';
    }   

