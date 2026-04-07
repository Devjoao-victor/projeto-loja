<?php
session_start();
include("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    if (password_verify($senha, $user['senha'])) {

        // cria sessão
        $_SESSION['usuario'] = $user['nome'];
        $_SESSION['tipo'] = $user['tipo'];

        // redireciona
        if ($user['tipo'] == "vendedor") {
            header("Location: area_vendedor.php");
        } else {
            header("Location: area_cliente.php");
        }
        exit;
    }
}

echo "Email ou senha inválidos!";
?>