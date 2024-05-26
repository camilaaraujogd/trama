<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAMA - MODA SUSTENTÁVEL</title>
    <link rel="stylesheet" href="..\Agendamento\agendamentodetalhestyle.css">
    <link rel="icon" href="..\imagens\trama_logo_small.svg">
    <script src="..\javascript\headerProduto.js" defer></script>
    <script src="../javascript/Footer.js" defer></script>
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
            echo "<div class='details-container'>";
            echo "<div class='detail'><h5>DETALHES DAS VENDAS</h5></div>";
            echo "<tr><th>Nome do Produto</th><th>Mês da Venda</th><th>Total de Vendas</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                
                echo "<tr>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['mes']."</td>";
                echo "<td>".$row['total_vendas']."</td>";
                echo "</tr>";
                
            }
            echo "</table>";
            echo '<button class="voltar-button" onclick="window.location.href = \'../Empresa/perfil_empresa.php\';">Voltar</button>';
        } else {
            echo "Nenhuma venda encontrada.";
        }

        // Fechar conexão com o banco de dados
        mysqli_close($conexao);
        ?>

</body>
</html>