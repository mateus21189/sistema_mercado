
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Produtos disponivel</h1>
    


    <?php
        include("conexao.php");
        $sqlConsultarProdutos = "SELECT * FROM tb_produtos";
        $resultado = $conn->query($sqlConsultarProdutos);

        while($dados = $resultado->fetch_assoc()){
            $id = $dados["id"];
            $nome = $dados["nome"];
            $preco = $dados["preco"];
            $codigo_barra = $dados["codigo_barra"];
            $categoria = $dados["categoria"];
            $descricao = $dados["descricao"];

            echo "$id | $nome | $preco | $codigo_barra | $categoria | $descricao <br>";
        }




    ?>


</body>

</html>