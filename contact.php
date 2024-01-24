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
        header('Location: home.php');
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
            <h1>contact us</h1>
        </div>
        <div class="title2">
            <a href="home.php">Home/</a><span>contact us</span>
        </div>
        <!-- /* ----------------------------------------Service------------------------------- */ -->
        <section class="service">        
            <?php include 'components/service.php' ?>
        </section>
        <!-- /* ----------------------------------------------------------------------- */ -->
        <div class="main-container">
            <div class="form-container">
                <form method="post">
                    <div class="title">
                        <img src="img/download.png" class="logo">
                        <h1>leave a message</h1>
                    </div>
                    <div class="input-field">
                        <p>Your Name <sup>*</sup></p>
                        <input type="text" name="name">
                    </div>
                    <div class="input-field">
                        <p>Your email id<sup>*</sup></p>
                        <input type="email" name="email">
                    </div>
                    <div class="input-field">
                        <p>Your Number <sup>*</sup></p>
                        <input type="text" name="number">
                    </div>
                    <div class="input-field">
                        <p>Your Message<sup>*</sup></p>
                        <textarea name="message"></textarea>
                    </div>
                    <button type="submit" name="sumbit-btn" class="btn">send message</button>
                </form>
            </div>
        </div>
        <div class="address">
            <div class="title">
                <img src="img/download.png" alt="">
                <h1>contact detail</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, exercitationem!</p>
            </div>
            <div class="box-container">
                <div class="box">
                    <i class="bx bxs-map-pin"></i>
                    <div>
                        <h4>address</h4>
                        <p>1902 Merigold lane, coral May</p>
                    </div>
                </div>
                <div class="box">
                    <i class="bx bxs-phone-call"></i>
                    <div>
                        <h4>Phone number</h4>
                        <p>6935241575</p>
                    </div>
                </div>
                <div class="box">
                    <i class="bx bxs-envelope"></i>
                    <div>
                        <h4>email</h4>
                        <p>selenaanshari@gmail.com</p>
                    </div>
                </div>

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
