<?php
require 'views/header.phtml';
require_once 'controllers/PaymentController.php';
require_once 'controllers/PageController.php';


$page = new PageController();
$payment = new PaymentController();

$action = $_GET["action"] ?? "donation";

switch ($action) {
    case 'processPayment':
        # Get the amount from the textbox and use that as the payment amount
        $amount = $_POST["amount"];
        echo($amount);
        $payment->startPayment($amount);

        break; 
    default:
        $page->donation();
}


require 'views/footer.phtml';
?>