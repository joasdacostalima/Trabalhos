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
        <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css">  
        <script src="media/js/jquery.js"></script>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="estilo.css">

        <!-- Bootstrap core CSS -->
        <script type="text/javascript" src="js/DataTables/datatables.min.js"></script>
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.css"/>


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

                        <div class="card-body" style="margin-top: 5%;">
                            <h2 class="fonte " style="text-align: center">Sistema de Controle e Gestão de Projetos Integradores</h2>


                        </div>

                        <div style="padding: 5%; text-align: justify;"><p>O Sistema de Controle e Gestão de Projetos Integradores, desenvolvido, por 
                                Joás da Costa Lima e Lorena Araújo Miguel, alunos de Análise e Desenvolvimento de Sistemas,visa auxiliar no controle e gerenciamento dos projetos integrados 
                                ,surgiu diante da necessidade e carência da informatização desses trabalhos, que anteriormente
                                só possuia controle e busca manual.</p>
                            <p>O mesmo possibilita diversos recursos a favor dos professores, estes podem acompanhar o progresso de seus orientados e 
                                registrarem o status e desempenho deles, atualizando sempre o projeto, sendo assim uma maneira mais eficaz que a anterior.
                                E como objetivo maior desse sistema está as pesquisas dos temas, projetos e seus integrantes, com intuito de 
                                facilitar e abreviar a busca dos trabalhos realizados.</p>
                            <p>Para a construção do mesmo, foi necessário o uso da linguagem de programação PHP, junto com SGBD PostgreSQL, frameworks, como Bootstrap, 
                                entre outros recursos, como DataTables, CSS e HTML, respectivamente para estilização e estruturação. .</p></div>
                    </div>
                    <!-- /.card -->


                    <!-- /.card -->

                </div>
                <!-- /.col-lg-9 -->

            </div>

        </div>

        <!-- /.container -->

        <!-- Footer -->

        <footer class="py-5 bg-dark" style="margin-top: 30%;">
            <div class="container">
                <p class="m-0 text-center text-white">Endereço: Av. Jerônimo Figueira da Costa, 3014 - Pozzobon, Votuporanga - SP, 15503-110</p>
                <p style="color: white; text-align: center;"> Acesse: <a href="http://vtp.ifsp.edu.br/">http://vtp.ifsp.edu.br/ </a>

            </div>

        </footer>

        <!-- Bootstrap core JavaScript -->

    </body>

</html>
