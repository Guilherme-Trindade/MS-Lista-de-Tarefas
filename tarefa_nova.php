<?php
include "inc/cabecalho.php"
?>

<header class = "container">
    <div>
    <h1 class = "text-secondary pt-5">
       <span class = "text-danger">MS</span>todolist
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

    <div class="row justify-content-center pt-5">
        <div class = "col-7 bg-white p-5 rounded">

            <form method = "POST" action = "salvar_tarefa.php">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nome da Tarefa:</label>
                    <input type="text" class="form-control" id = "novatarefa" name = "novatarefa" placeholder="Nova Tarefa">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Descrição:</label>
                    <input type="text" id = "descricao" name = "descricao" class="form-control" id="formGroupExampleInput2" placeholder=" escreva descrição">
                </div>
                <button type="subimit" class="btn btn-outline-secondary">Nova Tarefa</button>
                <span class = "text-secondary pl-5">status:</span>
            </form>

        </div>
    </div>

</section>
<?php
include "inc/rodape.php"
?>