<?php

include 'config.php';

if(isset($_POST['submit'])){


   $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
  

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
        
         $insert = mysqli_query($conn, "INSERT INTO `user_form`(email,password) VALUES( '$email', '$pass')") or die('query failed');
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
