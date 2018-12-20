<?php


$access_token = 'bU++di4dcv4D7Ai2zuYlhqKHl4c6So7tPtxn0jRe0MVyf1+fkU4ozu4b0GHYdDs1hTGn23U1M4wK5WvWEDUETF0NvSX/mxZeGMjemryXPJxDR/aJBTGmHaderHiRMFvkR2ByEubu60kJofvIMRyHowdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

