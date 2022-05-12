<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add Products</title>
</head>
<body>
    <div class="container">
        <div class="snavbar" >
                <nav class="snavigation">
                    <br>
                    <a class="smain-icon" href="admin.php">Anmol</a>
                    <a class="snav-icon" href="adminprofile.php">Hello, </a>
                    <a class="snav-icon" href="admin.php">Home</a>
                    <a class="snav-icon" href="productlist.php">Product List</a>
                    <a class="snav-icon" href="addproject.php" style="background-color: gray;  border-radius: 12px 12px 0px 0px;">Add Product</a>
                    
                    <a class="slogout" href="adminlogout.php">Logout</a>
                    <br>
                </nav>

        </div>
        <div class="addproduct">
            <h1>Add Product</h1>
            <form action="addproject.php" method="post" enctype="multipart/form-data">
                <input class="productname" type="text" name="productname" placeholder="Enter Product Name"><br>
                <br>
                <br>
              Please Upload Product Image  <input class="productname" type="file" name="file" placeholder="Select Product Image"><br>
                <textarea class="productname" type="msg" name="productsd" placeholder="Enter Product Discription"></textarea><br>
                <input class="productname" type="text" name="productprize" placeholder="Enter Product Prize"><br>
                <input class="productname" type="text" name="productsize" placeholder="Enter Product Size"><br>
                <input class="productname" type="text" name="productdiscount" placeholder="Enter Product Discount"><br>
                <input class="productname" type="text" name="productorignalprize" placeholder="Enter Product Prize Without Discount">
                <input class="productname" type="submit" name="submit" value="Add Itom">
                <br>
                <br>
                <br>

            </form>
        </div>
    </div>
    
</body>
<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName     = "product";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
<?php
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into product_detail (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>
</html>