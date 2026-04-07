<?php
session_start();

// proteção
if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] != 'vendedor') {
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Área do Vendedor</title>
</head>

<body>

<h1>Área do Vendedor 🧑‍💼</h1>

<p>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</p>

<a href="sistema_loja.html">Gerenciar Loja</a>
<br><br>
<a href="logout.php">Sair</a>

</body>
</html>