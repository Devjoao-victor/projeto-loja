<?php
include("conexao.php");

$produto_id = $_POST['produto_id'];
$quantidade = $_POST['quantidade'];
$vendedor_id = $_POST['vendedor_id'];

$sql = "INSERT INTO estoque (produto_id,quantidade,vendedor_id)
VALUES ('$produto_id','$quantidade','$vendedor_id')";

if (!$conexao->query($sql)) {
    die("Erro: " . $conexao->error);
}

echo "Estoque cadastrado com sucesso!";
?>