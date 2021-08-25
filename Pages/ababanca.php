<?php
include 'conexao.php';
?>
<div id="tabs-4">
    <br>
    <br><div class="alert alert-warning" role="alert">
            Etapa 3/3
        </div>
    
    <form id="foamulariobanca" class="form-horizontal" action="inserir_banca.php"  method="post">
        <div class="row">

            <br>

                                                          <input id="cod_projeto" name="cod_projeto" type="hidden" value="<?php echo $cod_projeto; ?>">

            <div class="col-md-4">
                <div class="form-group">

                    <label  for="dupla">Projeto:</label>  

                    <input readonly=“true” type="text" class="form-control" name="projeto" value="<?php echo $tema; ?>">






                </div>
            </div>
                                                          
            </div>


        <h3> Membros:</h3>
        
            
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">

                    <label  for="dupla">Orientador:</label>  

                    <input readonly=“true” type="text" class="form-control" name="orientador" value="<?php echo $orientador; ?>">






                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="dupla">Membro 1:</label> 
                    <input  type="text" class="form-control" name="prof1" >

                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="dupla">Área:</label> 
                    <input  type="text" class="form-control" name="area1" >

                </div>
            </div>
        </div> 
        <div class="row">
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="dupla">Membro 2:</label> 
                    <input  type="text" class="form-control" name="prof2" >

                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="dupla">Área:</label> 
                    <input  type="text" class="form-control" name="area2" >

                </div>
            </div>
        
            
           
            </div>
        

<!-- <div class="col-md-6">
            <div class="form-group">
                <label  for="dupla">Professor:</label>  
               
                    <select name="prof" class="form-control" name="convidado">
                        

                    </select>
                </div>
     
            </div>-->
       
        
<!--        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
            <label for="profe_nome">Nome:</label>
                                <input type="text" class="form-control" name="profe_nome" >
            </div>
            </div>

       
        
            <div class="col-md-6">
            <div class="form-group">
            <label for="profe_nome">Área:</label>
                                <input type="text" class="form-control" name="profe_area" >
            </div>
            </div>
</div>-->
        
            <div class="form-group">
                <div   id="div_volta5"></div>
            </div>

            <button id="enviar5" name="acao5" value="enviar5" type="submit" class="btn btn-success">Salvar</button>
            <input id="cod_projetoaba1" name="cod_projetoaba1" type="hidden" value="<?php $cod_projeto; ?>">
            </form>
    </div>

        





