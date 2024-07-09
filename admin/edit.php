<?php 
require('db.php');
include('auth.php');
$id=$_REQUEST['id'];
$query = "SELECT * from products where id='".$id."'"; 

$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

if(isset($_POST["submit"]))
{
          $id=$_REQUEST["id"];
          $name=$_POST["name"];
          $price=$_POST["price"];
          $quantity=$_POST["quantity"];
          $charges=$_POST["charges"];
          $des=$_POST["des"];
          $fileName = $_FILES["file"]["name"];
        //   $fileSize = $_FILES['file']['size'];
          $tmpName = $_FILES["file"]["tmp_name"];
          move_uploaded_file($tmpName, '../admin/img2/' . $fileName);
          include_once("update_image.php");
          $update="UPDATE products SET 'photo'=$fileName ,'name1'=$name,'price'=$price,'quantity'=$quantity,'transport_and_other'=$charges,'description1'=$des WHERE 'id'=$id";
         // $update2="UPDATE `products` SET `photo`=$fileName,`name1`=$name,`price`=$price,`quantity`=$quantity,`transport_and_other`=$charges,`description1`=$des WHERE `id`=$id";
          mysqli_query($con, $update) or die("could not update");
}else {
  echo"failed to update";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/update.css"/>
</head>
<body>
<section class="header">

<div class="logo">Krutin Minerals Industries</div> 

</section>

<div class="form1">
<div class="form">
<center><nav class="navbar">
        <a href="dashboard.php">Dashboard</a> 
         <a href="view.php">View Products</a>
         <a href="view.php">View Appoinment</a>  
         <a href="logout.php">Logout</a>
        </nav>
<h1>Update Record</h1>

<div>
<form name="form" method="post" action="" enctype="multipart/form-data"> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

<center><img src="img2/<?php echo $row["photo"]; ?>" width = 200 title="<?php echo $row['photo']; ?>"></img></center>
<center><input type="file" name="file" value="<?php echo $file_name;?>"></center>
<center><p><input type="text" name="name" placeholder="Enter Name" value="<?php echo $row['name1'];?>" class="textbox" required /></p></center>
<center><p><input type="number" name="price" placeholder="price" value="<?php echo $row['price'];?>" class="textbox" required /></p></center>
<center><p><input type="number" name="quantity" value="<?php echo $row['quantity'];?>" placeholder="quantity(in tons)" class="textbox" required /></p></center>
<center><p><input type="text" name="charges" placeholder="transport and other charges" value="<?php echo $row['transport_and_other'];?>" class="textbox" required /></p></center>
<center><p><input type="text" name="des" placeholder="Description" class="textbox" value="<?php echo $row['description1'];?>">
<center><p><input name="submit" type="submit" value="update" class="submit" /></p></center>

</form>


<br /><br /><br /><br />

</div>
</div>
</body>
</html>
