<?php
session_start();
include 'includes/db.php';

if(empty($_SESSION['cart']))
{
    header("Location: cart.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav>
    <h2>HorseMart</h2>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="cart.php">Cart</a></li>
    </ul>
</nav>

<div class="checkout-container">

    <h2>Checkout</h2>

    <form action="place-order.php" method="POST">

        <input
            type="text"
            name="fullname"
            placeholder="Full Name"
            required>

        <input
            type="email"
            name="email"
            placeholder="Email Address"
            required>

        <input
            type="text"
            name="phone"
            placeholder="Phone Number"
            required>

        <textarea
            name="address"
            placeholder="Delivery Address"
            required></textarea>

        <button type="submit" class="checkout-btn">
            Place Order
        </button>

    </form>

</div>
<footer>
    <p>© 2026 HorseMart. All Rights Reserved.</p>
</footer>

</body>
</html>