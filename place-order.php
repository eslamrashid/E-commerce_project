<?php

session_start();
include 'includes/db.php';

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

mysqli_query(
    $conn,
    "INSERT INTO customers(fullname,email,phone,address)
     VALUES('$fullname','$email','$phone','$address')"
);

$customer_id = mysqli_insert_id($conn);

$total = 0;

foreach($_SESSION['cart'] as $id => $qty)
{
    $result = mysqli_query(
        $conn,
        "SELECT * FROM products WHERE id=$id"
    );

    $product = mysqli_fetch_assoc($result);

    $total += $product['price'] * $qty;
}

mysqli_query(
    $conn,
    "INSERT INTO orders(customer_id,total_amount)
     VALUES('$customer_id','$total')"
);

$order_id = mysqli_insert_id($conn);

foreach($_SESSION['cart'] as $id => $qty)
{
    mysqli_query(
        $conn,
        "INSERT INTO order_items(order_id,product_id,quantity)
         VALUES('$order_id','$id','$qty')"
    );
}

unset($_SESSION['cart']);

header("Location: order-success.php?id=".$order_id);
exit();
?>