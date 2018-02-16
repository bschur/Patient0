<?php
    include '../Model/Validierung.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

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


		<div class="container-login100" >

                            <form  action="" method="POST">
					

					
                            </form>
                            <?php
                                if(isset($_POST['submit'])){
                                    $validate = new Validierung();
                                    $validate->validateRegisterData($_POST['username'], $_POST['pass'], $_POST['passRepeat']);
                                }                                                
                            ?>
                </div>		
</body>
</html>