<?php

class Pais{

    public $id_pais;
    public $nome_pais;
    public $id_regiao;

    public function __construct($valores){
        $this->id_pais = $valores ["id_pais"];
        $this->nome_pais = $valores ["nome_pais"];
        $this->id_regiao = $valores ["id_regiao"];
    }

    public function exibir(){
        echo "<b>Id do país: </b>$this->id_pais<br />";
        echo "<b>Nome do país: </b>$this->nome_pais<br />";
        echo "<b>Id da região: </b>$this->id_regiao<br />";
        echo "<br />";
    }

}

?>