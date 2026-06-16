<?php
session_start();
include '../includes/db.php';

$result = mysqli_query(
    $conn,
    "SELECT * FROM products"
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
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

<h2>Manage Products</h2>

<br>

<a href="product.php" class="checkout-btn">
Add Product
</a>

<br><br>

<table class="cart-table">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td>$<?php echo $row['price']; ?></td>

<td>

<a class="btn"
href="delete-product.php?id=<?php echo $row['id']; ?>">
Delete
</a>

</td>

</tr>

<?php } ?>

</table>

</div>
<footer>
    <p>© 2026 HorseMart. All Rights Reserved.</p>
</footer>
</body>
</html>