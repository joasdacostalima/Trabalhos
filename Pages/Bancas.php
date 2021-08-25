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

        <title>Bancas</title>
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
                                <li><a href="Bancas.php" style="margin-right: 5px; color: black;">Bancas /</a></li> 
                                <li><a href="Orientacoes.php" style="color: black;">  Novo</a></li>
                            </ol>
                            <h3 class="fonte " style="text-align: center">Bancas Cadastradas</h3>
                            <?php
                            include 'conexao.php';
                            $codigo_prof = $_SESSION['pro_codigo'];
                            $nivel = $_SESSION['pro_nivel'];
                            if ($nivel == 'Pro') {
                                $sql = "select b.ban_codigo,pjt_tema,p.pjt_codigo,pr.pro_codigo,alu_nome, pr.pro_nome,b.prom_nome1,b.prom_area1,b.prom_nome2,b.prom_area2 from projeto p,alunos a, professores pr,banca b, orientacao o
          where p.pjt_codigo = o.pjt_codigo and a.alu_codigo = o.alu_codigo and pr.pro_codigo = o.pro_codigo and b.pjt_codigo = p.pjt_codigo  and pr.pro_codigo =  '$codigo_prof'";
                            } else {
                                $sql = "select b.ban_codigo,pjt_tema,alu_nome, pr.pro_nome,b.prom_nome1,b.prom_area1,b.prom_nome2,b.prom_area2 from projeto p,alunos a, professores pr,banca b, orientacao o
where p.pjt_codigo = o.pjt_codigo and a.alu_codigo = o.alu_codigo and pr.pro_codigo = o.pro_codigo and b.pjt_codigo = p.pjt_codigo";
                            }


                            $result = pg_query($conn, $sql);

                            $total = pg_num_rows($result);

                            if ($total == 0) {
                                echo "<p>Não foram encontrados registros</p>";
                            } else {
                                ?>

                                <div style="margin-top: 5%;" >
                                    <table   title="alunos" id="example"  class="display table table-striped table-bordered"  >
                                        <thead >
                                            <tr >
                                                <th>Código</th>
                                                <th>Tema</th>
                                                <th >Aluno</th>
                                                <th >Professor</th>
                                                <th>Membro 1</th>
                                                <th>Área Membro</th>
                                                <th>Membro 2</th>
                                                <th>Área Membro</th>

                                                <th>Alterar</th>
                                                <th>Excluir</th>



                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            while ($dados = pg_fetch_assoc($result)) {
                                                $codigo_aluno = $dados ['alu_codigo'];
                                                $codigo_banca = $dados['ban_codigo'];
                                                $tema = $dados ['pjt_tema'];
                                                $nome = $dados ['alu_nome'];
                                                $professor = $dados ['pro_nome'];
                                                $membro1 = $dados ['prom_nome1'];
                                                $area1 = $dados ['prom_area1'];
                                                $membro2 = $dados ['prom_nome2'];
                                                $area2 = $dados ['prom_area2'];
                                                ?>
                                                <tr>
                                                    <td><?php echo $codigo_banca; ?></td>
                                                    <td><?php echo $tema; ?></td>
                                                    <td><?php echo $nome; ?></td>
                                                    <td><?php echo $professor; ?></td>
                                                    <td><?php echo $membro1; ?></td>
                                                    <td><?php echo $area1; ?></td>
                                                    <td><?php echo $membro2; ?></td>
                                                    <td><?php echo $area2; ?></td>


                                                    <td><a class="btn btn-primary" href="alterar_banca.php?ban_codigo=<?php echo $codigo_banca; ?>"
                                                           onclick="">
                                                            Alterar
                                                        </a></td>

                                                    <td>   <a class="btn btn-danger" href="excluir_banca.php?ban_codigo=<?php echo $codigo_banca; ?>"
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
        <footer class="py-5 bg-dark" style="margin-top: 20%;">
            <div class="container" >
                <p class="m-0 text-center text-white">Endereço: Av. Jerônimo Figueira da Costa, 3014 - Pozzobon, Votuporanga - SP, 15503-110</p>
                <p style="color: white; text-align: center;"> Acesse: <a href="http://vtp.ifsp.edu.br/">http://vtp.ifsp.edu.br/ </a>

            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->

        <script>
            $(document).ready(function () {
                $('table.display').DataTable({
                    "language": {

                        "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json"
                    }
                });
            });
        </script>
    </body>

</html>
