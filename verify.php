<?php
$proxy = 'http://fixie:h75Pw0cP2uqmHiu@velodrome.usefixie.com:80';
$proxyauth = 'fixie:h75Pw0cP2uqmHiu';
$access_token = 'OG744wBkz4dlnL7VlXwOdKY7D87YXy+Wbu51/NR2e6hHAsm9H8Ci3MUZ+jsor7fepJyzMjsrpnAilK7ITOjtthLu2k1pWtvqluz4MV2IZdXHS9DbrIf4RXwUwPeuklWGDskhRaNM+wMe6ln9wKHfcAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
