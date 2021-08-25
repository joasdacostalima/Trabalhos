<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="estilo.css" />
        <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css">   
        <script src="bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="styles.css">
    </head>
</head>
<body>

    <?php
    require 'conexao.php';

    $nome_aluno = $_POST["nome_aluno"];
    $prontuario = $_POST["prontuario"];
    $email_aluno = $_POST["email_aluno"];
    $telefone_aluno = $_POST["telefone_aluno"];
    $curso_aluno = $_POST["alu_curso"];
    $modulo_aluno = $_POST["modulo"];



    $sql = "insert into alunos (alu_nome,alu_prontuario,alu_email,alu_telefone,cur_codigo,alu_modulo) values ('$nome_aluno','$prontuario', '$email_aluno', '$telefone_aluno','$curso_aluno','$modulo_aluno')";

    $result = pg_query($conn, $sql);

    if (!$result) {
        echo "<script>alert('Erro ao cadastrar Aluno');</script>";
        header("Location: CadAluno.php");
    } else {
 echo "<script>alert(' Aluno cadastrado com Sucesso!');"
            . " window.location='Alunos.php'"
                    . "</script>";            }
    ?>
    <br>
    <nav style ="margin: 10px;" aria-label="...">
        <ul class="pager">
        </ul>
    </nav>
</body>
</html>


