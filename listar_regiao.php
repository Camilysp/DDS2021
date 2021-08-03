<?php

include "menu_rh.php";
include "classeRegiao.php";
include "conexao_rh.php";

$sql = "SELECT * FROM regiao ORDER BY nome_regiao";

$resultado = $conexao->query($sql) or die (print_r($conexao->errorInfo()));

if($resultado->rowCount()>0){

    foreach($resultado as $i=>$t){
        $r = new Regiao($t);
        $r->exibir();

    }
}

else{
    echo "Não há regiões cadastradas.";
}

?>