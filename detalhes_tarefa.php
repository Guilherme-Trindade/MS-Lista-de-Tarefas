<?php
    include "inc/cabecalho.php";
?>

<header class = "container">
    <div>
    <h1 class = "text-secondary pt-5">
       <span class = "text-danger">MS</span>todolist
    </h1>
    </div>
</header>
<hr class = "container">

<section class = "container pb-5">

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

<section class = "container bg-white mt-5">

    <div class = "mt-5">
        <?php

            $result = $con->prepare("SELECT * FROM tarefa WHERE id = ?");

            $idTarefa = $_GET["id"];

            $result->bindParam(1, $idTarefa);
            $result->execute();
            $tarefa = $result->fetch(PDO::FETCH_OBJ);

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