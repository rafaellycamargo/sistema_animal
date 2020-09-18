<?php
    include("cabecalho.inc");
        if (empty($_POST)) {
            include('cabecalho_conexao.php');

            $pront = $_GET['pront'];

            $SQL = "SELECT * FROM animal WHERE id=$pront";
            $query = mysqli_query($con , $SQL);

            if(mysqli_num_rows($query) > 0) {

                while(($resultado = mysqli_fetch_array($query)) != null) {
                    $nome_alterar = $resultado[1];
                    $tipo_alterar = $resultado[2];
                    $idade_alterar = $resultado[3];
                    $nome_dono_alterar = $resultado[4];
                    $telefone_alterar = $resultado[5];
                    $endereco_alterar = $resultado[6];
                }

                echo '<form action="editar_animal.php" method="POST">

                    <label> Edite o nome do animal: </label>
                    <input type="text" name="nome_novo" value="'.$nome_alterar.'"/>
                    </br>

                    <label> Edite o tipo: </label>
                    <input type="text" name="tipo_novo" value="'.$tipo_alterar.'"/>
                    </br>

                    <label> Edite a idade: </label>
                    <input type="number" name="idade_novo" value="'.$idade_alterar.'"/>
                    </br>

                    <label> Edite o nome do dono: </label>
                    <input type="text" name="nome_dono_novo" value="'.$nome_dono_alterar.'"/>
                    </br>

                    <label> Edite o telefone: </label>
                    <input type="text" name="telefone_novo" value="'.$telefone_alterar.'"/>
                    </br>

                    <label> Edite o endereco: </label>
                    <input type="text" name="endereco_novo" value="'.$endereco_alterar.'"/>
                    </br>

                    <input type=hidden name="id" value="'.$pront.'"/>
                    <input type="submit" value="Enviar"/>
                    <a href="cons_todos_animais.php>Voltar</a>
                </form>';
            }
        } else {
            $nome_novo = $_POST['nome_novo'];
            $tipo_novo = $_POST['tipo_novo'];
            $idade_novo = $_POST['idade_novo'];
            $nome_dono_novo = $_POST['nome_dono_novo'];
            $telefone_novo = $_POST['telefone_novo'];
            $endereco_novo = $_POST['endereco_novo'];
            $id = $_POST['id'];


            include('cabecalho_conexao.php');

            $SQL = "UPDATE animal
                    SET nome='$nome_novo', tipo='$tipo_novo' , idade='$idade_novo' , nome_dono='$nome_dono_novo' , telefone='$telefone_novo' , endereco='$endereco_novo' 
                    WHERE id=$id";

           include('rodape_conexao.php');
                
 
        }
    
    ?>


    </body>
</html>

