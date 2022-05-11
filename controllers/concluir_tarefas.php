<?php
    include "../inc/cabecalho.php";
    require_once("../Models/Banco.php");
?>

<?php

    $id_tarefa = $_GET["id"];
    $concluirtarefa = "Concluido";
    $dataTarefa = date("Y-m-d H:i:s");
    
    $stm = Banco::getInstance()->prepare("UPDATE tarefa SET situacao = ?, criado_em = ? WHERE id = ?");
    $stm->bindParam(1, $concluirtarefa);
    $stm->bindParam(2, $dataTarefa);
    $stm->bindParam(3, $id_tarefa);

    $stm->execute();

    header('Location: ../viws/tarefas_concluidas.php');

?>
