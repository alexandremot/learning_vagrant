<!DOCTYPE html>
<html>
	<body>
	<?php
	echo "Testando conexão <br /><br />";
	$servername = "192.168.0.23";
	$username = "phpuser";
	$password = "pass";

	// create a connection
	$conn = new mysqli($servername, $username, $password);

	//check connection
	if ($conn->connect_error){
		die("conexao falhou: " . $conn->connect_error);
	}
	echo "conectado com sucesso!";
	?> 
	</body>
</html>