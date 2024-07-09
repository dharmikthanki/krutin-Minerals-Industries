<?php  
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html> 
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">

</head>
<body style="">
<div class="form">

<section class="header">

   <div class="logo">Krutin Minerals Industries</div>

</section>

<div class="bg">

    <center><h2>Welcome to Dashboard.</h2></center>

    <center><p><a href="index.php" class="c1">Home</a><p></center>
    <center><p><a href="insert.php" class="c1">Insert New Record</a></p></center>
    <center><p><a href="view.php" class="c1">View Products</a><p></center>
    <center><p><a href="app.php" class="c1">View Appoinment</a></p></center>
    <center><p><a href="cont.php" class="c1">View Contact</a></p></center>
    <center><p><a href="logout.php" class="c1">Logout</a></p></center>

</div>
<br /><br /><br /><br />

</div>
</body>
</html>
