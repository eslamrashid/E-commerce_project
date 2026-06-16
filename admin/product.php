<?php
include '../includes/db.php';

if(isset($_POST['name']))
{
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $category = $_POST['category'];

    mysqli_query(
        $conn,
        "INSERT INTO products
        (name,description,price,image,category)
        VALUES
        ('$name','$description','$price',
         '$image','$category')"
    );

    header("Location: products.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
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

<h2>Add Product</h2>

<form method="POST">

<input type="text" name="name" placeholder="Product Name" required>

<textarea name="description" placeholder="Description"></textarea>

<input type="number" step="0.01" name="price" placeholder="Price" required>

<input type="text" name="image" placeholder="Image Name" required>

<select name="category">

<option>Riding Equipment</option>
<option>Horse Care</option>
<option>Feeding Equipment</option>

</select>

<br><br>

<button class="checkout-btn">
Save Product
</button>

</form>

</div>
<footer>
    <p>© 2026 HorseMart. All Rights Reserved.</p>
</footer>
</body>
</html>