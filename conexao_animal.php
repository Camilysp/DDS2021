<?php

$sgbd="mysql";
$host="localhost";
$usuario="root";
$senha="";
$bd="animal";

$conexao = new PDO("$sgbd:host=$host;dbname=$bd",$usuario,$senha);

?>