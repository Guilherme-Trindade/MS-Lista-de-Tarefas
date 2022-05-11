<?php
    include "../inc/cabecalho.php";
    require_once("../Models/Tarefa.php");
    require_once("../Models/TarefaDao.php");


    $tarefa = new Tarefa($_POST["novatarefa"],$_POST["descricao"]);
    TarefaDAO::getInstance()->save($tarefa);
    
        
     header('Location: ../viws/tarefa_nova.php');

include "../inc/rodape.php"


?>