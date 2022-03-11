<?php
session_start();//abertura de seção em ..
ob_start();// comomando para limpar a memoria , evitando erro de redirecionamento ....
//conexão com banco de dados 
include_once("conexao.php");
//....Validação do botão ......
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin){
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	//echo "$usuario - $senha";
	if((!empty($usuario)) AND (!empty($senha))){
		// consulta de user no banco../..Pesquisar o usuário no DB......
		$result_usuario = " SELECT id, nome, email, senha FROM usuarios WHERE usuario = '$usuario' LIMIT 1";
		//....Limitar a pesquisa a um unico usuario....
		$resultado_usuario = mysqli_query($conn, $result_usuario);
	
	if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			
			if(password_verify($senha, $row_usuario['senha'])){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
				//....Redirecionamneto para pagina de agendamento...
				header("Location: usuario.php");
			
			}else{
				//....Variavel global....

				$_SESSION['msg'] = "<div class='alert alert-danger'><strong>Ops!!</strong> Login e senha incorreto!.</div>";
				//....Redirecionamneto para Pagina de Login...
				header("Location: login.php");
			}
		}
	}else{
		//....Variavel global....
		$_SESSION['msg'] = "<div class='alert alert-danger'><strong>Ops!!</strong> Login e senha incorreto!.</div>";
		//....Redirecionamneto para Pagina de Login...
		header("Location: login.php");
	}
}else{
		//....Variavel global....
	$_SESSION['msg'] = "<div class='alert alert-danger'><strong>Ops!!</strong> Página não encontrada!.</div>";
	//....Redirecionamneto para Pagina de Login...
	header("Location: login.php");
}
?>
