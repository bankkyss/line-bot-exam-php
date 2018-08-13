<?php
$access_token = 'hD89gJ4jQHnUS16zsHi8h5C31/Q42u6KDFpw80i4dGmegJF66RZnJvaQCeo9N1xxXIHFuUq2swosLsvUUgoKrMjGu6O/FT9zP1foZWGra+rCa9Y0pdTA5xv0Rd6pH1yeI++Uq7j/eNLTTOMzv77F0QdB04t89/1O/w1cDnyilFU=
';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
