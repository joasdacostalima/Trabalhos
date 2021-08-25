<?php
$host = "localhost";
$dbname = "Gerenciador";

$user = "postgres";
$password = "postdba";

$conn = pg_connect("host=$host port=5432 dbname=$dbname user=$user password=$password");


if(!$conn){
    exit("Erro ao conectar com Banco de Dados!");
}
?>
