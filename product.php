<?php
session_start();
include 'includes/db.php';

$id = $_GET['id'];

$result = mysqli_query(
    $conn,
    "SELECT * FROM products WHERE id=$id"
);

$product = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $product['name']; ?></title>
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

    <div class="product-card"
         style="width:500px; margin:auto;">

        <img src="images/<?php echo $product['image']; ?>">

        <h2><?php echo $product['name']; ?></h2>

        <h3>$<?php echo $product['price']; ?></h3>

        <p>
            <?php echo $product['description']; ?>
        </p>

        <br>

        <form action="cart.php" method="GET">
            <input type="hidden"
                name="id"
                value="<?php echo $product['id']; ?>">
            <div class="product-quantity">

                <button type="button"
                        class="qty-btn minus">
                    -
                </button>

                <input
                    type="number"
                    name="quantity"
                    class="qty-input"
                    value="1"
                    min="1">

                <button type="button"
                        class="qty-btn plus">
                    +
                </button>

            </div>

            <br><br>

            <button type="submit" class="btn">
                Add To Cart
            </button>
        </form>

    </div>

</section>

<footer>
    <p>© 2026 HorseMart. All Rights Reserved.</p>
</footer>

<script src="js/script.js"></script>
</body>
</html>