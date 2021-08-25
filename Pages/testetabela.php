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
        <script src="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"></script>
        <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    </head>

    <body>


       
              

                        

                        <?php
                        include 'conexao.php';


                        $sql = "select p.pjt_codigo,pjt_tema,alu_nome, pro_nome,o.tipo_orientacao, p.pjt_status from projeto p,alunos a, professores pr, orientacao o
          where p.pjt_codigo = o.pjt_codigo and a.alu_codigo = o.alu_codigo and pr.pro_codigo = o.pro_codigo and p.pjt_status = 'Finalizado'";


                        $result = pg_query($conn, $sql);

                        $total = pg_num_rows($result);

                        if ($total == 0) {
                            echo "<p>Não foram encontrados registros</p>";
                        } else {
                            ?>

                            
                            <table  title="index" id="example"   class="table display table-striped table-bordered"  width="100%">
                                <thead >
                                    <tr >

                                        <th>Tema</th>


                                        <th>Aluno</th>
                                        <th >Professor</th>
                                        <th >Orientação</th>
                                        <th >Status</th>




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
                                        $tipo = $dados['tipo_orientacao'];
                                        ?>
                                        <tr>


                                            <td><?php echo $tema; ?></td>

                                            <td><?php echo $aluno; ?></td>
                                            <td><?php echo $prof; ?></td>
                                            <td><?php echo $tipo; ?></td>
                                            <td><?php echo $status; ?></td>




                                        </tr>




                                        <?php
                                    }
                                    ?>





                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                       
            

        <!-- /.container -->

        <!-- Footer -->

        

        <!-- Bootstrap core JavaScript -->

    </body>
    <script>
        $(document).ready(function() {
    $('table.display').DataTable();
} );
    </script>
        

</html>
