<?php


//$db = new PDO('mysql:host=mysql-tltteperlecques.alwaysdata.net;dbname=tltteperlecques_securite;charset=utf8', '289448_securite', 'Securite1.');
//$sql = "Insert into Message (contenue_message) values ('".$val."');";
//$db->query($sql);

echo "

<!DOCTYPE html>
<html lang='en'>
<head>
	<title>Login V5</title>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
<!--===============================================================================================-->	
	<link rel='icon' type='image/png' href='images/icons/favicon.ico'/>
<!--===============================================================================================-->
	<link rel='stylesheet' type='text/css' href='vendor/bootstrap/css/bootstrap.min.css'>
<!--===============================================================================================-->
	<link rel='stylesheet' type='text/css' href='fonts/font-awesome-4.7.0/css/font-awesome.min.css'>
<!--===============================================================================================-->
	<link rel='stylesheet' type='text/css' href='fonts/Linearicons-Free-v1.0.0/icon-font.min.css'>
<!--===============================================================================================-->
	<link rel='stylesheet' type='text/css' href='vendor/animate/animate.css'>
<!--===============================================================================================-->	
	<link rel='stylesheet' type='text/css' href='vendor/css-hamburgers/hamburgers.min.css'>
<!--===============================================================================================-->
	<link rel='stylesheet' type='text/css' href='vendor/animsition/css/animsition.min.css'>
<!--===============================================================================================-->
	<link rel='stylesheet' type='text/css' href='vendor/select2/select2.min.css'>
<!--===============================================================================================-->	
	<link rel='stylesheet' type='text/css' href='vendor/daterangepicker/daterangepicker.css'>
<!--===============================================================================================-->
	<link rel='stylesheet' type='text/css' href='css/util.css'>
	<link rel='stylesheet' type='text/css' href='css/main.css'>
<!--===============================================================================================-->
</head>
<body>
	
	<div class='limiter'>
		<div class='container-login100' style='background-image: url('images/bg-01.jpg');'>
			<div class='wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33'>
				<form class='login100-form validate-form flex-sb flex-w' method='post' action='./create_1.php'>
					<span class='login100-form-title p-b-53'>
						Créer votre compte
					</span>

					<a href='#' class='btn-face m-b-20'>
						<i class='fa fa-facebook-official'></i>
						Facebook
					</a>

					<a href='#' class='btn-google m-b-20'>
						<img src='images/icons/icon-google.png' alt='GOOGLE'>
						Google
					</a>
					
					<div class='p-t-31 p-b-9'>
						<span class='txt1'>
							Nom
						</span>
					</div>
					<div class='wrap-input100 validate-input' data-validate = 'Un nom est requis'>
						<input class='input100' type='text' name='nom' >
						<span class='focus-input100'></span>
					</div>

					<div class='p-t-31 p-b-9'>
						<span class='txt1'>
							Prénom
						</span>
					</div>
					<div class='wrap-input100 validate-input' data-validate = 'Un prénom est requis'>
						<input class='input100' type='text' name='prenom' >
						<span class='focus-input100'></span>
					</div>

					<div class='p-t-31 p-b-9'>
						<span class='txt1'>
							Email
						</span>
					</div>
					<div class='wrap-input100 validate-input' data-validate = 'Un Email est requis'>
						<input class='input100' type='mail' name='mail' >
						<span class='focus-input100'></span>
					</div>

					<div class='p-t-31 p-b-9'>
						<span class='txt1'>
							Age
						</span>
					</div>
					<div class='wrap-input100 validate-input' data-validate = 'Un âge est requis'>
						<input class='input100' type='number' name='age' >
						<span class='focus-input100'></span>
					</div>
					
					<div class='p-t-13 p-b-9'>
						<span class='txt1'>
							Mot de passe
						</span>

						<a href='#' class='txt2 bo1 m-l-5'>
							Forgot?
						</a>
					</div>
					<div class='wrap-input100 validate-input' data-validate = 'Un mot de passe est requis'>
						<input class='input100' type='password' name='pass' >
						<span class='focus-input100'></span>
					</div>

					<div class='container-login100-form-btn m-t-17'>
						<input class='login100-form-btn' type='submit'>
							Sign In
						</input>
					</div>

					<div class='w-full text-center p-t-55'>
						<span class='txt2'>
							Vous êtes déja membre ??
						</span>

						<a href='./index.php' class='txt2 bo1'>
							Connectez-vous !! 
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id='dropDownSelect1'></div>
	
<!--===============================================================================================-->
	<script src='vendor/jquery/jquery-3.2.1.min.js'></script>
<!--===============================================================================================-->
	<script src='vendor/animsition/js/animsition.min.js'></script>
<!--===============================================================================================-->
	<script src='vendor/bootstrap/js/popper.js'></script>
	<script src='vendor/bootstrap/js/bootstrap.min.js'></script>
<!--===============================================================================================-->
	<script src='vendor/select2/select2.min.js'></script>
<!--===============================================================================================-->
	<script src='vendor/daterangepicker/moment.min.js'></script>
	<script src='vendor/daterangepicker/daterangepicker.js'></script>
<!--===============================================================================================-->
	<script src='vendor/countdowntime/countdowntime.js'></script>
<!--===============================================================================================-->
	<script src='js/main.js'></script>

</body>
</html>
";

?>