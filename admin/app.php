<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Appointments</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<section class="header">

<div class="logo">Krutin Minerals Industries</div>

</section>

<div class="form1">

<center><nav class="navbar">
        <a href="dashboard.php">Dashboard</a> 
         <a href="view.php">View Records</a>  
         <a href="app.php">View Appointment</a>
         <a href="logout.php">Logout</a>
        </nav>
</center>
<center><h2>Requests shown below </h2></center>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
    <th><strong>S.No</strong></th>
    
    <th><strong>Name</strong></th>
    <th><strong>Name of firm</strong></th>
    <th><strong>Adrress</strong></th>
    <th><strong>Delivery</strong></th>
    <th><strong>Date</strong></th>
    <th><strong>Product</strong></th>
    <th><strong>contact_nu</strong></th>
    <th><strong>email</strong></th>
    
    <th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from book_form;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td><?php echo $count; ?></td>
    
    <td><?php echo $row["name1"]; ?></td>
    <td><?php echo $row["name_of_firm"]; ?></td>
    <td><?php echo $row["address1"]; ?></td>
    <td><?php echo $row["delivery"]; ?></td>
    <td><?php echo $row["date1"]; ?></td>
    <td><?php echo $row["app_product"]; ?></td>
    <td><?php echo $row["contact_nu"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    
    <td align="center"><a href="delete2.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>

<br /><br /><br /><br />

</div>
</body>
</html>
