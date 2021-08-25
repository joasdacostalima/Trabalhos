<?php
session_start();


require 'conexao.php';

if (isset($_POST['acao3']) && $_POST['acao3'] == 'enviar3') {
    $cod_projeto = $_POST["cod_projetoaba1"];
    $alu_codigo = $_POST['aluno'];
    $professor = $_POST['professor'];
    $tipo_orientacao = $_POST['tipo_orientacao'];
    $codigo_prof = $_SESSION['pro_codigo'];
    
    $sql = "insert into orientacao (pjt_codigo,alu_codigo,pro_codigo,tipo_orientacao) values ('$cod_projeto','$alu_codigo','$professor','$tipo_orientacao')";

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
        }
        
        
        
    } 
    
    ?>
    
