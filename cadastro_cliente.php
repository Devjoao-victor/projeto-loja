<?php
session_start();

// proteção
if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] != 'cliente') {
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Área do Cliente</title>
</head>

<body>

<h1>Área do Cliente 👤</h1>

<p>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</p>

<a href="loja.html">Ir para loja</a>
<br><br>
<a href="logout.php">Sair</a>

</body>
</html>