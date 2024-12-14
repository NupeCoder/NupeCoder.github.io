<?php
require 'views/header.phtml';
require_once 'controllers/PaymentController.php';

$controller = new PaymentController();

$controller->index();



require 'views/footer.phtml';
?>