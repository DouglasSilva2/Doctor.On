<?php
    session_start(); //iniciar seção...
    ob_start();//limpar a memoria...

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Projetos</title>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Doctor.On</title>
    <link rel="stylesheet" href="css/normalize.css"><!--normalize-->
    <link rel="stylesheet" href="css/bootstrap.min.css"><!--bootstrap-->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css"/><!--ICONES-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slider-pro.css"><!--Slider-->
    <link rel="stylesheet" href="css/owl.carousel.css"><!--imagens -->
    <link rel="stylesheet" href="css/owl.transitions.css"><!--efeito-->
    <link rel="stylesheet" href="css/animate.css"><!--animação-->
    <link rel="stylesheet" href="css/style.css"> <!--Formatação da navbar-->
    <link rel="stylesheet" type="text/css" href="css/style_projetos.css"><!--Projeto div-->
    <link rel="icon" href="imagens/logo/novologo.png"><!--iCONE DO SITE-->

</head>
<body>
    <!-- fim -->
   
        <!-- Menu Principal-->
		
	<nav id="topNav" class="navbar navbar-default main-menu">
    <div class="container">
        <button class="navbar-toggler hidden-md-up pull-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
             
        </button> 
		 <a class="navbar-brand page-scroll" href="index.php">DoctorOn</a>
        <div class="collapse navbar-toggleable-sm" id="collapsingNavbar">
            <ul class="nav navbar-nav"><!--Campo de lista-->
                 <li class="active">

                    <li><!--Campo de imagem-->
                        <img style="margin-left: 80%"; width="3%;" id="profile-img" class="profile-img-card" src="imagens/login/usuario.png"/>
                    </li><!--Campo de imagem, fim -->
                    <li><!--Campo de Links Sair-->
                        <a style="margin-left: 1%" href="sair.php">Sair</a>
                    </li><!--Campo de Link-->
                </li>  
            </ul> <!--Fim do campo de lista-->
        </div>
    </div>
    </nav>
    <div class="container" id="cardsp">
    <div class="row"><main role="main" class="container">

    <div class="row row-offcanvas row-offcanvas-right">
    <div class="col-12 col-md-9"><!--....Informações....-->
    <div class="jumbotron"><!--Campo de Notificação-->

    <h1 style="color: #006400";><!--Campo de nome do Usuario-->                 
         <?php
                //....Campo destinado ao nome do usuarios..
            if(!empty($_SESSION['id'])){

                echo " Olá ".$_SESSION['nome'].": Seja Bem Vindo!!"; 
                }
            ?>            
    </h1><!--Fim/Campo de nome -->

        <p>Nesta Pagina você terá acesso a todas as informações decorrentes a área da saúde, como novas campanhas, dias de vacinações em seu município, atividades decorrentes da área da saudade de sua cidade dentre outras informações<strong>. Novamente, Seja Bem Vindo!!</strong></p>
    </div><!--Fim do Campo de Notificação-->
          <div class="row">
            <div class="col-6 col-lg-4">
              <h2 style="color:#0000CD";>Novembro Azul</h2>
              <p>É uma campanha de conscientização realizada por diversas entidades no mês de novembro dirigida à sociedade e, em especial, aos homens, para conscientização a respeito de doenças masculinas, com ênfase na prevenção e no diagnóstico precoce do câncer de próstata</p>
              <p><a class="btn btn-secondary" href="#" role="button">Detalhes &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-lg-4">
              <h2 style="color: #FF69B4";>Outubro Rosa </h2>
              <p>É uma campanha de conscientização que tem como objetivo principal alertar as mulheres e a sociedade sobre a importância da prevenção e do diagnóstico precoce do câncer de mama. Esta campanha acontece com mais intensidade no mês de outubro,pois seu símbolo é um laço rosa</p>
              <p><a class="btn btn-secondary" href="#" role="button">Detalhes &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-lg-4">
              <h2 style="color: #006400";>Hoje é o Dia D<br> da Campanha Nacional de Multivacinação</h2>
              <p>Hoje é o Dia D da Campanha Nacional de Multivacinação, os postos de saúde estão abertos em todo o país. Cerca de 47 milhões de crianças e adolescentes menores de 15 anos estão convocados para atualizar a caderneta de vacinas. Segundo o Ministério da Saúde, 53% desse público não estão com a vacinação em dia</p>
              <p><a class="btn btn-secondary" href="#" role="button">Detalhes &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-lg-4">
              <h2 style="color: #FF0000">Sociedades médicas lançam campanha para evitar 'overdose' de exames</h2>
              <p>Quantos mais exames o médico pede, mais você está protegendo sua saúde? Pode não ser bem assim. Sociedades médicas brasileiras – de Cardiologia e de Medicina de Família – estão trazendo para o Brasil uma campanha internacional que tenta mostrar os riscos do que chamam de "epidemia de diagnósticos"</p>
              <p><a class="btn btn-secondary" href="#" role="button">Detalhes &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-lg-4">
              <h2 style="color:#DAA520">Hepatite A, como se proteger </h2>
              <p>cidade de São Paulo vive um surto de hepatite A. De janeiro a outubro deste ano, houve um aumento de 960% no número de casos confirmados da doença, se comparado com o mesmo período de 2016.</p>
              <p>De acordo com a Secretaria Municipal de Saúde, até 28 de outubro, foram registrados 604 casos, enquanto no mesmo período do ano passado foram reportados apenas 57.</p>
              <p><a class="btn btn-secondary" href="#" role="button">Detalhes &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-lg-4">
              <h2 style="color: #FFFF00">Campanha Nacional de Prevenção ao Suicídio</h2>
              <p>Por meio das redes sociais, o Conselho Federal de Medicina (CFM) e a Associação Brasileira de Psiquiatria (ABP) lançaram a Campanha Nacional de Prevenção ao Suicídio. As entidades fazem um pedido aos médicos e sociedade para postarem fotos com destaque à cor amarela, marcando com a hastag #AcreditoNaVida. </p>
              <p><a class="btn btn-secondary" href="#" role="button">Detalhes &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
        <!--Area destinada a Links de Paginas Pessoais-->
        <div  class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">
          <div  class="list-group">
            <a class="list-group-item active">Dados</a>
            <a href="agendar.php" class="list-group-item" style="color: #FF1493";>Agendar Consultas</a>
        <a href="valida_consulta.php" class="list-group-item" style="color: #4682B4";>Dados de Consultas</a>
            <a href="boletins_medicos.php" class="list-group-item" style="color: #000080";>Boletins Medicos</a>
            <a href="sair.php" class="list-group-item">Sair</a>
          </div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

        
    </div><!--row-->
