<?php

	session_start();

	if(isset($_SESSION['nome'])) {

		$nome = $_SESSION['nome'];

		echo "Olá, ".$nome.'<a href="sair.php">-Sair</a>';

	}
	
?>