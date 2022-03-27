<?php
include "inc/cabecalho.php"
?>

<header class = "container">
    <div>
    <h1 class = "text-secondary pt-5 text-danger">
       <span class = "text-secondary">Lista de</span>Tarefas
    </h1>
    </div>
</header>
<hr class = "container">

<section class = "container">

    <div  class = "row pt-3 text-center">

        <div class = "col-4 ">
         <a href="tarefa_nova.php"><button type="button" class="btn btn-outline-danger p-2 rounded-bottom shadow-sm ">Nova Tarefa</button></a>
        </div>

        <div class = "col-4">
        <a href="tarefas_lista.php"><button type="button" class="btn btn-outline-danger p-2 rounded-bottom shadow-sm ">Lista de Tarefas</button></a>
        </div>

        <div class = "col-4">
        <a href="tarefas_concluidas.php"><button type="button" class="btn btn-outline-danger p-2 rounded-bottom shadow-sm ">Tarefas Concluidas</button></a>
        </div>

    </div>
   

</section>

<section class = "container pt-5">

    

</section>

<?php

    $result = $con->query("SELECT * FROM tarefa");

?>

<?php while($obj = $result->fetch(PDO::FETCH_OBJ)) { ?> 
    <div class="row justify-content-center pt-5">
        <div class = "col-7 bg-white p-3 rounded">

            <?php if($obj->situacao == "Pendente" || "Em andamento" ) { ?> 
                <form>
                    <div class="form-group">
                        
                        <span class = "text-black-50 pb-2">#<?php echo $obj->id; ?></span> 
                        <a class="justify-content-end text-danger" href="excluir_tarefas.php?id=<?php echo $obj->id; ?>">Excluir</a><br>
                        <label for="formGroupExampleInput">Nome da Tarefa:</label>
                        <h6><?php echo $obj->nome; ?></h6>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Descrição:</label> 
                        <a class="text-danger" href="detalhes_tarefa.php?id=<?php echo $obj->id; ?>">Ver detalhes</a>
                    </div>
                    <span class = "text-secondary pl-3">Status: <span class = "text-warning"><?php echo $obj->situacao; ?></span></span>
                    <span class = "text-black-50 pl-5 text-right">Data: <?php echo date_format(date_create($obj->criado_em), "d/m/Y H:i:s"); ?></span>
                    

                    <?php if($obj->situacao == "Pendente") { ?>
                        <a class="pl-3" href="andamento_tarefas.php?id=<?php echo $obj->id; ?>"><button type="button" class="btn btn-outline-danger p-2 ml-5 rounded-bottom shadow-sm ">Assumir</button></a><br>
                    <?php } ?>
                    <?php if($obj->situacao == "Em andamento") { ?>
                        <a class="pl-3" href="concluir_tarefas.php?id=<?php echo $obj->id; ?>"> <button type="button" class="btn btn-outline-success p-2 ml-5 rounded-bottom shadow-sm ">Concluir</button> </a>
                    <?php } ?>
               </form>

             <?php } ?>

            

        </div>
    </div>

               
<?php } ?>

<?php
include "inc/rodape.php"
?>