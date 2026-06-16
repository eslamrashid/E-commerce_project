<?php
session_start();
include 'includes/db.php';
if(isset($_POST['product_id']))
{
    $_SESSION['cart'][$_POST['product_id']]
        = $_POST['new_quantity'];
}
if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $quantity = isset($_GET['quantity'])
        ? $_GET['quantity']
        : 1;

    if(isset($_SESSION['cart'][$id]))
    {
        $_SESSION['cart'][$id] += $quantity;
    }
    else
    {
        $_SESSION['cart'][$id] = $quantity;
    }
}

if(isset($_GET['remove']))
{
    unset($_SESSION['cart'][$_GET['remove']]);
}

$total = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav>
    <h2>HorseMart</h2>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="admin/login.php">Admin</a></li>
    </ul>
</nav>

<section class="products">

<div class="cart-container">

<h2 style="margin-bottom:20px;">Shopping Cart</h2>

<?php if(empty($_SESSION['cart'])) { ?>

    <div class="empty-cart">
        <h3>Your Cart is Empty 🛒</h3>
        <br>
        <a href="products.php" class="btn">
            Continue Shopping
        </a>
    </div>

<?php } else { ?>

<table class="cart-table">

<tr>
    <th>Product</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Subtotal</th>
    <th>Action</th>
</tr>

<?php

foreach($_SESSION['cart'] as $id => $qty)
{
    $result = mysqli_query(
        $conn,
        "SELECT * FROM products WHERE id=$id"
    );

    $product = mysqli_fetch_assoc($result);

    $subtotal = $product['price'] * $qty;

    $total += $subtotal;
?>

<tr>

    <td><?php echo $product['name']; ?></td>

    <td>
        $<?php echo number_format($product['price'],2); ?>
    </td>

    <td>

        <form method="POST" style="display:flex;justify-content:center;gap:10px;align-items:center;">

            <div class="quantity-control">

                <button type="button"
                        class="qty-btn minus">
                    -
                </button>

                <input
                    class="qty-input"
                    type="number"
                    name="new_quantity"
                    value="<?php echo $qty; ?>"
                    min="1">

                <button type="button"
                        class="qty-btn plus">
                    +
                </button>

            </div>

            <input
                type="hidden"
                name="product_id"
                value="<?php echo $id; ?>">

            <button
                class="update-btn"
                type="submit">
                Update
            </button>

        </form>

    </td>

    <td>
        $<?php echo number_format($subtotal,2); ?>
    </td>

    <td>

        <a
           class="btn"
           href="cart.php?remove=<?php echo $id; ?>">
           Remove
        </a>

    </td>

</tr>

<?php } ?>

</table>

<div class="cart-total">
    Total: $<?php echo number_format($total,2); ?>
</div>

<div style="text-align:right;">
    <a href="checkout.php" class="checkout-btn">
        Proceed To Checkout →
    </a>
</div>

<?php } ?>

</div>

</section>

<footer>
    <p>© 2026 HorseMart. All Rights Reserved.</p>
</footer>

<script src="js/script.js"></script>
</body>
</html>