<?php
    session_start();//....abrindo uma seção ...
    ob_start();//...Limpando a memoria ...
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dados Pessoais</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style_valida_consulta.css">
    <link rel="icon" href="imagens/logo/novologo.png"><!--Icone do site na parte superior da pagina-->
    <!--formatação de stilização da pagna -->    
    <style>
       div#dados{
            margin-left: auto, auto, auto, auto;
            margin-bottom: -1%;
        } 
  
    </style>
</head>
<body>
    <br>
    
<div class="page-header">
           <h2 style="text-align: center;">Visualização dos Dados</h2> 
             <p class="text-align:center; text-danger">  
                <?php
                ///....vARIAVEL GLOBAL PARA ERRO...
                    if(isset($_SESSION['msge'])){
                      echo $_SESSION['msge'];
                      unset($_SESSION['msge']);
                  }
                    if (isset($_SESSION['msgd'])) {
                        echo $_SESSION['msgd'];
                        //....DESTRUINDO A EÇÃO DA VARIAVEL...
                        unset($_SESSION['msgd']);
                    }
              ?>
                </p> 
    </div>
        <!--Linha-->
        <hr style="background-color: green"  >
            <!--Fim da Linha-->
<div id="dados" class="container"><!--Div container -->

    <br><br><br>

<?php
    //..conexão com o banco de dados...
    include_once "conexao.php";

        //se issençãodos dados idagendar 
        if(isset($_POST["idagendar"])){
        
        $user = $_POST["idagendar"];

        //..Selecionar a tabela usuario (a) * onde usuarios(a) quando agendar (a)
        $sql = "SELECT a. *, u, nome FROM agendar a, usuarios u WHERE idagendar = '1' AND a. idusuario = u.id";
        
        //$sql = " SELECT * from agendar WHERE id LIKE '%$idagendar%'";
 
}else{
    $sql = " SELECT * from agendar WHERE idagendar LIKE '%%'";

}   
    $resultados = mysqli_query($conn, $sql);
    
    $linhas = mysqli_num_rows ($resultados);
        //...se linha for igual a 0.....    
        if ($linhas == 0) {
            //...Dados não foram encontrados ...
             echo "<p> Nenhum dado encontrado </p>";
    //...Caso o contrario ...exiba os dados em forma de tabela....            
} else {   
    

    //....Construção da tabla de dados ....
    echo "<table class='table table-hover'>
    <tr>
    <td class='bg-success'>Data</td>
    <td class='bg-success'>Hora </td>
    <td class='bg-success'>Unidade de Atendimento</td>
    <td class='bg-success'>Numero do SUS</td>
    <td class='bg-success'>Especializações Medica</td>
    

    </tr>";
    //....Testar as linhas com while para um array de dados....
    while($dados = mysqli_fetch_array ($resultados)) {
        
        
        $dataagende= $dados ["dataagende"];
        $hora      = $dados ["hora"];
        $unidade   = $dados ["unidade"];
        $cartaosus = $dados ["cartaosus"];
        $espc      = $dados ["espc"];
        

        //....Saida dos dados ...
        echo " <tr>
               
            <td >$dataagende</td>
            <td >$hora</td>
            <td >$unidade</td>
            <td >$cartaosus</td>
            <td >$espc</td>

           
        </tr>";
    } 
    echo "</table>";
    echo "<hr>";
} 
   ?>
   <br>
   <hr style="background-color: green">
   <div class="container"><!--div container-->
        <div class="row"><!--div row-->
              <!--Campo corelacionado aos botões-->
            <form action="editar.php">
                <button id="btn01" class="col-md-4  btn btn-sm btn-success" type="submit" name="btnCadUsuario">Editar</button>
            </form>
            <form action="apagar_dados.php">   
                <button id="btn02" class="col-md-4  btn btn-sm btn-warning" type="submit" >Deletar</button>
            </form>
            <form action="usuario.php">   
                <button id="btn03" class="col-md-4  btn btn-sm btn-info" type="submit">Home</button>
            </form>
        </div><!--Fim da div row-->
    </div><!--Fim da div container-->
</div><!-- fim da Div container -->

</body>
</html>
