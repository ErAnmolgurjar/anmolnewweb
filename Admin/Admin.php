<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Admin</title>
</head>
<body>
  <div class="container">
    <div class="snavbar" >
      <nav class="snavigation">
          <br>
          <a class="smain-icon" href="admin.php">Anmol</a>
          <a class="snav-icon" href="adminprofile.php">Hello, </a>
          <a class="snav-icon" href="admin.php" style="background-color: gray;  border-radius: 12px 12px 0px 0px;">Home</a>
          <a class="snav-icon" href="productlist.php">Product List</a>
          <a class="snav-icon" href="addproject.php">Add Product</a>

          
          <a class="slogout" href="adminlogout.php">Logout</a>
          <br>
      </nav>

    </div>
    <div class="mainpage">
      <div class="totalproduct">
        <h1> Total Products </h1>
        <h2><?php echo 445; ?></h2>

      </div>
      <div class="totalproduct">
        <h1> Total Sale </h1>
        <h2><?php echo 445; ?></h2>

      </div>
    </div>
    <div class="mainpage">
      <div class="totalproduct">
        <h1> Total Costumer </h1>
        <h2><?php echo 445; ?></h2>

      </div>
      <div class="totalproduct">
        <h1> Total Profit </h1>
        <h2><?php echo 445; ?></h2>

      </div>
    </div>
  </div>
  
</body>
</html>