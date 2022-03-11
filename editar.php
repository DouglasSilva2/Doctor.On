<?php
    session_start();//iniciar a seção ...
    ob_start();//Limpara a memoria ...

    include_once 'conexao.php';

    //.selecionar os dados na tabela agendar(as Colunas)..determinando pelo id
    $result_agendar = " SELECT * FROM agendar WHERE idagendar = idagendar";
    //..Armazenar os dados da tabela em uma variavel $resultado_agendar
    $resultado_agendar = mysqli_query($conn, $result_agendar);
    //Executar essa query ...
    //o resultado sera armazenado na variavel $row_agendar
    $row_agendar = mysqli_fetch_assoc($resultado_agendar);
  ?>
<!--Inicio-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Editar-Agendamento</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/cadastrar.css">
  <link rel="stylesheet" type="text/css" href="css/style_agendar.css"><!--formatação da pagina de agendamneto-->
   <link rel="icon" href="imagens/logo/novologo.png"><!--Icone do site na parte superior da pagina-->
</head>
<body>

<!--Inicios dos dados do formulario Agendamento-->
<div id="dados" class="container-fluid col-md-6 col-sm-6 col-lg-6">
        <h3 style="text-align: center; color: green">Editar Dados de Consultas</h3>
                <hr style="background-color: green";>
<fieldset style="border: green"><!--seção de conteudo de medicos especialidades-->

<legend>Digite Seus Dados</legend>
	<form   method="POST" action="valida_editar.php"><!--Formulario dos dados-->
  		<div class="form-row">
    		<div class="form-group col-md-6">
      			<label>Local da Consulta</label>
              <input type="hiddeN" name="idagendar" value="<?php $row_agendar['idagendar'];?>"><!--Retirar essa linha-->
      				<input type="text" class="form-control" name="unidade" style="width: 110%;" value="<?php echo $row_agendar['unidade'];?>" placeholder="Digite o Local do Posto" required autofocus>
    		</div>
    		<div class="form-group col-md-6">
      			<label>Data da Consulta</label>
      				<input type="text" class="form-control" name="dataagende" value="<?php echo $row_agendar['dataagende'];?>" style=" width:120px";  placeholder="06-09-2018">
    		</div>
  		</div>
  			<div class="form-group col-md-6">
    			<label>Hora</label>
    				<input type="text" class="form-control" name="hora" style=" width:120px"; value="<?php echo $row_agendar['hora'];?> " placeholder="Digite a hora da consulta">
  			</div>
        <div class="form-group col-md-6">
          <label>Nº SUS</label>
            <input type="text" class="form-control" name="cartaosus" value="<?php echo $row_agendar['cartaosus'];?>" placeholder="080.1762.8987.8897" maxlength="15" style=" width:180px";>
        </div>
        <!--Campo de opções de medicos -->
    <div class="Conteiner"><!--Conteiner fieldset--> 
    <fieldset style="border: green" >
          <legend id="md">Especialidades</legend>
            <div class="row"><!--Div corelacionado com as linhas inicio-->
            <dir class="form-check col-md-6">
              <label id="legends" class="form-check label">
                <input class="form-check input" type="radio" name="espc" value="Clinico Geral" checked> 
                Clinico Geral</label>
            </dir> 			
            <dir class="form-check col-md-6">
              <label id="legends" class="form-check label">
                <input class="form-check input" type="radio" name="espc" value="ortopedista"> Ortopedista</label>
            </dir>
            <dir class="form-check col-md-6">
              <label id="legends" class="form-check label">
                <input class="form-check input" type="radio" name="espc" value="psicologos"> 
                Psicologo</label>
            </dir>
            <dir class="form-check col-md-6">
              <label id="legends" class="form-check label">
                <input class="form-check input" type="radio" name="espc" value="oftamologista"> Oftamologista</label>
            </dir>
            <dir class="form-check col-md-6">
              <label id="legends" class="form-check label">
                <input class="form-check input" type="radio" name="espc" value="cardiologista"> Cardiologista</label>
            </dir>
            <dir class="form-check col-md-6">
              <label id="legends" class="form-check label">
                <input class="form-check input" type="radio" name="espc" value="odontologista">
                Odontologista</label>        
            </dir>
    </div><!--Conteiner fieldset fim-->  
          </div><!--Div corelacionado com as linhas fim -->
          <!--Campo corelacionado aos botões-->
              <button id="bn01" class="col-md-3 col-sm-3 col-lg-3 btn btn-sm btn btn-success" type="submit" value="editar">Editar</button>
    <!--Campo corelacionado aos botões-->
              <button id="bn02" class="col-md-3 col-sm-3 col-lg-3 btn btn-sm btn-primary" type="reset">Limpar</button>
              <!--Botão de Sair-->
        </form><!--Formulario dos dados fim -->           
      </fieldset> 
</div>	<!--Fim da div de formulario, campo Agendamento--> 
        <!--Campo destinado ao Script-->
    <script src="js/jquery-1.11.3.min.js"></script><!--Função da pagina inicial para exibição de conteudos -->
    <script src="js/modernizr.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.easypiechart.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.sliderPro.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>

