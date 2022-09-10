<?php

require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_4eC39HqLyjWDarjtT1zdp7dc'
);
$result = $stripe->prices->retrieve(
  'price_1Lg5XS2eZvKYlo2CP8kb96ii',
  []
);
var_dump($result);