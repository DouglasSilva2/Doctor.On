<?php
	session_start();//....iniciara uma seção....
	ob_start();//....Limpar a Memoria....

	//....Entrada dos dados .....
		//....Validando os dados no botão de agendamento....btnAgendar....
	$btnCadAgendar = filter_input(INPUT_POST, 'btnCadAgendar', FILTER_SANITIZE_STRING);	
					 
		if ($btnCadAgendar) {
				//incluir os dados no banco
				include_once 'conexao.php';
				//....incluir os dados em uma variavel dados ...
			$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		//...Variavel de erro , casso de errro não pode acessar  o banco...	
		$erro = false;
		//....Retirando as tags dos formularios ....comando striptag...
		$dados_st = array_map('strip_tags', $dados_rc);
		//Retirar os espaços em branco...comando trim...
		$dados = array_map('trim', $dados_st);
			//...Verificar se tem algum campo vazio ...atraves do array dados
			if (in_array('',$dados)) {
				$erro = true;
				//Variavel global...de erro..
				$_SESSION['msgad'] ="<div class='alert alert-warning'><strong> Erro!!</strong> Necessario Prenecher todos os Campos!!</div>";	

			}elseif ((strlen($dados['cartaosus'])) < 15 ) {
				# code...
				$erro = true;
				//Variavel Global...
				$_SESSION['msgad'] ="<div class='alert alert-warning'><strong> Erro!!</strong> O Numero do Sus deve ter no minimo 15 digitos!!</div>";	
				//....Redirecionamento para pagina de Agendamento....
				header("Location: agendar.php");			
						
			}else{
				//...impedir cadasro de nureros SUS Duplicados.....
				$result_agnds = " SELECT id FROM agendar WHERE  cartaosus= '". $dados['cartaosus'] ."'";

				$resultado_nsus = mysqli_query($conn, $result_agnds);
					//Casso o resultado seja diferente de 0....
					if (($resultado_nsus) AND  ($resultado_nsus->num_rows != 0)){
						$erro = true;
						//Variavel global.....
						$_SESSION['msgad'] ="<div class='alert alert-warning'><strong>Erro!</strong> Numero SUS já foi Agendado!!</div>";	
				//....Redirecionamento para pagina de Agendamento....
				header("Location: agendar.php");	
					}
		}
	if (!$erro) {
					
			//....testar os dados passados com o comando var dump....
			//var_dump($dados);	
		//..Criptografando o numero do SUS...utilizando o password_hash....
		//..Não pode criptografar o numero sus, pos na ora da consulta apresenta erro..
		//...$dados ['cartaosus'] = password_hash($dados['nsus'], PASSWORD_DEFAULT);

		//inserir dados no banco de dados...
		$result_agendar = " INSERT INTO agendar (dataagende, hora, unidade, cartaosus, espc) VALUES (

						'".$dados['dataagende']."',
						'".$dados['hora'].		"',
						'".$dados['unidade'].	"',
						'".$dados['cartaosus'].	"',
						'".$dados['espc'].		"'

						
					)";
					//....ARRAY PARA RECEBIMENTO DE VALORES ...
					//....Não esquever que não pode colocar $ no nome dentro dos arrays....

		$result_agendar = mysqli_query($conn, $result_agendar);			

			if (mysqli_insert_id($conn)) {
				//...Variavel Global....
				$_SESSION['msgad'] = "<div class='alert alert-success'><strong>Parabéns!!</strong>Você Realizou o Agendamento de sua Consulta!!</div>";
				//...Redirecionamento da pagina ....
				header("Location: agendar.php");
			}else{
				//....Variavel Global....
				$_SESSION['msgad'] = " Erro ao Agendar a Consulta ";

			}
	
				}	

	}


?>