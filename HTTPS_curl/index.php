<?php

//Examples: 
// 1. "https://api.github.com/user/repos"
// 2. "https://api.openweathermap.org/data/2.5/weather?q=London&appid=YOUR_ACCESS_KEY"
// 3. "https://api.unsplash.com/photos/?client_id=YOUR_ACCESS_KEY or client_id"

$ch = curl_init();

$headers = [
    "Authorization: token {Your Token From Github}",
    //"User-Agent: {Your user name}"
];

// Encode 
$payload = json_encode([
    "name" => "Created from API",
    "description" => "an example API-created repo"
]);

// https://api.github.com/user/starred/httpie/httpie - to play with star
// https://api.github.com/user/repos - create on your own repo, it depends on name/description

curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/user/repos",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_USERAGENT => "{Your user name}",
    CURLOPT_CUSTOMREQUEST => "POST", //PUT - add , DELETE - remove
    //CURLOPT_POST => true, // It's other option of POST
    CURLOPT_POSTFIELDS => $payload
]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE); // will return in integer, status

curl_close($ch);

echo $status_code, "\n";

echo $response, "\n";










