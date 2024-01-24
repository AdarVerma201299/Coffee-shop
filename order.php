    <?php
    include 'components/connection.php';
    session_start();
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    } else {
        $user_id = '';
    }
    if (isset($_POST['logout'])) {
        session_destroy();
        header("location: home.php");
    }

    ?>
    <style>
        <?php include 'style.css' ?>
    </style>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
        <title>Green Coffee - product detail page</title>
    </head>

    <body>
        <?php include 'components/header.php' ?>
        <div class="main">
            <div class="banner">
                <h1>product detail</h1>
            </div>
            <div class="title2">
                <a href="home.php">Home/</a><span>product detail</span>
            </div>
            <section class="orders">
                <div class="box-container">
                    <div class="title">
                        <img src="img/download.png" alt="" class="logo">
                        <h1>my order</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint saepe laborum nulla.</p>
                    </div>
                </div>
                <div class="box-container">
                    <?php
                    $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE user_id=? ORDER BY 'order_date' desc");
                    $select_orders->execute([$user_id]);
                    if ($select_orders->rowCount() > 0) {
                        while ($fetch_order = $select_orders->fetch(PDO::FETCH_ASSOC)) {
                            $select_products = $conn->prepare("SELECT * FROM `products` WHERE id=?");
                            $select_products->execute([$fetch_order['product_id']]);
                            // echo "JAi SiyaRam";
                            if ($select_products->rowCount() > 0) {
                                while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                                    <div class="box"  >
                                        <a href="view_order.php?get_id=<?= $fetch_order['id']; ?>">
                                        <p class="date"><i class="bi bi-calendar-fill"></i><span><?= $fetch_order['order_date']; ?></span></p>
                                        <img src="images/<?= $fetch_product['image']; ?>" alt="" class="image">
                                        <div class="row">
                                            <h3 class="name"><?= $fetch_product['name']; ?></h3>
                                            <p class="price">Price: $<?= $fetch_order['price']; ?>*<?= $fetch_order['qty']; ?></p>
                                            <!-- <p class="title">status</p> -->
                                            <p class="status" style="color:<?php if ($fetch_order['status'] == 'delivered') {
                                                                                echo "green";
                                                                            } elseif ($fetch_order['status'] == 'cancelled') {
                                                                                echo 'red';
                                                                            } else {
                                                                                echo 'orange';
                                                                            } ?>"><?=$fetch_order['status'];?></p>
                                        </div></a>
                                        
                                    </div>
                    <?php
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </section>
            <!-- /* --------------------------------footer--------------------------------------- */ -->
            <?php include 'components/footer.php' ?>
            <!-- /* ----------------------------------------------------------------------- */ -->
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="script.js" defer></script>
        <script src="insert.js"></script>
        <?php include 'components/alert.php' ?>
    </body>

    </html>