<!DOCTYPE html>
<html>
    <head>
    </head>
        <style>
           a, select, button{
               margin: 10px;
               width: 300px;
           }
        </style>
    <body>
        <h1>Cadastro de Animal</h1><hr />

        <a href="form_cadastro_animal.php"
			      title="Cadastro">
			      Cadastro
		</a>

        <a href="verLista.php"
			      title="Ver Lista">
			      Ver Lista
		</a>

            <a href="limpar_lista_animal.php"
			      title="Limpar Lista">
			      Limpar Lista
		</a><br />
            
        <form method="post">
           <?php
           
           if (!empty($_POST["nome"])){
              include "classeLeao.php";
              $c = new Leao();
              $c->especie = $_POST["especie"];
              $_SESSION["especie"][] = $c;
           }

            if(!empty($_POST["tamanho_crina"])){
              include "classeCavalo.php";
              $c = new Cavalo();
              $c->cavalo = $_POST["especie"];
              $_SESSION["especie"][] = $c;
             }

           
           elseif (!empty($_POST)){

            echo '
            
            <input type="text" name="nome" placeholder="Digite o nome do animal..." /><br />
            <input type="data" name="data_nascimento" placeholder="Digite a data de nascimento do animal..." /><br />
            <input type="text" name="sexo" placeholder="Digite o sexo do animal..." /><br />
            <input type="number" name="peso" placeholder="Digite o peso do animal..." /><br />';

            if ($_POST["especie"] == "cavalo"){

                echo'
                
                <input type="text" name="cor" placeholder="Digite a cor do animal..." /><br />
                <input type="number" name="tamanho_crina" placeholder="Digite o tamanho da crina do animal..." /><br />';
            }

            if ($_POST["especie"] == "leao"){

                echo'
                
                <input type="text" name="nacionalidade" placeholder="Digite a nacionalidade do animal..." /><br />
                <input type="number" name="tamanho_juba" placeholder="Digite o tamanho da juba do animal..." /><br />';
            }

            if ($_POST["especie"] == "elefante"){

                echo'
                
                <input type="number" name="altura" placeholder="Digite a altura do animal..." /><br />
                <input type="number" name="tamanho_tromba" placeholder="Digite o tamanho da tromba do animal..." /><br />';
            }

            if ($_POST["especie"] == "rinoceronte"){

                echo'
                
                <input type="number" name="qtd_chifres" placeholder="Digite a quantidade de chifres do animal..." /><br />
                <input type="number" name="tamanho_chifres" placeholder="Digite o tamanho do chifre do animal..." /><br />';
            }

           }

           else{
            echo' <select name="especie">
                <option label="Selecione a espécie..."></option>
                <option value="leao">Leão</option>
                <option value="elefante">Elefante</option>
                <option value="rinoceronte">Rinoceronte</option>
                <option value="cavalo">Cavalo</option>
            </select> <br />';

           }

           ?>
         
            <button>Cadastrar</button>

        </form>
    </body>
</html>