<?php
require 'views/header.phtml';
require_once 'controllers/PageController.php';


$page = new PageController();

$action = $_GET["action"] ?? "loading";

switch ($action) {
    case 'confirmation':
        # code...
        $page->index();

        break; 

    case 'processPayment':
        $page->loadingPage();

        break;
        
    default:
        $page->loadingPage();
}


require 'views/footer.phtml';
?>