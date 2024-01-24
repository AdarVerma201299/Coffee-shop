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


if (isset($_GET['get_id'])) {
    $get_id = $_GET['get_id'];
} else {
    $get_id = '';
    header('location:order.php');
}

if (isset($_POST['cancel'])) {
    $update = $conn->prepare("UPDATE `orders` SET status=? where id=?");
    $update->execute(['cancelled', $get_id]);
    header('location:order.php');
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
    <title>Green Coffee - order detail page</title>
</head>

<body>
    <?php include 'components/header.php' ?>
    <div class="main">
        <div class="banner">
            <h1>order detail</h1>
        </div>
        <div class="title2">
            <a href="home.php">Home/</a><span>order detail</span>
        </div>
        <section class="order-detail">
            <div class="box-container">
                <div class="title">
                    <img src="img/download.png" alt="" class="logo">
                    <h1>my order</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint saepe laborum nulla.</p>
                </div>
            </div>
            <div class="box-container">
                <?php
                $grand_total = 0;
                $select_order = $conn->prepare("SELECT * FROM `orders` WHERE id=? LIMIT 1");
                $select_order->execute([$get_id]);
                if ($select_order->rowCount() > 0) {
                    while ($fetch_order = $select_order->fetch(PDO::FETCH_ASSOC)) {
                        $select_product = $conn->prepare("SELECT * FROM `products` WHERE id=? LIMIT 1");
                        $select_product->execute([$fetch_order['product_id']]);
                        if ($select_product->rowCount() > 0) {
                            while ($fetch_product = $select_product->fetch(PDO::FETCH_ASSOC)) {
                                $sub_total = $fetch_product['price'];
                                $grand_total += $sub_total;
                ?>
                                <div class="box">
                                    <div class="col">
                                        <p class="title"><i class="bi bi-calendar-fill"></i><?= $fetch_order['order_date']; ?></p>
                                        <img src="images/<?= $fetch_product['image']; ?>" class="image">
                                        <p class="price"><?= $fetch_product['price']; ?> X <?= $fetch_order['qty']; ?></p>
                                        <p class="name"><?= $fetch_product['name']; ?></p>
                                        <p class="grand_total">Total amount payable: <span>$<?= $grand_total; ?></span></p>
                                    </div>
                                    <div class="col">
                                        <p class="title">Billing adrress</p>
                                        <p class="user"><i class="bi bi-person-bounding-box"></i><?= $fetch_order['name']; ?></p>
                                        <p class="user"><i class="bi bi-phone"></i><?= $fetch_order['number']; ?></p>
                                        <p class="user"><i class="bi bi-envelope"></i><?= $fetch_order['email']; ?></p>
                                        <p class="user"><i class="bi bi-pin-map-fill"></i><?= $fetch_order['address']; ?></p>
                                        <p class="title">status</p>
                                        <p class="status" style="color:<?php if ($fetch_order['status'] == 'deliverd') {
                                                                            echo 'green';
                                                                        } elseif ($fetch_order['status'] == 'Cancelled') {
                                                                            echo 'red';
                                                                        } else {
                                                                            echo 'orange';
                                                                        } ?>"><?= $fetch_order['status']; ?></p>
                                        <?php if ($fetch_order['status'] == 'cancelled') { ?>
                                            <a href="checkout.php?get_id=<?= $fetch_product['id']; ?>" class="btn">Order again</a>
                                        <?php } else { ?>
                                            <form method="post">
                                                <button type="submit" name="cancel" class="btn" onclick="return confirm('do you want to cancel this order')">cancel order</button>
                                        <?php } ?>
                                    </div>
                                </div>
                <?php
                            }
                        } else {
                            echo '<p class="empty">product not fond</p>';
                        }
                    }
                } else {
                    echo '<p class="empty">no order found</p>';
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

<!-- <form method="post" class="box">
    <button type="submit" name="empty_cart" class="btn" onclick="return confirm('do you want to cancel this order')">Empty Cart</button>
</form> -->