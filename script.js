document.getElementById('stockForm').onsubmit = function(e) {
    let qty = document.getElementById('qty').value;
    if (qty < 0) {
        alert("Quantity cannot be negative!");
        e.preventDefault(); // Stops the form from submitting
        return false;
    }
};