<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIZsBCp0d3tkGOGtRQR3EyU48xWwsWBxAU3ur1npJLGA8EsmZjHmSOi6cVY23BAS1HKdhlgtwkb2XL2r3hK12N00urV8wIpP'
);
$result = $stripe->products->delete(
  'prod_MP87k9V6FBzh5v',
  []
);
var_dump($result);