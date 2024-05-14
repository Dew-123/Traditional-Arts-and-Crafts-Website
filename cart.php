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

   <form action="" method="POST" class="box">
      <a href="cart.php?delete=0" class="fas fa-times" onclick="return confirm('delete this from cart?');"></a>
      <a href="view_page.php?pid=0" class="fas fa-eye"></a>
      <img src="uploaded_img/0" alt="">
      <div class="name">0</div>
      <div class="price">$0/-</div>
      <input type="hidden" name="cart_id" value="0">
      <div class="flex-btn">
         <input type="number" min="1" value="0" class="qty" name="p_qty">
         <input type="submit" value="update" name="update_qty" class="option-btn">
      </div>
      <div class="sub-total"> sub total : <span>$0/-</span> </div>
   </form>
   
   </div>

   <div class="cart-total">
      <p>Grand Total : <span>$0/-</span></p>
      <a href="shop.php" class="option-btn">Continue Shopping</a>
      <a href="cart.php?delete_all" class="delete-btn ">Delete All Items</a>
      <a href="checkout.php" class="btn ">Proceed To Checkout</a>
   </div>

</section>


<?php include 'footer.php'; ?>

<script src="script.js"></script> 
</body>
</html>