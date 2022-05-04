<?php
    include "inc/cabecalho.php";
    require_once("Tarefa.php");
    require_once("TarefaDao.php");


    $tarefa = new Tarefa($_POST["novatarefa"],$_POST["descricao"]);
    TarefaDAO::getInstance()->save($tarefa);
    
        
     header('Location: tarefa_nova.php');

include "inc/rodape.php"


?>