<?php

 
$db = require('db.php');
include("auth.php");

$status = "";
$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";

if(isset($_POST["submit"])){
        if($_FILES["image"]["error"] == 4){
          echo
          "<script> alert('Image Does Not Exist'); </script>";
        }
        else{
          $name=$_POST["name"];
          $price=$_POST["price"];
          $quantity=$_POST["quantity"];
          $charges=$_POST["charges"];
          $des=$_POST["des"];
          $fileName = $_FILES["image"]["name"];
          $fileSize = $_FILES["image"]["size"];
          $tmpName = $_FILES["image"]["tmp_name"];
      
          $validImageExtension = ['jpg', 'jpeg', 'png'];
          $imageExtension = explode('.', $fileName);
          $imageExtension = strtolower(end($imageExtension));
          if ( !in_array($imageExtension, $validImageExtension) ){
            echo
            "
            <script>
              alert('Invalid Image Extension');
            </script>
            ";
          }
          else if($fileSize > 1000000){
            echo
            "
            <script>
              alert('Image Size Is Too Large');
            </script>
            ";
          }
          else{
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;
            move_uploaded_file($tmpName, '../admin/img2/' . $newImageName);
            $query = "INSERT INTO products (photo, name1, price, quantity,transport_and_other, description1) VALUES ('$newImageName','$name','$price','$quantity','$charges','$des')";
            mysqli_query($con, $query);
            echo
            "
            <script>
              alert('Successfully Added');
              document.location.href = 'view.php';
            </script>
            ";
          }
        }
      }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/insert.css" />
</head>
<body>
<section class="header">

   <div class="logo">Krutin Minerals Industries</div>

</section>
<div class="form">
<center><nav class="navbar">
        <a href="dashboard.php">Dashboard</a> 
         <a href="view.php">View Products</a>
         <a href="view.php">View Appointments</a>  
         <a href="logout.php">Logout</a>
        </nav>
</center>

<div class="main">
<center><h1>Insert New Record</h1></center>
<form autocomplete="off" name="form" method="post" action="" enctype="multipart/form-data"> 
<input type="hidden" name="new" value="1" />
<center><p><input type="file" name="image" accept=".jpg, .jpeg, .png" class="textbox"  /></p></center>
<center><p><input type="text" name="name" placeholder="Enter Name"  class="textbox" pattern="[a-zA-Z][a-zA-Z ]+" required /></p></center>
<center><p><input type="number" name="price" placeholder="price" class="textbox" pattern="\d+(\.\d{2})?" required /></p></center>
<center><p><input type="number" name="quantity" placeholder="quantity(in tons)" class="textbox" required /></p></center>
<center><p><input type="number" name="charges" placeholder="transport and other charges" class="textbox"  /></p></center>
<center><p><textarea class="textbox" placeholder="Enter Description" name="des" required></textarea></p>
<center><p><input name="submit" type="submit" value="Submit" class="submit" /></p></center>
</form>

<br /><br /><br /><br />

</div>
</div>
</body>
</html>
