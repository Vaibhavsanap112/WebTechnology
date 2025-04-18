

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<script>
  function isValied() {
    if (document.f1.id.value == "") {
      alert("plese enter the Name")
      document.f1.id.focus();
      return false;
    }
    if (document.f1.email.value == "") {
      alert("plese enter the Name")
      document.f1.email.focus();
      return false;
    if (document.f1.name.value == "") {
      alert("please Enter the ROll no ")
      document.f1.name.focus();
      return false;
    }
    if (document.f1.price.value == "") {
      alert("plese enter the Email")
      document.f1.price.focus();
      return false;
    }
    if (document.f1.date.value == "") {
      alert("plese enter the Adress")
      document.f1.date.focus();
      return false;
    }
    if (document.f1.description.value == "") {
      alert("plese enter the Adress")
      document.f1.description.focus();
      return false;
    }
    if (document.f1.quintity.value == "") {
      alert("plese enter the Adress")
      document.f1.quintity.focus();
      return false;
    }
    return true;
  }
  }
</script>

<body>
  <div class="heading">
    <h1>Invantory Management System</h1>
  </div>
  <div class="content">
    <div class="add">
      <h4>Add the Products</h4>
      <form name="f1" method="post" onsubmit="return isValied()">
        <div class="tab">
          <table>
            <tr>
              <td><label for="id">Id:</label></td>
              <td><input type="text" name="id" id="id"></td>
            </tr>
            <tr>
              <td><label for="name">Name:</label></td>
              <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
              <td><label for="price">Email:</label></td>
              <td><input type="text" name="email" id="price"></td>
            </tr>
            <tr>
              <td><label for="price">Price:</label></td>
              <td><input type="text" name="price" id="price"></td>
            </tr>
            <tr>
              <td><label for="price">Quntiity:</label></td>
              <td><input type="text" name="quantity" id="price"></td>
            </tr>
            <tr>
              <td><label for="price">Date:</label></td>
              <td><input type="date" name="date" id="price"></td>
            </tr>

            <tr>
              <td><label for="price">Description:</label></td>
              <td><input type="text" name="description" id="price"></td>
            </tr>
          </table>
          <button name="b1">Add Products</button>
        </div>
      </form>
    </div>

  </div>
  <div class="show">
    <button><a href="product.php">Show All Products</a></button>
  </div>

  <?php
  include 'db.php';
  if (isset($_POST['b1'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $sql = "INSERT INTO products (name, price, quntity, date, description,email) 
        VALUES ('$name', '$price', '$quantity', '$date', '$description','$email')";

if ($con->query($sql) === TRUE) {
  echo "<script>alert('Data inserted successfully!');</script>";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}


  }


  ?>

</body>

</html>