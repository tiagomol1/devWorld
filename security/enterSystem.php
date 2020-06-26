<?php
	session_start();

	include "../utils/functions.php";
	$hoje = dateComplete();
	
	include "../database/connection.php";
	
	$sql_userSearch = "select * from users where username='".$_POST['fUser']."' OR email ='".$_POST['fUser']."'  and password='".$_POST['fPassword']."'";
	$result = mysqli_query($connection, $sql_userSearch);
	$result_lines = mysqli_num_rows($result);
	
	if ($result_lines > 0){
		$table_users = mysqli_fetch_array($result);
		$_SESSION['user'] = $table_users['id'];
		
		header("Location: ../pages/main.php"); 
	}else{
		$message = "Usuário inexistente ou senha incorreta!";
	}
?>
<html>
	<head>
		<title>DevWorld</title>
		<link rel="stylesheet" href="../styles/global.css">
		<link rel="stylesheet" href="../styles/login.css">
	</head>
	
	<body>
		<div class="content">
			<h1>Hello World</h1>
			<h3><?php echo $hoje; ?></h3>
			<div class="loginErrorContainer">
				<h3> Erro! </h3>
				<p><?php echo $message; ?></p>
				<a href="../login.php" class="linkReturnLogin"><img src="../styles/images/arrow-left.svg"> Voltar</a>
			</div>
		</div>	
		<video autoplay muted loop id="myVideo">
			<source src="../assets/videos/videoLogin.mp4" type="video/mp4">
		</video>
	</body>
</html>