<?php

@include 'connection.php';

session_start();

if(isset($_POST['add_to_cart'])){

      $pid = $_POST['pid'];
      $pid = filter_var($pid, FILTER_SANITIZE_STRING);
      $p_name = $_POST['p_name'];
      $p_name = filter_var($p_name, FILTER_SANITIZE_STRING);
      $p_price = $_POST['p_price'];
      $p_price = filter_var($p_price, FILTER_SANITIZE_STRING);
      $p_image = $_POST['p_image'];
      $p_image = filter_var($p_image, FILTER_SANITIZE_STRING);
      $p_qty = $_POST['p_qty'];
      $p_qty = filter_var($p_qty, FILTER_SANITIZE_STRING);

      // Check if the session cart exists
      if (!isset($_SESSION['cart'])) {
         $_SESSION['cart'] = [];
      }

      // Check if the product is already in the cart
      $product_exists = false;
      foreach ($_SESSION['cart'] as $key => $cart_item) {
            if ($cart_item['pid'] == $pid) {
               $_SESSION['cart'][$key]['quantity'] += $p_qty;
               $product_exists = true;
               break;
            }
      }

      if (!$product_exists) {
            $_SESSION['cart'][] = [
               'pid' => $pid,
               'name' => $p_name,
               'price' => $p_price,
               'quantity' => $p_qty,
               'image' => $p_image
            ];
      }

   }
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