<?php

require_once __DIR__ . "/../../conexao.php";

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

    $stmt = $pdo->prepare($sqlCATEGORIAS);
    $stmt->execute();

    $stmt = $pdo->prepare($sqlPRODUTOS);
    $stmt->execute();

    $stmt = $pdo->prepare($sqlVENDAS);
    $stmt->execute();

    $stmt = $pdo->query("SELECT * FROM produtos");
    $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

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

    <?php /*if(isset($_POST["produtos"])){*/
    foreach($produtos as $produto) { ?>
     
    <p><strong class="ProdutoID">Produto <?= $produto["id"];?></strong>: 
    nome: <?= $produto["nome"];?>
    preço: <?= $produto["preco"];?>
    Quantidade no estoque: <?= $produto["qtd"];?>
    Quantidade minima permitida no estoque: <?= $produto["estoque_min"];?>
    Situação do estoque: 
    <?php if ($produto["qtd"] == 0) { ?>
        <strong class="estoqueZero">ESGOTADO</strong> 
    
    <?php } elseif ($produto["qtd"] <= $produto["estoque_min"]){ ?>
        <strong class="estoqueBaixo">ESTOQUE BAIXO</strong> 
 
    <?php }else{ ?>
        <strong class="estoqueDisponivel">ESTOQUE DISPONÍVEL</strong> 
    <?php } ?>

    </p>
    
    <?php }/*}*/ ?>
    <p>Desejas: </p>
    
    <form method="POST">   
        <a href="cadastro_loja_info.php"> CADASTRAR UM NOVO PRODUTO</a>
        <!-- opções pra dps* <a href=".php" name=".">.</a> -->
    </form>
    
    
</body>
</html>