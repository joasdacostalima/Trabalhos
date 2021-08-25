<?php
session_start();


require 'conexao.php';

if (isset($_POST['acao5']) && $_POST['acao5'] == 'enviar5') {
    $cod_projeto = $_POST["cod_projeto"];
    $prof1 = $_POST['prof1'];
    $area1 = $_POST['area1'];
    $prof2 = $_POST['prof2'];
    $area2 = $_POST['area2'];
    $codigo_prof = $_SESSION['pro_codigo'];
    
    $sql = "insert into banca (pjt_codigo,pro_codigo,prom_nome1,prom_area1,prom_nome2, prom_area2) values ('$cod_projeto','$codigo_prof','$prof1','$area1','$prof2','$area2')";

    $result = pg_query($conn, $sql);
                
            
 if (!$result) {
       ?>
        <div class="alert alert-danger">
                <h3>Não foi possivel realizar seu cadastro!</h3>
                <p><?php echo pg_last_error(); ?></p>
                <p><?php echo "SQL Executado: <code>$sql</code>" ?></p>
            </div>
 <?php
        } else {
             $dados = pg_fetch_assoc($result);
            $cod_projeto =  $dados['pjt_codigo'];
      
           
            echo $cod_projeto;
        }
        
        
        
    } 
    
    ?>
    
