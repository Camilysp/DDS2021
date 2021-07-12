<?php

$sgbd="mysql";
$host="localhost";
$usuario="root";
$senha="";
$bd="disciplina";

$conexao = new PDO("$sgbd:host=$host;dbname=$bd",$usuario,$senha);

?>