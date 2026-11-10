<?php 

    //PHP: LINGUAGEM QUE EXECUTA AS REGRAS DO SISTEMA
    //MySQL: SGBD
    //PDO: Intrerface dp PHP que permite conversar com o banco de dados

    // host =  localhost = 194.61.238.119
    $host = 'localhost';
    $db = 'daniel755';
    $user = 'daniel755';
    $pass = '755!@#';
    $charset = 'utf8mb4';

    try
    {
        $pdo = new PDO(
        "mysql:
        host=$host;
        dbname=$db;
        charset=$charset",
        $user,
        $pass
    );

    $pdo->setAttribute
    (
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    echo "SUCESSO AO CONECTAR SE AO BANCO DE DADOS";
    }

    catch(PDOException $e)
    {
        echo "ERRO AO CONECTAR SE AO BANCO DE DADOS:\n";
        echo $e->getMessage();
    }



?>
