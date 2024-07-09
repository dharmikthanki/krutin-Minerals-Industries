<?php 
require('db.php');


// select data from database
$select="Select * from products";
$result=mysqli_query($con,$select);
$row=mysqli_fetch_array($result);
//set path
$path='../admin/img2'. $row['photo'];
unlink($path);
//header('location: view.php');
?>