<?php

require_once "conexao.php";

    //TABELA CATEGORIAS
    $sql = "CREATE TABLE IF NOT EXISTS categorias 
    (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
    )";
    
    //TABELA PRODUTOS
    $sql = "CREATE TABLE IF NOT EXISTS produtos 
    (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    categoria_id INT, FOREIGN KEY
    FOREIGN KEY (categoria) REFERENCES categorias(id) 
    preco DECIMAL (10,2) NOT NULL,
    qtd INT NOT NULL
    estoque_minino INT NOT NULL
    )";

    //TABELA VENDAS
    $sql = "CREATE TABLE IF NOT EXISTS produtos 
    (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    produto_id INT,
    FOREIGN KEY (produto_id) REFERENCES produtos(id) 
    
    valor_total DECIMAL (10,2) NOT NULL ,
    if ($valor_total < 0) {
    $valor_total = 0;
    },
    
    qtd INT NOT NULL,
    if ($qtd < 0) {
    $qtd = 0;
    },

    data_venda DATETIME, NOT NULL
    )";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // CADASTRAR PRODUTOS:
    if (isset($_POST["cadastrar"])) 
    {
        $nome = $_POST["nome"];
        $categoria_id = $_POST["categoria_id"];
        $preco = $_POST["preco"];
        $qtd = $_POST["qtd"];
        $estoque_min = $_POST["estoque_min"];

        $sql = "INSERT INTO produtos(nome, categoria_id, preco, qtd, estoque_min) 
        VALUES ($nome, $categoria_id, $preco, $qtd, $estoque_min)";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            $nome,
            $categoria_id,
            $preco,
            $qtd,
            $estoque_min
        ]);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loja_informática</title>
</head>
<body>























    
</body>
</html>