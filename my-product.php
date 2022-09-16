<?php

require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIZsBCp0d3tkGOGtRQR3EyU48xWwsWBxAU3ur1npJLGA8EsmZjHmSOi6cVY23BAS1HKdhlgtwkb2XL2r3hK12N00urV8wIpP'
);
$product = $stripe->products->retrieve(
	'prod_MP939w7qKaKseX',
	[]
);
$price = $stripe->prices->retrieve('price_1LgKlrBCp0d3tkGOg9Nvt8o4',[]);
echo '<pre>';
var_dump($product);
var_dump($price);
echo '</pre>';
?><!DOCTYPE html>
<html>
  <head>
    <title>Buy</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
  </head>
  <body>
    <section>
      <div class="product">
        <img src="<?php echo array_pop($product->images); ?>" alt="<?php echo $product->name; ?>" />
        <div class="description">
          <h3><?php echo $product->name; ?></h3>
          <p><?php echo $product->description; ?></p>
          <h5><?php echo strtoupper($price->currency); ?> <?php echo $price->unit_amount_decimal; ?></h5>
        </div>
      </div>
      <form action="/stripe/create-checkout-session.php" method="POST">
        <button type="submit" id="checkout-button">Checkout</button>
      </form>
    </section>
  </body>
</html>