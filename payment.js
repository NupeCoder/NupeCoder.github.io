function payWithPaystack() {
    let handler = PaystackPop.setup({
        key: 'your-public-key-here', // Replace with your Paystack Public Key
        email: 'customer@example.com', // Customer's email
        amount: 5000 * 100, // Amount in kobo (5000 kobo = 50 Naira)
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
}