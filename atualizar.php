<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "motoclube";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Erro na conexão: " . $conn->connect_error);
}

// Receber os dados do formulário de edição
$id = $_POST["id"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$data_nascimento = $_POST["data_nascimento"];
$moto = $_POST["moto"];
$data_inicio = $_POST["data_inicio"];
$data_saida = $_POST["data_saida"];
$status = $_POST["status"];
$cargo = $_POST["cargo"];
$observacoes = $_POST["observacoes"];

// Atualizar o registro na tabela membros
$sql = "UPDATE membros SET nome = '$nome', cpf = '$cpf', data_nascimento = '$data_nascimento', moto = '$moto', data_inicio = '$data_inicio', data_saida = '$data_saida', status = '$status', cargo = '$cargo', observacoes = '$observacoes' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  header("Location: HTMLs/atualizado.html");
} else {
  header("Location: HTMLs/Erro.html"). $conn->error;
}

// Fechar a conexão
$conn->close();
?>