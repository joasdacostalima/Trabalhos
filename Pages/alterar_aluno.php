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
                            $codigo_aluno = $_GET['alu_codigo'];
                            $sql = "select alu_codigo,alu_nome, alu_prontuario,alu_email,alu_telefone, c.cur_nome, alu_modulo from cursos c, alunos a where c.cur_codigo = a.cur_codigo and alu_codigo= $codigo_aluno";



                            $result = pg_query($conn, $sql);



                            while ($dados = pg_fetch_array($result)) {
                                $codigo_aluno = $dados ['alu_codigo'];
                                $nome = $dados ['alu_nome'];
                                $prontuario = $dados ['alu_prontuario'];
                                $email = $dados ['alu_email'];
                                $telefone = $dados ['alu_telefone'];
                                $curso = $dados ['cur_nome'];
                                $modulo = $dados ['alu_modulo'];
                            }
                            ?>

                            <ol class="breadcrumb" style="background-color: #DCDCDC;">
                                <li><a href="Alunos.php" style="margin-right: 5px; color: black;">Alunos /</a></li> 
                                <li><a href="CadAluno.php" style="color: black;">  Novo</a></li>
                            </ol>

                            <form class="form-horizontal" action="salvar_aluno.php"  method="post">
                                <fieldset>
                                    <h3 class="fonte " style="text-align: center">Cadastro de Alunos</h3>
                                    <br>
                                    <div class="row">



                                        <input type="hidden" name="alu_codigo" value="<?php echo $codigo_aluno; ?>">


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nome_aluno">Nome:</label>  

                                                <input id="nome_aluno" name="nome_aluno" type="text" placeholder="Digite o nome" class="form-control input-md" value="<?php echo $nome; ?>"  required>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="prontuario_aluno">Prontuário:</label>  

                                                <input id="prontuario" name="prontuario" type="text" placeholder="Digite o prontuário" class="form-control input-md" value="<?php echo $prontuario; ?>"  required>

                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email_aluno">E-mail:</label>  

                                                <input id="email_aluno" name="email_aluno" type="email" placeholder="Digite o email" class="form-control input-md" value="<?php echo $email; ?>"  required>

                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="telefonealuno">Telefone:</label>  

                                                <input id="telefone_aluno" name="telefone_aluno" type="tel" placeholder="(XX) XXXXX-XXXX" maxlength="15" class="form-control input-md" value="<?php echo $telefone; ?>"  required>

                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="curso">Curso:</label>  

                                                <select class="form-control" name="alu_curso">
                                                    <option>Selecione</option>

                                                    <?php
                                                    include 'conexao.php';

                                                    $sql = "select cur_codigo, cur_nome from cursos";
                                                    $resultado = pg_query($conn, $sql);


                                                    while ($row = pg_fetch_assoc($resultado)) {
                                                        ?>

                                                        <option value="<?php echo $row['cur_codigo']; ?>" 
                                                                <?php if ($cur_codigo == $row['cur_codigo']) echo "selected"; ?>>
                                                                    <?php echo $row['cur_nome']; ?>
                                                        </option>
                                                    <?php } ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label  for="modulo_aluno">Módulo:</label>  

                                                <input id="modulo" name="modulo" type="text" placeholder="Digite o módulo" class="form-control input-md" value="<?php echo $modulo; ?>"  required>

                                            </div>
                                        </div>

                                    </div>


                                    <!-- Button (Double) -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="button1id"></label>
                                        <div class="col-md-8">
                                            <button id="botao_submit" name="botao_submit" class="btn btn-success">Salvar</button>
                                            <a class="btn btn-danger" href="Alunos.php" role="button"> Cancelar </a>

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
