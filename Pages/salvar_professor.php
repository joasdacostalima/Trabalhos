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

    $codigo_prof = $_POST['pro_codigo'];
    
    $nome_prof = $_POST["nome_prof"];
    $email_prof = $_POST["email_prof"];
    $senha_prof = $_POST["senha_prof"];
    $telefone_prof = $_POST["telefone_prof"];
    $area = $_POST["area"];
    $nivel_prof = $_POST["nivel"];


       
         $sql = "update professores set pro_nome = '$nome_prof', pro_email = '$email_prof',pro_senha = '$senha_prof', pro_telefone = '$telefone_prof', pro_area = '$area', pro_nivel = '$nivel_prof' where pro_codigo= $codigo_prof";
         require_once 'conexao.php';
         
         $result = pg_query ($conn,$sql);
         
         
        
        if (!$result){
            echo "<p>Erro ao executar sql.<br>" .  pg_last_error(). "</p>";
             echo "<p>SQL Executado:<br>" .  $sql. "</p>";
             
        }
        else {
 echo "<script>alert(' Professor alterado com Sucesso!');"
            . " window.location='Professores.php'"
                    . "</script>";        }        
?>
<nav style ="margin: 10px;" aria-label="...">
  <ul class="pager">
      <li class="previous"><a href="Professores.php"><span aria-hidden="true">&larr;</span> Voltar</a></li>
  </ul>
</nav>

                