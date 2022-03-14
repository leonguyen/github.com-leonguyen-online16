<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.zenrows.com/v1/?apikey=2f418a731f6578e164383b0a75fb57c176873c03&url=https%3A%2F%2Fonline.namnguyen68.repl.co%2F');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
echo $response . PHP_EOL;
curl_close($ch);
?>