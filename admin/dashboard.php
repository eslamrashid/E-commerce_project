<?php
session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
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

<div class="checkout-container">

<h2>Admin Dashboard</h2>

<br>

<a class="btn" href="products.php">
Manage Products
</a>

<a class="btn" href="orders.php">
View Orders
</a>

<br><br>

<a class="btn" href="login.php">
Logout
</a>

</div>

<footer>
    <p>© 2026 HorseMart. All Rights Reserved.</p>
</footer>

</body>
</html>