<?php
require 'conexao.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Início</title>
        <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css">  
        <script src="media/js/jquery.js"></script>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="estilo.css">

        <!-- Bootstrap core CSS -->
        <script type="text/javascript" src="js/DataTables/datatables.min.js"></script>
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.css"/>


        <!-- Custom styles for this template -->
        <link href="css/shop-item.css" rel="stylesheet">
        <script src="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"></script>
        <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    </head>

    <body>


        <?php
        require 'menu.php';
        ?>

        <!-- Page Content -->
        <div class="container" >

            <div class="row " >

                <!-- /.col-lg-3 -->

                <div class="col-lg-12" style="margin: auto">

                    <div  class="card mt-4">

                        <div class="card-body" style="margin-top: 5%; ">
                            <h3 class="fonte " style="text-align: center">Projetos Disponibilizados</h3>


                        </div>

                        <?php
                        include 'conexao.php';


                        $sql = "select p.pjt_codigo,pjt_tema,p.pjt_ano,alu_nome, pro_nome,o.tipo_orientacao, p.pjt_status, p.pjt_projetosfuturos from projeto p,alunos a, professores pr, orientacao o
          where p.pjt_codigo = o.pjt_codigo and a.alu_codigo = o.alu_codigo and pr.pro_codigo = o.pro_codigo and p.pjt_status = 'Finalizado'";


                        $result = pg_query($conn, $sql);

                        $total = pg_num_rows($result);

                        if ($total == 0) {
                            echo "<p>Não foram encontrados registros</p>";
                        } else {
                            ?>


                            <table  title="index" id="example"   class="display table table-striped table-bordered"  width="100%">
                                <thead >
                                    <tr >

                                        <th>Tema</th>

                                        <th>Ano</th>


                                        <th >Professor</th>
                                        <th >Projetos Futuros</th>





                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    while ($dados = pg_fetch_assoc($result)) {
                                        $cod_projeto = $dados['pjt_codigo'];
                                        $tema = $dados ['pjt_tema'];
                                        $ano = $dados ['pjt_ano'];
                                        $prof = $dados ['pro_nome'];
                                        $pf = $dados ['pjt_projetosfuturos'];
                                        ?>
                                        <tr>


                                            <td><?php echo $tema; ?></td>
                                            <td><?php echo $ano; ?></td>
                                            <td><?php echo $prof; ?></td>
                                            <td><?php echo $pf; ?></td>





                                        </tr>




                                        <?php
                                    }
                                    ?>





                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <script>
                            $(document).ready(function () {
                                $('table.display').DataTable({
                                    "language": {

                                        "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json"
                                    }
                                });
                            });
                        </script>
                    </div>
                    <!-- /.card -->


                    <!-- /.card -->

                </div>
                <!-- /.col-lg-9 -->

            </div>

        </div>

        <!-- /.container -->

        <!-- Footer -->

        <footer class="py-5 bg-dark" style="margin-top: 30%;">
            <div class="container">
                <p class="m-0 text-center text-white">Endereço: Av. Jerônimo Figueira da Costa, 3014 - Pozzobon, Votuporanga - SP, 15503-110</p>
                <p style="color: white; text-align: center;"> Acesse: <a href="http://vtp.ifsp.edu.br/">http://vtp.ifsp.edu.br/ </a>
            </div>

        </footer>

        <!-- Bootstrap core JavaScript -->

    </body>

</html>
