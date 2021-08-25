<?php
$arrCombo = array(
    "Pré-Projeto" => "Pré Projeto",
    "Projeto" => "Projeto",
    "Qualificação" => "Qualificação",
    "Defesa" => "Defesa",
    "Finalizado" => "Finalizado",
);
?>



<div id="tabs-1">

    <form method="post" action="<?php echo $action; ?>"  id="formulario" enctype="multipart/form-data" >
        <br>
        <br>
        <div class="alert alert-warning" role="alert">
            Etapa 1/3
        </div>
        <input id="cod_projeto" name="cod_projeto" type="hidden" value="<?php echo $cod_projeto; ?>">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nome_aluno">Tema:</label>  

                    <input id="tema" name="tema" type="text" placeholder="Digite o tema" value="<?php echo $tema; ?>"class="form-control input-md" required>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ano">Ano:</label>  

                    <input id="dupla" name="ano" type="ano" placeholder="Digite o ano" value="<?php echo $ano; ?>"class="form-control input-md" required>

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="status">Status:</label>  

                    <select class="form-control" name="status" >
<?php foreach ($arrCombo as $key => $value): ?>
    <?php echo "<option value=\"$key\" >$value</option>"; ?>
<?php endforeach; ?>

                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <div class="form-group">
                    <label for="pf">Projetos Futuros:</label>  

                    <textarea id="pf" name="pf" type="textarea" rows="5" cols="50" placeholder="Digite as idéias" value="<?php echo $projetosfuturos; ?>" class="form-control input-md" ></textarea>

                </div>

                   
                </div>
            </div>
        </div>
        <div class="form-group">
            <div   id="div_volta"></div>
        </div>
        <button id="enviar" name="acao2" value="enviar2" type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>


