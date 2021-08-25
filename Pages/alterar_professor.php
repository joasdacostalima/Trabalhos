<?php
require 'conexao.php'; 
session_start();

 if (!isset($_SESSION ["email"]) || !isset ($_SESSION["senha"])){
header ("Location: Login.php ");
exit;
} else{
echo "";
 }
 
 
?>
<?php
$arrCombo = array(
    "Interno" => "Interno",
    "Externo"  => "Externo",
    
);



?>

<?php
$arrCombo2 = array(
    "Pro" => "Professor",
    "Adm"  => "Adm",
    
);



?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Professor</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-item.css" rel="stylesheet">

</head>

<body>

  <?php
 require 'menu.php';
 ini_set('display_errors', 0 );
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
                            $codigo_prof = $_GET['pro_codigo'];
                            $sql = "select * from professores where pro_codigo= $codigo_prof";



                            $result = pg_query($conn, $sql);



                            while ($dados = pg_fetch_array($result)) {
                                $codigo_prof = $dados ['pro_codigo'];
                                $nome = $dados ['pro_nome'];
                                $email = $dados ['pro_email'];
                                $senha = $dados ['pro_senha'];
                                $telefone = $dados ['pro_telefone'];
                                $area = $dados ['pro_area'];
                                $nivel = $dados ['pro_nivel'];
                            }
                            ?>

 
                            <ol class="breadcrumb" style="background-color: #DCDCDC;">
                                <li><a href="Professores.php" style="margin-right: 5px; color: black;">Professores /</a></li> 
                                <li><a href="CadProfessor.php" style="color: black;">  Novo</a></li>
                            </ol>
                            <form class="form-horizontal" action="salvar_professor.php"  method="post">
                                <fieldset>
                                    <h2 class="fonte " style="text-align: center">Cadastro de Professores</h2>
                                   
                                     
                                        <label class="col-md-4 control-label"></label> 
                                        <div class="col-md-4">
                                            <input type="hidden" name="pro_codigo" value="<?php echo $codigo_prof; ?>">
                                        </div>
                                   
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nome_prof">Nome:</label>  

                                                <input id="nome_prof" name="nome_prof" type="text" placeholder="Digite o nome" class="form-control input-md" value="<?php echo $nome ?>" required>

                                            </div>
                                        </div>




                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email_prof">E-mail:</label>  

                                                <input id="email_prof" name="email_prof" type="email" placeholder="Digite o email" class="form-control input-md" value="<?php echo $email ?>" required>

                                            </div>

                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email_prof">Senha:</label>  

                                                <input id="senha_prof" name="senha_prof" type="password" placeholder="Digitea senha" class="form-control input-md" value="<?php echo $senha ?>"  required>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="telefonealuno">Telefone:</label>  

                                                <input id="telefone_aluno" name="telefone_prof" type="tel" placeholder="(XX) XXXXX-XXXX" maxlength="15" class="form-control input-md" value="<?php echo $telefone ?>" required>

                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="area">Área:</label>  
                                                <input id="area" name="area" type="text" placeholder="Digite área de atuação" class="form-control input-md" value="<?php echo $area ?>" required>

                                            </div>
                                        </div>

                                    
                                   
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nivel">Nível:</label>  
                                        
                                                                                           <input id="area" name="nivel" type="text" placeholder="Digite área de atuação" class="form-control input-md" value="<?php echo $nivel ?>" required>

                                        </div>
                                        * Pro - Professor | Adm - Administrador
                                    </div>


                                   </div>





                                    <!-- Button (Double) -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="button1id"></label>
                                        <div class="col-md-8">
                                            <button id="botao_submit" name="botao_submit" class="btn btn-success">Salvar</button>
                                            <a class="btn btn-danger" href="Professores.php" role="button"> Cancelar </a>

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
