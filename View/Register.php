<?php
    include '../Model/Validierung.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body>
	        <!-- Navi class->. -->
        <div id="navibereich" class="startDiv">
            <nav>
                <ul>
                    <li class="active"><a href="../index.php">Home</a></li>
                    <li><a href="Gastebuch.php">Gästebuch</a></li>
                    <li style="float:right"><a href="Info.php">Info</a></li>
                    <li style="float:right"><a href="#">Registrieren</a></li>
                    <li style="float:right"><a href="Login.php">Login</a></li>
                </ul>
            </nav>            
        </div>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
                            <form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-logo"><i class="zmdi zmdi-landscape"></i></span>
                                        <span class="login100-form-title p-b-34 p-t-27">Registrieren</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
                                        <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="passRepeat" placeholder="Password Wiederholen">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="container-login100-form-btn">                                           
                                            <button name="submit" class="login100-form-btn">Registrieren</button>                                             
					</div>
					<div class="text-center p-t-90">
                                            <a class="txt1" href="Login.php">Du hast schon ein Konto?</a>
					</div>
				</form>
                                <?php
                                    if(isset($_POST['submit'])){
                                        $validate = new Validierung();
                                        $validate->validateRegisterData($_POST['username'], $_POST['pass'], $_POST['passRepeat']);
                                    }                                                
                                 ?>
                            
                        </div>
                            <!-- Footer -->
                            <div id="footer" class="startDiv">
                                <p>Created by Ron Schürch</p>
                            </div>
		</div>
	</div>	

	<div id="dropDownSelect1"></div>
	
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
	<script src="js/main.js"></script>

</body>
</html>