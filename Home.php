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
        header('Location: login.php');
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
    <title>Coffee Shop-Home page</title>
</head>

<body>
    <?php include 'components/header.php' ?>
    <div class="main">


        <!---------------------------------home slider start--------------------------------->
        <section class="home-section">
            <div class="slider">
                <div class="slider_slider slide1">
                    <div class="overlay"></div>
                    <div class="slider-detail">
                        <h1>Lorem, ipsum dolor.</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio corporis repellendus tenetur iure.</p>
                        <a href="veiw_products.php" class="btn">shop now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>

                <!-- slide end -->
                <div class="slider_slider slide2">
                    <div class="overlay"></div>
                    <div class="slider-detail">
                        <h1>welcome to my shop</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio corporis repellendus tenetur iure.</p>
                        <a href="veiw_products.php" class="btn">shop now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- slide end -->

                <div class="slider_slider slide3">
                    <div class="overlay"></div>
                    <div class="slider-detail">
                        <h1>welcome to my shop</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio corporis repellendus tenetur iure.</p>
                        <a href="veiw_products.php" class="btn">shop now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- slide end -->

                <div class="slider_slider slide4">
                    <div class="overlay"></div>
                    <div class="slider-detail">
                        <h1>welcome to my shop</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio corporis repellendus tenetur iure.</p>
                        <a href="veiw_products.php" class="btn">shop now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- slide end -->

                <div class="slider_slider slide5">
                    <div class="overlay"></div>
                    <div class="slider-detail">
                        <h1>welcome to my shop</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio corporis repellendus tenetur iure.</p>
                        <a href="veiw_products.php" class="btn">shop now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- slide end -->
                <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
                <div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>
            </div>
        </section>
        <!---------------------------------home slider end--------------------------------->

        <section class="thumb">
            <div class="box-container">
                <div class="box">
                    <img src="img/thumb2.jpg" alt="reload">
                    <h3>Green Tea</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime neque nulla nostrum!</p>
                    <i class="bx bxs-chevron-right"></i>
                </div>
                <div class="box">
                    <img src="img/thumb.jpg" alt="reload">
                    <h3>Green Tea</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime neque nulla nostrum!</p>
                    <i class="bx bxs-chevron-right"></i>
                </div>
                <div class="box">
                    <img src="img/thumb0.jpg" alt="reload">
                    <h3>Green Tea</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime neque nulla nostrum!</p>
                    <i class="bx bxs-chevron-right"></i>
                </div>
                <div class="box">
                    <img src="img/thumb1.jpg" alt="reload">
                    <h3>Green Tea</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime neque nulla nostrum!</p>
                    <i class="bx bxs-chevron-right"></i>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="box-container">
                <div class="box">
                    <img class="box-img" src="img/about-us.jpg" alt="reload.... ">
                </div>
                <div class="box">
                    <img src="img/download.png" alt="reload.... ">
                    <span>healthy tea</span>
                    <h1>Save up 50% off</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque laudantium commodi veniam?</p>
                </div>
            </div>
        </section>


        <!--------------------------------------Trending products shop now--------------------------->
        <section class="shop">
            <div class="tittle">
                <img src="img/download.png" alt="">
                <h1>Trending Products</h1>
            </div>
            <div class="row">
                <img src="img/about.png" alt="">
                <div class="row-detail">
                    <img src="img/basil.jpg" alt="">
                    <div class="top-footer">
                        <h1>a cup of green tea makes for you healthy</h1>
                    </div>
                </div>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="img/card.jpg" alt="">
                    <a href="veiw_products.php" class="btn">shop now</a>
                </div>
                <div class="box">
                    <img src="img/card0.jpg" alt="">
                    <a href="veiw_products.php" class="btn">shop now</a>
                </div>
                <div class="box">
                    <img src="img/card1.jpg" alt="">
                    <a href="veiw_products.php" class="btn">shop now</a>
                </div>
                <div class="box">
                    <img src="img/card2.jpg" alt="">
                    <a href="veiw_products.php" class="btn">shop now</a>
                </div>
                <div class="box">
                    <img src="img/10.jpg" alt="">
                    <a href="veiw_products.php" class="btn">shop now</a>
                </div>
                <div class="box">
                    <img src="img/6.webp" alt="">
                    <a href="veiw_products.php" class="btn">shop now</a>
                </div>
            </div>
        </section>
        <!-- /* ----------------------------------------------------------------------- */ -->
        <!-- /* --------------------------------Shop-Category-------------------------- */ -->
        <section class="shop-category">
            <div class="box-container">
                <div class="box">
                    <img src="img/6.jpg" alt="">
                    <div class="detail">
                        <span>BIG OFFERs</span>
                        <h1>Extra 15% off</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>
                </div>
                <div class="box">
                    <img src="img/7.jpg" alt="">
                    <div class="detail">
                        <span>New in taste</span>
                        <h1>Coffee house</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /* ----------------------------------------Service------------------------------- */ -->
        <section class="service">
            <?php include 'components/service.php' ?>
        </section>
        <!-- /* ----------------------------------------------------------------------- */ -->
        <!-- /* --------------------------------brand--------------------------------------- */ -->
        <section class="brand">
            <div class="box-container">
                <div class="box">
                    <img src="img/brand (1).jpg" alt="">
                </div>
                <div class="box">
                    <img src="img/brand (2).jpg" alt="">
                </div>
                <div class="box">
                    <img src="img/brand (3).jpg" alt="">
                </div>
                <div class="box">
                    <img src="img/brand (4).jpg" alt="">
                </div>
                <div class="box">
                    <img src="img/brand (5).jpg" alt="">
                </div>
            </div>
        </section>
        <!-- /* ----------------------------------------------------------------------- */ -->
        <!-- /* --------------------------------footer--------------------------------------- */ -->
        <?php include 'components/footer.php' ?>
        <!-- /* ----------------------------------------------------------------------- */ -->
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js" defer></script>
    <?php include 'components/alert.php' ?>
</body>

</html>