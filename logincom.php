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
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office of the Surveyor General Enugu State</title>

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
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/reg.css">

</head>
<body>
    



<li class="header-get-a-quote">
                             <!-- <model start> -->
                             <li class="nav-item"><a class="nav-link" href="#">
           <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
       
           <form   action="" method="post" enctype="multipart/form-data">
           <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        
     
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" name="email" id="defaultForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" name="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" name="submit"> login</button>
      </div>
    </div>
  </div>
</div>

<div class="text-center" >
  <a href="" class="btn btn-primary btn-rounded mt-9000px" data-toggle="modal" data-target="#modalLoginForm">Login</a>
</div>

                     </a></li>
    </form>

                  </li>
                </ul><!-- Ul end -->
            </div><!-- header right end -->
</body>
</html>