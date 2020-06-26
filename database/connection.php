<?php
	$db_server = '127.0.0.1';
	$db_user = 'root';
	$db_password = '';
	$db_database = 'devworld';

	$connection = mysqli_connect($db_server, $db_user, $db_password, $db_database);

	if (mysqli_connect_errno($connection)){
		echo "Problemas para conectar no banco. Verifique os dados!";
		die();
	}
?>