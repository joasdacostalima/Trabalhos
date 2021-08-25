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
        <script src="media/js/jquery.js"></script>
        <title>Orientacoes</title>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/shop-item.css" rel="stylesheet">
        <script type="text/javascript" src="js/DataTables/datatables.min.js"></script>
        <link rel="stylesheet" type="text/css"  href="js/DataTables/datatables.css"/>
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
        <div class="container">

            <div class="row">


                <!-- /.col-lg-3 -->

                <div class="col-lg-12" style="margin: auto">

                    <div  class="card mt-4">

                        <div class="card-body"  style="margin-top: 5%;color: black;">
                            <ol class="breadcrumb" style="background-color: #DCDCDC;">
                                <li><a href="Orientacoes.php" style="margin-right: 5px; color: black;">Orientacoes /</a></li> 
                                <li><a href="CadTCC.php" style="color: black;">  Novo</a></li>
                            </ol>
                            <h3 class="fonte " style="text-align: center">Orientações Cadastradas</h3>
                            <br>

                            <?php
                            include 'conexao.php';
                            $codigo_prof = $_SESSION['pro_codigo'];
                            $nivel = $_SESSION['pro_nivel'];
                            if ($nivel == 'Pro') {

                                $sql = "select p.pjt_codigo,pjt_tema,alu_nome, pro_nome, p.pjt_status,p.pjt_projetosfuturos from projeto p,alunos a, professores pr, orientacao o
          where p.pjt_codigo = o.pjt_codigo and a.alu_codigo = o.alu_codigo and pr.pro_codigo = o.pro_codigo and pr.pro_codigo= '$codigo_prof'";
                            } else {
                                $sql = "select p.pjt_codigo,pjt_tema,alu_nome, pro_nome, p.pjt_status,p.pjt_projetosfuturos from projeto p,alunos a, professores pr, orientacao o
          where p.pjt_codigo = o.pjt_codigo and a.alu_codigo = o.alu_codigo and pr.pro_codigo = o.pro_codigo";
                            }
                            $result = pg_query($conn, $sql);

                            $total = pg_num_rows($result);

                            if ($total == 0) {
                                echo "<p>Não foram encontrados registros</p>";
                            } else {
                                ?>

                                <div ></div>
                                <table  title="alunos" id="example"   class="display table table-striped table-bordered"  width="100%">
                                    <thead >
                                        <tr >
                                            <th>Codigo</th>
                                            <th>Tema</th>


                                            <th>Aluno</th>
                                            <th >Professor</th>
                                            <th >Status</th>
                                            <th >Projetos Futuros</th>


                                            <th>Alterar</th>
                                            <th>Excluir</th>



                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        while ($dados = pg_fetch_assoc($result)) {
                                            $cod_projeto = $dados['pjt_codigo'];
                                            $tema = $dados ['pjt_tema'];

                                            $aluno = $dados ['alu_nome'];
                                            $prof = $dados ['pro_nome'];
                                            $status = $dados ['pjt_status'];
                                            $projetosfuturos = $dados ['pjt_projetosfuturos'];
                                            ?>
                                            <tr>
                                                <td><?php echo $cod_projeto; ?></td>

                                                <td><?php echo $tema; ?></td>

                                                <td><?php echo $aluno; ?></td>
                                                <td><?php echo $prof; ?></td>
                                                <td><?php echo $status; ?></td>
                                                <td><?php echo $projetosfuturos; ?></td>



                                                <td><a class="btn btn-primary" href="CadTCC.php?pjt_codigo=<?php echo $cod_projeto; ?>"
                                                       onclick="">
                                                        Alterar
                                                    </a></td>

                                                <td>   <a class="btn btn-danger" href="excluir_orientacoes.php?pjt_codigo=<?php echo $cod_projeto; ?>"
                                                          onclick= " return confirm('Tem certeza que deseja excluir?');">
                                                        Excluir</a>    </td>                        </tr>




                                            <?php
                                        }
                                        ?>





                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- /.card -->


                    <!-- /.card -->

                </div>
                <!-- /.col-lg-9 -->

            </div>

        </div>
        <script>
            $(document).ready(function () {
                $('table.display').DataTable({
                    "language": {

                        "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json"
                    }
                });
            });
        </script>
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


    </body>

</html>
