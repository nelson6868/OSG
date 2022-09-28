                                                
                                                    
                                                                <?php

                                                                include '../config.php';

                                                                if(isset($_POST['submit'])){

                                                  
                                                                $email = mysqli_real_escape_string($conn, $_POST['email']);
                                                                $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
                                                                $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
                                                                $role = mysqli_real_escape_string($conn, $_POST['role']);


                                                                $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

                                                                if(mysqli_num_rows($select) > 0){
                                                                    $message[] = 'user already exist'; 
                                                                }else{
                                                                    if($pass != $cpass){
                                                                        $message[] = 'confirm password not matched!';
                                                                    }else{
                                                                    
                                                                        $insert = mysqli_query($conn, "INSERT INTO `user_form`(email,password,role) VALUES('$email','$pass', '$role')") or die('query failed');
                                                                        if($insert){
                                                                    
                                                                        $message[] = 'Registered successfully! Login';
                                                                        // header('location:login.php');
                                                                        }else{
                                                                        $message[] = 'registeration failed!';
                                                                        }
                                                                    }
                                                                }

                                                                }

                                                                ?>



                                                                   <?php
                                                           

                                                           // read all row from database table
                                                           $sql = "SELECT * FROM user_form";
                                                           $result = $conn->query($sql);
                                                           if(!$result){
                                                               die("Invalid query:". $conn->error);
                                                               echo "";
                                                           }
       
       
                                                           //read data of each row
                                                           // while($row = $result->fetch_assoc()){
       
                                                           // }
       
                                                           ?>
       



                                                    <!DOCTYPE html>
                                                    <html lang="en">

                                                    <head>
                                                        <!-- Required meta tags-->
                                                        <meta charset="UTF-8">
                                                        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                                                        <meta name="description" content="au theme template">
                                                        <meta name="author" content="Hau Nguyen">
                                                        <meta name="keywords" content="au theme template">

                                                        <!-- Title Page-->
                                                        <title>Inbox</title>

                                                        <!-- Fontfaces CSS-->
                                                        <link href="css/font-face.css" rel="stylesheet" media="all">
                                                        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
                                                        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
                                                        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

                                                        <!-- Bootstrap CSS-->
                                                        <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

                                                        <!-- Vendor CSS-->
                                                        <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
                                                        <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
                                                        <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
                                                        <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
                                                        <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
                                                        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
                                                        <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

                                                        <!-- Main CSS-->
                                                        <link href="css/theme.css" rel="stylesheet" media="all">

                                                    </head>

                                                    <body class="animsition">
                                                        <div class="page-wrapper">
                                                            <!-- HEADER MOBILE-->
                                                            <header class="header-mobile d-block d-lg-none">
                                                                <div class="header-mobile__bar">
                                                                    <div class="container-fluid">
                                                                        <div class="header-mobile-inner">
                                                                            <a class="logo" href="index.html">
                                                                            <img src="images/osglogo.jpg" alt="Surveyor Logo" />
                                                                            </a>   
                                                                            <button class="hamburger hamburger--slider" type="button">
                                                                                <span class="hamburger-box">
                                                                                    <span class="hamburger-inner"></span>
                                                                                </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <nav class="navbar-mobile">
                                                                    <div class="container-fluid">
                                                                        <ul class="navbar-mobile__list list-unstyled">
                                                                            <li class="has-sub">
                                                                                <a class="js-arrow" href="#">
                                                                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                                                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                                                                    <li>
                                                                                        <a href="index.html">Dashboard 1</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="index2.html">Dashboard 2</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="index3.html">Dashboard 3</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="index4.html">Dashboard 4</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li>
                                                                                <a href="chart.html">
                                                                                    <i class="fas fa-chart-bar"></i>Charts</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="table.html">
                                                                                    <i class="fas fa-table"></i>Tables</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="form.html">
                                                                                    <i class="far fa-check-square"></i>Forms</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="calendar.html">
                                                                                    <i class="fas fa-calendar-alt"></i>Calendar</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="map.html">
                                                                                    <i class="fas fa-map-marker-alt"></i>Maps</a>
                                                                            </li>
                                                                            <li class="has-sub">
                                                                                <a class="js-arrow" href="#">
                                                                                    <i class="fas fa-copy"></i>Pages</a>
                                                                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                                                                    <li>
                                                                                        <a href="login.html">Login</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="register.html">Register</a>
                                                                                    </li>
                                                                                    <li>
                                                                                    <li>
                                                                                    <a href="../index.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>
                                                                                    </li>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            
                                                                    </div>
                                                                </nav>
                                                            </header>
                                                            <!-- END HEADER MOBILE-->

                                                            <!-- MENU SIDEBAR-->
                                                            <aside class="menu-sidebar d-none d-lg-block">
                                                                <div class="logo">
                                                                    <a href="#">
                                                                    <img src="images/osglogo.jpg" alt="Surveyor Logo" />
                                                                    </a>
                                                                </div>
                                                                <div class="menu-sidebar__content js-scrollbar1">
                                                                    <nav class="navbar-sidebar">
                                                                        <ul class="list-unstyled navbar__list">
                                                                            <li class="has-sub">
                                                                                <a class="js-arrow" href="#">
                                                                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                                                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                            <!-- <li>
                                                                                <a href="chart.html">
                                                                                    <i class="fas fa-chart-bar"></i>Charts</a>
                                                                            </li> -->
                                                                            <li>
                                                                                <a href="contact_profle.php">
                                                                                    <i class="fas fa-table"></i>Contact Update</a>
                                                                            </li>
                                                                            <!-- <li>
                                                                                <a href="form.html">
                                                                                    <i class="far fa-check-square"></i>Forms</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="calendar.html">
                                                                                    <i class="fas fa-calendar-alt"></i>Calendar</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="map.html">
                                                                                    <i class="fas fa-map-marker-alt"></i>Maps</a>
                                                                            </li> -->
                                                                            <li class="active has-sub">
                                                                                <a class="js-arrow" href="#">
                                                                                    <i class="fas fa-copy"></i>Pages</a>
                                                                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                                                    <li>
                                                                                        <a href="../index.php">Login</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="../Register.php">Register</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="/OSG/edit.php">Update Users Infor</a>
                                                                                    </li>
                                                                                    <li>
                                                                                    <a href="../index.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>
                                                                               
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <!-- <li class="has-sub">
                                                                                <a class="js-arrow" href="#">
                                                                                    <i class="fas fa-desktop"></i>UI Elements</a>
                                                                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                                                    <li>
                                                                                        <a href="button.html">Button</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="badge.html">Badges</a>
                                                                                    </li>
                                                                                    <li>
                                                                                    
                                                                                </ul>
                                                                            </li> -->
                                                                        </ul>
                                                                    </nav>
                                                                </div>
                                                            </aside>
                                                            <!-- END MENU SIDEBAR-->

                                                            <!-- PAGE CONTAINER-->
                                                            <div class="page-container">

                                                            <!-- HEADER DESKTOP-->
                                                            <header class="header-desktop">
                                                                    <div class="section__content section__content--p30">
                                                                        <div class="container-fluid">

                                                                            <div class="header-wrap">
                                                                            
                                                                                <form class="form-header" action="" method="POST">
                                                                                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                                                                    <button class="au-btn--submit" type="submit">
                                                                                        <i class="zmdi zmdi-search"></i>

                                                                                    </button>
                                                                                </form>
                                                                                <div class="header-button">
                                                                                    <div class="noti-wrap">
                                                                                        <div class="noti__item js-item-menu">
                                                                                             
                                                                                        <button type="button" class="btn btn-success">Create User   </button>
                                                                                            <!-- <span class="quantity">1</span> -->
                                                                                            <div class="mess-dropdown js-dropdown">





                                                                                            <div class="page-content--bge5">
                                                            
                                                                            <div class="login-logo">
                                                                                <!-- <a href="#">
                                                                                    <img src="images/icon/logo.png" alt="CoolAdmin">
                                                                                </a> -->
                                                                            </div>
                                                                            <div class="login-form">
                                                                                <form action="" method="post">
                                                                                <div class="form-group">
                                                                                        <label>Role</label>
                                                                                        <input type="text" name="role"  class="box" required>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>Email Address</label>
                                                                                        <input class="au-input au-input--full" type="email" name="email" >
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>Password</label>
                                                                                        <input class="au-input au-input--full" type="password" name="password">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>Confirm-Password</label>
                                                                                        <input class="au-input au-input--full" type="password" name="cpassword" >
                                                                                    </div>
                                                                                
                                                                                    <button class="au-btn au-btn--block au-btn--green m-b-20"  name="submit" type="submit">sign in</button>
                                                                                    <!-- <div class="social-login-content">
                                                                                        <div class="social-button">
                                                                                            <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                                                                            <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                                                                        </div>
                                                                                    </div> -->
                                                                                </form>
                                                                                <!-- <div class="register-link">
                                                                                    <p>
                                                                                        Don't you have account?
                                                                                        <a href="#">Sign Up Here</a>
                                                                                    </p>
                                                                                </div> -->
                                                                            </div>
                                                                        </div>



                                                                                                <div class="mess__item">
                                                                                                
                                                                                                </div>
                                                                                            
                                                                                            </div>
                                                                                        </div>
                                                                                       
                                                                                                <div class="email__footer">
                                                                                                    <!-- <a href="#">See all emails</a> -->
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                      
                                                                                    <div class="account-wrap">
                                                                                        <div class="account-item clearfix js-item-menu">
                                                                                            <div class="image">
                                                                                            <a href="#">

                                                 
                                                    </a>
                                                        
                                                                                            </div>
                                                                                            <div class="content">
                                                                                                <a class="js-acc-btn" href="#"><a href="#"></a></a>
                                                                                            </div>
                                                                                            <div class="account-dropdown js-dropdown">
                                                                                                <div class="info clearfix">
                                                                                                    <div class="image">
                                                                                                                                            </div>
                                                                                                    <div class="content">
                                                                                                    <h5 class="name">
                                                                                                
                                                                                                        </h5>
                                                                                                        <span class="email"></span>
                                                                                                </div>
                                                                                                <div class="account-dropdown__body">
                                                                                                    <!-- <div class="account-dropdown__item">
                                                                                                        <a href="#">
                                                                                                            <i class="zmdi zmdi-account"></i>Account</a>
                                                                                                    </div>
                                                                                                    <div class="account-dropdown__item">
                                                                                                        <a href="#">
                                                                                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                                                                                    </div>
                                                                                                    <div class="account-dropdown__item">
                                                                                                        <a href="#">
                                                                                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                                                                    </div> -->
                                                                                                </div>
                                                                                                <div class="account-dropdown__footer">
                                                                                                    <a href="#">
                                                                                                    <a href="../index.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </header>
                                                                <!-- HEADER DESKTOP-->
                                                            
                                                                <!-- MAIN CONTENT-->
                                                                <div class="row m-t-80">
                                                                                <div class="col-md-12">
                                                                                    <!-- DATA TABLE-->
                                                                                    <div class="table-responsive m-b-40">
                                                                                        <table class="table table-borderless table-data3">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                     <th>ID</th>
                                                                                                    <th>Name</th>
                                                                                                    <th>Email</th>
                                                                                                    <th>Address</th>
                                                                                                    <th>Department</th>
                                                                                                    <th>Position</th>
                                                                                                    <th>Action</th>
                                                                                                    
                                                                                                    
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>


                                                                                            <?php
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){



                    
                

                ?>

                <tr>
                    <td><?php echo $row['id'];?> </td>
                    <td><?php echo $row['name'];?> </td>
                    <td><?php echo $row['email'];?> </td>
                    <td><?php echo $row['address'];?> </td>
                    <td><?php echo $row['department'];?> </td>
                    <td><?php echo $row['position'];?> </td>
                   
                   
                    <td><a class="btn btn-info"  href="edit.php?id=<?php echo $row['id'];?>">
                    Edit
                    </a>&nbsp;<a class="btn btn-danger" href="Delete.php?id=<?php echo $row['id']; ?>">
                    Delete </a></td>
                    </tr>
                    <?php }
                }
                ?>








                                                                                        
                                                                                                                                </table>
                                                                                                                            </div>
                                                                                                                            <!-- END DATA TABLE-->
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                    
                                                                                                    <!-- END PAGE CONTAINER-->

                                                                                                </div>

                                                        <!-- Jquery JS-->
                                                        <script src="vendor/jquery-3.2.1.min.js"></script>
                                                        <!-- Bootstrap JS-->
                                                        <script src="vendor/bootstrap-4.1/popper.min.js"></script>
                                                        <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
                                                        <!-- Vendor JS       -->
                                                        <script src="vendor/slick/slick.min.js">
                                                        </script>
                                                        <script src="vendor/wow/wow.min.js"></script>
                                                        <script src="vendor/animsition/animsition.min.js"></script>
                                                        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
                                                        </script>
                                                        <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
                                                        <script src="vendor/counter-up/jquery.counterup.min.js">
                                                        </script>
                                                        <script src="vendor/circle-progress/circle-progress.min.js"></script>
                                                        <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
                                                        <script src="vendor/chartjs/Chart.bundle.min.js"></script>
                                                        <script src="vendor/select2/select2.min.js">
                                                        </script>

                                                        <!-- Main JS-->
                                                        <script src="js/main.js"></script>

                                                    </body>

                                                    </html>
                                                    <!-- end document-->
