<?php

@include 'connection.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="components.css">


</head>
<body>
   
<?php include 'header.php'; ?>

<div class="home-bg" style="   background: url(images/homebgTop.png) no-repeat;
">

   <section class="home">

      <div class="content">
         <span>" Bringing Sri Lanka To Your Doorstep "</span>
         <h3>Experience the beauty of Sri Lanka through our products</h3>
         <p>Experience the rich heritage of Sri Lanka in our products and Embrace the culture of Sri Lanka with us.</p>
         <a href="about.php" class="btn">about us</a>
      </div>

   </section>

</div>

<section class="home-category">

   <h1 class="title">shop by category</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/cat-1.png" alt="">
         <h3>Foods</h3>
         <p>Discover the vibrant culture of Sri Lanka with our curated collection of furniture, food, and fashion.</p>
         <a href="category.php?category=foods" class="btn">Foods</a>
      </div>

      <div class="box">
         <img src="images/cat-2.png" alt="">
         <h3>Furnitures</h3>
         <p>Discover the vibrant culture of Sri Lanka with our curated collection of furniture, food, and fashion.</p>
         <a href="category.php?category=furnitures" class="btn">Furnitures</a>
      </div>

      <div class="box">
         <img src="images/cat-3.png" alt="">
         <h3>Fashions</h3>
         <p>Discover the vibrant culture of Sri Lanka with our curated collection of furniture, food, and fashion.</p>
         <a href="category.php?category=fashions" class="btn">Fashions</a>
      </div>

      <div class="box">
         <img src="images/cat-4.png" alt="">
         <h3>Decorations</h3>
         <p>Discover the vibrant culture of Sri Lanka with our curated collection of furniture, food, and fashion.</p>
         <a href="category.php?category=decorations" class="btn">Decorations</a>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<script src="script.js"></script>

</body>
</html>