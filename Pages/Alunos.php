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

        <title>Alunos</title>
        <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css">  

        <script src="media/js/jquery.js"></script>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
                                <li><a href="Alunos.php" style="margin-right: 5px; color: black;">Alunos /</a></li> 
                                <li><a href="CadAluno.php" style="color: black;">  Novo</a></li>
                            </ol>
                            <h3 class="fonte " style="text-align: center">Alunos Cadastrados</h3>
                            <?php
                            include 'conexao.php';

                            $sql = "select alu_codigo,alu_nome, alu_prontuario, c.cur_nome, alu_modulo from cursos c, alunos a where c.cur_codigo = a.cur_codigo;
";


                            $result = pg_query($conn, $sql);

                            $total = pg_num_rows($result);

                            if ($total == 0) {
                                echo "<p>Não foram encontrados registros</p>";
                            } else {
                                ?>

                                <div style="margin-top: 5%;" >
                                    <table   title="alunos" id="example"  class="display table table-striped table-bordered" >
                                        <thead >
                                            <tr >
                                                <th  style="width: 25%">Nome</th>
                                                <th style="width: 0.5%;">Prontuário</th>

                                                <th>Curso</th>
                                                <th>Módulo</th>

                                                <th>Alterar</th>
                                                <th>Excluir</th>



                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            while ($dados = pg_fetch_assoc($result)) {
                                                $codigo_aluno = $dados ['alu_codigo'];
                                                $nome = $dados ['alu_nome'];
                                                $prontuario = $dados ['alu_prontuario'];
                                                $curso = $dados ['cur_nome'];
                                                $modulo = $dados ['alu_modulo'];
                                                ?>
                                                <tr>
                                                    <td><?php echo $nome; ?></td>
                                                    <td><?php echo $prontuario; ?></td>


                                                    <td><?php echo $curso; ?></td>
                                                    <td><?php echo $modulo; ?></td>

                                                    <td><a class="btn btn-primary" href="alterar_aluno.php?alu_codigo=<?php echo $codigo_aluno; ?>"
                                                           onclick="">
                                                            Alterar
                                                        </a></td>

                                                    <td>   <a class="btn btn-danger" href="excluir_aluno.php?alu_codigo=<?php echo $codigo_aluno; ?>"
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

                    </div>
                    <!-- /.card -->


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

         <script>
        $(document).ready(function() {
    $('table.display').DataTable({
                    "language": {

             "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json"
        }
    });
} );
    </script>
    </body>

</html>
