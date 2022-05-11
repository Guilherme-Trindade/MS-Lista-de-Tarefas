<?php

include "../inc/cabecalho.php";
require_once("../Models/Banco.php");

?>

<header class = "container">
    <div>
    <h1 class = "text-secondary pt-5 text-danger">
       <span class = "text-secondary">Tarefas</span>Concluidas
    </h1>
    </div>
</header>
<hr class = "container">

<section class = "container">

    <div  class = "row pt-3 text-center">

        <div class = "col-3 ">
        <a href="tarefa_nova.php"><button type="button" class="btn btn-outline-danger p-2 rounded-bottom shadow-sm ">Nova Tarefa</button></a>
        </div>

        <div class = "col-3">
        <a href="tarefas_lista.php"><button type="button" class="btn btn-outline-danger p-2 rounded-bottom shadow-sm ">Lista de Tarefas</button></a>
        </div>

        <div class = "col-3">
        <a href="tarefas_concluidas.php"><button type="button" class="btn btn-outline-danger p-2 rounded-bottom shadow-sm ">Tarefas Concluidas</button></a>
        </div>

        <div class = "col-3">
        <a href="user_form.php"><button type="button" class="btn btn-outline-danger p-2 rounded-bottom shadow-sm ">Novo Usuario</button></a>
        </div>

    </div>
   

</section>

<section class = "container pt-5">

    

</section>

<?php
    $stm = Banco::getInstance()->query("SELECT * FROM tarefa");

?>

<?php while($obj = $stm->fetch(PDO::FETCH_OBJ)) { ?> 
    <div class="row justify-content-center pt-5">
        <div class = "col-7 bg-white p-3 rounded">

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
                <span class = "text-secondary pl-3">Status: <span class = "text-success"><?php echo $obj->situacao; ?></span></span>
                <span class = "text-black-50 pl-5 text-right">Data: <?php echo date_format(date_create($obj->criado_em), "d/m/Y H:i:s"); ?></span>
                

                

        </div>
    </div>

               
<?php } ?>

<?php
include "../inc/rodape.php"
?>