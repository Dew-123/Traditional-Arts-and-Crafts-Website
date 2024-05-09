
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="components.css">


</head>

<body >

<?php include 'header.php'; ?>

<section class="contact">

   <h1 class="title">Contact us today</h1>

   <form action="" method="POST">
      <input type="text" name="name" class="box" required placeholder="Enter Your Name">
      <input type="email" name="email" class="box" required placeholder="Enter Your Email">
      <input type="number" name="number" min="0" class="box" required placeholder="Enter Your Number">
      <textarea name="msg" class="box" required placeholder="Enter Your Message" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" class="btn" name="send">
   </form>

</section>


<?php include 'footer.php'; ?>

<script src="script.js"></script>

</body>
</html>