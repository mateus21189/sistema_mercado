<?php

include("conexao.php");


$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$codigo_barra = $_POST['codigo_barra'];
$categoria = $_POST['categoria'];


$verificarCodigoBarra = "SELECT * FROM tb_produtos WHERE codigo_barra ='$codigo_barra'";
$resultadoCodigoBarra = $conn->query($verificarCodigoBarra);

if($resultadoCodigoBarra->num_rows >0){
    echo "Codigo de barra cadastrado";
    die();
}


$sql = "INSERT INTO tb_produtos(nome, preco, descricao, codigo_barra, categoria)VALUES('$nome','$preco','$descricao','$codigo_barra','$categoria')";
$resultado = $conn->query($sql);

if($resultado){
    echo "produto cadastrado com sucesso";
}else{
    echo "Erro ao cadastrar Produtos";
};

$conn->close();















?>