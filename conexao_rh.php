<?php

$sgbd="mysql";
$host="localhost";
$usuario="root";
$senha="usbw";
$bd="rh";

$conexao = new PDO("$sgbd:host=$host:dbname=$bd", $usuario, $senha);

?>