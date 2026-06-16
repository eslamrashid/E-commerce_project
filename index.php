<?php
include 'includes/db.php';

$result = mysqli_query($conn, "SELECT * FROM products LIMIT 4");
?>

<!DOCTYPE html>
<html>
<head>
    <title>HorseMart</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav>
    <h2>🐎 HorseMart</h2>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="admin/login.php">Admin</a></li>
    </ul>
</nav>

<!-- HERO -->

<section class="hero">

    <h1>Premium Horse Equipment Store</h1>

    <p>
        Everything your horse needs for comfort,
        performance, and care.
    </p>

    <a href="products.php" class="btn">
        Shop Now
    </a>

</section>

<!-- ABOUT -->

<section class="about-store">

    <h2>Welcome to our Horse Care Store</h2>

    <p>
        Discover everything your horse needs in one place.
        We provide high-quality horse care products designed
        to keep your horse healthy, clean, and comfortable.
    </p>

    <p>
        Whether you are a horse owner, trainer, or enthusiast,
        our goal is to help you give your horse the best care
        possible with trusted and reliable products.
    </p>

</section>

<!-- CATEGORIES -->

<section class="categories">

    <h2>Shop By Category</h2>

    <div class="category-boxes">

        <div class="category">
            <h3>🏇 Riding Equipment</h3>
            <p>Saddles, reins, helmets and more.</p>

            <a href="products.php?category=Riding Equipment"
               class="btn">
               Explore
            </a>
        </div>

        <div class="category">
            <h3>🐴 Horse Care</h3>
            <p>Grooming and healthcare products.</p>

            <a href="products.php?category=Horse Care"
               class="btn">
               Explore
            </a>
        </div>

        <div class="category">
            <h3>🌾 Feeding Equipment</h3>
            <p>Feeders, buckets and nutrition tools.</p>

            <a href="products.php?category=Feeding Equipment"
               class="btn">
               Explore
            </a>
        </div>

    </div>

</section>

<!-- WHY US -->

<section class="about-store">

    <h2>Why Choose HorseMart?</h2>

    <div class="category-boxes">

        <div class="category">
            <h3>⭐ Premium Quality</h3>
            <p>Carefully selected horse products.</p>
        </div>

        <div class="category">
            <h3>🚚 Fast Delivery</h3>
            <p>Quick and reliable shipping.</p>
        </div>

        <div class="category">
            <h3>💖 Trusted By Riders</h3>
            <p>Loved by horse owners everywhere.</p>
        </div>

    </div>

</section>

<!-- PRODUCTS -->

<section class="products">

    <h2>Featured Products</h2>

    <div class="product-grid">

        <?php while($row = mysqli_fetch_assoc($result)){ ?>

        <div class="product-card">

            <img src="images/<?php echo $row['image']; ?>" alt="">

            <h3><?php echo $row['name']; ?></h3>

            <p>$<?php echo $row['price']; ?></p>

            <a href="product.php?id=<?php echo $row['id']; ?>"
               class="btn">
               View Details
            </a>

        </div>

        <?php } ?>

    </div>

</section>

<!-- CTA -->

<section class="hero">

    <h1>Ready To Give Your Horse The Best?</h1>

    <p>
        Explore our premium collection today.
    </p>

    <a href="products.php" class="btn">
        Browse Products
    </a>

</section>

<footer>
    <p>© 2026 HorseMart. All Rights Reserved.</p>
</footer>

</body>
</html>