<?php
$arrCombo = array(
    "ADS"  => "ADS",
    "MSI" => "MSI",
   
    
);




?>
<?php
$arrCombo2 = array(
    "1"  => "1",
    "2" => "2",
    "3" => "3",
    "4" => "4",
    "5" => "5",
    "6" => "6",
   
    
);




?>
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
<?php
require 'conexao.php';
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
                            <form class="form-horizontal" action="inserir_aluno.php"  method="post">
                                <fieldset>
                                    <h3 class="fonte " style="text-align: center">Cadastro de Alunos</h3>
                                    <br>
                                    <div class="row">





                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nome_aluno">Nome:</label>  

                                                <input id="nome_aluno" name="nome_aluno" type="text" placeholder="Digite o nome" class="form-control input-md"   required>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="prontuario_aluno">Prontuário:</label>  

                                                <input id="prontuario" name="prontuario" type="text" placeholder="Digite o prontuário" class="form-control input-md"  required>

                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email_aluno">E-mail:</label>  

                                                <input id="email_aluno" name="email_aluno" type="email" placeholder="Digite o email" class="form-control input-md"  required>

                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="telefonealuno">Telefone:</label>  

                                                <input id="telefone_aluno" name="telefone_aluno" type="tel" placeholder="(XX) XXXXX-XXXX" maxlength="15" class="form-control input-md"  required>

                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="curso">Curso:</label>  

<select class="form-control" name="alu_curso">
                    <option>Selecione</option>
                    
                    <?php
                    include 'conexao.php';

                    $sql = "select * from cursos";
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
                                                <label  for="modulo">Módulo:</label>  

<select class="form-control" name="modulo" >
                                                <option value="<?php echo $modulo_aluno; ?>">Selecione</option>
                                                 <?php foreach ($arrCombo2 as $key2 => $value2): ?>
                        <?php echo "<option value=\"$key2\" >$value2</option>"; ?>
                    <?php endforeach; ?>
                                               
                                            </select>
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
