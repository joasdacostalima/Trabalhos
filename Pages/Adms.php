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
  

                <div class="col-lg-12" style="margin: auto">

        <div  class="card mt-4">
    
          <div class="card-body" style="margin-top: 5%;">
              <br>
            <?php
echo "<h5 style=' color:  Black'>Bem-vindo!</h5>". $_SESSION['email'];
?>
            
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
  <footer class="py-5 bg-dark"style="margin-top: 30%;">
    <div class="container" >
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
