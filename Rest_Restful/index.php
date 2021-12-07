<?php
// SDK
$api_key = "{Your API}";

$data = [
    "name" => "Bob",
    "email" => "bob@example.com"
];

require __DIR__ . "/vendor/autoload.php";

$stripe = new \Stripe\StripeClient($api_key);

$customer = $stripe->customers->create($data);

echo $customer;

// API CALL
// $ch = curl_init();

// curl_setopt_array($ch, [
//     CURLOPT_URL => 'https://api.stripe.com/v1/customers',
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_USERPWD => $api_key,
//     CURLOPT_POSTFIELDS => http_build_query($data) // Post data 
// ]);

// $response = curl_exec($ch);

// curl_close($ch);

// echo $response;







