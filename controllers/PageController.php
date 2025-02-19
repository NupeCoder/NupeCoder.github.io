<?php

class PageController {
    
    public function index() {
        require_once 'views/index.phtml';
    }

    public function donation() {
        require_once 'views/donation.phtml';
    }
}

?>