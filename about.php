<?php
    include 'components/connection.php';
    session_start();
    if(isset($_SESSION['user_id'])){
        $user_id=$_SESSION['user_id'];
    }else{
        $user_id='';
    }
    if(isset($_POST['logout'])){
        session_destroy();
        header("location:login.php");
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
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <title>Coffee Shop-About Us</title>
</head>

<body>
    <?php include 'components/header.php' ?>
    <div class="main">
        <div class="banner">
            <h1>about us</h1>
        </div>
        <div class="title2">
            <a href="home.php">Home/</a><span>About</span>
        </div>
        <div class="about-category">
            <div class="box">
                <img src="img/3.webp" alt="">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="veiw_product.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="img/about.png" alt="">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon Teaname</h1>
                    <a href="veiw_product.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.webp" alt="">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon Teaname</h1>
                    <a href="veiw_product.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="img/1.webp" alt="">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="veiw_product.php" class="btn">shop now</a>
                </div>
            </div>
        </div>
        <!-- /* ----------------------------------------Service------------------------------- */ -->
        <section class="service">        
            <div class="title">
                <img src="img/download.png" class="logo">
                <h1>why choose us </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, quas enim! Magni, aspernatur.</p>
            </div>
            <?php include 'components/service.php' ?>
        </section>
        <!-- /* ----------------------------------------------------------------------- */ -->

        <div class="about">
            <div class="row">
                <div class="img-box">
                    <img src="img/3.png" alt="">
                </div>
                <div class="detail">
                    <h1>Visit our beatiful showroom</h1>
                    <p>Our showroom is an expression of what we love doing: being creative with floral and plant 
                        arrangement.
                        Whether you are looking for a florist for your perfecct wedding, or just want to uplift any room
                        with 
                        some one of a king living decor, Bloson with love can help
                    </p>
                    <a href="veiw_products.php" class="btn">Shop now</a>
                </div>
            </div>
        </div>



        <div class="testimonial-container">
            <div class="title">
                <img src="img/download.png" alt="">
                <h1>What people say about</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe delectus suscipit nostrum.</p>
            </div>
            <div class="container">
                <div class="testimonial-item active">
                    <img src="img/01.jpg" alt="">
                    <h1>jhon smith</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi laborum tempore voluptate adipisci deleniti ipsa totam atque sit, vel, excepturi rem ad corporis id cumque dignissimos aperiam numquam. Repellat laborum quisquam perferendis magni placeat!</p>
                </div>
                <div class="testimonial-item">
                    <img src="img/02.jpg" alt="">
                    <h1>sara smith</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi laborum tempore voluptate adipisci deleniti ipsa totam atque sit, vel, excepturi rem ad corporis id cumque dignissimos aperiam numquam. Repellat laborum quisquam perferendis magni placeat!</p>
                </div>
                <div class="testimonial-item">
                    <img src="img/03.jpg" alt="">
                    <h1>selena ansari</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi laborum tempore voluptate adipisci deleniti ipsa totam atque sit, vel, excepturi rem ad corporis id cumque dignissimos aperiam numquam. Repellat laborum quisquam perferendis magni placeat!</p>
                </div>
                <div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
                <div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
            </div>

        </div>
        <!-- /* --------------------------------footer--------------------------------------- */ -->
        <?php include 'components/footer.php' ?>
        <!-- /* ----------------------------------------------------------------------- */ -->    
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="aboutscript.js" defer></script>
    <?php include 'components/alert.php' ?>
</body>

</html>