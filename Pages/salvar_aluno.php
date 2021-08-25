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

       $codigo_aluno = $_POST['alu_codigo'];
    $nome_aluno = $_POST["nome_aluno"];
    $prontuario = $_POST["prontuario"];
    $email_aluno = $_POST["email_aluno"];
    $telefone_aluno = $_POST["telefone_aluno"];
    $curso_aluno = $_POST["alu_curso"];
    $modulo_aluno = $_POST["modulo"];

       
         $sql = "update alunos set alu_nome = '$nome_aluno', alu_prontuario = '$prontuario', alu_email = '$email_aluno', alu_telefone = '$telefone_aluno', cur_codigo = '$curso_aluno',alu_modulo = '$modulo_aluno' where alu_codigo= $codigo_aluno";
         require_once 'conexao.php';
         
         $result = pg_query ($conn,$sql);
         
         
        
        if (!$result){
            echo "<p>Erro ao executar sql.<br>" .  pg_last_error(). "</p>";
             echo "<p>SQL Executado:<br>" .  $sql. "</p>";
             
        }
        else {
 echo "<script>alert(' Aluno alterado com Sucesso!');"
            . " window.location='Alunos.php'"
                    . "</script>";                }
?>
<nav style ="margin: 10px;" aria-label="...">
  <ul class="pager">
      <li class="previous"><a href="Alunos.php"><span aria-hidden="true">&larr;</span> Voltar</a></li>
  </ul>
</nav>

                