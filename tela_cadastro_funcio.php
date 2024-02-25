<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastra_funcionario.php" method="post">
        <label for="cpf">CPF</label>
        <br>
        <input type="text" id="cpf" name="cpf" required>
        <br>
        <label for="nome">Nome</label>
        <br>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="senha">Senha</label>
        <br>
        <input type="password" id="senha" name="senha" required>
        <br>
        <label for="setor">Setor</label>
        <br>
        <input type="text" id="setor" name="setor" required>
        <br>
        <input type="submit" value="Cadastrar">
    </form>
    
</body>
</html>