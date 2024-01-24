
<?php
    include 'components/connection.php';
    session_start();

    if(isset($_SESSION['user_id'])){
        $user_id=$_SESSION['user_id'];
    }else{
        $user_id='';
    }
    //register error
    if(isset($_POST['name'])){
        $email=$_POST['email'];
        $email=filter_var($email,FILTER_SANITIZE_STRING);
        $pass=$_POST['pass'];
        $pass=filter_var($pass,FILTER_SANITIZE_STRING);

        $select_user=$conn->prepare("SELECT * From `users` WHERE email=? AND pass=?");
        $select_user->execute([$email, $pass]);
        $row =$select_user->fetch(PDO::FETCH_ASSOC);
        if($select_user->rowCount()>0){
            $_SESSION['user_id']=$row['id'];
            $_SESSION['user_name']=$row['name'];
            $_SESSION['user_email']=$row['email'];
            header('Location: home.php');
            exit();
        }else{
            $message="incorrect username or password";
        }
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
    <title>Green tea-register now</title>
</head>
<body>
    <div class="main-container">
        <section class="form-container">
            <div class="title">
                <img src="img/download.png" alt="">
                <h1>login now</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores saepe sequi labore repellendus!</p>
            </div>
            <form method="post">
                <div class="input-field">
                    <p>your name <sup>*</sup></p>
                    <input type="text" name="name" require placeholder="enter your name" maxlength="50">
                </div>
                <div class="input-field">
                    <p>your email <sup>*</sup></p>
                    <input type="text" name="email"  require placeholder="enter your email" maxlength="50" oninput="this.value=this.value.replace(/\s/g,'')">
                </div>
                <div class="input-field">
                    <p>Your Password <sup>*</sup></p>
                    <input type="text" name="pass" require placeholder="enter your password" maxlength="50" oninput="this.value=this.value.replace(/\s/g,'')">
                </div>
                <input type="submit" name="submit" value="login now" class="btn">
            </form>
            <?php if (isset($message)): ?>
                <div id="popup" class="popup">
                    <div class="popup-content">
                        <p id="popup-message"><?php echo $message; ?></p>
                    </div>
                </div>
            <?php endif; ?>
            <!-- <button class="btn"> Submit</button> -->
            <p>do not have an account ? <a href="register.php">register now</a></p>
        </section>
    </div>
    <script src="insert.js"></script>
</body>
</html>