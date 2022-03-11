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
                        <a href="usuario.php">Area do Usuario</a>
                    </li><!--Campo de imagem, fim -->
                    <li><!--Campo de Links Sair-->
                        <a href="sair.php">Sair</a>
                    </li><!--Campo de Link-->
                </li>  
            </ul> <!--Fim do campo de lista-->
        </div>
    </div>
    </nav>
    <div class="container" id="cardsp">
    <div class="row"><main role="main" class="container">

    <div class="row row-offcanvas row-offcanvas-right">
    <div class="col-sm-12 col-lg-12  col-md-12"><!--....Informações....-->
      <!--Informações das tabelas-->
      <h4 style="text-align: center; color: green"> Informações Sobre a Unidade 1 Vila Carmem</h4>
        <table width="100%" class="table table-hover "><!--Informaçoes sobre medicos -->  
          <tr>
            <td class='bg-info'>Nome do Medico</td>
            <td class='bg-info'>Especialização Medica</td>
            <td class='bg-info'>Datas de Atendimento</td>
            <td class='bg-info'>Hora de Atendimento</td>
            <td class='bg-info'>Unidade de atendimento</td>
          </tr>
          <tr>
            <td>Thiago Santos</td>
            <td>Ortopedista</td>
            <td>Terça e Quinta</td>
            <td>08:00 as 11:30</td>
            <td>Unidade 1 Margem Esquerda</td>
           
          </tr>
          <tr>
            <td>Flavia Silva</td>
            <td>Psicologa</td>
            <td>Terça e Quinta</td>
            <td>14:00 as 15:30</td>
            <td>Unidade 1 Margem Esquerda</td>
            
          </tr>
          <tr>
            <td>Fabio Santos</td>
            <td>Clinico Geral</td>
            <td>Terça e Quinta</td>
            <td>10:00 as 12:00</td>
            <td>Unidade 1 Margem Esquerda</td>
            
          </tr>
          <tr>
            <td>Fabiula Amorim</td>
            <td></td>
            <td>Segunda e Terça</td>
            <td>09:00 as 11:30</td>
            <td>Unidade 1 Margem Esquerda</td>
            
          </tr>
          <tr>
            <td>Claudio </td>
            <td>Odontologista</td>
            <td>Segunda e Sexta</td>
            <td>08:00 as 11:30</td>
            <td>Unidade 1 Margem Esquerda</td>
          </tr>
        </table>  
        <br>
        <hr width="90%" style="background-color: green">
    <h4 style="text-align: center; color: green">Informações Sobre a Unidade 2 Margem Esquerda</h4>
  
  <table width="100%" class="table table-hover "><!--Informaçoes sobre medicos -->  
          <tr>
            <td class='bg-info'>Nome do Medico</td>
            <td class='bg-info'>Especialização Medica</td>
            <td class='bg-info'>Datas de Atendimento</td>
            <td class='bg-info'>Hora de Atendimento</td>
            <td class='bg-info'>Unidade de atendimento</td>
          </tr>
          <tr>
            <td>Marccos oliveira</td>
            <td>Ortopedista</td>
            <td>Terça e Quinta</td>
            <td>08:00 as 11:30</td>
            <td>Unidade 2 Margem Esquerda</td>
          
          </tr>
          <tr>
            <td>Fabiula Rocha</td>
            <td>Psicologa</td>
            <td>Terça e Quinta</td>
            <td>14:00 as 15:30</td>
            <td>Unidade 2 Margem Esquerda</td>
           
          </tr>
          <tr>
            <td>Thais F. Santos</td>
            <td>Clinico Geral</td>
            <td>Terça e Quinta</td>
            <td>10:00 as 12:00</td>
            <td>Unidade 2 Margem Esquerda</td>
            
          </tr>
          <tr>
            <td>Marta de Cells Amorim</td>
            <td>Oftamologista</td>
            <td>Segunda e Terça</td>
            <td>09:00 as 11:30</td>
            <td>Unidade 2 Margem Esquerda</td>
            
          </tr>
          <tr>
            <td>Carlos P. Richard </td>
            <td>Odontologista</td>
            <td>Segunda e Sexta</td>
            <td>08:00 as 11:30</td>
            <td>Unidade 2 Margem Esquerda</td>
           
          </tr>
        </table>
         <hr width="90%" style="background-color: green">
    <h4 style="text-align: center; color: green">Informações Sobre a Unidade 3 Parque Primavera</h4>
  
  <table width="100%" class="table table-hover "><!--Informaçoes sobre medicos -->  
          <tr>
            <td class='bg-info'>Nome do Medico</td>
            <td class='bg-info'>Especialização Medica</td>
            <td class='bg-info'>Datas de Atendimento</td>
            <td class='bg-info'>Hora de Atendimento</td>
            <td class='bg-info'>Unidade de atendimento</td>
          </tr>
          <tr>
            <td>Sabrina</td>
            <td>Ortopedista</td>
            <td>Terça e Quinta</td>
            <td>08:00 as 11:30</td>
            <td>Unidade 3 Margem Esquerda</td>
            
          </tr>
          <tr>
            <td>Claudia</td>
            <td>Psicologa</td>
            <td>Terça e Quinta</td>
            <td>14:00 as 15:30</td>
            <td>Unidade 3 Margem Esquerda</td>
            
          </tr>
          <tr>
            <td>Thais Oliveira</td>
            <td>Clinico Geral</td>
            <td>Terça e Quinta</td>
            <td>10:00 as 12:00</td>
            <td>Unidade 3 Margem Esquerda</td>
           
          </tr>
          <tr>
            <td>Marta de Cells Amorim</td>
            <td>Oftamologista</td>
            <td>Segunda e Terça</td>
            <td>09:00 as 11:30</td>
            <td>Unidade 3 Margem Esquerda</td>
            
          </tr>
          <tr>
            <td>Carlos P. Richard </td>
            <td>Odontologista</td>
            <td>Quinta e Quarta</td>
            <td>08:00 as 11:30</td>
            <td>Unidade 3 Margem Esquerda</td>
            
          </tr>
        </table> <!--Fim da tabela-->           
</div><!--Fim da Div-->
  </div><!--Row-->
                 <hr width="90%" style="background-color: green">
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
                        <li id="text1"><i class="fa fa-envelope-o"></i>Reclamacoes@reclamaçoes.com</li>
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