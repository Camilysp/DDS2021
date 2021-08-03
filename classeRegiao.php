<?php

class Regiao{

    public $id_regiao;
    public $nome_regiao;

    public function __construct($valores){
        $this->id_regiao = $valores ["id_regiao"];
        $this->nome_regiao = $valores ["nome_regiao"];
    }

    public function exibir(){
        echo "<b>Id da região: </b>$this->id_regiao<br />";
        echo "<b>Nome da regiao: </b>$this->nome_regiao<br />";
        echo "<br />";
    }

}

?>