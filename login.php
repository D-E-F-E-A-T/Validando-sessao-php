<?php

	session_start();

	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);


	if($nome) {

		$_SESSION['nome'] = $nome;
		
		header("Location:index.php");
	}


?>

<form method="POST">
	
	<label>

	Qual o seu nome?
	<input type="text" name="nome"/>

	</label>

	<input type="submit" value="Enviar"/>

</form>