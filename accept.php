<?php
// require_once('init.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// $price = $_POST['price'];
	// \Stripe\Stripe::setApiKey("sk_test_8DGUAnWnuidE3zE3oOwAF5EO");
	// $token = $_POST['token'];
	// $price = ($price/66.66) * 100;
	// try {
	//   $charge = \Stripe\Charge::create(array(
	//     "amount" => $price, 
	//     "currency" => "usd",
	//     "source" => $token,
	//     "description" => "Example charge"
	//     ));
	  return true;
	// } catch(\Stripe\Error\Card $e) {
	//   	return false;
	}
	else return false;
}
?>