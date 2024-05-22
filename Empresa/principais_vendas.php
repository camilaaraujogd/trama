<?php
// Incluir arquivo de configuração
include ('../config.php');

session_start();

// Query para selecionar as vendas e ordená-las pela quantidade vendida em ordem decrescente
$sql = "SELECT nome, data, MONTH(data) AS mes, SUM(quantidade) AS total_vendas 
        FROM vendas 
        GROUP BY nome, MONTH(data) 
        ORDER BY total_vendas DESC";

// Executar a query
$result = mysqli_query($conexao, $sql);

// Verificar se houve algum erro na execução da query
if (!$result) {
    die("Erro ao executar a consulta SQL: " . mysqli_error($conexao));
}

// Verificar se a query retornou resultados
if (mysqli_num_rows($result) > 0) {
    // Exibir os resultados em uma tabela
    echo "<table border='1'>";
    echo "<tr><th>Nome do Produto</th><th>Mês da Venda</th><th>Total de Vendas</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['nome']."</td>";
        echo "<td>".$row['mes']."</td>";
        echo "<td>".$row['total_vendas']."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhuma venda encontrada.";
}

// Fechar conexão com o banco de dados
mysqli_close($conexao);
?>
