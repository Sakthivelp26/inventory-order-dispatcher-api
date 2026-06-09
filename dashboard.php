<?php

session_start();

if (isset($_POST['add_to_cart'])) {
    $product = [
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'price' => $_POST['price']
        // 'images' => $_POST['image']
    ];

    $_SESSION['cart'][] = $product;

    header("Location: dashboard.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>ShopSphere</title>
    <link rel="stylesheet" href="style.css">
    <style>
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
        .product{
            color: white;
        }
        .product img{
            width: 100%;
            height: 250px;
            border-radius: 5px;
        }
        .card{
            color: white;
        }
    </style>
</head>

<body class="hero">
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
    <main>
        <?php if (isset($_GET['success'])) { ?>
            <p id="successMsg" style="color:green; text-align:center;">Order placed successfully!</p>
            <script>
                setTimeout(function() {
                    document.getElementById('successMsg').style.display = 'none';
                }, 5000);
            </script>
        <?php } ?>
        <section class="stats">
            <div class="card">
                <p>Total Sales</p>
                <h2>$12,450</h2>
            </div>

            <div class="card">
                <p>Products</p>
                <h2>1840</h2>
            </div>

            <div class="card">
                <p>Low Stock</p>
                <h2>32</h2>
            </div>
        </section>
        <br>
        <div class="products">
            <div class="product">

                <img src="images/1plus.jpg">

                <h3>1+ Never Settle</h3>

                <h2>$349.99</h2>

                <span class="stock">
                    15 In Stock
                </span>

                <form action="place_order.php" method="POST">
                    <input type="hidden" name="product_name" value="1+ Never Settle">
                    <input type="hidden" name="price" value="349.99">
                    <input type="hidden" name="image" value="images/1plus.jpg">
                    <button type="submit" name="add_to_cart">Buy Now</button>
                </form>
            </div>

            <div class="product">

                <img src="images/iphone.jpg">

                <h3>Apple iPhone 15 Pro Max</h3>

                <h2>$349.99</h2>

                <span class="stock">
                    10 In Stock
                </span>

                <form action="place_order.php" method="POST">
                    <input type="hidden" name="product_name" value="Apple iPhone 15 Pro Max">
                    <input type="hidden" name="price" value="349.99">
                    <input type="hidden" name="image" value="images/iphone.jpg">
                    <button type="submit" name="add_to_cart">Buy Now</button>
                </form>

            </div>

            <div class="product">

                <img src="images/nokia.jpg">

                <h3>Nokia phone</h3>

                <h2>$349.99</h2>

                <span class="stock">
                    10 In Stock
                </span>

                <form action="place_order.php" method="POST">
                    <input type="hidden" name="product_name" value="Nokia phone">
                    <input type="hidden" name="price" value="349.99">
                    <input type="hidden" name="image" value="images/nokia.jpg">
                    <button type="submit" name="add_to_cart">Buy Now</button>

                </form>

            </div>

            <div class="product">

                <img src="images/oppo.jpg">

                <h3>OPPO K14x 5G</h3>

                <h2>$349.99</h2>

                <span class="stock">
                    21 In Stock
                </span>

                <form action="place_order.php" method="POST">
                    <input type="hidden" name="product_name" value="OPPO K14x 5G">
                    <input type="hidden" name="price" value="349.99">
                    <input type="hidden" name="image" value="images/oppo.jpg">
                    <button type="submit" name="add_to_cart">Buy Now</button>
                </form>

            </div>
            <div class="product">

                <img src="images/redmi.jpg">

                <h3>Redmi 13 5G</h3>

                <h2>$349.99</h2>

                <span class="stock">
                    18 In Stock
                </span>

                <form action="place_order.php" method="POST">
                    <input type="hidden" name="product_name" value="Redmi 13 5G">
                    <input type="hidden" name="price" value="349.99">
                    <input type="hidden" name="image" value="images/redmi.jpg">
                    <button type="submit" name="add_to_cart">Buy Now</button>
                </form>

            </div>
            <div class="product">

                <img src="images/rog.jpg">

                <h3>ASUS ROG device</h3>

                <h2>$349.99</h2>

                <span class="stock">
                    7 In Stock
                </span>

                <form action="place_order.php" method="POST">
                    <input type="hidden" name="product_name" value="ASUS ROG device">
                    <input type="hidden" name="price" value="349.99">
                    <input type="hidden" name="image" value="images/rog.jpg">
                    <button type="submit" name="add_to_cart">Buy Now</button>
                </form>

            </div>
            <div class="product">

                <img src="images/samsung.jpg">

                <h3>Galaxy A37 5G</h3>

                <h2>$349.99</h2>

                <span class="stock">
                    10 In Stock
                </span>

                <form action="place_order.php" method="POST">
                    <input type="hidden" name="product_name" value="Galaxy A37 5G">
                    <input type="hidden" name="price" value="349.99">
                    <input type="hidden" name="image" value="images/samsung.jpg">
                    <button type="submit" name="add_to_cart">Buy Now</button>
                </form>

            </div>
            <div class="product">

                <img src="images/vivo.jpg">

                <h3> vivo V60 5G</h3>

                <h2>$349.99</h2>

                <span class="stock">
                    12 In Stock
                </span>

                <form action="place_order.php" method="POST">
                    <input type="hidden" name="product_name" value="vivo V60 5G">
                    <input type="hidden" name="price" value="349.99">
                    <input type="hidden" name="image" value="images/vivo.jpg">
                    <button type="submit" name="add_to_cart">Buy Now</button>
                </form>

            </div>
            <div class="product">

                <img src="images/realmepb.jpg">

                <h3>Realme Power Bank</h3>

                <h2>$349.99</h2>

                <span class="stock">
                    15 In Stock
                </span>

                <form action="place_order.php" method="POST">
                    <input type="hidden" name="product_name" value="Realme Power Bank">
                    <input type="hidden" name="price" value="349.99">
                    <input type="hidden" name="image" value="images/realmepb.jpg">
                    <button type="submit" name="add_to_cart">Buy Now</button>
                </form>

            </div>
            <div class="product">

                <img src="images/redmipb.jpg">

                <h3>Redmi Power Bank</h3>

                <h2>$349.99</h2>

                <span class="stock">
                    19 In Stock
                </span>

                <form action="place_order.php" method="POST">
                    <input type="hidden" name="product_name" value="Redmi Power Bank">
                    <input type="hidden" name="price" value="349.99">
                    <input type="hidden" name="image" value="images/redmipb.jpg">
                    <button type="submit" name="add_to_cart">Buy Now</button>
                </form>

            </div>
            <div class="product">

                <img src="images/samsungpb.jpg">

                <h3>Samsung Power Bank</h3>

                <h2>$349.99</h2>

                <span class="stock">
                    25 In Stock
                </span>

                <form action="place_order.php" method="POST">
                    <input type="hidden" name="product_name" value="Samsung Power Bank">
                    <input type="hidden" name="price" value="349.99">
                    <input type="hidden" name="image" value="images/samgsungpb.jpg">
                    <button type="submit" name="add_to_cart">Buy Now</button>
                </form>

            </div>
            <div class="product">

                <img src="images/iphonepb.jpg">

                <h3>Apple iphone Power Bank</h3>

                <h2>$349.99</h2>

                <span class="stock">
                    10 In Stock
                </span>

                <form action="place_order.php" method="POST">
                    <input type="hidden" name="product_name" value="Apple iphone Power Bank">
                    <input type="hidden" name="price" value="349.99">
                    <input type="hidden" name="image" value="images/iphone.jpg">
                    <button type="submit" name="add_to_cart">Buy Now</button>
                </form>

            </div>
            <div class="product">

                <img src="images/watch1.jpg">

                <h3>Fitness Tracker Smartwatch</h3>

                <h2>$349.99</h2>

                <span class="stock">
                    17 In Stock
                </span>

                <form action="place_order.php" method="POST">
                    <input type="hidden" name="product_name" value="Fitness Tracker Smartwatch">
                    <input type="hidden" name="price" value="349.99">
                    <input type="hidden" name="image" value="images/watch1.jpg">
                    <button type="submit" name="add_to_cart">Buy Now</button>
                </form>

            </div>
            <div class="product">

                <img src="images/watch2.jpg">

                <h3>boAt Wave Fortune</h3>

                <h2>$349.99</h2>

                <span class="stock">
                    20 In Stock
                </span>

                <form action="place_order.php" method="POST">
                    <input type="hidden" name="product_name" value="boAt Wave Fortune">
                    <input type="hidden" name="price" value="349.99">
                    <input type="hidden" name="image" value="images/watch2.jpg">
                    <button type="submit" name="add_to_cart">Buy Now</button>
                </form>

            </div>
            <div class="product">

                <img src="images/watch3.jpg">

                <h3>Gps Fitness Tracker Smartwatch</h3>

                <h2>$349.99</h2>

                <span class="stock">
                    14 In Stock
                </span>

                <form action="place_order.php" method="POST">
                    <input type="hidden" name="product_name" value="Gps Fitness Tracker Smartwatch">
                    <input type="hidden" name="price" value="349.99">
                    <input type="hidden" name="image" value="images/watch3.jpg">
                    <button type="submit" name="add_to_cart">Buy Now</button>
                </form>

            </div>
            <div class="product">

                <img src="images/watch4.jpg">

                <h3>Classic watch</h3>

                <h2>$349.99</h2>

                <span class="stock">
                    11 In Stock
                </span>

                <form action="place_order.php" method="POST">
                    <input type="hidden" name="product_name" value="Classic watch">
                    <input type="hidden" name="price" value="349.99">
                    <input type="hidden" name="image" value="images/watch4.jpg">
                    <button type="submit" name="add_to_cart">Buy Now</button>
                </form>

            </div>
        </div>
    </main>

</body>

</html>