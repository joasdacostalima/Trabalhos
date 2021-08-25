
<?php
session_start();
if (!isset($_SESSION ["email"]) || !isset($_SESSION["senha"])) {
    header("Location: Login.php ");
    exit;
} else {
    echo "";
}

require 'conexao.php';
ini_set('display_errors', 0);
error_reporting(0);

$alu_codigo = $_GET['alu_codigo'];
$sql = "select * from alunos where alu_codigo= $alu_codigo";
$result = pg_query($conn, $sql);

$dados = pg_fetch_array($result);
$alu_codigo = $dados ['alu_codigo'];
?>

<?php
$cod_projeto = $_GET['pjt_codigo'];
$sql = "select p.pjt_codigo,pjt_tema,p.pjt_ano,p.pjt_status,p.pjt_projetosfuturos,alu_nome,pro_nome from projeto p, alunos a, professores pr, orientacao o where o.pjt_codigo = p.pjt_codigo and pr.pro_codigo = o.pro_codigo and a.alu_codigo = o.alu_codigo 
and o.pjt_codigo = '$cod_projeto'";
$result = pg_query($conn, $sql);
$dados = pg_fetch_array($result);
$cod_projeto = $dados['pjt_codigo'];
$tema = $dados ['pjt_tema'];
$aluno1 = $dados['alu_nome'];
$ano = $dados ['pjt_ano'];
$status = $dados ['pjt_status'];
$projetosfuturos = $dados['pjt_projetosfuturos'];

$orientador = $dados['pro_nome'];
?>



<?php
require 'conexao.php';


$pro_codigo = $_GET['pro_codigo'];
$sql = "select * from profesores where pro_codigo= $pro_codigo";
$result = pg_query($conn, $sql);

$dados = pg_fetch_array($result);
$pro_codigo = $dados ['pro_codigo'];
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



        <link href="css/shop-item.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="jquery-ui.css">
        <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css">  
        <script src="jquery-1.12.4.js"></script>
        <script src="jquery-ui.js"></script>
        <script src="js/jquery.form.js"></script>
        <script>
            $(function () {
                $("#tabs").tabs();
            });
        </script>

        <script>
            $(function () {
                var projeto = "<?php echo $cod_projeto; ?>";
                var action;
                if (projeto) {
                    action = "alterar_projeto.php";

                    $("#tabs").tabs();
                } else {

                    action = "inserir_projeto.php";
                    $("#tabs").tabs({
                        disabled: [1, 2]
                    });
                }
                $("#formulario").ajaxForm({
                    url: action,
                    success: function alert(volta) {
                        var msg = "";
                        if (isNaN(volta)) {
                            msg = volta;
                        } else {
                            msg = "<br/>";
                            msg += "<div class=\"alert alert-success\">";
                            msg += "Cadastro efetuado com sucesso!";
                            msg += "<p>Cód: " + volta + "</p>"
                            msg += "</div>";
                            $("#cod_projeto").val(volta);
                            $("#cod_projetoaba1").val(volta);

                            $("#tabs").tabs("option", "disabled", []);
                        }
                        $("#div_volta").html(msg);
                    }
                });


                $("#enviar3").click(function () {
                    if ($("#cod_projeto").val()) {
                        $("#formulario_orientacao").submit();
                    } else {
                        alert("Código do projeto vazio!");
                    }
                });

                $("#formulario_orientacao").ajaxForm({

                    url: "inserir_orientacao.php",
                    data: {
                        projeto: $("#cod_projeto").val()
                    },
                    success: function (volta2) {
                        var msg2 = "";


                        if (!volta2 || isNaN(volta2)) {
                            msg2 = volta2;
                        } else {
                            msg2 = "<br/>";
                            msg2 += "<div class=\"alert alert-success\">";
                            msg2 += "Cadastro efetuado com Sucesso!";
                            msg2 += "</div>";
                            msg2 += "<div class=\"alert alert-warning\">";
                            msg2 += "<Strong>Caso o projeto tenha mais de um aluno, por favor selecione o segundo aluno novamente no campo 'Aluno' e realize o cadastro novamente!</Strong>";
                            
                            msg2 += "</div>";

                            $("#cod_projeto").val(volta2);

                        }
                        $("#div_volta2").html(msg2);

                    }
                });


                $("#enviar5").click(function () {
                    if ($("#cod_projeto").val()) {
                        $("#foamulariobanca").submit();
                    } else {
                        alert("Código do projeto vazio!");
                    }
                });

                $("#foamulariobanca").ajaxForm({

                    url: "inserir_banca.php",
                    data: {
                        banca: $("#cod_projeto").val()
                    },
                    success: function (volta3) {
                        var msg3 = "";
                        if (!volta3 || isNaN(volta3)) {
                            msg3 = volta3;
                        } else {
                            msg3 = "<br/>";
                            msg3 += "<div class=\"alert alert-success\">";
                            msg3 += "Banca cadastrada com Sucesso!";

                            msg3 += "</div>";
                            $("#cod_projeto").val(volta3);
                        }
                        $("#div_volta5").html(msg3);

                    }
                });





            });






        </script>

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


                            <fieldset>
                                <h3 class="fonte " style="text-align: center">Cadastro de Orientação</h3>
                                <div id="tabs">
                                    <ul>
                                        <li><a href="#tabs-1" >Projeto</a></li>
                                        <li ><a href="#tabs-2" >Orientação</a></li>
                                        <li><a href="#tabs-4">Banca</a></li>

                                    </ul>
                                    <div id="tabs-1">
                                        <?php
                                        include 'abaprojeto.php';
                                        ?>
                                    </div>
                                    <div id="tabs-2">
                                        <?php
                                        include 'abaorientacao.php';
                                        ?>
                                    </div>

                                    <div id="tabs-4">
                                        <?php
                                        include 'ababanca.php';
                                        ?>
                                    </div>
                                </div>


                                <br>

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


                                </body>

                                </html>
