<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastra_Produto.php" method="post">

        <label for="nome">Nome do Produto</label>
        <br>
        <input type="text" id="nome" name="nome" required>
        <br>

        <label for="preco">Preco produto</label>
        <br>
        <input type="text" id="preco" name="preco" required>
        <br>

        <label for="categoria">Descrição Produto</label>
        <br>
        <input type="text" id="descricao" name="descricao" required>
        <br>

        <label for="codigo_barra">Codigo de Barra</label>
        <br>
        <input type="text" id="codigo_barra" name="codigo_barra" required>
        <br>

        <label for="categoria">Categoria do Produtos</label>
        <br>
        <input type="text" id="categoria" name="categoria" required>
        <br>

        <input type="submit" value="Cadastrar">
    </form>
    
</body>
</html>