<?php
include_once('../config.php');

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
        echo "<img src='imagens/" . $row['imagem'] . "' width='200'><br>";
        echo "<a href='?delete_id=" . $row['id'] . "'>Excluir</a><br><br>"; 
    }
} else {
    echo "Nenhum produto encontrado.";
}

$conexao->close();
?>
