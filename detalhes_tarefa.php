<?php
    include "inc/cabecalho.php";
    require_once("inc/Banco.php");
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

<section class = "container bg-white mt-5">

    <div class = "mt-5">
        <?php

            $idTarefa = $_GET["id"];

            $stm = Banco::getInstance()->prepare("SELECT * FROM tarefa WHERE id = ?");
            
            $stm->bindParam(1, $idTarefa);
            $stm->execute();

            $tarefa = $stm->fetch(PDO::FETCH_OBJ);


            echo "<h3> Informações da Tarefa - " . $tarefa->nome . "</h3>";
            echo "<ul>";
            echo "<li><b>Descrição:<br></b> $tarefa->descricao </li>";
            echo "</ul>";


        ?>
        
    </div>
   

</section>



<?php
    include "inc/rodape.php";
?>