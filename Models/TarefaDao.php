<?php
require_once("Tarefa.php");
require_once("Banco.php");

class TarefaDAO {
    private static $instance;

    public static function getInstance(){
        if(self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function save(Tarefa $tarefa) {
        $stm = Banco::getInstance()->prepare("INSERT INTO tarefa(nome, descricao, situacao, criado_em) values(:nome, :descricao,:situacao,:criadoEm)");
        $stm->bindParam("nome",$tarefa->nome);
        $stm->bindParam("descricao",$tarefa->descricao);
        $stm->bindParam("situacao",$tarefa->situacao);
        $stm->bindParam("criadoEm",$tarefa->criadoEm);

        $stm->execute();
    }
}




?>