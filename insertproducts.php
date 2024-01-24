<?php
include 'components/connection.php'; // Adjust the include path

if (isset($_POST['name'])) {
    $image_id=unique_id();
    $name = $_POST['name'];
    $price = $_POST['price'];
    $product_details=$_POST['product_details'];
    // File upload handling
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_folder = "images/"; // Adjust the folder path

    // Move the uploaded file to the destination folder
    move_uploaded_file($image_tmp, $image_folder . $image_name);

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO `products` (id,name, price, image,product_details) VALUES (?, ?, ?,?,?)");
    $stmt->execute([$image_id,$name, $price, $image_name,$product_details]);
    $success_msg='product added successfully';
}
?>

<style>
    <?php include 'insert.css' ?>
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert products in Database</title>
</head>

<body>
    <div class="hero">
        <div class="card">
            <form method="post" class="product-form" enctype="multipart/form-data">
                <label for="name">Product Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter product name" required>
                
                <label for="price">Product Price:</label>
                <input type="text" id="price" name="price" placeholder="Enter product price" required>
                
                <label for="image">Product Image:</label>
                <input type="file" id="image" name="image" accept="image/jpeg, image/png, image/jpg image/AVIF" required>
                <textarea name="product_details" cols="30" rows="10" placeholder="enter more details about the products"></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
        <?php if (isset($success_msg)): ?>
            <div id="popup" class="popup">
                <div class="popup-content">
                    <div class="checkmark">&#10003;</div>
                    <p id="popup-message"><?php echo $success_msg; ?></p>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <script src="insert.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>

</html>