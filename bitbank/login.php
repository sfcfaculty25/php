<?php
session_start();
include 'connection.php';

if(isset($_POST['login']))
{
  $user = $_POST['user'];
  $pass = $_POST['pass']; //textbox
  $query="select * from user_register where username='$user'  ";
  $result = mysqli_query($conn,$query);
  $row=mysqli_fetch_array($result);
  $encrypted_password = $row['password']; 
  $count= mysqli_num_rows($result);
//  if($count>0)
//  {
    if(password_verify($pass,$encrypted_password))
    {
      $_SESSION['user'] = $row['username'];
      header("Location:index.php");
    }
    else
    {
      echo 'Invalid username or password';
    }
//  }
// else
// {
//   echo 'Invalid username';
// }


  // if($count>0)
  // {
  //    if(password_verify($pass,$row['password']))
  //           {
  //             $_SESSION['user'] = $user;
  //             header("Location:index.php");
  //           }  
  //           else
  //           {
  //           echo 'Invalid username and password';
  //           }
  
  // }
  // if($count>0)
  // {
  //   if($row['role_id']==1)
  //   {
  //     header("Location:hr.php");
  //   }
  //   else if($row['role_id']==2)
  //   {
  //     header("Location:hr.php");
  //   }
  //   $_SESSION['user'] = $user;
  //   header("Location:index.php");
  // }



}


?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="zxx"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Bingo One page parallax responsive HTML Template ">
  
  <meta name="author" content="Themefisher.com">

  <title>Bit-Bank</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
  
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font.v-2/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  

</head>

<body id="body">

 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class="preloader">
      <div class="sk-circle1 sk-child"></div>
      <div class="sk-circle2 sk-child"></div>
      <div class="sk-circle3 sk-child"></div>
      <div class="sk-circle4 sk-child"></div>
      <div class="sk-circle5 sk-child"></div>
      <div class="sk-circle6 sk-child"></div>
      <div class="sk-circle7 sk-child"></div>
      <div class="sk-circle8 sk-child"></div>
      <div class="sk-circle9 sk-child"></div>
      <div class="sk-circle10 sk-child"></div>
      <div class="sk-circle11 sk-child"></div>
      <div class="sk-circle12 sk-child"></div>
    </div>
  </div> 
  <!--
  End Preloader
  ==================================== -->


  
<!--
Fixed Navigation
==================================== -->
<?php include 'header.php'  ?>
<section class="signin-page account">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="block">
                    <h2 class="text-center">Sign In to BitBank</h2>
                    
                    <form class="text-left clearfix mt-50" action="login.php" method="post">
                        <div class="form-group">
                            <input type="text" name="user" class="form-control"  placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" name="login" class="btn btn-main" >Sign In</button>
                        
                    </form>
                    <p class="mt-20">New in this site ?<a href="signin.html"> Create New Account</a></p>
                    <p><a href="forget-password.html"> Forgot your password?</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>
<!-- end footer -->


    <!-- end Footer Area
    ========================================== -->

    
    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/dist/js/popper.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <!-- Smooth Scroll js -->
    <script src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    
    <!-- Custom js -->
    <script src="js/script.js"></script>

  </body>
  </html>