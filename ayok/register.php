<?php 
include 'fungsi.php';
$conn=mysqli_connect("localhost","root","","whsakila2021");
if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  

  if($password===$password){ 

        if(daftarakun($username,$password)){
          echo "<script>alert('Pendaftaran Berhasil, Silahkan Login')</script>";echo "<script>window.location.href='index.php'</script>";
        }else{
          echo "<script>alert('Pendaftaran Gagal')</script>";
        }
  }else{
    echo "<script>alert('Password konfirmasi tidak sama, silahkan ulangi kembali')</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin - DWO</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

  <div class="card card-authentication1 mx-auto my-4">
    <div class="card-body">
     <div class="card-content p-2">
      <div class="text-center">
        <img src="assets/images/logo-icon.png" alt="logo icon">
      </div>
      <div class="card-title text-uppercase text-center py-3">Sign Up</div>
        <form action="" method="post">
        <div class="form-group">
        <label for="exampleInputName" class="sr-only">Username</label>
         <div class="position-relative has-icon-right">
          <input name="username" type="text" id="exampleInputName" class="form-control input-shadow" placeholder="Enter Your Name">
          <div class="form-control-position">
            <i class="icon-user"></i>
          </div>
         </div>
        </div>
        
        <div class="form-group">
         <label for="exampleInputPassword" class="sr-only">Password</label>
         <div class="position-relative has-icon-right">
          <input name="password" type="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="Choose Password">
          <div class="form-control-position">
            <i class="icon-lock"></i>
          </div>
         </div>
        </div>
        
         <div class="form-group">
           <div class="icheck-material-white">
                   <input type="checkbox" id="user-checkbox" checked="" />
                   <label for="user-checkbox">I Agree With Terms & Conditions</label>
           </div>
          </div>
        
       <input type="submit" name="submit" class="btn btn-light btn-block waves-effect waves-light" value="Sign Up"></input>
        
       </form>
       </div>
      </div>
      <div class="card-footer text-center py-3">
        <p class="text-warning mb-0">Already have an account? <a href="login.php">Sign In here</a></p>
      </div>
       </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
  
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
    <li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
  
  </div><!--wrapper-->
  
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
</body>
</html>
