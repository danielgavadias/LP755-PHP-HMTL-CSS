<?php

require_once __DIR__ . "/../../conexao.php";
   
   //ARMAZENA DADOS
    $sqlCADASTRO = "INSERT INTO produtos 
    (nome, categoria_id, preco, qtd, estoque_min)
    VALUES (?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sqlCADASTRO);

    // CADASTRAR PRODUTOS:
    if (isset($_POST["fazer_cadastro"])) 
    {
        $nome = $_POST["nome"];
        $categoria_id = $_POST["categoria_id"];
        $preco = $_POST["preco"];
        $qtd = $_POST["qtd"];
        $estoque_min = $_POST["estoque_min"];


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
    <title>cadastro_loja_informatica</title>
</head>
<body>
    
<form method="POST">

        <p>Insira o id da categoria: </p> <input type="number" name="categoria_id" min="1" step="1" required>
        <p>Insira o nome: </p> <input type="text" name="nome" required>
        <p>Insira o preco: </p> <input type="number" name="preco" min="0" step="0.01" required>
        <p>Insira a quantidade: </p> <input type="number" name="qtd" min="0" step="1" required>
        <p>Insira a quantidade minima de estoque: </p><input type="number" name="estoque_min" min="0" step="1" required>

    <button type="submit" name="fazer_cadastro">Fazer cadastro.</button>

</form>

</body>
</html>