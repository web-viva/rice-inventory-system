document.getElementById('stockForm').onsubmit = function(event) {
    let quantity = document.getElementById('qty').value;

    if (quantity < 0) {
        alert("Error: You cannot have negative stock!");
        event.preventDefault(); // This "kills" the submit action
        return false;
    }
};