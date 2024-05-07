<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<section class="form-container">

<form action="" enctype="multipart/form-data" method="POST">
   <h3>Register Now</h3>
   <input type="text" name="name" class="box" placeholder="Enter Your Name" required>
   <input type="email" name="email" class="box" placeholder="Enter Your Email" required>
   <input type="password" name="pass" class="box" placeholder="Enter Your Password" required>
   <input type="password" name="cpass" class="box" placeholder="Confirm Your Password" required>
   <input type="submit" value="register now" class="btn" name="submit">
   <p>Already Have An Account? <a href="login.php">Login Now</a></p>
</form>

</section>
</body>
</html>