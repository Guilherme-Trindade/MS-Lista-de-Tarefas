<?php

class Tarefa {
   public string $nome;
   public string $descricao;
   public string $situacao;
   public string $criadoEm;

    public function __construct(string $nome, string $descricao){
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this ->situacao = "Pendente";
        $this->criadoEm = date("Y-m-d H:i:s");

    }

}




?>