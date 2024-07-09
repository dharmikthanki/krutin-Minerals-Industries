<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="/resources/demos/style.css">
   <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
   <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  
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
      <a href="contact.php">contact us</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>
 
</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your appointment</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
      <div class="inputBox">
            <span>name of firm :</span>
            <input type="text" placeholder="enter your name" name="firm"  pattern="[a-zA-Z][a-zA-Z ]+" required>
         </div>
         <div class="inputBox">
            <span>name of owner/ceo :</span>
            <input type="text" placeholder="enter your name" name="name"  pattern="[a-zA-Z][a-zA-Z ]+" required>
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="text" placeholder="enter your number" pattern="[789][0-9]{9}" name="phone" required>
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" pattern="^[.0-9a-zA-Z\s,-]+$" name="address" required>
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to deliever" pattern="^[.0-9a-zA-Z\s,-]+$" name="location" required>
         </div>
         <div class="inputBox">
            <span>book appointment :</span>
            <input id="datepicker" onchange="checkDate()" required class="datepicker-input" type="date" data-date-format="yyyy-mm-dd" name="date" >
         </div>
         <script>
               function checkDate() {
               var selectedText = document.getElementById('datepicker').value;
               var selectedDate = new Date(selectedText);
               var now = new Date();
               if (selectedDate < now) {
                  alert("Date must be in the future");
               }
            }
          </script>
         <div class="inputBox">
            <span>book appointment for product :</span>
            <select name="products" required>
               <option value="Calandium Cement">Calandium Cement</option>
               <option value="Refractory Castables">Refractory Castables</option>
               <option value="Aluminia">Aluminia</option>
            </select>

         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->
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