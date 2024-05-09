<?php

include 'connection.php';

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name);

   $email = $_POST['email'];
   $email = filter_var($email);

   $address = $_POST['address'];
   $address = filter_var($address);

   $pass = md5($_POST['pass']);
   $pass = filter_var($pass);

   $cpass = md5($_POST['cpass']);
   $cpass = filter_var($cpass);

   $select = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   $select->execute([$email]);

   if($select->rowCount() > 0){
      $message[] = 'User E-mail Already Exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'Confirm Password Not Matched!';
      }else{
         $insert = $conn->prepare("INSERT INTO `users`(name, email, address, password) VALUES(?,?,?,?)");
         $insert->execute([$name, $email,$address, $pass]);

         if($insert){
               $message[] = 'Registered Successfully!';
               header('location:login.php');
         }

      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="components.css">

</head>
<body style="background-image: url('images/bg.png');">
   
<section class="form-container">

   <form action="" enctype="multipart/form-data" method="POST">
      <h3>Register Now</h3>
      <input type="text" name="name" class="box" placeholder="Enter Your Name" required>
      <input type="email" name="email" class="box" placeholder="Enter Your Email" required>
      <input type="address" name="address" class="box" placeholder="Enter Your Address" required>
      <input type="password" name="pass" class="box" placeholder="Enter Your Password" required>
      <input type="password" name="cpass" class="box" placeholder="Confirm Your Password" required>
      <input type="submit" value="register now" class="btn" name="submit">
      <p>Already Have An Account? <a href="login.php">Login Now</a></p>
   </form>

</section>

</body>
</html>