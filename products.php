<?php
include 'includes/db.php';

$category = isset($_GET['category']) ? $_GET['category'] : '';

if($category != ''){
    $result = mysqli_query(
        $conn,
        "SELECT * FROM products WHERE category='$category'"
    );
}else{
    $result = mysqli_query(
        $conn,
        "SELECT * FROM products"
    );
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products - HorseMart</title>
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

    <h2>All Products</h2>

    <div style="text-align:center; margin-bottom:20px;">
        <a class="btn" href="products.php">All</a>
        <a class="btn" href="products.php?category=Riding Equipment">Riding Equipment</a>
        <a class="btn" href="products.php?category=Horse Care">Horse Care</a>
        <a class="btn" href="products.php?category=Feeding Equipment">Feeding Equipment</a>
    </div>

    <div class="product-grid">

        <?php while($row = mysqli_fetch_assoc($result)){ ?>

        <div class="product-card">

            <img src="images/<?php echo $row['image']; ?>">

            <h3><?php echo $row['name']; ?></h3>

            <p>$<?php echo $row['price']; ?></p>

            <a class="btn"
               href="product.php?id=<?php echo $row['id']; ?>">
                View Details
            </a>

        </div>

        <?php } ?>

    </div>

</section>

<footer>
    <p>© 2026 HorseMart. All Rights Reserved.</p>
</footer>

</body>
</html>