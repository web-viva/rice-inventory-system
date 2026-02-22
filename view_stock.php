<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "ricemill_db");

$result = mysqli_query($conn, "SELECT * FROM inventory");
?>

<table border="1">
    <tr>
        <th>Item Name</th>
        <th>Quantity</th>
        <th>Actions</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['item_name']; ?></td>
        <td><?php echo $row['quantity']; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> | 
            <a href="delete.php?id=<?php echo $row['id']; ?>"  onclick="return confirm('Are you sure you want to delete this?');">Delete
            </a>
        </td>
    </tr>
    <?php } ?>
</table>