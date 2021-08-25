<?php
require 'conexao.php'; 

 
 
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

       $codigo_curso = $_POST['cur_codigo'];
    $nome_curso = $_POST["nome_curso"];
    

       
         $sql = "update cursos set cur_nome = '$nome_curso' where cur_codigo= $codigo_curso";
         require_once 'conexao.php';
         
         $result = pg_query ($conn,$sql);
         
         
        
        if (!$result){
            echo "<p>Erro ao executar sql.<br>" .  pg_last_error(). "</p>";
             echo "<p>SQL Executado:<br>" .  $sql. "</p>";
             
        }
        else {
 echo "<script>alert(' Curso alterado com Sucesso!');"
            . " window.location='Cursos.php'"
                    . "</script>";                }
?>
<nav style ="margin: 10px;" aria-label="...">
  <ul class="pager">
      <li class="previous"><a href="Cursos.php"><span aria-hidden="true">&larr;</span> Voltar</a></li>
  </ul>
</nav>

                