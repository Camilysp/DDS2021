<?php

require_once "conexao_animal.php";

$q = "SELECT * FROM Animal";

$resultado = $conexao->query($q) or die(print_r($conexao->errorInfo()));

if($resultado->rowCount()>0){

    foreach($resultado as $i=>$t){
    echo "Nome: ".$t["nome"]."<br />";
    echo "Data de Nascimento: ".$t["data_nascimento"]."<br />";
    echo "Sexo: ".$t["sexo"]."<br />";
    echo "Peso: ".$t["peso"]."<br />";
    }
}

