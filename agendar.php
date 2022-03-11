<?php
    session_start();//iniciar a seção ...
    ob_start();//Limpara a memoria ...
  ?>
<!--Inicio-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Agendar</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style_agendar.css"><!--formatação da pagina de agendamneto-->
   <link rel="icon" href="imagens/logo/novologo.png"><!--Icone do site na parte superior da pagina-->
</head>
<body>

<!--Inicios dos dados do formulario Agendamento-->
<div id="dados" class="container-fluid col-md-6 col-sm-6 col-lg-6">
        <h3 style="text-align: center; color: green; font-family: 'Fontelogo'">Agendamento de Consultas</h3>
                <hr style="background-color: green";>
<fieldset><!--seção de conteudo de medicos especialidades-->
  <p class="text-align:center; text-danger">  
                <?php
                    if(isset($_SESSION['msgad'])){
                      echo $_SESSION['msgad'];
                      unset($_SESSION['msgad']);
                  }
              ?>
                </p> 
<legend>Digite Seus Dados</legend>
	<form method="POST" action="valida_agendar.php"><!--Formulario dos dados-->
  		<div class="form-row">
    		<div class="form-group col-md-6">
      			<label>Local da Consulta</label>
      				<input type="text" class="form-control" name="unidade" placeholder="Digite o Local do Posto" required autofocus>
    		</div>
    		<div class="form-group col-md-6">
      			<label>Data da Consulta</label>
      				<input type="text" class="form-control" name="dataagende" style=" width:120px";  placeholder="06-09-2018">
    		</div>
  		</div>
  			<div class="form-group col-md-6">
    			<label>Hora</label>
    				<input type="text" class="form-control" name="hora" style=" width:120px";  placeholder="Digite a hora da consulta">
  			</div>
        <div class="form-group col-md-6">
          <label>Nº SUS</label>
            <input type="text" class="form-control" name="cartaosus" placeholder="080.1762.8987.8897" maxlength="15" style=" width:180px";>
        </div>
        <!--Campo de opções de medicos -->
    <div class="Conteiner"><!--Conteiner fieldset--> 
    <fieldset>
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
              <button id="bn01" class="col-md-3 col-sm-3 col-lg-3 btn btn-sm btn btn-success" type="submit" name="btnCadAgendar" value="Cadastrar">Cadastrar</button>
    <!--Campo corelacionado aos botões-->
              <button id="bn02" class="col-md-3 col-sm-3 col-lg-3 btn btn-sm btn-primary" type="reset">Limpar</button>
              <!--Botão de Sair-->
        </form><!--Formulario dos dados fim -->
        <dir id="btn3" class="row">
          <form action="usuario.php">      
              <button id="bn03" class="col-md-3 col-sm-3 col-lg-3 btn btn-sm btn-danger" type="submit">Home</button>
          </form>
        </dir>            
      
      <?php
   
      if(!empty($_SESSION['id'])){

         echo "<div style='text-align:center' class='alert alert-success'>Seja Bem vindo a Pagina de Agendamento !!</div>";
        }
      ?>
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

