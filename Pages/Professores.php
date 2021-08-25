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

        <title>Professores</title>
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
                                <li><a href="Professores.php" style="margin-right: 5px; color: black;">Professores /</a></li> 
                                <li><a href="CadProfessor.php" style="color: black;">  Novo</a></li>
                            </ol>
                            <h3 class="fonte " style="text-align: center">Professores Cadastrados</h3>
                            <br>
<?php
include 'conexao.php';

$sql = "select pro_codigo,pro_nome,pro_email, pro_telefone,pro_area
          from professores order by pro_codigo";


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
                                            <th>Nome</th>


                                            <th >Área</th>

                                            <th>Alterar</th>
                                            <th>Excluir</th>



                                        </tr>
                                    </thead>

                                    <tbody>
    <?php
    while ($dados = pg_fetch_assoc($result)) {
        $codigo_prof = $dados ['pro_codigo'];
        $nome = $dados ['pro_nome'];

        $area = $dados ['pro_area'];
        ?>
                                            <tr>
                                                <td><?php echo $nome; ?></td>



                                                <td><?php echo $area; ?></td>

                                                <td><a class="btn btn-primary" href="alterar_professor.php?pro_codigo=<?php echo $codigo_prof; ?>"
                                                       onclick="">
                                                        Alterar
                                                    </a></td>

                                                <td>   <a class="btn btn-danger" href="excluir_professor.php?pro_codigo=<?php echo $codigo_prof; ?>"
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
        $(document).ready(function() {
    $('table.display').DataTable({
                    "language": {

             "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json"
        }
    });
} );
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
