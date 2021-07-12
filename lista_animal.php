?>

<?php

require_once "classeAnimal.php";
session_start();

foreach($_SESSION["especie"] as $i=>$e){
    $e->exibir_animal();

}

?>