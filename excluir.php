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

// Receber o id do membro como parâmetro
$id = $_GET["id"];

// Deletar o registro na tabela membros
$sql = "DELETE FROM membros WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  header("Location: HTMLs/excluido.html");
} else {
  header("Location: HTMLs/Error.html"). $conn->error;
}

// Fechar a conexão
$conn->close();
?>