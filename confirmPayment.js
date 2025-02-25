// Extract transaction reference from URL parameters
const urlParams = new URLSearchParams(window.location.search);
const reference = urlParams.get('reference');

// if (reference) {
//     // Send reference to verifyPayment.php for validation
//     fetch('verifyPayment.php', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json'
//         },
//         body: JSON.stringify({ reference: reference })
//     })
//     .then(response => response.json())
//     .then(data => {
//         if (data.status === "success") {
//             window.location.href = 'success.php'; // Redirect to success page
//         } else {
//             window.location.href = 'failed.php'; // Redirect to failed payment page
//         }
//     })
//     .catch(error => {
//         console.error('Error:', error);
//         window.location.href = 'failed.php'; // Redirect to failed payment page on error
//     });
// } else {
//     alert("No payment reference found.");
//     window.location.href = 'failed.php'; // Redirect if no reference is available
// }