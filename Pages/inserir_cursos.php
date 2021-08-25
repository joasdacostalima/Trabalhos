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

    $curso = $_POST["nome_curso"];
    


    $sql = "insert into cursos (cur_nome) values ('$curso')";

    $result = pg_query($conn, $sql);

    if (!$result) {
        echo "<script>alert('Erro ao cadastrar Curso');</script>";
        header("Location: CadCurso.php");
    } else {
 echo "<script>alert(' Curso cadastrado com Sucesso!');"
            . " window.location='Cursos.php'"
                    . "</script>";            }
    ?>
    <br>
    <nav style ="margin: 10px;" aria-label="...">
        <ul class="pager">
        </ul>
    </nav>
</body>
</html>


