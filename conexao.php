<?php
$maquina = "localhost";
$usuario = "root";
$senha = "root";
$banco_de_dados = "bd_mercado_du_valle";

$conn = new mysqli($maquina, $usuario, $senha, $banco_de_dados);

$conn->set_charset("utf8");
if($conn->connect_error){
    echo "Falha ao conectar com o banco de dados";
};


/*Codigo Funcionando Nessa Porra */

?>

