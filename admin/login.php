<?php
session_start();

if(isset($_POST['username']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "admin123")
    {
        $_SESSION['admin'] = true;

        header("Location: dashboard.php");
        exit();
    }

    $error = "Invalid Credentials";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
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

    <h2>Admin Login</h2>

    <?php if(isset($error)){ ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php } ?>

    <form method="POST">

        <input type="text"
               name="username"
               placeholder="Username"
               required>

        <input type="password"
               name="password"
               placeholder="Password"
               required>

        <button class="checkout-btn">
            Login
        </button>

    </form>

</div>

<footer>
    <p>© 2026 HorseMart. All Rights Reserved.</p>
</footer>
</body>
</html>