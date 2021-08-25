<?php
require 'conexao.php';
session_start();

if (!isset($_SESSION ["email"]) || !isset($_SESSION["senha"])) {
    header("Location: Login.php ");
    exit;
} else {
    echo "";
}
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

    </head>

    <body>

        <?php
        require 'menu.php';
        ini_set('display_errors', 0);
        error_reporting(0);
        ?>
        <div class="container">

            <div class="row">

               
                <!-- /.col-lg-3 -->

                <div class="col-lg-12" style="margin: auto">

                    <div  class="card mt-4">

<div class="card-body"  style="margin-top: 5%;color: black;">                            <?php
                            include 'conexao.php';
                            $total = pg_num_rows($result);
                            $codigo_curso = $_GET['cur_codigo'];
                            $sql = "select * from cursos where cur_codigo= $codigo_curso";



                            $result = pg_query($conn, $sql);



                            while ($dados = pg_fetch_array($result)) {
                                $codigo_curso = $dados ['cur_codigo'];
                                $nome = $dados ['cur_nome'];
                               
                            }
                            ?>
                            
                            <ol class="breadcrumb" style="background-color: #DCDCDC;">
                                <li><a href="Cursos.php" style="margin-right: 5px; color: black;">Cursos /</a></li> 
                                <li><a href="CadCurso.php" style="color: black;">  Novo</a></li>
                            </ol>

                            <form class="form-horizontal" action="salvar_curso.php"  method="post">
                                <fieldset>
                                    <h3 class="fonte " style="text-align: center">Cadastro de Cursos</h3>
                                    <br>
                                    <div class="row">



                                        <input type="hidden" name="cur_codigo" value="<?php echo $codigo_curso; ?>">


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nome_curso">Nome:</label>  

                                                <input id="nome_aluno" name="nome_curso" type="text" placeholder="Digite o nome" class="form-control input-md" value="<?php echo $nome; ?>"  required>

                                            </div>
                                        </div>
                                        

                                       


                                      


                                       
                                        

                                    </div>


                                    <!-- Button (Double) -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="button1id"></label>
                                        <div class="col-md-8">
                                            <button id="botao_submit" name="botao_submit" class="btn btn-success">Salvar</button>
                                            <a class="btn btn-danger" href="Cursos.php" role="button"> Cancelar </a>

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
      <p class="m-0 text-center text-white">Endereço: Av. Jerônimo Figueira da Costa, 3014 - Pozzobon, Votuporanga - SP, 15503-110</p>
                          <p style="color: white; text-align: center;"> Acesse: <a href="http://vtp.ifsp.edu.br/">http://vtp.ifsp.edu.br/ </a>

            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
