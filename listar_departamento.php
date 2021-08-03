<?php

include "menu_rh.php";
include "classeDepartamento.php";
include "conexao_rh.php";

$sql = "SELECT * FROM departamento ORDER BY nome_departamento";

$resultado = $conexao->query($sql) or die (print_r($conexao->errorInfo()));

if($resultado->rowCount()>0){

    foreach($resultado as $i=>$t){
        $d = new Departamento($t);
        $d->exibir();

    }
}

else{
    echo "Não há departamentos cadastrados.";
}

?>