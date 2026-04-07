<?php
include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$tipo = $_POST['tipo'];

$sql = "INSERT INTO usuarios (nome,email,senha,tipo)
VALUES ('$nome','$email','$senha','$tipo')";

if (!$conexao->query($sql)) {
    die("Erro: " . $conexao->error);
}

echo "Usuário cadastrado com sucesso!";
?>