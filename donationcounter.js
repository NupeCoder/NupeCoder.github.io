function updateAmount() {
    let amount = document.getElementById("amount").value;
    document.getElementById("amount-display").innerText = amount ? "₦" + amount : "₦0";
}