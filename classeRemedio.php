<?php

class Remedio{

    public $nome;
    public $preco;
    //private $tarja;
    public $bula;
    //public $composicao = array();
    public $validade;
    //public $tipo;

    public function __construct($valores){
        $this->nome = $valores["nome"];
        $this->preco = $valores["preco"];
        $this->bula = $valores["bula"];
        $this->validade = $valores["validade"];
    }

    public function exibir(){
        echo "<b>Remédio: </b>$this->nome<br />";
        echo "<b>Preço: </b>$this->preco<br />";
        echo "<b>Bula: </b>$this->bula<br />";
        echo "<b>Validade: </b>$this->validade<br />";
        echo "<br />";
    }
}

?>