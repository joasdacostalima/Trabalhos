
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

  <!-- Navigation -->
   
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
           <a  class="navbar-brand"  href="index.php"><img src="img/ifsp3.png" alt="ifsp" style="height: 50px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
         
             <li class="nav-item">
    <a class="nav-link" href="Sobre.php">Sobre
              <span class="sr-only">(current)</span>
            </a>
          </li>

                       <?php
                        ini_set('display_errors', 0 );
error_reporting(0);
             require 'conexao.php';
                if ($_SESSION['pro_nivel'] == "Adm" ):
                    echo'<li class="nav-item">
        <a class="nav-link" href="Alunos.php">Alunos
        <span class="caret"></span></a>
    
      </li>', 
                        '<li class="nav-item">
        <a class="nav-link" href="Professores.php">Professores
        <span class="caret"></span></a>
    
      </li>', 
                        '<li class="nav-item">
        <a class="nav-link" href="Cursos.php">Cursos
        <span class="caret"></span></a>
        
    
      </li>',
                        '<li class="nav-item">
        <a class="nav-link" href="Orientacoes.php">Projetos
        <span class="caret"></span></a>
        
    
      </li>',
                        '<li class="nav-item">
        <a class="nav-link" href="Bancas.php">Bancas
        <span class="caret"></span></a>
                       </li>',  
                        '<li class="nav-item" ><a class="nav-link" href="sair.php">Sair</a></li>'


                    ;
                endif;
                ?>
          
          <?php
                        ini_set('display_errors', 0 );
error_reporting(0);
             require 'conexao.php';
                if ($_SESSION['pro_nivel'] == "Pro" ):
                    echo'<li class="nav-item">
        <a class="nav-link" href="Alunos.php">Alunos
        <span class="caret"></span></a>
    
      </li>', 
                        
                        '<li class="nav-item">
        <a class="nav-link" href="Orientacoes.php">Projetos
        <span class="caret"></span></a>
        
    
      </li>','<li class="nav-item">
        <a class="nav-link" href="Bancas.php">Bancas
        <span class="caret"></span></a>
                       </li>',  
                        '<li class="nav-item" ><a class="nav-link" href="sair.php">Sair</a></li>'


                    ;
                endif;
                ?>
                     
     
                 <a class="nav-link" href="Login.php">Login</a>
        </ul>
             <?php
             $texto = "Olá";
echo "<p style=' color:  white; margin-bottom:5%'>".$_SESSION['email'] ."</p> "
?>
      </div>
           
    </div>
       
  </nav>
 