<?php
    /*
     @author SMS CLUB 
     @url www.smsclub.mobi
     @copyright 2016
    */
    $url = 'https://gate.smsclub.mobi/token/getbalance.php?';
    $username = 'user';    // string User ID (phone number)
    $token = 'token';         // string token
    
    $url_result = $url.'username='.$username.'&token='.$token;

    if($curl = curl_init())
    {
        curl_setopt($curl, CURLOPT_URL, $url_result);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        $out = curl_exec($curl);
        echo $out;
        curl_close($curl);
    }
?>