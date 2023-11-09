<link rel="stylesheet" href="../CSS/listar.css">
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

// Receber os dados do formulário
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$data_nascimento = $_POST["data_nascimento"];
$moto = $_POST["moto"];
$data_inicio = $_POST["data_inicio"];
$data_saida = $_POST["data_saida"];
$status = $_POST["status"];
$cargo = $_POST["cargo"];
$observacoes = $_POST["observacoes"];

// Inserir os dados na tabela membros
$sql = "INSERT INTO membros (nome, cpf, data_nascimento, moto, data_inicio, data_saida, status, cargo, observacoes) VALUES ('$nome', '$cpf', '$data_nascimento', '$moto', '$data_inicio', '$data_saida', '$status', '$cargo', '$observacoes')";

if ($conn->query($sql) === TRUE) {
  header("Location: HTMLs/cadastrado.html");
} else {
  header("Location: HTMLs/Erro.html");
}

// Fechar a conexão
$conn->close();
?>