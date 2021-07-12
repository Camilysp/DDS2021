<?php

class Disciplina{
    public $nome;
    public $professor;
    public $qtd_alunos;
    public $livro;


    public function __construct($valores){
        $this-> nome = $valores["nome"];
        $this-> professor = $valores["professor"];
        $this-> qtd_alunos = $valores["qtd_alunos"];
        $this-> livro = $valores["livro"];

    }

    public function exibir_disciplina(){
        echo "<h3>Disciplina:</h3>";
        echo "$this->nome<br />";
        echo "Professor: $this->professor<br />";
        echo "Livro: $this->livro<br />";


    }
}



?>