<?php

@include 'connection.php';

session_start();

if (isset($_GET['delete'])) {
   $delete_id = $_GET['delete'];
   unset($_SESSION['cart'][$delete_id]);
   $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindex the array
   header("Location: cart.php");
}

if (isset($_GET['delete_all'])) {
   unset($_SESSION['cart']);
   header("Location: cart.php");
}

if (isset($_POST['update_qty'])) {
   $cart_id = $_POST['cart_id'];
   $new_qty = $_POST['p_qty'];
   if ($new_qty > 0) {
       $_SESSION['cart'][$cart_id]['quantity'] = $new_qty;
   } else {
       unset($_SESSION['cart'][$cart_id]);
   }
   $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindex the array
   header("Location: cart.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="components.css">

</head>
<body>

<?php include 'header.php'; ?>

<section class="shopping-cart">

   <h1 class="title">Products Added</h1>

   <div class="box-container">

   <?php
    $grand_total = 0;
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        foreach ($_SESSION['cart'] as $key => $item) {
            $sub_total = $item['price'] * $item['quantity'];
            $grand_total += $sub_total;
   ?>

   <form action="" method="POST" class="box">
      <a href="cart.php?delete=<?= $key; ?>" class="fas fa-times" onclick="return confirm('delete this from cart?');"></a>
      <img src="images/db_images/<?= $item['image']; ?>" alt="">
      <div class="name"><?= $item['name']; ?></div>
      <div class="price">$<?= $item['price']; ?>/-</div>
      <input type="hidden" name="cart_id" value="<?= $key; ?>">
      <div class="flex-btn">
         <input type="number" min="1" value="<?= $item['quantity']; ?>" class="qty" name="p_qty">
         <input type="submit" value="update" name="update_qty" class="option-btn">
      </div>
      <div class="sub-total"> sub total : <span>$<?= $sub_total; ?>/-</span> </div>
   </form>

   <?php
        }
    } else {
        echo '<p class="empty">Your cart is empty!</p>';
    }
   ?>
   
   </div>

   <div class="cart-total">
      <p>Grand Total : <span>$<?= $grand_total; ?>/-</span></p>
      <a href="home.php" class="option-btn">Continue Shopping</a>
      <a href="cart.php?delete_all" class="delete-btn ">Delete All Items</a>
      <a href="checkout.php" class="btn ">Proceed To Checkout</a>
   </div>

</section>


<?php include 'footer.php'; ?>

<script src="script.js"></script> 
</body>
</html>