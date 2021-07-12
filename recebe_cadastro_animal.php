<?php

require_once "conexao_animal.php";

$nome = $_POST["nome"];
$data_nascimento = $_POST["data_nascimento"];
$sexo = $_POST["sexo"];
$peso = $_POST["peso"];

$q = "INSERT INTO animal VALUES ('$nome', '$data_nascimento', '$sexo', '$peso')";

$conexao->query($q) or die(print_r($conexao->errorInfo()));

echo "Animal cadastrado com sucesso!";

?>