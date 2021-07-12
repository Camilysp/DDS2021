<?php

require_once "conexao_disciplina.php";

$nome = $_POST["nome"];
$professor = $_POST["professor"];
$qtd_alunos = $_POST["qtd_alunos"];
$livro = $_POST["livro"];

$q = "INSERT INTO disciplina VALUES ('$nome', '$professor', '$qtd_alunos', '$livro')";

$conexao->query($q) or die(print_r($conexao->errorInfo()));

echo "Disciplina cadastrada com sucesso!";

?>