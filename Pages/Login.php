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

        <title>Login</title>

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

                    <div class="card mt-4">

                        <script src="/Template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"></script>
                        <script src="/Template/vendor/bootstrap/js/bootstrap.min.js"></script>
                        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                        <!------ Include the above in your HEAD tag ---------->


                        <div id="loginbox" style="margin-top:100px;" >                    
                            <div style="text-align: center;" >
                                <div class="panel-heading"  style="margin-top: 5%;">
                                    <h3>Login</h3>
                                </div>     

                                <div style="padding-top:40px;"  >

                                    <div style="width: 40%; text-align: center; margin: 0 auto "  >
                                    <form id="loginform" action="validacao.php"  role="form"  method="post">

                                        <div style="margin-bottom: 15px" >
                                           
                                            <input id="login-username" type="email" class="form-control" name="email" value="" placeholder="Informe seu e-mail">                                        
                                        </div>

                                        <div style="margin-bottom: 25px" >
                                            <input id="login-password" type="password" class="form-control" name="senha" placeholder="Informe a senha">
                                        </div>



                                            <button style="margin-bottom: 50%;"id="botao_submit" name="botao_submit" class="btn btn-secondary btn-lg btn-block" >Acessar</button>

                                    </div>
                                        
                                            <!-- Button -->


                                        </div>
                                    </form>     
                                </div>

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



    </body>

</html>
