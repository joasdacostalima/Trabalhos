
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

    $nome_prof = $_POST["nome_prof"];
    $email_prof = $_POST["email_prof"];
    $senha_prof = $_POST["senha_prof"];
    $telefone_prof = $_POST["telefone_prof"];
    $area = $_POST["area"];
    $nivel_prof = $_POST["nivel"];



    $sql = "insert into professores (pro_nome,pro_email,pro_senha,pro_telefone,pro_area,pro_nivel) values ('$nome_prof', '$email_prof','$senha_prof', '$telefone_prof','$area','$nivel_prof')";

    $result = pg_query($conn, $sql);

    if (!$result) {
        echo "<script>alert('Erro ao cadastrar Professor');</script>";
        header("Location: CadProfessor.php");
    } else {
 echo "<script>alert(' Professor cadastrado com Sucesso!');"
            . " window.location='Professores.php'"
                    . "</script>";            }
    ?>
    <br>
    <nav style ="margin: 10px;" aria-label="...">
        <ul class="pager">
        </ul>
    </nav>
</body>
</html>


