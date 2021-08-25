<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>Autenticação</title>
        <script type="text/javascript">
            function loginsuccessfully() {

                setTimeout("window.location='Adms.php'", 100);
            }

            function loginfailed() {
                setTimeout("window.location='Login.php'", 10000);
            }

        </script>
        <meta charset="utf-8">
        <!-- Bootstrap import -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <!-- Bootstrap import -->
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>        
        <div class="centro">
            <div class="align" style="width: 65%;">
                <?php
                require 'conexao.php';

                ini_set('display_errors', 0);
                error_reporting(0);

                $email = $_POST['email'];
                $senha = $_POST['senha'];


                $sql = pg_query("SELECT * FROM professores "
                        . "WHERE pro_email = '$email' "
                        . "AND pro_senha = '$senha' ") or die(pg_last_error());

                require_once 'conexao.php';

                $row = pg_num_rows($sql);
                $dados = pg_fetch_array($sql);

                $result = pg_query($conn, $sql);


                if ($row > 0) {
                    session_start();
                    $_SESSION['email'] = $_POST['email'];

                    // ########################################## TIRAR A SENHA DA SESSION
                    $_SESSION['senha'] = $_POST['senha'];

                    $_SESSION['pro_nivel'] = $dados ['pro_nivel'];
                    $_SESSION['pro_codigo'] = $dados ['pro_codigo'];
                    echo "<h3>Login efetuado com sucesso!</h3>";
                    echo "<script>loginsuccessfully()</script>";
                } else {

                    echo "<center><h3>E-mail ou senha inválidos! Aguarde um instante.</h3></center>";
                    echo "<script>loginfailed()</script>";
                }
                ?>
            </div>
        </div>
    </body>
</html>