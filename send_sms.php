<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Load our environment variables from the .env file:
(Dotenv\Dotenv::createImmutable(__DIR__))->load();

// Your Account SID and Auth Token from twilio.com/console
// In production, these should be environment variables. E.g.:
$account_sid = $_ENV['TWILIO_ACCOUNT_SID'];
$auth_token = $_ENV['TWILIO_AUTH_TOKEN'];

// A Twilio number you own with SMS capabilities
$twilio_number = "+18553665130";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+19733321820',
    array(
        'from' => $twilio_number,
        'body' => 'Test!'
    )
);