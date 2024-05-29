<?php
// Inclua o arquivo de configuração do banco de dados
include("../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta para verificar se o administrador existe no banco de dados
    $sql = "SELECT id, email FROM administradores WHERE email='$email' AND senha='$senha'";
    $result = $conexao->query($sql);

    if ($result->num_rows == 1) {
        // Se o administrador existir, inicia a sessão e define a variável $_SESSION['id']
        session_start();
        $_SESSION['id'] = 'admin';

        // Redireciona para a página de agendamento
        header("Location: ../Agendamento/agendamentoadmin.php");
        exit();
    } else {
        // Se as credenciais estiverem incorretas, redirecione de volta para a página de login
        header("Location: ../login/loginadm.html");
        exit();
    }
}

$conexao->close();
?>
