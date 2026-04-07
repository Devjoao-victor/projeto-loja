<?php
include("conexao.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];

$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$cep = $_POST['cep'];

// Endereço
$sql_endereco = "INSERT INTO endereco (rua,bairro,numero,complemento,cep)
VALUES ('$rua','$bairro','$numero','$complemento','$cep')";

if (!$conexao->query($sql_endereco)) {
    die("Erro endereço: " . $conexao->error);
}

$endereco_id = $conexao->insert_id;

// Cliente
$sql_cliente = "INSERT INTO cliente (nome,cpf,endereco_id)
VALUES ('$nome','$cpf','$endereco_id')";

if (!$conexao->query($sql_cliente)) {
    die("Erro cliente: " . $conexao->error);
}

echo "Cliente cadastrado com sucesso!";
?>