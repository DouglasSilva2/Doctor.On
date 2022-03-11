<?php
    
    session_start();//...Iniciar uma seção...
    ob_start();//...Limpar a memoria ...
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Login-Pagina de Cadastro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Pagina para realizar o login">
    <meta name="author" content="Douglas Teixeira da Silva">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="icon" href="imagens/logo/novologo.png">

</head>
<body>
<!--Formatação do campo de login-->
	  <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="imagens/login/usuario.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <!--Campo de form/ login do usuario-->
            <form class="form-signin" method="post" action="valida_login.php">
                    <span id="reauth-email" class="reauth-email"></span>
                <!--Caixas relacionada ao campo  login-->
                 <input type="text" id="reauth-email" name="usuario" class="form-control" placeholder="Digite seu nome de Usuario " required autofocus>
                <!--senha-->
                <input type="password" name="senha" class="form-control" placeholder="Digite sua senha " required>
                            <!--Fim-->
                <!--Campo corelacionado ao botão-->
                <button class="btn btn-lg btn-primary btn-block btn-signin" name="btnLogin" type="submit" value="Acessar">Logar</button>
                            
                            <!--Fim-->
            </form><!-- fim do form de login -->
                <!--Mensagmede erro/Teste de login-->
            <p class="text-align:center; text-danger"> 
                <?php
                    if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }

                    if(isset($_SESSION['msgcad'])){
                    echo $_SESSION['msgcad'];
                    unset($_SESSION['msgcad']);
                }
            ?>
                </p> <!---->
            <!--Area destinda a Cadastro e refazer senha-->
            <ul class="pager">
            	&emsp;
            	<li class="li01"><a href="cadastrar.php">Cadastrar</a></li>
            	&emsp;
            	<li class="li03"><a href="index.php">Pagina Inicial</a></li>
            </ul>
            &emsp;&emsp;&emsp;&emsp;
            <a href="Senha.php" class="forgot-senha"> 
            	Esqueceu sua senha?<!--infromação a ser exibida-->
            </a>
            <!--Fim do campo-->
        </div><!-- card-container -->
    </div><!-- container -->
<!--Fim da Foratação-->
</body>
</html>