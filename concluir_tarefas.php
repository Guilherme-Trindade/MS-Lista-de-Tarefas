<?php
    include "inc/cabecalho.php";
?>

<?php

    $id_tarefa = $_GET["id"];
    $concluirtarefa = "Concluido";
    $dataTarefa = date("Y-m-d H:i:s");
    
    $stmt = $con->prepare("UPDATE tarefa SET situacao = ?, criado_em = ? WHERE id = ?");
    $stmt->bindParam(1, $concluirtarefa);
    $stmt->bindParam(2, $dataTarefa);
    $stmt->bindParam(3, $id_tarefa);

    $stmt->execute();

    header('Location: tarefas_concluidas.php');

?>

<?php
    include "linksAcoes.php";
    include "includes/rodape.php";
?>