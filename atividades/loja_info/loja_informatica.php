<?php

require_once __DIR__ . "/../conexao.php";

    //CRIA TABELA CATEGORIAS
    $sqlCATEGORIAS = "CREATE TABLE IF NOT EXISTS categorias 
    (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
    )";
    
    //CRIA TABELA PRODUTOS
    $sqlPRODUTOS = "CREATE TABLE IF NOT EXISTS produtos 
    (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    categoria_id INT,
    FOREIGN KEY (categoria_id) REFERENCES categorias(id),
    preco DECIMAL (10,2) NOT NULL CHECK (preco >= 0),
    qtd  INT NOT NULL CHECK (qtd >= 0),
    estoque_min INT NOT NULL CHECK (estoque_min >= 0)
    )";

    //CRIA TABELA VENDAS
    $sqlVENDAS = "CREATE TABLE IF NOT EXISTS vendas 
    (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    produto_id INT,
    FOREIGN KEY (produto_id) REFERENCES produtos(id),
    valor_total DECIMAL (10,2) NOT NULL CHECK (valor_total >= 0),
    qtd INT NOT NULL CHECK (qtd >= 0),
    data_venda DATETIME NOT NULL
    )";

    //ARMAZENA DADOS
    $sqlCADASTRO = "INSERT INTO produtos 
    (nome, categoria_id, preco, qtd, estoque_min)
    VALUES (?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sqlCATEGORIAS);
    $stmt->execute();

    $stmt = $pdo->prepare($sqlPRODUTOS);
    $stmt->execute();

    $stmt = $pdo->prepare($sqlVENDAS);
    $stmt->execute();

    // CADASTRAR PRODUTOS:
    if (isset($_POST["fazer_cadastro"])) 
    {
        $nome = $_POST["nome"];
        $categoria_id = $_POST["categoria_id"];
        $preco = $_POST["preco"];
        $qtd = $_POST["qtd"];
        $estoque_min = $_POST["estoque_min"];

        $stmt = $pdo->prepare($sqlCADASTRO);

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

    <h1>LOJA: INFORMÁTICA</h1>

    <p>Desejas: </p>
    
    <form method="POST">
        
        <button type="submit" name="cadastrar" value="1"> Cadastrar produtos </button>


    

 























        </form>
</body>
</html>