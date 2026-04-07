<?php
include("conexao.php");

$nome = $_POST['nome'];

$sql = "INSERT INTO vendedor (nome)
VALUES ('$nome')";

if (!$conexao->query($sql)) {
    die("Erro: " . $conexao->error);
}

echo "Vendedor cadastrado com sucesso!";
?>