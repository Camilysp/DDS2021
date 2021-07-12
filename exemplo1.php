<?php

require_once "classeAluno.php";
require_once "classeSecretario.php";
require_once "classeProfessor.php";

$a = new Aluno();
$a->matricula="1234432155";
$a->nota[0]="5";
$a->nota[1]="10";
$a->nome[1]="Camily";
$a->email[1]="camily@gmail.com";
$a->telefone[1]="(14)9999-9999";
$a->data_nascimento[1]="2004-05-02";
$a->sexo[1]="feminino";

print_r($a);
echo "<hr />";

$p = new Professor();
print_r($p);
echo "<hr />";

$s = new Secretario();
print_r($s);
echo "<hr />";

?>