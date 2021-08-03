<?php

include "menu_rh.php";
include "classePais.php";
include "conexao_rh.php";

$sql = "SELECT * FROM pais ORDER BY nome_pais";

$resultado = $conexao->query($sql) or die (print_r($conexao->errorInfo()));

if($resultado->rowCount()>0){

    foreach($resultado as $i=>$t){
        $p = new Pais($t);
        $p->exibir();

    }
}

else{
    echo "Não há países cadastrados.";
}

?>