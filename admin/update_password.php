<?php
    include "connection.php";
    // include  "nav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Change Password</title>

</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap -login100">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-43">
						Change your password
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Admin ID is required">
						<input class="input100" type="text" name="staff_id">
						<span class="focus-input100"></span>
						<span class="label-input100">Staff ID Number</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: example@gmail.com">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Staff Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">New Password</span>
					</div>


			

					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="Update" name="Update">
							
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							<!-- Don't have an account? <a href="a_register.php">Register</a> -->
						</span>
					</div>

				</form>

				<!-- <div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div> -->
			</div>
		</div>
	</div>
	
	

	
	
        <!--===============================================================================================-->
            <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/bootstrap/js/popper.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/daterangepicker/moment.min.js"></script>
            <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
            <script src="login-js/main.js"></script>

            <?php
                if(isset($_POST['Update'])) {
                    if(mysqli_query($db, "UPDATE a_table SET password ='$_POST[password]' 
                    WHERE staff_id = '$_POST[staff_id]' AND email = '$_POST[email]';")) {
                      
                ?>

                    <script type="text/javascript">alert("password updated successfully");
                    window.location = "login.php";
                </script>


                <?php  
                    }

                }
            ?>

</body>
</html>