<?php
    /*
     @author dreamstore7km 
     @url dreamstore-7km.prom.ua
     @copyright 2021
    */
    $url = 'https://gate.dreamstore7km.mobi/token/state.php?';
    $username = 'user';    // string User ID (phone number)
    $token = 'token';        // string token
    $smscid = '0001'; 
    $url_result = $url.'username='.$username.'&token='.$token.'&smscid='.$smscid;

    if($curl = curl_init())
    {
        curl_setopt($curl, CURLOPT_URL, $url_result);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $out = curl_exec($curl);
        echo $out;
        curl_close($curl);
    }
?>
