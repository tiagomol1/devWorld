<?php
	include "utils/functions.php";
   
	$hoje = dateComplete();
?>
<html lang="pt">
	<head>
		<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
		<title>DevWorld</title>
		<link rel="stylesheet" href="styles/global.css">
		<link rel="stylesheet" href="styles/login.css">
	</head>
	
	<body>
		<div class="content">
			<h1>DevWorld!</h1>
			<h3><?php echo $hoje; ?></h3>
			<div class="loginContainer">
				<form action="security/enterSystem.php" method="post" onSubmit="return fillForm()" >
					<img src="assets/images/icon.png" width="70px">
					<br>
					<br>
					<div class="inputs_login">
						<input type="text" id="fUser" name="fUser" placeholder="Usuário ou E-mail"><br><br>
						<input type="password" id="fPassword" name="fPassword" placeholder="Senha"><br><br>
					</div>
					<button type="submit" id="btnSubmit">Entrar</button>
				</form>	
			</div>
		</div>	
		<video autoplay muted loop id="myVideo">
			<source src="assets/videos/videoLogin.mp4" type="video/mp4">
		</video>
	</body>
	<script src="js/interaction.js"></script>
</html>

