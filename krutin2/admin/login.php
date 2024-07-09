
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/login.css" />
</head>
<body class="main">
<section class="header">

<center><div class="logo">Krutin Minerals Industries<div></center>

</section>
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM 'users' WHERE username='$username' and password='".($password)."'";
		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form' color='white' align='center'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>

<div class="form">
<h1 class="sig" align="center">Admin Login</h1>
<form action="" method="post" name="login" class="login">
<input type="text"  name="username" placeholder="Username" class="un" align="center" required />
<input type="password" name="password" placeholder="Password" class="pass" align="center" required /><br>
<input name="submit" type="submit" class="submit" value="Login" />
</form>


<br /><br />

</div>
<?php } ?>


</body>
</html>
