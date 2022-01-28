<?php
include 'connection.php';



if(isset($_POST['register']))
{
$fname= $_POST['fname'];
$lname = $_POST['lname'];
$user = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$query = "insert into user_register values('','$fname','$lname','$user','$email','$pass')";

$result = mysqli_query($conn,$query);
if($result)
{
  header("Location:login.php");
}
else
{
  echo 'error';
}


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
<?php include 'header.php'; ?>
<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="block text-center">
          <h2 class="text-center">Create Your Account</h2>
  
          <form class="text-left clearfix mt-30" action="signup.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="fname"  placeholder="First Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="lname"  placeholder="Last Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="user"  placeholder="Username">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email"  placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" name="pass" class="form-control"  placeholder="Password">
            </div>
            <button type="submit" name="register" class="btn btn-main text-center">Sign In</button>
          </form>
          <p class="mt-20">Already hava an account ?<a href="login.html"> Login</a></p>
          
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'footer.php';  ?>
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