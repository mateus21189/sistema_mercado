<?php
include("cabecalho.php");
session_start(); session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>bem vindo</h1>
    <a href="vizualizarProdutos.php">Visualizar os Produtos disponivel</a>
    <div>
        <a href="tela_cadastroProduto.php">cadastrar produtos</a>
    </div>

</body>

</html>