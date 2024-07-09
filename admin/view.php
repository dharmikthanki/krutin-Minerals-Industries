<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
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
         <a href="app.php">View Appoinment</a>  
         <a href="logout.php">Logout</a>
        </nav>
</center>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
    <th><strong>S.No</strong></th>
    <th><strong>Photo</strong></th>
    <th><strong>Name</strong></th>
    <th><strong>price</strong></th>
    <th><strong>quantity</strong></th>
    <th><strong>transport and other charges</strong></th>
    <th><strong>description</strong></th>
    <th><strong>Edit</strong></th>
    <th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from products;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td><?php echo $row["id"]; ?></td>
    <td><img src="img2/<?php echo $row["photo"]; ?>" width = 200 title="<?php echo $row['photo']; ?>"> </td>
    <td><?php echo $row["name1"]; ?></td>
    <td><?php echo $row["price"]; ?></td>
    <td><?php echo $row["quantity"]; ?></td>
    <td><?php echo $row["transport_and_other"]; ?></td>
    <td><?php echo $row["description1"]; ?></td>
    <td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
    <td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
<br /><br /><br /><br />
</div>
</body>
</html>
