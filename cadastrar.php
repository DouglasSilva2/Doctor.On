<?php
	session_start();//Iniciar uma seção....
	ob_start();// comoando para limpar a memoria , evitando erro de redirecionamento .....
	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastrar</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="css/cadastrar.css">
	<link rel="icon" href="imagens/logo/novologo.png">
</head>
<body>
<!--Inicios dos dados do formulario cadastro-->
<div id="dados" class="container-fluid col-md-6 col-sm-6 col-lg-6">
	<fieldset>
		<legend>Digite Seus dados</legend>
		<form class="container" id="cadastro" method="POST" action="valida_cadastro.php">
		  <div class="row">
		    <div class="col-md-6 mb-3">
		    <!--Caixas Relacionadas ao campo de cadastro-->
		      <label>Nome Completo</label>
		      	<input type="text" name="nome" class="form-control" placeholder="Nome completo">
		    </div>
		    <div class="col-md-6 mb-3">
		      <label >Data de Nacimento</label>
		      	<input type="text" name="nascimento" class="form-control" maxlength="10" style=" width:120px"; placeholder="06-09-2017">
		    </div>
		    <div class="col-md-6 mb-3">
		      <label >CPF</label>
		      	<input type="text" name="cpf" class="form-control" style=" width:160px"; maxlength="15" placeholder="104.558.626-99">
		    </div>
		    <div class="col-md-6 mb-3">
		      <label >Telefone</label>
		      	<input type="text" name="telefone" class="form-control" maxlength="10" style=" width:120px"; placeholder="3103-3028">
		    </div>
		    <div class="col-md-6 mb-3">
		      <label >Bairro</label>
		      	<input type="text" name="bairro" class="form-control" placeholder="Digite Nome de seu Bairro">
		    </div>
		    <div class="col-md-6 mb-3">
		      <label >E-mail</label>
		      	<input type="text" name="email" class="form-control" placeholder="Digite seu e-mail">
		    </div>
		     <div class="col-md-6 mb-3">
		      <label>Usuario</label>
		      	<input type="text" name="usuario" class="form-control" placeholder="Digite nome de usuario" >
		    </div>
		    <div class="col-md-6 mb-3">
		      <label >senha</label>
		      	<input type="password" name="senha" class="form-control" style=" width:120px"; maxlength="10" placeholder="Digite sua senha ">
		    </div>
		    <p class="text-align:center; text-danger">  
                <?php
                //Variavel global, para erro ...
                    if(isset($_SESSION['msgcad'])){
                    	echo $_SESSION['msgcad'];
                    	unset($_SESSION['msgcad']);
                	}
            	?>
                </p> <!--Mensagem de erro-->
                </div>
                <div class="row">
		  	  <!--Campo corelacionado aos botões-->
			<button id="bt1" class="col-md-3 col-sm-3 col-lg-3 btn btn-sm btn-success" type="submit" name="btnCadUsuario" value="Cadastrar">Cadastrar</button>
				
			<button id="bt2" class="col-md-3 col-sm-3 col-lg-3 btn btn-sm btn-warning" type="Reset" >Limpar</button>
				
			<button id="bt3" class="col-md-3 col-sm-3 col-lg-3 btn btn-sm btn-info" type="submit"><a href="login.php">Pagina de Login</a></button>
			<!--Fim do campo dos botões..-->
			</div>
		</form>	<!--Fechamento do formulario......-->
	</fieldset>
</div>	<!--Fim da div de formulario, campo cadastro-->
</body>
</html>