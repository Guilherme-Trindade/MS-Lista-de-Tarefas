<?php
    include "inc/cabecalho.php";
    require_once("inc/Banco.php");
?>

<?php

    $id_tarefa = $_GET["id"];
    $emAndamento = "Em andamento";
    $dataTarefa = date("Y-m-d H:i:s");
    
    $stm = Banco::getInstance()->prepare("UPDATE tarefa SET situacao = ?, criado_em = ? WHERE id = ?");
    $stm->bindParam(1, $emAndamento);
    $stm->bindParam(2, $dataTarefa);
    $stm->bindParam(3, $id_tarefa);

    $stm->execute();

    header('Location: tarefas_lista.php');


?>

<?php
    include "linksAcoes.php";
    include "includes/rodape.php";
?>