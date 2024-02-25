<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            justify-content: center;
            background-color: blueviolet;
        }
        form{
            
            margin:auto;
            width: 70px;
            justify-content: center;
            flex-direction: column;
        }
        a{
            color:black;
            display:flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <form action="verificacaoLogin.php" method="post">
        <label for="cpf">CPF</label>
        <br>
        <input type="text" id="cpf" name="cpf" required>
        <br>
        <label for="senha">SENHA</label>
        <br>
        <input type="password" id="senha" name="senha" required>
        <br>
        <input type="submit" value="login">
    </form>
    <a href="tela_cadastro_funcio.php">Fazer cadastro</a>
    
</body>
</html>