<?php

require 'vendor/autoload.php';
// This is your test secret API key.
\Stripe\Stripe::setApiKey('sk_test_51LgIZsBCp0d3tkGOGtRQR3EyU48xWwsWBxAU3ur1npJLGA8EsmZjHmSOi6cVY23BAS1HKdhlgtwkb2XL2r3hK12N00urV8wIpP');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost/stripe';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => 'price_1LgKlrBCp0d3tkGOg9Nvt8o4',
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);