<?php

@include 'connection.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="components.css">

</head>
<body>
<?php include 'header.php'; ?>

<section class="products">

   <h1 class="title">Products Categories</h1>

   <div class="box-container">

   <?php
      $category_name = $_GET['category'];
      $select_products = $conn->prepare("SELECT * FROM `products` WHERE prodCategory = ?");
      $select_products->execute([$category_name]);
      if($select_products->rowCount() > 0){
         while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){ 
   ?>

   <form action="" class="box" method="POST">
      <div class="price">$<span><?= $fetch_products['prodPrice']; ?></span>/-</div>
      <img src="images/db_images/<?= $fetch_products['prodImage']; ?>" alt="">
      <div class="name"><?= $fetch_products['prodName']; ?></div>
      <input type="hidden" name="pid" value="<?= $fetch_products['prodId']; ?>">
      <input type="hidden" name="p_name" value="<?= $fetch_products['prodName']; ?>">
      <input type="hidden" name="p_price" value="<?= $fetch_products['prodPrice']; ?>">
      <input type="hidden" name="p_image" value="<?= $fetch_products['prodImage']; ?>">
      <input type="number" min="1" value="1" name="p_qty" class="qty">
      <input type="submit" value="add to wishlist" class="option-btn" name="add_to_wishlist">
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>

   <?php
         }
      }else{
         echo '<p class="empty">No Products Available!</p>';
      }
   ?>

   </div>

</section>


<?php include 'footer.php'; ?>

<script src="script.js"></script>
</body>
</html>