</div><!--Conteiner-->

       <br>
       <!--Fim-->
<!--Campo de fooder ( conteudo relacionados a roda-pé da pagina ) -->
    <section class="footer-container">
        <div class="container"><!--Dive relacionada a roda pé-->
            <div class="row footer-containertent">
                <!--Div relacionada a o logoda pagina-->
                <div class="col-md-4">
                    <h4>Doctor.ON</h4>
                    <img class="sp-imasge" src="imagens/logo/novologo.png" alt="imagen de logo do site"/>
  
                </div>
                <div class="col-md-4">
                    <h4>&emsp;&emsp;Nosso Objetivo</h4>
                    <p id="text1">trazer o acesso rapido, a uma forma de agendamento e cadastros de 
                    consultas, para pacientes da aréa da Saude.Onde poderam acessar totalmete de casa os recusros do aagendamento</p>
                </div>
                <!--Div de conteudos , informações -->
                <div class="col-md-4 contac-us">
                    <h4>&emsp;&emsp;Informações</h4>
                        <p id="text1">Caso alguma duvida entre em Contato</p>
                    <ul>
                        <li id="text1"><i class="fa fa-home"></i>Endereço: R. Sete de Setembro, 122, Cachoeira Paulista - SP, 12630-000</li>
                        <li id="text1"><i class="fa fa-phone"></i>(12) 3103-3444</li>
                        <li id="text1"><i class="fa fa-envelope-o"></i>reclamacoes@reclamaçoes.com</li>
                        <li id="text1"><i class="fa fa-envelope-o"></i>support@website.com</li>
                        </ul> 
                </div>
                <!--fim da div de informações-->
            </div>
        </div>
    </section>

<!--Seção das redes socias, da pagina principal doctorOn-->
    <footer>

        <div class="container">
            <div class="row">
                <div class="footer-containertent">

                    <ul class="footer-social-info">
                        <li>
                            <a href="www.facebook.com/Doctoron"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="www.twitter.com/Doctoron'"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="www.google,com/DoctorOn"><i class="fa fa-google-plus"></i></a>
                        </li>
                    </ul>
                    <br/><br/>
                        <p id="text1">Copyright © 2018. Docto.On By:</p>
                </div>
            </div>
        </div>
    </footer>
<!-- Fim da area do Fooder(Conteudo da pagina principal) rodape-->
    <script src="js/jquery-1.11.3.min.js"></script><!--Função da pagina inicial para exibição de conteudos -->

        <!-- Add jQuery library -->
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