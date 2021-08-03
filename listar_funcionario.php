<?php

include "menu_rh.php";
include "classeFuncionario.php";
include "conexao_rh.php";

$sql = "SELECT * FROM funcionario ORDER BY nome";

$resultado = $conexao->query($sql) or die (print_r($conexao->errorInfo()));

if($resultado->rowCount()>0){

    foreach($resultado as $i=>$t){
        $f = new Funcionario($t);
        $f->exibir();

    }
}

else{
    echo "Não há funcionários cadastrados.";
}

?>