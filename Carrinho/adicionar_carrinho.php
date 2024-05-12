<?php
include_once('config.php');

session_start();

if(isset($_POST["produto_id"]) && !empty($_POST["produto_id"])) {
    $produto_id = $_POST["produto_id"];

    // Verifica se o produto já está no carrinho
    if(isset($_SESSION["carrinho"][$produto_id])) {
        $_SESSION["carrinho"][$produto_id] += 1;
    } else {
        $_SESSION["carrinho"][$produto_id] = 1;
    }

    // Verifica se uma imagem foi enviada
    $caminho_arquivo = ""; // Inicializa a variável $caminho_arquivo

    if(isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] == 0) {
        $nome_arquivo = $_FILES["imagem"]["name"];
        $caminho_arquivo = "uploads/" . $nome_arquivo;

        // Move a imagem para o diretório de uploads
        move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho_arquivo);
    }

    // Insere o produto no carrinho, incluindo o caminho da imagem, se disponível
    $sql = "INSERT INTO carrinho (produto_id, quantidade, produto_imagem) VALUES ('$produto_id', 1, '$caminho_arquivo')";
    if ($conexao->query($sql) === TRUE) {
        header("Location: feed.php");
        exit();
    } else {
        header("Location: feed.php?error=db_error");
        exit();
    }
} else {
    header("Location: feed.php");
    exit();
}
?>
