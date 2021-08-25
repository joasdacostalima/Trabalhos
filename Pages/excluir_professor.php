<!DOCTYPE html>
<html>
    <head>
        <title>Professor</title>
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

      $codigo_prof = $_GET["pro_codigo"];
        
         $sql = "delete from professores where pro_codigo = $codigo_prof";
        $retorno = pg_query($conn,$sql);
        if (!$retorno){
            echo "<p>Erro ao executar sql.<br>" .  pg_last_error(). "</p>";
             echo "<p>SQL Executado:<br>" .  $sql. "</p>";
             
        }
        else {
  echo "<script>alert('Professor excluído com sucesso!');"
            . " window.location='Professores.php'"
                    . "</script>";        }
      
        
        ?>
<nav style ="margin: 10px;" aria-label="...">
  <ul class="pager">
      <li class="previous"><a href="Professores.php"><span aria-hidden="true">&larr;</span> Voltar</a></li>
  </ul>
</nav>
