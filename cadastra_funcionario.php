<?php

include("conexao.php");

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$setor = $_POST['setor'];


$verificaCPF = "SELECT * FROM tb_funcionario WHERE cpf_funcionario ='$cpf'";
$resultCPF = $conn->query($verificaCPF);

if ($resultCPF->num_rows > 0) {
    echo "CPF já cadastrado. Escolha outro.";
    die();
}


$sql = "INSERT INTO tb_funcionario (cpf_funcionario, nome_funcionario, senha, setor) VALUES ('$cpf', '$nome', '$senha', '$setor')";
$result = $conn->query($sql);




if ($result) {
    echo "Funcionario cadastrado com sucesso!";
    echo "<a href='index.php'>Fazer Login</a>";
    
} else {
    echo "Erro ao cadastrar funcionário: " . $conn->error;
};

$conn->close();



?>