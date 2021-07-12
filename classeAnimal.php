<?php

abstract class Animal{
    public $nome;
    public $data_nascimento;
    public $sexo;
    public $peso;

    public function __construct($valores){
        $this-> nome = $valores["nome"];
        $this-> data_nascimento = $valores["data_nascimento"];
        $this-> sexo = $valores["sexo"];
        $this-> peso = $valores["peso"];

    }

    public function exibir_animal(){
        echo "<h3>Animal:</h3>";
        echo "$this->nome ($this->sexo)<br />";
        echo "Data de Nascimento: $this->dat_nascimento<br />";
        echo "Peso: $this->peso<br />";


    }
}

?>