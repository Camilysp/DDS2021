<!DOCTYPE html>
<html>
    <head>
        <style>
            input, button{margin:10px; width:300px;};    
        </style>
    </head>
    <body>
        <h1>Cadastro de Disciplina</h1>
        <form method="post" action="recebe_form_disciplina.php">
            <input type="text" name="nome" placeholder="Digite o nome da disciplina" /><br />
            <input type="text" name="professor" placeholder="Digite o professor da disciplina" /><br />
            <input type="text" name="qtd_alunos" placeholder="Digite a quantidade de alunos da disciplina" /><br />
            <input type="text" name="livro" placeholder="Digite o livro da disciplina" /><br />

            <button>Enviar</button>
        </form>
    </body>

</html>