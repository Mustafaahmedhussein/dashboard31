<?php
define('main_url','http://localhost/dashboard31/');

function base_url($var=null){
    return main_url.$var; 
}
function redirect($var=null){
    header("location:http://localhost/dashboard31/$var");
}

$eror=[];


// filer validation
function filter($checked){
    $checked=trim($checked);
    $checked=strip_tags($checked);
    $checked=rtrim($checked);
    $checked=ltrim($checked);
$checked=stripslashes($checked);
return $checked;
}
function valid($input,$max=20,$min=3){
    $Isempty=empty($input);
    $ismax=strlen($input)>$max;
    $ismin=strlen($input)<$min;
    if($Isempty || $ismin || $ismax){
        return true;
    }else{
        return false;
    }

}

function email_filter($email){
$exist=filter_var($email,FILTER_VALIDATE_EMAIL);
if($exist){
    return true;
}else{
    return false;
}
}
// function reg($str){
//     $isreg=preg_match("/^[a-zA-z]+$/",$str);
//     if($isreg){
//         return true;
//     }else{
//         return false;
//     }
// }



?>