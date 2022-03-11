<?php
	ob_start();// comoando para limpar a memoria , evitando erro de redirecionamento ....

	session_start();
		unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['email']);
			
			//....Variavel global....
			$_SESSION['msg'] = "<div class='alert alert-success'>Deslogado com sucesso!!</div>";
			//...Redirecionar para pagina de login....
		header("Location: login.php");