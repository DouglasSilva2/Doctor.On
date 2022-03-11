<?php

    ob_start();//...Limpar a memoria ...


	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "doctoron";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);


?>