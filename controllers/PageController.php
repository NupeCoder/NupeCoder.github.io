<?php

class PageController {
    
    public function index() {
        require_once 'views/index.phtml';
    }

    public function donation() {
        require_once 'views/donation.phtml';
    }

    public function paymentSuccess() {
        require_once 'views/paymentSuccess.phtml';
    }

    public function paymentFailed() {
        require_once 'views/paymentFailed.phtml';
    }

    public function loadingPage() {
        require_once 'views/loadingPage.phtml';
    }
}

?>