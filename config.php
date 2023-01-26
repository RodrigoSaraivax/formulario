<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

//É um teste para ver se funcionou
/*
    if ($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    }
*/
?>