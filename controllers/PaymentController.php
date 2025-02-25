<?php

require "models/PaymentModel.php";

class PaymentController {

    public function startPayment( $amount ) {
        $paymentModel = new PaymentModel();
        $response = $paymentModel->processPayment($amount, 'NGN'); // Example: 5000, currency = NGN

        // Route to success page if payment succeeds

        // Route to error page if it is successful
    }

}

?>