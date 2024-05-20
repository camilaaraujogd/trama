<!-- confirmar_excluir_cliente.php -->
<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: ../login/login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAMA - MODA SUSTENTÁVEL</title>
    <link rel="stylesheet" href="../SemLogin/perfilstyle.css">
    <link rel="icon" href="../Imagens/trama_logo_small.svg">
    <script src="../javascript/Header.js" defer></script>
    <script src="../javascript/menuscript.js" defer></script>
</head>
<body>

<div class="containerbg">
    <div class="container">
        <div class="title">
            <h1>CONFIRMAÇÃO DE EXCLUSÃO</h1>

            <p>Você tem certeza que deseja excluir sua conta? <br><small>Essa ação não poderá ser desfeita quando confirmada.</small></p>
        </div>

        <div class="deletebotao">
            <form action="../Cliente/clienteexcluir.php" method="post">
                <input type="submit" name="confirmar" value="CONFIRMAR">
                <a href="../Cliente/perfil_cliente.php"><button class="cancelar">CANCELAR</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
