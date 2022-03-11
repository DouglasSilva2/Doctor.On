<?php
	session_start();//Iniciar uma seção....
	ob_start();//....comoando para limpar a memoria , evitando erro de redirecionamento .....
	//....Saber se esta passando informações pelo botão ...Utilizando um fiter para testalo....
	$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
	if ($btnCadUsuario) {
		include_once 'conexao.php';
		$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		
		//....Validação de dados , caso os dados estejam cadastrados, não permitir novo cadastro....
	$erro = false;
		//....Retirar as tags, caso sejam colocadas no campo (Fom Cadastro), usando o comando -> strip_tags....

	$dados_st = array_map('strip_tags', $dados_rc);

		//....Retirar os espaços em branco, caso sejam colocadas no campo (Fom Cadastro), usando o comando -> trim....
	$dados = array_map('trim', $dados_rc);
		//....Verificar se tem algum campo vazio....
	if(in_array('',$dados))	{

		$erro = true;
			//....Variavel global ...
			$_SESSION['msgcad'] ="<div class='alert alert-warning'><strong>Erro!</strong>Necessario Preencher todos os Campos!!</div>";
			//....Redirecionamento para pagina cadastrar....
			header("Location: cadastrar.php");
			//....Testar se a senha é menor que 6....	
	
	}elseif ((strlen($dados['senha'])) < 6 ){
			//....Testando o campo de senha....
		$erro = true;
			//....Variavel global ...

			$_SESSION['msgcad'] ="<div class='alert alert-warning'><strong>Erro!</strong>A senha deve ter no minimo 6 Caracterios!!</div>";	
			//....Redirecionamento para pagina cadastrar....
			header("Location: cadastrar.php");
		//....Proibir acesso duplicado.... 
	}else{
		//....fazer uma pesquisa....
		$result_usuario = "SELECT id FROM usuarios WHERE usuario = '". $dados['usuario'] ."'";
		$result_usuario = mysqli_query($conn, $result_usuario);
		//...Se resultado e resultado for diferente != 0(Diferente de 0)....	
	if(($result_usuario) AND ($result_usuario->num_rows != 0)){

		$erro = true;
			//....Variavel global ...
			$_SESSION['msgcad'] = "<div class='alert alert-danger'><strong>Ops!!</strong> Esse usuario já foi Cadastrado!!</div>";
			//....Redirecionamento para pagina cadastrar....
			header("Location: cadastrar.php");

		}

		$result_usuario = "SELECT id FROM usuarios WHERE email = '". $dados['email'] ."'";
		$result_usuario = mysqli_query($conn, $result_usuario);
		//...Se resultado e resultado for diferente != 0(Diferente de 0)....	
	if(($result_usuario) AND ($result_usuario->num_rows != 0)){

		$erro = true;
			//....Variavel global ...
			$_SESSION['msgcad'] = "<div class='alert alert-danger'><strong>Ops!!</strong> Esse usuario já foi Cadastrado!!</div>";
			//....Redirecionamento para pagina cadastrar....
			header("Location: cadastrar.php");

		}

	}

	if(!$erro){

		//....var_dump($dados); testar os dados passados .....
		//....Criptografar a senha ...
		$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
		//....inserir os dados no banco de dados doctoron...... 
		$result_usuario = "INSERT INTO usuarios (nome, nascimento, email, usuario, senha, bairro, telefone, cpf) 	VALUES (

				/*....Valores que serão atribuidos ao banco..... */
						'" .$dados['nome'].    	"',
						'" .$dados['nascimento']."',
						'" .$dados['email']. 	"',
						'" .$dados['usuario']. 	"',
						'" .$dados['senha']. 	"',
						'" .$dados['bairro'].   "',
						'" .$dados['telefone']. "',
						'" .$dados['cpf'].   	"'	

						)";

		$resultado_usuario = mysqli_query($conn, $result_usuario);
		//....Exibir uma informação caso os dados forem cadastrados com sucesso....
		if(mysqli_insert_id($conn)) {
					
					//....Variavel global ...
					$_SESSION['msgcad'] ="<div class='alert alert-success'><strong>Bem Vindo!</strong>Usuario cadastrado com Sucesso</div>";	
					header("Location: login.php");				
			}else{
					//....Variavel global.... 
					$_SESSION['msg'] = "<div class='alert alert-danger'><strong>Ops!!</strong> Erro ao cadastrar o usuario!</div>";
					header("Location: login.php");		
				}

			}
		}

?>
