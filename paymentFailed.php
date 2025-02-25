<?php
require 'views/header.phtml';
require_once 'controllers/PageController.php';


$page = new PageController();

$action = $_GET["action"] ?? "paymentSuccess";

switch ($action) {
    case 'index':
        # code...
        $page->transactionSuccess();

        break; 
    default:
        $page->loadingPage();
}


require 'views/footer.phtml';
?>