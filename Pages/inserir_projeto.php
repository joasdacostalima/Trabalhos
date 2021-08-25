<?php
session_start();


require 'conexao.php';

if (isset($_POST['acao2']) && $_POST['acao2'] == 'enviar2') {
    $cod_projeto = $_POST['cod_projeto'];
    $tema = $_POST['tema'];
    $ano = $_POST['ano'];
    $status = $_POST['status'];
    $pf = $_POST['pf'];



    $codigo_prof = $_SESSION['pro_codigo'];

    $sql = "insert into projeto (pjt_tema,pjt_ano,pjt_status,pjt_projetosfuturos) values ('$tema','$ano','$status','$pf') RETURNING pjt_codigo";

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
        $cod_projeto = $dados['pjt_codigo'];


        echo $cod_projeto;
    }
}
?>
    