<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAMA - MODA SUSTENTÁVEL</title>
    <link rel="stylesheet" href="..\SemLogin\novidadesstyle.css">
    <link rel="icon" href="..\imagens\trama_logo_small.svg">
    <script src="..\javascript\headerProduto.js" defer></script>
    <script src="..\javascript\Footer.js" defer></script>
</head>
<body>
<header>
    <div class="logo">
        <a href="../index.html"><img src="../Imagens/trama_logo.png"></a>
    </div>
    <ul>
        <li><a class="navlink" href="../SemLogin/sobre.html">SOBRE</a></li>
        <li><a class="navlink" href="../produtos/visualizar_produtos.php">PRODUTOS</a></li>
        <li><a class="navlink" href="../SemLogin/sustentabilidade.html">SUSTENTABILIDADE</a></li>
    </ul>
</header>

<div class="containerbg">
    <div class="container">
        <div class="title">
            <h5>SEUS PRODUTOS</h5>
        </div>
            <?php
            include_once('../config.php');

            session_start();

            // Verifica se foi solicitada a exclusão de algum produto
            if(isset($_GET['delete_id'])) {
                $id = $_GET['delete_id'];
        
    
                $sql_delete = "DELETE FROM produtos WHERE id = $id";
        
                if ($conexao->query($sql_delete) === TRUE) {
                    echo "Produto excluído com sucesso.";
                } else {
                    echo "Erro ao excluir o produto: " . $conexao->error;
                }
            }


            $sql = "SELECT * FROM produtos";
            $resultado = $conexao->query($sql);

            if ($resultado->num_rows > 0) {
                        // Exibe os dados de cada produto
                while($row = $resultado->fetch_assoc()) {
                    echo "<h1>" . $row['nome'] . "</h1>";
                    echo "<h2>Marca: " . $row['marca'] . "</h2>";
                    echo "<h4>Descrição: " . $row['descricao'] . "</h4>";
                    echo "<p>Preço: R$" . number_format($row['preco'], 2, ',', '.') . "</p>";
                    echo "<img src='../uploads/" . $row['imagem'] . "' width='200'><br>";
                    echo "<a href='?delete_id=" . $row['id'] . "'>Excluir</a><br><br>"; 
                }
            } else {
                echo "Nenhum produto encontrado.";
            }
                echo " <a href='../produtos/colocarprodutos.html'>Voltar</a>";

            $conexao->close();
            ?>

    </div>
</div>
</body>
</html>