<?php

include "menu_rh.php";
include "classeFuncao.php";
include "conexao_rh.php";

$sql = "SELECT * FROM funcao ORDER BY titulo_funcao";

$resultado = $conexao->query($sql) or die (print_r($conexao->errorInfo()));

if($resultado->rowCount()>0){

    foreach($resultado as $i=>$t){
        $n = new Funcao($t);
        $n->exibir();

    }
}

else{
    echo "Não há funções cadastradas.";
}

?>