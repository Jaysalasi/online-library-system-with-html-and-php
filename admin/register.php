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
                    <h1 class="display-4 fw-bold">Create Account</h1>
                    <!-- <p class="fw-light mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                  </div>
                </div>
              </div>
              <!-- Form Panel    -->
              <div class="col-lg-6 bg-white">
                <div class="d-flex align-items-center px-4 px-lg-5 h-100">
                  <form class="login-form py-5 w-100" method="POST" >

                    <div class="input-material-group mb-3">
                      <input class="input-material" id="" type="text" name="first_name" required >
                      <label class="label-material" for="">First Name</label>
                    </div>

                    <div class="input-material-group mb-3">
                      <input class="input-material" id="" type="text" name="last_name" required >
                      <label class="label-material" for="">Last Name</label>
                    </div>

                    <div class="input-material-group mb-3">
                      <input class="input-material" id="email" type="text" name="email" required >
                      <label class="label-material" for="">email</label>
                    </div>

                    <div class="input-material-group mb-3">
                      <input class="input-material" id="" type="text" name="staff_id" required >
                      <label class="label-material" for="">Staff ID Number</label>
                    </div>
                    
                    <div class="input-material-group mb-4">
                      <input class="input-material" id="" type="password" name="password" required >
                      <label class="label-material" for="">Password</label>
                    </div>

                    <div class="input-material-group mb-3">
                      <input class="input-material" id="" type="text" name="dept" required >
                      <label class="label-material" for="">Department</label>
                    </div>
                    
                    <div class="input-material-group mb-3">
                      <input class="input-material" id="" type="text" name="phone" required >
                      <label class="label-material" for="">phone Number</label>
                    </div>
                    
                    <input class="btn btn-primary mb-3" id="" name="signup" type="submit" value="signup">
                    
                    <br>

                    <!-- <a class="text-sm text-paleBlue" href="forgot_password.php">Forgot Password?</a><br> -->
                    
                    <small class="text-gray-500">Have an account? </small>
                    
                    <a class="text-sm text-paleBlue" href="login.php">Login</a>
                  
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

      if(isset($_POST['signup'])) {
        $count = 0;
        $sql = "SELECT staff_id FROM `admin_table`";
        $res = mysqli_query($db, $sql);

        while($row = mysqli_fetch_assoc($res)) {
          if($row['staff_id'] == $_POST['staff_id']) {
            $count = $count + 1;
          }
        }
        if($count == 0) {
          mysqli_query($db, "INSERT INTO `admin_table`(`first_name`, `last_name`, `staff_id`, `email`, `password`, `dept`, `phone`) 
          VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[staff_id]','$_POST[email]','$_POST[password]','$_POST[dept]','$_POST[phone]')");

          ?>
          <script type="text/javascript"> 
            alert("Registration Successful");
            window.location = "index.php";
        </script>
          <?php
        } else {
          ?>
            <script>alert("Staff ID already exists")</script>
          <?php
        }
      }
    ?>

  </body>
</html>