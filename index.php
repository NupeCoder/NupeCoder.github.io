<?php
require 'views/header.phtml';
require_once 'controllers/PaymentController.php';

$controller = new PaymentController();

$action = $_GET["action"] ?? "index";

switch ($action) {
    case 'processPayment':
        # code...
        print_r("BUTTON");
        break; 
    default:
        $controller->index();;
}


require 'views/footer.phtml';
?>