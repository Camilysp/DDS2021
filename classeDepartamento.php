<?php

class Departamento{

    public $id_departamento;
    public $nome_departamento;
    public $id_gerente;
    public $id_localizacao;

    public function __construct($valores){
        $this->id_departamento = $valores ["id_departamento"];
        $this->nome_departamento = $valores ["nome_departamento"];
        $this->id_gerente = $valores ["id_gerente"];
        $this->id_localizacao = $valores ["id_localizacao"];
    }

    public function exibir(){
        echo "<b>Id do departamento: </b>$this->id_departamento<br />";
        echo "<b>Nome do departamento: </b>$this->nome_departamento<br />";
        echo "<b>Id do gerente: </b>$this->id_gerente<br />";
        echo "<b>Id da localização: </b>$this->id_localizacao<br />";
        echo "<br />";
    }

}

?>