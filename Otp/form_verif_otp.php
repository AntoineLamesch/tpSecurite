<?php

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}


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
				<form class='login100-form validate-form flex-sb flex-w' method='post' action='./verif_otp.php'>
					<span class='login100-form-title p-b-53'>
						Veuillez indiquer le code qui vient d'être envoyé à votre adresse mail
					</span>

					<div class='p-t-31 p-b-9'>
						<span class='txt1'>
							Code reçu par mail
						</span>
					</div>
					<div class='wrap-input100 validate-input' data-validate = 'Le code est requis'>
						<input class='input100' type='number' name='code' >
						<span class='focus-input100'></span>
					</div>

					<div class='container-login100-form-btn m-t-17'>
						<input class='login100-form-btn' type='submit' value='Connexion' formaction='verif_otp.php'>
						</input>
					</div>

					</form>

					

					<form action='re_envoie_otp.php' method='post'>

					<div class='container-login100-form-btn m-t-17'>

							<div class='p-t-31 p-b-9'>
								<span class='txt1'>
									Votre email
								</span>
							</div>
							<div class='wrap-input100'>
								<input class='input100' type='mail' name='mail' required='false' >
								<span class='focus-input100'></span>
							</div>

						<input class='login100-form-btn' type='submit' value='Envoyer un nouveau code' formaction='re_envoie_otp.php'>
						</input>
					</div>



					</form>
					</div>
				
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