<?php
    include "inc/cabecalho.php";
    require_once("inc/Banco.php");
?>

<?php

    $id_tarefa = $_GET["id"];
    
    $stm = Banco::getInstance()->prepare("DELETE FROM tarefa WHERE id = ?");
    $stm->bindParam(1, $id_tarefa);
    $stm->execute();

    header('Location: tarefas_lista.php');
?>


<?php
include "inc/rodape.php"
?>