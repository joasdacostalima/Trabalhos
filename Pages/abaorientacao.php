<?php
$arrCombo2 = array(
    "Orientador" => "Orientador",
    "Coorientador" => "Coorientador",
);
?>

<div id="tabs-2">
    <form method="post" action="inserir_orientacao.php" id="formulario_orientacao" enctype="multipart/form-data" >

        <br>
        <br>
        <div class="alert alert-warning" role="alert">
            Etapa 2/3
        </div>
                 <div class="row">

          <div class="col-md-12">
        <div class="form-group">
            <label for="aluno">Aluno:</label>  
          
                <select class="form-control" name="aluno">
                    <option>Selecione</option>
                    
                    <?php
                    include 'conexao.php';

                    $sql = "SELECT * FROM alunos";
                    $resultado = pg_query($conn, $sql);


                    while ($row = pg_fetch_assoc($resultado)) {
                        ?>
                        
                        <option value="<?php echo $row['alu_codigo']; ?>" 
                                <?php if ($alu_codigo == $row['alu_codigo']) echo "selected"; ?>>
                                    <?php echo $row['alu_nome']; ?>
                        </option>
                    <?php } ?>

                </select>

            </div>


        </div>
                 </div> 
        
        <div class="row">
        
<div class="col-md-6" >
        <div class="form-group">
            <label  for="orientador">Orientador:</label>  
            
                <select  class="form-control" name="professor">
                     <option>Selecione</option>
                    <?php
                    include 'conexao.php';

                    $sql = "SELECT * FROM professores";
                    $resultado = pg_query($conn, $sql);


                    while ($row = pg_fetch_assoc($resultado)) {
                        ?>
                       
                        <option value="<?php echo $row['pro_codigo']; ?>" 
                                <?php if ($pro_codigo == $row['pro_codigo']) echo "selected"; ?>>
                                    <?php echo $row['pro_nome']; ?>
                        </option>
                    <?php } ?>

                </select>

            </div>
        </div>
           <div class="col-md-6">
              <div class="form-group">
                 
                                        <label for="tipo_orientacao">Tipo Orientacao:</label>  
                                        
                                            <select class="form-control" name="tipo_orientacao">
                                                <option>Selecione </option>
                                                 <?php foreach ($arrCombo2 as $key2 => $value2): ?>
                        <?php echo "<option value=\"$key2\" >$value2</option>"; ?>
                    <?php endforeach; ?>
                                               
                                            </select>
                                        
                  </div>
                                    </div>
            </div>
        
        <div class="form-group">
                <div   id="div_volta2"></div>
                                <div   id="div_volta7"></div>

            </div>
         
        <button id="enviar3" name="acao3" value="enviar3" type="submit" class="btn btn-success">Salvar</button>
        <input id="cod_projetoaba1" name="cod_projetoaba1" type="hidden" value="<?php $cod_projeto; ?>">

    </form>
</div>
