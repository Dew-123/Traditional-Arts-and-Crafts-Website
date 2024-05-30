<?php

@include 'connection.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="components.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="display-orders">
   
   <p>  <span>/- x </span> </p>
   
   <div class="grand-total">Grand total : <span>$0/-</span></div>
</section>

<section class="checkout-orders">

   <form action="" method="POST">

      <h3>place your order</h3>

      <div class="flex">
         <div class="inputBox">
            <span>Your Name :</span>
            <input type="text" name="name" placeholder="Enter Your Name" class="box" required>
         </div>
         <div class="inputBox">
            <span>Your Number :</span>
            <input type="number" name="number" placeholder="Enter Your Number" class="box" required>
         </div>
         <div class="inputBox">
            <span>Your Email :</span>
            <input type="email" name="email" placeholder="Enter Your E-mail" class="box" required>
         </div>
         <div class="inputBox">
            <span>Payment Method :</span>
            <select name="method" class="box" required>
               <option value="cash on delivery">Cash On Delivery</option>
               <option value="credit card">Credit Card</option>
               <option value="paypal">Paypal</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Address Line 01 :</span>
            <input type="text" name="flat" placeholder="EX : Flat Number" class="box" required>
         </div>

         <div class="inputBox">
            <span>City :</span>
            <input type="text" name="city" placeholder="EX : Colombo" class="box" required>
         </div>
        
         <div class="inputBox">
            <span>Country :</span>
            <input type="text" name="country" placeholder="EX : Sri-Lanka" class="box" required>
         </div>
         <div class="inputBox">
            <span>Pin Code :</span>
            <input type="number" min="0" name="pin_code" placeholder="EX : 4455" class="box" required>
         </div>
      </div>

      <input type="submit" name="order" class="btn'':'disabled'; ?>" value="place order">

   </form>

</section>


<?php include 'footer.php'; ?>

<script src="script.js"></script>

</body>
</html>