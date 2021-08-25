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
$arrCombo = array(
    "Externo" => "Externo",
    "Interno" => "Interno",
);
?>

<?php
$arrCombo2 = array(
    "Pro" => "Prof",
    "Adm" => "Adm",
);
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
        <style>
            #appearance-select{
                -webkit-appearance: none;  /* Remove estilo padrão do Chrome */
                -moz-appearance: none; /* Remove estilo padrão do FireFox */
                appearance: none; /* Remove estilo padrão do FireFox*/
                background: url(http://www.webcis.com.br/images/imagens-noticias/select/ico-seta-appearance.gif) no-repeat #ffffff;  /* Imagem de fundo (Seta) */
                background-position: 202px center;  /*Posição da imagem do background*/
                width: 230px; /* Tamanho do select, maior que o tamanho da div "div-select" */
                height:30px; /* Altura do select, importante para que tenha a mesma altura em todo os navegadores */
                border:1px solid #ddd;
            }
        </style>

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


                            <form class="form-horizontal" action="inserir_professor.php"  method="post">
                                <fieldset>
                                    <h3 class="fonte " style="text-align: center">Cadastro de Professores</h3>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nome_prof">Nome:</label>  

                                                <input id="nome_prof" name="nome_prof" type="text" placeholder="Digite o nome" class="form-control input-md" required>

                                            </div>
                                        </div>




                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email_prof">E-mail:</label>  

                                                <input id="email_prof" name="email_prof" type="email" placeholder="Digite o email" class="form-control input-md" required>

                                            </div>

                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email_prof">Senha:</label>  

                                                <input id="senha_prof" name="senha_prof" type="password" placeholder="Digitea senha" class="form-control input-md" required>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="telefonealuno">Telefone:</label>  

                                                <input id="telefone_aluno" name="telefone_prof" type="tel" placeholder="(XX) XXXXX-XXXX" maxlength="15" class="form-control input-md" required>

                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="area">Área:</label>  
                                                <input id="area" name="area" type="text" placeholder="Digite área de atuação" class="form-control input-md" required>

                                            </div>
                                        </div>

                                    
                                    
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nivel">Nível:</label>  
                                        
                                            <select class="form-control" name="nivel">
                                                <option >Selecione </option>
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
