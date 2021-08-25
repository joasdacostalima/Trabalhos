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
<?php

ini_set('display_errors', 0 );
error_reporting(0);

$alu_codigo = $_GET['alu_codigo'];
$sql = "select * from alunos where alu_codigo= $alu_codigo";
$result = pg_query($conn, $sql);

$dados = pg_fetch_array($result);
$alu_codigo = $dados ['alu_codigo'];
?>

<?php


$pro_codigo = $_GET['pro_codigo'];
$sql = "select * from profesores where pro_codigo= $pro_codigo";
$result = pg_query($conn, $sql);

$dados = pg_fetch_array($result);
$pro_codigo = $dados ['pro_codigo'];
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Início</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/shop-item.css" rel="stylesheet">
        <style>
            #appearance-select{
                -webkit-appearance: none;  /* Remove estilo padrão do Chrome */
                -moz-appearance: none; /* Remove estilo padrão do FireFox */
                appearance: none; /* Remove estilo padrão do FireFox*/
                background: url(http://www.webcis.com.br/images/imagens-noticias/select/ico-seta-appearance.gif) no-repeat #ffffff;  /* Imagem de fundo (Seta) */
                background-position: 202px center;  /*Posição da imagem do background*/
                width: 230px; /* Tamanho do select, maior que o tamanho da div "div-select" */
                height:30px; /* Altura do select, importante para que tenha a mesma altura em todo os navegadores */
                border:1px solid #ddd;
            }
        </style>

    </head>

    <body>

        <?php
        require 'menu.php';
        ?>

        <!-- Page Content -->
        <div class="container">

            <div class="row">

                <?php
                include 'lateral.php';
                ?>
                <!-- /.col-lg-3 -->

                <div class="col-lg-9">

                    <div  class="card mt-4">

                        <div class="card-body" style="margin-top: 5%;">
                            <ol class="breadcrumb">
                                <li><a href="Professores.php" style="margin-right: 5px;">Banca /</a></li> 
                                <li><a href="CadBanca.php">  Novo</a></li>
                            </ol>


                            <form class="form-horizontal" action="inserir_professor.php"  method="post">
                                <fieldset>
                                    <h2 class="fonte " style="text-align: center">Cadastro de Banca</h2>
                                    <br>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="dupla">Projeto:</label>  
                                        <div class="col-md-4">
                                            <select name="prof" class="form-control" name="projeto">
                                                
                                              
                                                <option value=""></option>
                                                            
                                                   

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="dupla">Aluno 1:</label>  
                                        <div class="col-md-4">
                                            <select name="prof" class="form-control" name="aluno1">
                                                <?php
                                                include 'conexao.php';

                                                $sql = "SELECT * FROM alunos";
                                                $resultado = pg_query($conn, $sql);


                                                while ($row = pg_fetch_assoc($resultado)) {
                                                    ?>
                                                    <option value="<?php echo $row['alu_codigo']; ?>" 
                                                            <?php if ($alu_codigo == $row['alu_codigo']) echo "selected"; ?>>
                                                                <?php echo $row['alu_nome']; ?>
                                                    </option>
                                                <?php } ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="dupla">Aluno 2:</label>  
                                        <div class="col-md-4">
                                            <select class="form-control" name="dupla">
                                                <?php
                                                include 'conexao.php';

                                                $sql = "SELECT * FROM alunos";
                                                $resultado = pg_query($conn, $sql);


                                                while ($row = pg_fetch_assoc($resultado)) {
                                                    ?>
                                                    <option value="<?php echo $row['alu_codigo']; ?>" 
                                                            <?php if ($alu_codigo == $row['alu_codigo']) echo "selected"; ?>>
                                                                <?php echo $row['alu_nome']; ?>
                                                    </option>
                                                <?php } ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="dupla">Orientador:</label>  
                                        <div class="col-md-4">
                                            <select name="prof" class="form-control" name="orientador">
                                                <?php
                                                include 'conexao.php';

                                                $sql = "SELECT * FROM professores";
                                                $resultado = pg_query($conn, $sql);


                                                while ($row = pg_fetch_assoc($resultado)) {
                                                    ?>
                                                    <option value="<?php echo $row['pro_codigo']; ?>" 
                                                            <?php if ($pro_codigo == $row['pro_codigo']) echo "selected"; ?>>
                                                                <?php echo $row['pro_nome']; ?>
                                                    </option>
                                                <?php } ?>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="dupla">Professor/Convidado:</label>  
                                        <div class="col-md-4">
                                            <select name="prof" class="form-control" name="convidado">
                                                <?php
                                                include 'conexao.php';

                                                $sql = "SELECT * FROM professores";
                                                $resultado = pg_query($conn, $sql);


                                                while ($row = pg_fetch_assoc($resultado)) {
                                                    ?>
                                                    <option value="<?php echo $row['pro_codigo']; ?>" 
                                                            <?php if ($pro_codigo == $row['pro_codigo']) echo "selected"; ?>>
                                                            <?php echo $row['pro_nome']; ?>
                                                    </option>
                                                <?php } ?>

                                            </select>
                                        </div>
                                    </div>


                                    <!-- Button (Double) -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="button1id"></label>
                                        <div class="col-md-8">
                                            <button id="botao_submit" name="botao_submit" class="btn btn-success">Salvar</button>
                                            <a class="btn btn-danger" href="Bancas.php" role="button"> Cancelar </a>

                                        </div>
                                    </div>


                                    </div>
                                    </div>




                                </fieldset>

                            </form>

                        </div>
                    </div>
                    <!-- /.card -->



                </div>
                <!-- /.col-lg-9 -->

            </div>

        </div>

        <!-- /.container -->

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
                                <p style="color: white; text-align: center;"> Acesse: <a href="http://vtp.ifsp.edu.br/">http://vtp.ifsp.edu.br/ </a>

            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
