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

                        <div class="card-body"  style="margin-top: 5%;color: black;">                      
                              <?php
                            include 'conexao.php';
                            $total = pg_num_rows($result);
                            $codigo_banca = $_GET['ban_codigo'];
                           $sql = "select b.ban_codigo, b.prom_nome1,b.prom_area1,b.prom_nome2,b.prom_area2 from banca b
          where  b.ban_codigo =  '$codigo_banca'";



                            $result = pg_query($conn, $sql);



                            while ($dados = pg_fetch_array($result)) {
                                $codigo_banca = $dados ['ban_codigo'];
                                $membro1 = $dados ['prom_nome1'];
                                $area1 = $dados ['prom_area1'];
                                $membro2 = $dados ['prom_nome2'];
                                $area2 = $dados ['prom_area2'];
                            }
                            ?>

                            <ol class="breadcrumb" style="background-color: #DCDCDC;">
                                <li><a href="Bancas.php" style="margin-right: 5px; color: black;">Bancas /</a></li> 
                                <li><a href="Orientacoes.php" style="color: black;">  Novo</a></li>
                            </ol>
 

                            <form class="form-horizontal" action="salvar_banca.php"  method="post">
                                <fieldset>
                                    <h3 class="fonte " style="text-align: center">Bancas</h3>
                                    <br>
                                    <div class="row">



                                        <input type="hidden" name="ban_codigo" value="<?php echo $codigo_banca; ?>">


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="membro1">Membro 1:</label>  

                                                <input id="membro1" name="membro1" type="text" placeholder="Digite o membro" class="form-control input-md" value="<?php echo $membro1; ?>"  required>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="membro2">Área:</label>  

                                                <input id="area1" name="area1" type="text" placeholder="Digite o membro" class="form-control input-md" value="<?php echo $area1; ?>"  required>

                                            </div>
                                        </div>

                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="membro2">Membro 2:</label>  

                                                <input id="membro2" name="membro2" type="text" placeholder="Digite o membro" class="form-control input-md" value="<?php echo $membro2; ?>"  required>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="area2">Área:</label>  

                                                <input id="area2" name="area2" type="text" placeholder="Digite a área" class="form-control input-md" value="<?php echo $area2; ?>"  required>

                                            </div>
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
