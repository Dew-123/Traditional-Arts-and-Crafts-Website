<?php

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

$user_id = isset($_SESSION["user_id"]) ? $_SESSION["user_id"] : null;
?>

<header class="header">

   <div class="flex">

      <a href="home.php" class="logo">
      <img src="images/logo.png" alt="SL Items Logo"style="width: 170px; height: auto;"> 
      </a>

      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="shop.php">Shop</a>
         <a href="orders.php">Orders</a>
         <a href="about.php">About</a>
         <a href="contact.php">Contact</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <a href="search_page.php" class="fas fa-search"></a>
         <a href="wishlist.php"><i class="fas fa-heart"></i><span>(0)</span></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= count($_SESSION["cart"]) ?>)</span></a>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <?php
            if (isset($_SESSION['user_id'])) {  
               $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
               $select_profile->execute([$user_id]);
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);  
         ?>
         <p><?= $fetch_profile['name']; ?></p>

         <a href="user_profile_update.php" class="btn">Update Profile</a>
         <a href="logout.php" class="delete-btn">Logout</a>
         
         <?php
            }else {
         ?>
         <a href="user_profile_update.php" class="btn">Update Profile</a>
         <a href="logout.php" class="delete-btn">Logout</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">Login</a>
            <a href="register.php" class="option-btn">Register</a>
         </div>
         <?php
            }
         ?>
      </div>

   </div>

</header>