<?php

include "menu_rh.php";
include "classeLocalizacao.php";
include "conexao_rh.php";

$sql = "SELECT * FROM localizacao ORDER BY endereco";

$resultado = $conexao->query($sql) or die (print_r($conexao->errorInfo()));

if($resultado->rowCount()>0){

    foreach($resultado as $i=>$t){
        $l = new Localizacao($t);
        $l->exibir();

    }
}

else{
    echo "Não há localizações cadastradas.";
}

?>