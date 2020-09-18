<?php
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $idade = $_POST['idade'];
    $nome_dono = $_POST['nome_dono'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];


    //Abrindo conexão com o BD
    include('cabecalho_conexao.php');
    
    $SQL = "INSERT INTO animal (nome, tipo, idade, nome_dono, telefone, endereco)
            VALUE ('$nome', '$tipo', $idade, '$nome_dono', '$telefone', '$endereco')";
    $texto = "Animal inserido com sucesso<br/>";
    
    include ('rodape_conexao.php');



?>