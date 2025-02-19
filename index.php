<?php
require 'views/header.phtml';
require_once 'controllers/PaymentController.php';
require_once 'controllers/PageController.php';


$page = new PageController();

$action = $_GET["action"] ?? "index";

switch ($action) {
    case 'donation':
        # code...
        $page->donation();

        break; 
    default:
        $page->index();
}


require 'views/footer.phtml';
?>