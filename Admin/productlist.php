<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Product List</title>
</head>
<body>
    <div class="container">
        <div class="snavbar" >
            <nav class="snavigation">
                <br>
                <a class="smain-icon" href="admin.php">Anmol</a>
                <a class="snav-icon" href="adminprofile.php">Hello, </a>
                <a class="snav-icon" href="admin.php">Home</a>
                <a class="snav-icon" href="productlist.php" style="background-color: gray;  border-radius: 12px 12px 0px 0px;">Product List</a>
                <a class="snav-icon" href="addproject.php">Add Product</a>
                
                <a class="slogout" href="adminlogout.php">Logout</a>
                <br>
            </nav>

        </div>
        <div class="product-page">
            <h1>Product List</h1>
        <?php for($i=0;$i<10;$i++){?>
            <div class="product-card">
                <?php 
                $imgUrl = "Image\IoT health.png"; 
                $productName = "Anmol";
                $productSd = "Printed men T-Shirt";
                $productpr = "$499";
                $productopr = "$799";
                $productdis = "50%";
                $productSize = "S,M,L,XL,XXL,XXXL";

                ?> 
                <a href="product_detail.php">
                <img class="productimg" src="<?= $imgUrl; ?>"/>
                </a>
                <div class="product-detail">
                <p class="Product-name"><?php echo $productName; ?> </p>
                <p class="Product-sd"><?php echo $productSd; ?> </p>
                <p class="Product-size">Size <?php echo $productSize; ?> </p>
                </div>
                <div class="product-OP">
                    <h3 class="Product-price"><?php echo $productpr; ?> </h3>
                    <p class="Product-Oprice"><?php echo $productopr; ?> </p>
                    <p class="Product-discount"><?php echo $productdis; ?> off </p>
                    
                </div>
                
            </div>
         <?php }?>
        </div>
    </div>
    
</body>
</html>