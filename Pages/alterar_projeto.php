<?php
require 'conexao.php'; 

 session_start();

 if (!isset($_SESSION ["email"]) || !isset ($_SESSION["senha"])){
header ("Location: Login.php ");
exit;
} else{
echo "";
 }
 
 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Salvar</title>
        <meta charset="UTF-8">      
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="estilo.css" />
        <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css">   
        <script src="bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="styles.css">
		</head>
		<body>
		</body>
		</html>
<?php

 require 'conexao.php';

    $cod_projeto = $_POST['cod_projeto'];
    
    $tema = $_POST["tema"];
    $ano = $_POST["ano"];
    $status = $_POST["status"];  
    $projetosfuturos = $_POST["pf"];

    
   


       
         $sql = "update projeto set pjt_tema = '$tema', pjt_ano = '$ano',pjt_status = '$status',pjt_projetosfuturos ='$projetosfuturos'  where pjt_codigo= $cod_projeto";
         require_once 'conexao.php';
         
         $result = pg_query ($conn,$sql);
         
         
        
        if (!$result){
            echo "<p>Erro ao executar sql.<br>" .  pg_last_error(). "</p>";
             echo "<p>SQL Executado:<br>" .  $sql. "</p>";
             
        }
        else {
 echo "<div class=\"alert alert-success\">Projeto alterado com sucesso!</div>";            }        
?>


                