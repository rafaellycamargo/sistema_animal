<?php

    include('cabecalho_conexao.php');

    $SQL = "SELECT * FROM animal";

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
			
			while( ($resultado = mysqli_fetch_array($dados_recuperados)) != null) {
				
				echo "<tr>";
					echo "<td>" . $resultado[0] . "</td>";	
					echo "<td>" . $resultado[1] . "</td>";
					echo "<td>" . $resultado[2] . "</td>";
                    echo "<td>" . $resultado[3] . "</td>";
                    echo "<td>" . $resultado[4] . "</td>";
                    echo "<td>" . $resultado[5] . "</td>";
                    echo "<td>" . $resultado[6] . "</td>";
					echo "<td><a href='editar_animal.php?pront=$resultado[0]'>Editar</a></td>";
					echo "<td><a href='remover_animal.php?pront=$resultado[0]'>Remover</a></td>";
				echo "</tr>";
			}
			
			echo "</table>";
    }


    } else {
        echo"Problema na sintaxe";
        echo mysqli_error($con);
    }



	mysqli_close($con);


?>
<a href="menu.php">Voltar</a>

