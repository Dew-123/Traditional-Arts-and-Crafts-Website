
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="components.css">

</head>
<body style="background-image: url('images/bg.png');">
   
<section class="form-container">

   <form action="" method="POST">
      <h3>login now</h3>
      <input type="email" name="email" class="box" placeholder="Enter Your E-mail" required>
      <input type="password" name="pass" class="box" placeholder="Enter Your Password" required>
      <input type="submit" value="login now" class="btn" name="submit">
      <p>Don't Have An Account? <a href="register.php">Register Now</a></p>
   </form>

</section>


</body>
</html>