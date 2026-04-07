<?php
include("conexao.php");

$nome_empresa = $_POST['nome_empresa'];
$cnpj = $_POST['cnpj'];
$produto_quantidade = $_POST['produto_quantidade'];
$preco = $_POST['preco'];

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

// Fornecedor
$sql = "INSERT INTO fornecedor (nome_empresa,cnpj,produto_quantidade,preco,endereco_id)
VALUES ('$nome_empresa','$cnpj','$produto_quantidade','$preco','$endereco_id')";

if (!$conexao->query($sql)) {
    die("Erro fornecedor: " . $conexao->error);
}

echo "Fornecedor cadastrado com sucesso!";
?>