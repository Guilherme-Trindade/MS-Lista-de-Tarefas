<?php
    include "inc/cabecalho.php";
?>

<?php

    $id_tarefa = $_GET["id"];
    $emAndamento = "Em andamento";
    $dataTarefa = date("Y-m-d H:i:s");
    
    $stmt = $con->prepare("UPDATE tarefa SET situacao = ?, criado_em = ? WHERE id = ?");
    $stmt->bindParam(1, $emAndamento);
    $stmt->bindParam(2, $dataTarefa);
    $stmt->bindParam(3, $id_tarefa);

    $stmt->execute();

    header('Location: tarefas_lista.php');


?>

<?php
    include "linksAcoes.php";
    include "includes/rodape.php";
?>