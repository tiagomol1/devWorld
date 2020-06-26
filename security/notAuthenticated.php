<?php
	include "../utils/functions.php";
	$hoje = dateComplete();
?>

<html>

	<head>
		<title>Hello World</title>
		<link rel="stylesheet" href="../styles/global.css">
		<link rel="stylesheet" href="../styles/login.css">
	</head>
	
	<body>
		<div class="content">
			<h1>Biblioteca Particular</h1>
			<h3><?php echo $hoje; ?></h3>
			<div class="loginErrorContainer">
				<h3> Rota não acessível! </h3>
				<p style="padding: 8px;">Para acessar diferentes rotas você deve estar logado no sistema.</p>
				<a href="../login.php" class="linkReturnLogin"><img src="../styles/images/arrow-left.svg"> Voltar</a>
			</div>
		</div>	
		<video autoplay muted loop id="myVideo">
			<source src="../assets/videos/videoLogin.mp4" type="video/mp4">
		</video>
	</body>
	
</html>