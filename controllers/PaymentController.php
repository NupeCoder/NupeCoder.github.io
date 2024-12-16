<?php

class PaymentController {

    public function index() {
        require_once 'views/index.phtml';
    }

    public function processPayment() {
        $paymentModel = new PaymentModel();
        $response = $paymentModel->processPayment(5000, 'NGN'); // Example: amount = 5000 kobo, currency = NGN

        // Route to success page if payment succeeds

        // Route to error page if it is successful
    }

}

?>