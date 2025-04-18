<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="products.css">
</head>
<body>
  <h1>Product page</h1>
  <button><a href="Home.php">Home</a></button>
  <div class="container">
    <?php
    include 'db.php';
    $sql = "select * from products";
    $rs = mysqli_query($con,$sql);
   if (mysqli_num_rows($rs) > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>";
    echo "<tr>
    <th style= 'background-color:gray'>ID</th>
    <th style= 'background-color:gray'>Name</th>
    <th style= 'background-color:gray'>Email</th>
    <th style= 'background-color:gray'>Price</th>
    <th style= 'background-color:gray'>Quantity</th>
    <th style= 'background-color:gray'>Date</th>
    <th style= 'background-color:gray'>Description</th>
  </tr>";
    while($row = mysqli_fetch_assoc($rs))
{
  echo "<tr style='background-color:#f2f2f2;'> 
  <td>".$row['id']."</td>
  <td>".$row['name']."</td>
  <td>".$row['email']."</td>
  <td>".$row['price']."</td>
  <td>".$row['quntity']."</td>
  <td>".$row['date']."</td>
  <td>".$row['description']."</td>
  <td><a href='edit.php?id=" . $row['id'] . "'>Edit</a></td>
</tr>";

}
  }
  echo "</table>";
    ?>
   
  </div>
</body>
</html>