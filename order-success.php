<?php
$order_id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Success</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="checkout-container">

    <h1>✅ Order Placed Successfully!</h1>

    <br>

    <h3>
        Your Order Number:
        #<?php echo $order_id; ?>
    </h3>

    <br>

    <a href="products.php" class="checkout-btn">
        Back To Shopping
    </a>

</div>

</body>
</html>