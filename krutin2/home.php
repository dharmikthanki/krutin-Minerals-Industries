<?php
require('admin/db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Krutin Minerals Industries</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">products</a>
      <a href="book.php">book</a>
      <a href="contact.php">Contact Us</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/alexander-tsang-ppN1zRQrCEg-unsplash.jpg) no-repeat">
            <div class="content">
               <span>Get Best Industrial Products</span>
               <h3>Get Industrial Products At Low Rate And High Quality</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/ant-rozetsky-SLIFI67jv5k-unsplash.jpg) no-repeat">
            <div class="content">
               <span>Get Best Industrial Products</span>
               <h3>Assured Services</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/deborath-ramos-l-W-A9i4Mwx-A-unsplash.jpg) no-repeat">
            <div class="content">
               <span>Get Best Industrial Products</span>
               <h3>Prouduct With Complete & Quick Paper work</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->




<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our products </h1>

   <div class="box-container">

   <?php
      $count=1;
      $sel_query="Select * from products;";
      $result = mysqli_query($con,$sel_query);
      while($row = mysqli_fetch_assoc($result)) { ?>
      <div class="box">
         <div class="image">
            <img src="admin/img2/<?php echo $row['photo']; ?>">
         </div>
         <div class="content">
         <h3><?php echo $row["name1"]; ?></h3>
            <p>Price : <?php echo $row["price"]; ?></p>
            <p>Quantity : <?php echo $row["quantity"]; ?></P>
            <p>Transport & Other Charges : <?php echo $row["transport_and_other"]; ?></p>
            <p>Description : <?php echo $row["description1"]; ?></p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      
         <?php $count++; } ?> </div>
      
      </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/industry-611668__340.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>Backed by dedicated workforce and sound infrastructure, we K. K.
         Mineral Industries have emerged as one of the trusted manufacturers, exporters, suppliers and traders inthe industry. 
         Our proficiency lies in our ability to determine the demands of our valued clients and serve them accordingly.
         Established in the year 1995, we have attained a prominent position in the competitive market. 
         </p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> products</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>Dharmik Thanki</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>