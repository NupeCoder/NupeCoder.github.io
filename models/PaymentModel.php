<?php

class PaymentModel {
    public function processPayment($amount, $currency /* add options for currencies */) {

        $ch = curl_init(); // Initialise cURL 

        curl_setopt($ch, CURLOPT_URL, "https://api.paystack.co/transaction/initialize");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE );
        curl_setopt($ch, CURLOPT_POST, TRUE );
        curl_setopt($ch, CURLOPT_HEADER, [
            "Authorization: Bearer YOUR_SECRET_KEY", 
            "Content-Type: application/json"
        ]);

        // Give it Data from the User | example for now
        $exampleDataNaira = [
            "email" => "limanzaffar@gmail.com",
            "amount" => $amount, // Kobo amount for NGN
            "callback_url" => "https://www.nupecoder.github.io" // might want to use local port
        ];

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($exampleDataNaira) );

        // Execute request and handle response
        $repsonse = curl_exec($ch);

        if (curl_errno($ch)) {
            echo "cURL Error: " . curl_error($ch);
        } else {
            $repsonseData = json_decode($response, TRUE);
            print_r($repsonseData);
        }

        curl_close($ch);
    }
}

?>