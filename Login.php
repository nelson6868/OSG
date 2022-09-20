<?php

include 'config.php';
session_start();
$role="";

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      // $row = mysqli_fetch_assoc($select);
      // $_SESSION['user_id'] = $row['id'];
      // header('location:home.php');
      while ($row = mysqli_fetch_assoc($select)) 
      {
        if($row["role"] == "Admin")
        {
          $_SESSION['user_id'] = $row['id'];
          header('location:Admin/index.php');
        }
        else{
          $_SESSION['user_id'] = $row['id'];
          header('location:home.php');

        }
    
      }
   }
   else{
     
      
      $message[] = 'incorrect email or password!';
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
  <title>Constra - Construction Html5 Template</title>

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
  <?php include 'header.php';?>
    

   


     
  <div class="form-container">
  

<form action="" method="post" enctype="multipart/form-data">
   <h3>login now</h3>
   <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>

   <input type="email" name="email" placeholder="enter email" class="box" required>
   <input type="password" name="password" placeholder="enter password" class="box" required>
   <input type="submit" name="submit" value="login now" class="button">
   <!-- <p>don't have an account? <a href="Register.php">regiser now</a></p> -->
</form>

</div>

<?php include 'footer.php';?>
    

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