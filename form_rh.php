<?php

include "menu_rh.php";

?>

<!DOCTYPE html>

<html>
    
    <head>
    
    <style>
        input{width: 200px; margin:10px;}
    </style>
    
    </head>

    <body>
        
        <h2>Cadastro Funcionários</h2>

        <form method="post">
            <input type="number" name="id_funcionario" placeholder="Id do funcionário..."/><br />    
            <input type="text" name="nome" placeholder="Nome..."/><br />    
            <input type="text" name="sobrenome" placeholder="Sobrenome..."/><br />    
            <input type="text" name="email" placeholder="Email..."/><br />    
            <input type="number" name="telefone" placeholder="Telefone..."/><br />  
            <input type="number" name="id_funcao" placeholder="Id da função..."/><br />   
            <input type="number" name="salario" placeholder="Salário..."/><br />   
            <input type="text" name="comissao" placeholder="Comissão..."/><br />   
            <input type="number" name="id_gerente" placeholder="Id do gerente..."/><br />   
            <input type="number" name="id_departamento" placeholder="Id do departamento..."/><br />   
            

            <h2>Cadastro Departamento</h2>

        <form method="post">
            <input type="number" name="id_departamento" placeholder="Id do departamento..."/><br />    
            <input type="text" name="nome_departamento" placeholder="Nome do departamento..."/><br />     
            <input type="number" name="id_gerente" placeholder="Id do gerente..."/><br />   
            <input type="number" name="id_localizacao" placeholder="Id da localização..."/><br /> 


            <h2>Cadastro Localização</h2>

        <form method="post">
            <input type="number" name="id_localizacao" placeholder="Id da localização..."/><br />    
            <input type="text" name="endereco" placeholder="Endereço..."/><br />    
            <input type="number" name="cep" placeholder="CEP..."/><br />    
            <input type="text" name="cidade" placeholder="Cidade..."/><br />    
            <input type="text" name="estado" placeholder="Estado..."/><br />  
            <input type="number" name="id_pais" placeholder="Id do país..."/><br />


            <h2>Cadastro Região</h2>

        <form method="post">
            <input type="number" name="id_regiao" placeholder="Id da região..."/><br />    
            <input type="text" name="nome_regiao" placeholder="Nome da região..."/><br />


            <h2>Cadastro País</h2>

        <form method="post">
            <input type="number" name="id_pais" placeholder="Id do país..."/><br />    
            <input type="text" name="nome_pais" placeholder="Nome do país..."/><br />    
            <input type="number" name="id_regiao" placeholder="Id da região..."/><br /> 


            <h2>Cadastro Função</h2>

        <form method="post">
            <input type="number" name="id_funcao" placeholder="Id da função..."/><br />    
            <input type="text" name="titulo_funcao" placeholder="Título da função..."/><br />    
            <input type="number" name="salario_minimo" placeholder="Salário mínimo..."/><br />    
            <input type="number" name="salario_maximo" placeholder="Salário máximo..."/><br />
            
            
            <h2>Cadastro Histórico de Funcões</h2>

        <form method="post">
            <input type="number" name="id_funcionario" placeholder="Id do funcionário..."/><br />    
            <input type="date" name="data_inicial" placeholder="Data inicial..."/><br />    
            <input type="date" name="data_final" placeholder="Data final..."/><br />    
            <input type="number" name="id_funcao" placeholder="Id da função..."/><br />    
            <input type="number" name="id_departamento" placeholder="Id do departamento..."/><br />

            <button>Enviar</button>
        
        </form>
    
    </body>

</html>