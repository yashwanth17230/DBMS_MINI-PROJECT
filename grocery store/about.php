<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>Users choose our grocery management store for its convenience, variety, quality, affordability, user experience, customization, reliability, sustainability, community engagement, and innovative features.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>We provide a comprehensive grocery management solution, offering convenient online ordering, a wide variety of high-quality products, personalized customization options, reliable service, sustainable practices, community engagement, and innovative features to enhance the user experience.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>"I love how easy it is to order groceries online! The variety of products available is impressive, and the quality is always top-notch. The personalized recommendations make shopping a breeze."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>cBum</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>"This website has saved me so much time and effort! I can rely on them for prompt deliveries and fresh produce every time. Plus, their commitment to sustainability aligns with my values."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>courtney king</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>"I'm impressed by the level of customization this platform offers. I can easily tailor my orders to fit my family's dietary preferences, and the user interface is intuitive and user-friendly."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>sam sulek</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>"The community aspect of this website is fantastic! I enjoy connecting with other users, sharing recipes, and discovering new cooking tips. It truly feels like a supportive online foodie community."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ramon dino</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>"As a budget-conscious shopper, I appreciate the affordable pricing and frequent discounts available on this website. It allows me to stick to my grocery budget without sacrificing quality."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rocky balboa</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>"The innovative features of this platform have revolutionized how I manage my groceries. From meal planning tools to smart integration with my home devices, it has streamlined my shopping experience and made it more efficient."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>keiani</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>