<?php

class PaymentModel {
    public function processPayment($amount, $currency /* add options for currencies */) {
        
        echo <<<JS
        <script>
                let handler = PaystackPop.setup({
                    key: 'pk_test_559a49ac9b39e6cfa1aba3f316620eff1f794d96', // Replace with your Paystack Public Key
                    email: 'customer@example.com', // Customer's email
                    amount: {$amount * 1000}, // Amount in kobo (5000 kobo = 50 Naira)
                    currency: 'NGN', // Currency (NGN, USD, etc.)
                    ref: 'TXN_' + Math.floor((Math.random() * 1000000000) + 1), // Unique transaction reference
                    callback: function(response) {
                        alert('Payment successful! Reference: ' + response.reference);
                        // You can send this reference to your server for verification
                    },
                    onClose: function() {
                        alert('Transaction was not completed.');
                    }
                });
                handler.openIframe();
        </script>
        JS;
    }
}

?>