<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Product</title>
</head>
<body>

<?php
include 'db.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $con->query("SELECT * FROM products WHERE id=$id");

   
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Product not found!";
        exit;
    }
} else {
    echo "Invalid request!";
    exit;
}
?>

<div style="display: flex;justify-content:center">
<form method="post" style="padding: 5px;" >
    <input style="padding: 5px;" type="hidden" name="id" value="<?= $row['id'] ?>">
    <input style="padding: 5px; margin:4px;" type="text" placeholder="Name" name="name" value="<?= $row['name'] ?>"><br>
    <input style="padding: 5px; margin:4px;" type="email" placeholder="Email" name="email" value="<?= $row['email'] ?>"><br>
    <input style="padding: 5px; margin:4px;" type="text" placeholder="Price" name="price" value="<?= $row['price'] ?>"><br>
    <input style="padding: 5px; margin:4px;" type="text" placeholder="Quntity" name="quantity" value="<?= $row['quntity'] ?>"><br>
    <input style="margin-left: 45px;margin-top:3px;background-color:blue;" type="submit" name="update" value="Update">
</form>

</div>
<button><a href="product.php">Back To Product</a></button>



<?php

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity']; 

  
    $query = "UPDATE products SET name='$name', email='$email', price='$price', quntity='$quantity' WHERE id=$id";
    
    if ($con->query($query)) {
        header("Location: product.php");
        exit;
    } else {
        echo "Error updating record: " . $con->error;
    }
}
?>

</body>
</html>
