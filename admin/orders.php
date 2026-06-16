<?php
include '../includes/db.php';

$result = mysqli_query(
    $conn,
    "SELECT * FROM orders
     ORDER BY id DESC"
);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Orders</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
<nav>
    <h2>🐎 HorseMart</h2>

    <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="../products.php">Products</a></li>
        <li><a href="../cart.php">Cart</a></li>
        <li><a href="login.php">Admin</a></li>
    </ul>
</nav>


<div class="cart-container">

<h2>Customer Orders</h2>

<table class="cart-table">

<tr>
    <th>Order ID</th>
    <th>Customer ID</th>
    <th>Total</th>
    <th>Date</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['customer_id']; ?></td>
<td>$<?php echo $row['total_amount']; ?></td>
<td><?php echo $row['order_date']; ?></td>
</tr>

<?php } ?>

</table>

</div>

<footer>
    <p>© 2026 HorseMart. All Rights Reserved.</p>
</footer>


</body>
</html>