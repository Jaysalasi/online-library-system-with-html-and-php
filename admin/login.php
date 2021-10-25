<?php 
  session_start();
  include "connection.php";
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.green.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    
    

  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center position-relative py-5">
        <div class="card shadow-sm w-100 rounded overflow-hidden bg-none">
          <div class="card-body p-0">
            <div class="row gx-0 align-items-stretch">
              <!-- Logo & Information Panel-->
              <div class="col-lg-6">
                <div class="info d-flex justify-content-center flex-column p-4 h-100">
                  <div class="py-5">
                    <h1 class="display-6 fw-bold">Login<strong> Dashboard</strong></h1>
                    <!-- <p class="fw-light mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                  </div>
                </div>
              </div>
              <!-- Form Panel    -->
              <div class="col-lg-6 bg-white">
                <div class="d-flex align-items-center px-4 px-lg-5 h-100">
                  <form class="login-form py-5 w-100" method="POST" >

                    <div class="input-material-group mb-3">
                      <input class="input-material" id="" type="text" name="staff_id" required >
                      <label class="label-material" for="">Staff ID Number</label>
                    </div>
                    
                    <div class="input-material-group mb-4">
                      <input class="input-material" id="" type="password" name="password" required >
                      <label class="label-material" for="">Password</label>
                    </div>

                    <input class="btn btn-primary mb-3" id="" name="login" type="submit" value="login">
                    
                    <br>

                    <a class="text-sm text-paleBlue" href="forgot_password.php">Forgot Password?</a><br>
                    
                    <small class="text-gray-500">Do not have an account? </small>
                    
                    <a class="text-sm text-paleBlue" href="register.php">Signup</a>
                  
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center position-absolute bottom-0 start-0 w-100 z-index-20">
        
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- <script src="vendor/just-validate/js/just-validate.min.js"></script> -->
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script>
    
    
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    

    <?php 

      if(isset($_POST['login'])) {
        $count = 0;
        $res = mysqli_query($db, "SELECT * FROM `admin_table` 
        WHERE staff_id='$_POST[staff_id]' && password='$_POST[password]'");

        $count = mysqli_num_rows($res);
        if($count == 0 ) {
          ?>
          <script type="text/javascript">
          alert("staff ID or password incorrect");
        </script>
        <?php 
        } else {
          $_SESSION['login_user'] = $_POST['staff_id'];
          ?>
          <script type="text/javascript">
          alert("logged in");
        </script>
              <script type="text/javascript">
            window.location = "index.php";
          </script>
          <?php
        }
      }
    ?>

  </body>
</html>