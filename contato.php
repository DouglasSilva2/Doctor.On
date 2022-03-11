<?php
    
    ob_start();//...Limpar a memoria ...
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Projetos</title>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Doctor.On</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css"/><!--ICONES-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slider-pro.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" type="text/css" href="css/style_projetos.css"><!--Projeto div-->
    <link rel="icon" href="imagens/logo/novologo.png"><!--iCONE DO SITE-->

</head>
<body>
    <!-- fim -->
    <header>
        <!-- Menu Principal-->
        
    <nav id="topNav" class="navbar navbar-default main-menu">
    <div class="container">
        <button class="navbar-toggler hidden-md-up pull-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
           
        </button> 
         <a class="navbar-brand page-scroll" href="index.php">DoctorOn</a>
        <div class="collapse navbar-toggleable-sm" id="collapsingNavbar">
            <ul class="nav navbar-nav">
                 <li class="active">

                        <li>
                        <a href="index.php">Pagina Inicial</a>
                        </li>
                        <li>
                            <a href="login.php">Área do Usuario</a>
                        </li>
                        <li>
                            <a href="contato.php">Entrar em Contato</a>
                        </li>
                 </li>  
            </ul> 
        </div>
    </div>
    </nav>
    </header>
<div class="container" id="cardsp">
    <div class="row">
        <form method="POST" action="processa.php"><!--Formulario de contato-->
            <div class="form-row"><!--Inicio da Div Row-->
                <div class="form-group">
                    <label>Nome</label>
                        <input type="text" name="nome" class="form-control" placeholder="Digite Seu Nome">
                        <small id="emailHelp" class="form-text text-muted">Digite Seu nome completo</small>
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                        <input type="email" name="email" class="form-control" placeholder="E-mail">
                        <small class="form-text text-muted">Digite Seu Email, para mais informações.</small>
                </div>
                 <div class="form-group">
                        <label>Mensagem</label>
                            <textarea name="mensagem" class="form-control" rows="4" cols="50"></textarea>
                </div>
            
            </div><!--Fim da Div Row-->
                    <!--Campo Corelacionado ao Botão-->
                <button class="col-12 btn btn-sm btn btn-success" type="submit" name="btnEnviar">Enviar</button>
                    <!--Fim do campo -->
        </form><!-- Fim do Formulario de contato-->

        </div><!--col-md-3-->         
    </div><!--row-->
</div><!--Conteiner-->
       <!--Div de conteudo-->
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