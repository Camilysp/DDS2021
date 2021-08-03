<?php

class Funcao{

    public $id_funcao;
    public $titulo_funcao;
    public $salario_minimo;
    public $salario_maximo;

    public function __construct($valores){
        $this->id_funcao = $valores ["id_funcao"];
        $this->titulo_funcao = $valores ["titulo_funcao"];
        $this->salario_minimo = $valores ["salario_minimo"];
        $this->salario_maximo = $valores ["salario_maximo"];
    }

    public function exibir(){
        echo "<b>Id da função: </b>$this->id_funcao<br />";
        echo "<b>Título da função: </b>$this->titulo_funcao<br />";
        echo "<b>Salário mínimo: </b>$this->salario_minimo<br />";
        echo "<b>Salário máximo: </b>$this->salario_maximo<br />";
        echo "<br />";
    }

}

?>