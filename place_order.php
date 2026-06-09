<?php

session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $user_id      = $_SESSION['user_id'];
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $price        = $_POST['price'];
    $image        = mysqli_real_escape_string($conn, $_POST['image']);

    $check = mysqli_query(
        $conn,
        "SELECT * FROM orders
         WHERE user_id='$user_id'
         AND product_name='$product_name'"
    );

    if (mysqli_num_rows($check) > 0) {

        mysqli_query(
            $conn,
            "UPDATE orders
             SET quantity = quantity + 1
             WHERE user_id='$user_id'
             AND product_name='$product_name'"
        );
    } else {

        mysqli_query(
            $conn,
            "INSERT INTO orders
            (user_id, product_name, price, quantity, image)
            VALUES
            ('$user_id', '$product_name', '$price', 1, '$image')"
        );
    }

    header("Location: dashboard.php?success=1");
    exit();
}
