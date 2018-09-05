<?php
$access_token = 'DSteptFVu9AECikuH7CE9re9lZSAeV3Utb8z0P22f4byTq30aRvclvWfE3PW8KFpplVl8uhf8V8QgiVUO/UmzKNkbKqhmUxB2t//MNavoOo5uyhrr7RvnivNs1dwiUPnV6rt9qO8jzn3KSmCVnc1PgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
