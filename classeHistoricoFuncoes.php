<?php

class Historico{

    public $id_funcionario;
    public $data_inicial;
    public $data_final;
    public $id_funcao;
    public $id_departamento;

    public function __construct($valores){
        $this->id_funcionario = $valores ["id_funcionario"];
        $this->data_inicial = $valores ["data_inicial"];
        $this->data_final = $valores ["data_final"];
        $this->id_funcao = $valores ["id_funcao"];
        $this->id_departamento = $valores ["id_departamento"];
    }

    public function exibir(){
        echo "<b>Id do funcionário: </b>$this->id_funcionario<br />";
        echo "<b>Data Inicial: </b>$this->data_inicial<br />";
        echo "<b>Data Final: </b>$this->data_final<br />";
        echo "<b>Id da função: </b>$this->id_funcao<br />";
        echo "<b>Id do departamento: </b>$this->id_departamento<br />";
        echo "<br />";
    }

}

?>