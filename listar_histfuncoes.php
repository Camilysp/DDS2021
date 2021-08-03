<?php

include "menu_rh.php";
include "classeHistoricoFuncoes.php";
include "conexao_rh.php";

$sql = "SELECT * FROM historico_funcoes ORDER BY data_inicial";

$resultado = $conexao->query($sql) or die (print_r($conexao->errorInfo()));

if($resultado->rowCount()>0){

    foreach($resultado as $i=>$t){
        $h = new Historico($t);
        $h->exibir();

    }
}

else{
    echo "Não há histórico de funções cadastrados.";
}

?>