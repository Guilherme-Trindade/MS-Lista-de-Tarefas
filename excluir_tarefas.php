<?php
include "inc/cabecalho.php"
?>

<?php

    $id_tarefa = $_GET["id"];
    
    $stmt = $con->prepare("DELETE FROM tarefa WHERE id = ?");
    $stmt->bindParam(1, $id_tarefa);
    $stmt->execute();

    header('Location: tarefas_lista.php');
?>


<?php
include "inc/rodape.php"
?>