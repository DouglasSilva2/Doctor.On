<?php

	session_start();//....iniciar uma seção ...
	ob_start();//...limpar a memoria 
	//..iniciar  a conexão com banco de dados 
	include_once ("conexao.php");

	//$agendar= 'idagendar'; 

	$result_dados = "DELETE FROM agendar WHERE idagendar= idagendar ";
	$resultado_dados = mysqli_query($conn, $result_dados);
	//...Se ele fatou alguma das linha no banco então ....
	if (mysqli_affected_rows($conn)) {
			//..Dados apagados com sucesso...
			$_SESSION['msgd'] = "<p style='color:green;'>Dados Apagados com sucesso</p>";
			//..Redireconamento para o campo de consulta....
			header("Location: valida_consulta.php");

			
		}else{
	//caso o contrario , erro ao apagar os dados ....		
			$_SESSION['msgd'] = "<p style='color:green;'>Erro ao Apagar os Dados</p>";
			//..Redireconamento para o campo de consulta....
			header("Location: valida_consulta.php");
		}	
 



?>