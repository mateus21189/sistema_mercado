<?php

require_once "conexao.php";

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM tb_funcionario WHERE cpf_funcionario ='$cpf' AND senha ='$senha'";

$result = $conn->query($sql);

if (!$result) {
    die("Erro na consulta: " . $conn->error);
}

if($result->num_rows>0){
    header("Location: tl1.php");
}else{
    header("Location: index.php");

}

$conn->close();





?>