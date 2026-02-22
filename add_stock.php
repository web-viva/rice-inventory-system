<!DOCTYPE html>
<html>
<head>
    <title>Add Rice Stock</title>
</head>
<body>
    <h2>Add New Rice Item</h2>
    <form id="stockForm" action="insert.php" method="POST">
        <input type="text" name="item_name" placeholder="Rice Name (e.g. Samba)" required><br><br>
        <input type="number" id="qty" name="quantity" placeholder="Quantity (kg)" required><br><br>
        <button type="submit">Add to Inventory</button>
    </form>

    <script src="script.js"></script>
</body>
</html>