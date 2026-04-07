<?php
include("conexao.php");

$nome = $_POST['nome'];
$preco = $_POST['preco'];

$sql = "INSERT INTO produto (nome,preco)
VALUES ('$nome','$preco')";

if (!$conexao->query($sql)) {
    die("Erro: " . $conexao->error);
}

echo "Produto cadastrado com sucesso!";
?>