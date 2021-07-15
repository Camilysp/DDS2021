<?php

include "menu.php";

?>

    <form method="post" action="recebe_form_cliente.php">
    <?php
    
        include "classeInput.php";
        include "classeTextArea.php";

        $v = null;
        $v["type"]="text";
        $v["name"]="cpf";
        $v["id"]="cpf";
        $v["class"]="i";
        $v["placeholder"]="Digite o cpf do cliente";
        $i = new Input($v);
        $i->exibir();

        $v = null;
        $v["type"]="text";
        $v["name"]="nome";
        $v["id"]="nome";
        $v["class"]="i";
        $v["placeholder"]="Digite o nome do cliente";
        $i = new Input($v);
        $i->exibir();

        $v = null;
        $v["type"]="text";
        $v["name"]="telefone";
        $v["id"]="telefone";
        $v["class"]="i";
        $v["placeholder"]="Digite o telefone (xx)xxxxx-xxxx";
        $i = new Input($v);
        $i->exibir();

        $v = null;
        $v["type"]="email";
        $v["name"]="email";
        $v["id"]="email";
        $v["class"]="i";
        $v["placeholder"]="Digite o email...";
        $i = new Input($v);
        $i->exibir();

        $v1["name"]="endereco";
        $v1["placeholder"]="Digite o endereço (CEP / LOGRADOURO / NUMERO / BAIRRO / CIDADE / UF)...";
        $v1["cols"]="48";
        $v1["rows"]="4";
        $v1["class"]="t";
        $t = new TextArea($v1);
        $t->exibir();

        $v = null;
        $v["type"]="text";
        $v["name"]="sexo";
        $v["id"]="sexo";
        $v["class"]="i";
        $v["placeholder"]="Digite o sexo (M/F)...";
        $i = new Input($v);
        $i->exibir();

        $v = null;
        $v["type"]="submit";
        $v["name"]="Enviar";
        $v["id"]="Enviar";
        $v["class"]="i";;
        $i = new Input($v);
        $i->exibir();
    
       ?>
    </form>
