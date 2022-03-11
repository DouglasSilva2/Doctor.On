<?php
	session_start();//iniciando a seção...
	ob_start();//..Limpando a memoria...

	include_once "conexao.php";

	//$idagendar = filter_input(INPUT_POST, 'idagendar', FILTER_SANITIZE_STRING);
	
	//....Entrada das Variaveis ....

	$unidade = filter_input(INPUT_POST, 'unidade', FILTER_SANITIZE_STRING);

	$dataagende = filter_input(INPUT_POST, 'dataagende', FILTER_SANITIZE_STRING);
	
	$hora = filter_input(INPUT_POST, 'hora', FILTER_SANITIZE_STRING);

	$cartaosus = filter_input(INPUT_POST, 'cartaosus', FILTER_SANITIZE_STRING);

							//....Altere na tabela usuarios
		$result_agendar  = " UPDATE  agendar SET unidade = '$unidade', dataagende = '$dataagende', hora = '$hora', cartaosus =	'$cartaosus', modifild=NOW()";
			//...guardar os dados das variaveis ...
		$resultado_agendar = mysqli_query($conn, $result_agendar);

		if (mysqli_affected_rows($conn)) {
			$_SESSION['msge'] = "<p style='color:green;'>Editado com Sucesso</p>";
			//..Redireconamento para o campo de consulta....
			header("Location: valida_consulta.php");

			
		}else{
			$_SESSION['msge'] = "<p style='color:green;'>Erro ao Editar os dados </p>";
			//..Redireconamento para o campo de consulta....
			header("Location: valida_consulta.php");
		}	
 


?>
