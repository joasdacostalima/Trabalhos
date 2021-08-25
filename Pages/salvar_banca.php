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

$codigo_banca = $_POST['ban_codigo'];
$membro1 = $_POST["membro1"];
$area1 = $_POST["area1"];
$membro2 = $_POST["membro2"];
$area2 = $_POST["area2"];



$sql = "update banca set prom_nome1 = '$membro1', prom_area1 = '$area1', prom_nome2 = '$membro2', prom_area2 = '$area2' where ban_codigo= $codigo_banca";
require_once 'conexao.php';

$result = pg_query($conn, $sql);



if (!$result) {
    echo "<p>Erro ao executar sql.<br>" . pg_last_error() . "</p>";
    echo "<p>SQL Executado:<br>" . $sql . "</p>";
} else {
    echo "<script>alert(' Banca alterada com Sucesso!');"
    . " window.location='Bancas.php'"
    . "</script>";
}
?>
<nav style ="margin: 10px;" aria-label="...">
    <ul class="pager">
        <li class="previous"><a href="Bancas.php"><span aria-hidden="true">&larr;</span> Voltar</a></li>
    </ul>
</nav>

