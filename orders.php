<?php
include "db.php";
session_start();

$result = mysqli_query($conn, "SELECT * FROM orders");
?>

<!DOCTYPE html>
<html>

<head>
    <title>My Orders</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: linear-gradient(45deg,
                    #7341ac 0%,
                    #303c63 50%,
                    #196372 100%);
            min-height: 100vh;
        }

        header {
            background: #222;
            padding: 15px;
        }

        header nav ul {
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
        }

        header nav ul li {
            margin: 0 15px;
        }

        header nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        header nav ul li a:hover {
            color: #00bfff;
        }

        .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
            margin-right: 50px;
        }

        .logo img {
            width: 40px;
            height: 40px;
            vertical-align: middle;
            border-radius: 50%;
        }

        h2 {
            text-align: center;
            color: white;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        .orders-container {
            width: 95%;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            padding-bottom: 40px;
        }

        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transition: 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
        }

        .card-body h3 {
            margin-bottom: 10px;
            color: #333;
        }

        .card-body p {
            margin: 8px 0;
            color: #555;
            font-size: 16px;
        }

        .price {
            color: green;
            font-weight: bold;
        }

        .continue-btn {
            display: block;
            width: 220px;
            margin: 30px auto;
            text-align: center;
            padding: 12px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .continue-btn:hover {
            background: #218838;
        }

        .empty {
            text-align: center;
            color: white;
            font-size: 22px;
            margin-top: 50px;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 10px #1858c6;
        }
    </style>
</head>

<body>

    <header>
        <nav>
            <ul>
                <span class="logo">
                    <img src="images/logo.jpg">
                    ShopSphere
                </span>

                <li><a href="dashboard.php">Home</a></li>
                <li><a href="#">Inventory</a></li>
                <li><a href="orders.php">Orders</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="home.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <h2>My Orders</h2>

    <div class="orders-container">

        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>

                <div class="product-card">

                    <img src="<?= $row['image']; ?>">

                    <div class="card-body">

                        <h3><?= $row['product_name']; ?></h3>

                        <p class="price">
                            ₹<?= number_format($row['price']); ?>
                        </p>

                        <p>
                            Quantity :
                            <?= $row['quantity']; ?>
                        </p>

                    </div>

                </div>

            <?php
            }
        } else {
            ?>
            <div class="empty">
                No Orders Found
            </div>
        <?php
        }
        ?>

    </div>

    <a href="dashboard.php" class="continue-btn">
        Continue Shopping
    </a>

</body>

</html>