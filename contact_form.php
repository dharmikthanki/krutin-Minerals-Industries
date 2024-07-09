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
      $name = $_POST["name"];
      $address = $_POST["address"];
      $mob=$_POST["mobile"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      $des=$_POST["desc"];
      $request = " INSERT INTO contact_us(name1, phone, mobile, email, address1, description1) VALUES ('$name','$phone','$mob','$email','$address','$des')";
      mysqli_query($connection, $request);
      header('location:contact.php');
   
   }else{
      echo 'something went wrong please try again!';
   }

?>