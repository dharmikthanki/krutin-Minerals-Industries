<?php

   $connection = mysqli_connect('localhost','root','','book_db');
 /*  if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }else{
      echo"connected";
   }
   */
   if(isset($_POST["send"])){
      $fname = $_POST["firm"];
      $name = $_POST["name"];
      $address = $_POST["address"];
      $location = $_POST["location"];
      $date = $_POST["date"];
      $prod=$_POST["products"];
      
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      
      $request = " INSERT INTO book_form (name1, name_of_firm, address1, date1, delivery,app_product, contact_nu, email) VALUES ('$name','$fname','$address','$date','$location','$prod','$phone','$email')";
      mysqli_query($connection, $request);
      header('location:book.php');
   
   }else{
      echo 'something went wrong please try again!';
   }

?>