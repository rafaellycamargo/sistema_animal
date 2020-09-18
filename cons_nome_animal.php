<?php

    include('cabecalho_conexao.php');

    $nome_animal = $_GET['nome_animal'];

    $SQL = "SELECT * FROM animal WHERE nome = '$nome_animal'";

    $dados_recuperados= mysqli_query($con, $SQL);
    
    if ($dados_recuperados) {
    if(mysqli_num_rows($dados_recuperados)>0) {
        
        echo "<table border='1'>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Tipo</th>
                    <th>Idade</th>
                    <th>Nome Dono</th>
                    <th>Telefone</th>
                    <th>Endereco</th>
					<th colspan='2'>Operacoes</th>
				  </tr>";
			

        while(($resultado = mysqli_fetch_assoc($dados_recuperados))!=null) {
            echo "<td> ".$resultado['id'] . "</td>
                    <td>" . $resultado['nome'] . " </td>
                    <td>" . $resultado['tipo'] . " </td>
                    <td>" . $resultado['idade'] . " </td>
                    <td>" . $resultado['nome_dono'] . " </td>
                    <td>" . $resultado['telefone'] . " </td>
                    <td>" . $resultado['endereco'] . " </td>
                    <td> <a href='editar_animal.php?pront=" .$resultado['id']. "'>Editar</a> </td>
                    <td><a href='remover_animal.php?pront=" .$resultado['id']. "'>Remover</a><br/></td>";
        }    
        echo "</table>";
    }
    } else {
        echo "Esse nome nao esta cadastrado.";
        echo mysqli_error($con);
    }

    mysqli_close($con);


?>