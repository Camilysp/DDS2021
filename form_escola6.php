<!DOCTYPE html>
<html>
    <head>
        <style>
            input, button{margin:10px; width:300px;};    
        </style>
    </head>
    <body>
        <h1>Cadastro de Escola</h1>
        <form method="post" action="recebe_form_escola.php">
            <input type="text" name="nome" placeholder="Digite o nome da escola" /><br />
            <input type="text" name="cnpj" placeholder="Digite a CNPJ da esola" /><br />
            <input type="text" name="endereco" placeholder="Digite o endereço da escola" /><br />
            <input type="text" name="cidade" placeholder="Digite a cidade da escola" /><br />
            <input type="text" name="estado" placeholder="Digite o estado da escola" /><br />

            <button>Enviar</button>
        </form>
    </body>

</html>