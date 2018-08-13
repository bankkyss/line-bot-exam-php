<?php



require "vendor/autoload.php";

$access_token = 'hD89gJ4jQHnUS16zsHi8h5C31/Q42u6KDFpw80i4dGmegJF66RZnJvaQCeo9N1xxXIHFuUq2swosLsvUUgoKrMjGu6O/FT9zP1foZWGra+rCa9Y0pdTA5xv0Rd6pH1yeI++Uq7j/eNLTTOMzv77F0QdB04t89/1O/w1cDnyilFU=
';

$channelSecret = 'e907298837df7a9118eb65707e484aff';

$pushID = 'U0ce15c197ef4e9c4bb6964287a60643a';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







