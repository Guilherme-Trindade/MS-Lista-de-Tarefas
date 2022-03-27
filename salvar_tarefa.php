<?php
include "inc/cabecalho.php"
?>








<?php
    $nome_tarefa = $_POST["novatarefa"];
    $descricao_tarefa = $_POST["descricao"];
    $situacao = "Pendente";
    $criado_em = date("Y-m-d H:i:s");

    $stmt = $con->prepare("INSERT INTO tarefa (nome, descricao, situacao, criado_em) VALUES (?, ?, ?, ?)");

    $stmt->bindParam(1, $nome_tarefa);
    $stmt->bindParam(2, $descricao_tarefa);
    $stmt->bindParam(3, $situacao);
    $stmt->bindParam(4, $criado_em);

    $stmt->execute();
    
    header('Location: tarefa_nova.php');


?>



<?php
include "inc/rodape.php"
?>