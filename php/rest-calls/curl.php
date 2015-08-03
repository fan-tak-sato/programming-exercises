<?php

function GetCurlPage($pageSpec) {

    $ch = curl_init($pageSpec);
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $tmp = curl_exec ($ch);
    curl_close ($ch);
    
    return $tmp;
}

$url = "{myCurlURL}";

$output = GetCurlPage($url);

echo $output;

