<?php
    require_once "conexao.php";

//
//
echo "\n\nDEBUG 1\n\n";
//
//

    //1. CRIAR TABELA
    $sql = "CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL (10,2) NOT NULL,
    quantidade INT NOT NULL)";

//
//
echo "\n\nDEBUG 1.5\n\n";
//
//

$stmt = $pdo->prepare($sql);

$stmt->execute();

//
//
echo "DEBUG 2";
//
//
 
    //2. CADASTRAR PRODUTO
    if (isset($_POST["cadastrar"])) 
    {
        $nome = "nome";
        $preco = "preco";
        $quantidade = "quantidade";

        $sql - "INSERT INTO produtos(nome, preco, quantidade) 
        VALUES ($nome, $preco, $quantidade)";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            "nome" => $nome,
            "preco" => $preco,
            "quantidade" => $quantidade
        ]);
    }

//
//
echo "DEBUG 3";
//
//
 
    //3. ATUALIZAR PRODUTO
    if (isset($_POST["atualizar"]))
    {
        $id = $_POST["id"];
        $nome =  $_POST["nome"];
        $preco =  $_POST["preco"];
        $quantidade =  $_POST["quantidade"];

        $sql = "UPDATE produtos SET nome = '$nome', preco = $preco, quantidade = '$quantidade WHERE id = $id";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            "nome" => $nome,
            "preco" => $preco,
            "quantidade" => $quantidade,
            "id" => $id
        ]);
    }

//
//
echo "DEBUG 4";
//
//
 
    //4. EXCLUIR PRODUTO
    if (isset($_POST["excluir"]))
    {
        $id = $_POST["id"];
        $sql = "DELETE FROM produtos WHERE id = $id";
        $stmt->execute([
            "id" => $id
        ]);
    }

//
//
echo "DEBUG 5";
//
//
 
    //5. BUSCAR PRODUTO PARA EDIÇÃO
    $produtoEditar = NULL;

    if(isset($_GET["editar"])) 
    {
        $id = $_GET["editar"];
        $sql = "SELECT * FROM produtos WHERE id = $id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["id => $id"]);
        $produtoEditar = $stmt->fetch(PDO::FETCH_ASSOC);
    }

//
//
echo "DEBUG 6";
//
//
 
    //6. LISTAR TODOS OS PRODUTOS
    $sql = "SELECT * FROM produtos ORDER BY id ASC";
    $stmt = $pdo->query($sql);
    $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

//
//
echo "DEBUG 7";
//
//
 
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sistema de Cadastro de Produtos</h1>

    <h2>
        <?php
        if($produtoEditar)
        {
            echo "Editar produto";
        }
        else
        {
            echo "Cadastrar produto";
        }
        ?>
    </h2>

        <form method="POST">
            
            <?php if ($produtoEditar) { ?>
                <input type="hidden" name="id" value="<?= $produtoEditar['id'] ?>">
            <?php } ?>

            <label >Nome do produto: </label>
            <input type="text" name="nome" value="<?= $produtoEditar['nome'] ?? '' ?>"> 
            <br> <br>
            
            <label >Preço: </label>
            <input type="number" name="preco" step="0.01" required value="<?= $produtoEditar['preco'] ?? '' ?>"> 
            <br> <br>

            <label >Quantidade: </label>
            <input type="number" name="quantidade" min="0" required value="<?= $produtoEditar['quantidade'] ?? '' ?>"> 
            <br> <br>

            <?php if($produtoEditar){ ?>
                <button type="submit" name="atualizar">Atualizar produto</button>
            <?php } else { ?>
                <button type="submit" name="cadastrar">Cadastrar produto</button>
            <?php } ?>
        </form>

        <hr>

        <h2>Produtos Cadastrados: </h2>
        <table>

            <tr> <!-- tr | TABLE ROW | Cria uma linha dentro da tabela -->
                <th>ID</th> <!-- th | TABLE ROW | Cria uma céluçla de cabeçalho na tabela -->
                <th>Nome<th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
        
            <?php foreach($produtos as $produto){ ?>
                <tr>
                    <td> <?= $produto['id'] ?> </td>
                    <td> <?= htmlspecialchars($produto['nome']) ?> </td>
                    <td>R$ <?= number_format($produto['preco'], 2, ",", ".") ?> </td>
                    <td> <?= htmlspecialchars($produto['nquantidade']) ?></td>
                    <td>
                        <!-- EDITAR -->
                        <a href="index.php?editar= <?php $produto['id'] ?>">Editar</a>
                        <!-- EXCLUIR -->
                        <form method="POST" action="index.php" style="display:inline;"></form>
                            <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                            <button type="submit" name="excluir" onclick="return confirm ('Desejas excluir este produto')">Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>

        </table>




</body>
</html>