<?php

class Funcionario{

    public $id_funcionario;
    public $nome;
    public $sobrenome;
    public $email;
    public $telefone;
    public $id_funcao;
    public $salario;
    public $comissao;
    public $id_gerente;
    public $id_departamento;

    public function __construct($valores){
        $this->id_funcionario = $valores ["id_funcionario"];
        $this->nome = $valores ["nome"];
        $this->sobrenome = $valores ["sobrenome"];
        $this->email = $valores ["email"];
        $this->telefone = $valores ["telefone"];
        $this->id_funcao = $valores ["id_funcao"];
        $this->salario = $valores ["salario"];
        $this->comissao = $valores ["comissao"];
        $this->id_gerente = $valores ["id_gerente"];
        $this->id_departamento = $valores ["id_departamento"];
    }

    public function exibir(){
        echo "<b>Id do funcionário: </b>$this->id_funcionario<br />";
        echo "<b>Nome: </b>$this->nome<br />";
        echo "<b>Sobrenome: </b>$this->sobrenome<br />";
        echo "<b>Email: </b>$this->email<br />";
        echo "<b>Telefone: </b>$this->telefone<br />";
        echo "<b>Id da função: </b>$this->id_funcao<br />";
        echo "<b>Salário: </b>$this->salario<br />";
        echo "<b>Comissão: </b>$this->comissao<br />";
        echo "<b>Id do gerente: </b>$this->id_gerente<br />";
        echo "<b>Id do departamento: </b>$this->id_departamento<br />";
        echo "<br />";
    }

}

?>