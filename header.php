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
          header('location:update_profile.php');

        } if($row["role"] == "user")
        {
          $_SESSION['user_id'] = $row['id'];
          header('location:home.php');
        }
        if($row["role"] == "new")
        {
          $_SESSION['user_id'] = $row['id'];
          header('location:update_profile.php');
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

</head>
<body>

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">Office of the Surveyor General, Enugu State</p>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->
    
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="https://facebbok.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      <a title="Twitter" href="https://twitter.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-twitter"></i></span>
                      </a>
                      <a title="Instagram" href="https://instagram.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      <a title="Linkdin" href="https://github.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-github"></i></span>
                      </a>
                    </li>
                </ul>
              </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
    <!-- Header start -->
    <header id="header" class="header-one">
    <div class="bg-white">
    <div class="container">
      <div class="logo-area">
          <div class="row align-items-center">
            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                <a class="d-block" href="index-2.html">
                  <img loading="lazy" src="images/osglogo.jpg" alt="Constra">
                </a>
            </div><!-- logo end -->
    
            <div class="col-lg-9 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Call Us</p>
                          <p class="info-box-subtitle"><a href="tel:(+9) 847-291-4353">(+234)9034949999</a></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Email Us</p>
                          <p class="info-box-subtitle"><a href="mailto:office@Constra.com">officesurveyorgeneral@ogs.com</a></p>
                      </div>
                    </div>
                  </li>
                  <li class="last">
                    <div class="info-box last">
                      <div class="info-box-content">
                          <p class="info-box-title">Global Certificate</p>
                          <p class="info-box-subtitle">ISO 9001:2017</p>
                      </div>
                    </div>
                  </li>
                  <li class="header-get-a-quote">
                    <a class="btn btn-primary" href="contact.html">Get A Quote</a>
                  </li>
                </ul><!-- Ul end -->
            </div><!-- header right end -->
          </div><!-- logo area end -->
    
      </div><!-- Row end -->
    </div><!-- Container end -->
    </div>
    
    <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item dropdown active">
                          <a href="index.php" class="nav-link " >
                            
                          </a>
                          <!-- <ul class="dropdown-menu" role="menu">
                            <li class="active"><a href="index-2.html">Home One</a></li>
                            <li><a href="index-3.html">Home Two</a></li>
                          </ul> -->
                      </li>
    
                      <li class="nav-item dropdown">
                      <a href="about.php" class="nav-link " >About Us</a>
                          <ul class="dropdown-menu" role="menu">
                            <!-- <li><a href="about.php">About Us</a></li> -->
                            <!-- <li><a href="team.html">Our People</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="pricing.html">Pricing</a></li> -->
                          </ul>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="events.php">Events  </a></li>
                     
                     <!-- <model start> -->
                     <li class="nav-item"><a class="nav-link" href="#">
           <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
       
           <form   action="" method="post" enctype="multipart/form-data">
           <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
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
        <button class="btn btn-primary" name="submit">Login login login</button>
      </div>
    </div>
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Login</a>
</div>

                     </a></li>
    </form>
                     <!-- <model ends here> -->
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Projects <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="projects.php">Projects All</a></li>
                         
                          </ul>
                      </li>
              
                     

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link">Department <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="services.php">Office of the surveyor Dpt</a></li>
                            <li><a href="services.php">GIS</a></li>
                            <li><a href="services.php">Admin</a></li>
                            <li><a href="services.php">Catar</a></li>
                            <li><a href="services.php">PRS</a></li>
                         
                          </ul>
                      </li>
              
                   
              
                     
                      <li class="nav-item"><a class="nav-link" href="contact.php">News</a></li>
              
                      <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    
        <div class="nav-search">
          <span id="search"><i class="fa fa-search"></i></span>
        </div><!-- Search end -->
    
        <div class="search-block" style="display: none;">
          <label for="search-field" class="w-100 mb-0">
            <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
          </label>
          <span class="search-close">&times;</span>
        </div><!-- Site search end -->
    </div>
    <!--/ Container end -->
    
    </div>
    <!--/ Navigation end -->
    </header>
    <!--/ Header end -->
    






</body>

  
<!-- Mirrored from demo.themefisher.com/constra/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 13:30:34 GMT -->
</html>