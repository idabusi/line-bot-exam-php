<?php



require "vendor/autoload.php";

$access_token = 'bU++di4dcv4D7Ai2zuYlhqKHl4c6So7tPtxn0jRe0MVyf1+fkU4ozu4b0GHYdDs1hTGn23U1M4wK5WvWEDUETF0NvSX/mxZeGMjemryXPJxDR/aJBTGmHaderHiRMFvkR2ByEubu60kJofvIMRyHowdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







