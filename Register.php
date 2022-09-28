<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $address = mysqli_real_escape_string($conn, $_POST['address']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
        
         $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email,address,department,position, password, image) VALUES('$name', '$email','$address','$department','$position', '$pass', '$image')") or die('query failed');
         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Registered successfully! Login';
            // header('location:login.php');
         }else{
            $message[] = 'registeration failed!';
         }
      }
   }

}

?>




<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themefisher.com/constra/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 13:29:51 GMT -->
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Enugu State Surveyor Department</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/reg.css">
  

</head>
<body>
  <div class="body-inner">
  <?php include '../header.php';?>


  
<div class="form-container">

<form action="" method="post" enctype="multipart/form-data">
   <h3>register now</h3>
   <?php
   if(isset($message)){
      foreach($message as $message){
         echo '<div class="message">'.$message.'</div>';
      }
   }
   ?>
   <input type="text" name="name" placeholder="enter your full name" class="box" required>
   <input type="email" name="email" placeholder="enter email" class="box" required>
    <input type="text" name="address" placeholder="enter address" class="box" required>
    <input type="text" name="department" placeholder="enter department" class="box" required>
    <input type="text" name="position" placeholder="enter position" class="box" required>
   <input type="password" name="password" placeholder="enter password" class="box" required>
   <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
   <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png" required>
   <input type="submit" name="submit" value="register now" class="button">
   <p>already have an account? <a href="login.php">login now</a></p>
</form>

</div>




<?php include '../footer.php';?>
    


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>

  </div><!-- Body inner end -->
  </body>

  
<!-- Mirrored from demo.themefisher.com/constra/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 13:30:34 GMT -->
</html>