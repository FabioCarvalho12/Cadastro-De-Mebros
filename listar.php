<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="CSS/listar.css">
<title>Lista de Membros</title>
</head>
<body>
<!-- Cria uma div para o link de voltar -->
<div id="voltar">
<a href="cadastro.php">Voltar</a>
</div>

<!-- Cria uma div para a tabela -->
<div id="tabela">
    
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

// Consultar a tabela membros
$sql = "SELECT * FROM membros";
$result = $conn->query($sql);

// Exibir os dados em uma tabela HTML

echo "<h1>Lista de Membros</h1>";
echo "<table>"; // Remove o valor '1' da borda da tabela
echo "<tr>";
echo "<th>Nome</th>";
echo "<th>CPF</th>";
echo "<th>Data de nascimento</th>";
echo "<th>Moto</th>";
echo "<th>Data de início</th>";
echo "<th>Data de saída</th>";
echo "<th>Status</th>";
echo "<th>Cargo</th>";
echo "<th>Observações</th>";
echo "<th>Ações</th>";
echo "</tr>";

if ($result->num_rows > 0) {
// Exibir cada linha do resultado
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["nome"] . "</td>";
    echo "<td>" . $row["cpf"] . "</td>";
    echo "<td>" . $row["data_nascimento"] . "</td>";
    echo "<td>" . $row["moto"] . "</td>";
    echo "<td>" . $row["data_inicio"] . "</td>";
    echo "<td>" . $row["data_saida"] . "</td>";
    echo "<td>" . $row["status"] . "</td>";
    echo "<td>" . $row["cargo"] . "</td>";
    echo "<td>" . $row["observacoes"] . "</td>";
    // Criar um link para editar ou excluir o membro
    // O link deve passar o id do membro como parâmetro para um arquivo PHP chamado editar.php ou excluir.php
    echo "<td><a href='editar.php?id=" . $row["id"] . "'>Editar</a>  <a href='excluir.php?id=" . $row["id"] . "'>Excluir</a></td>";
    echo "</tr>";
    
}
} else {
// Exibir uma mensagem se não houver membros cadastrados
echo "<tr><td colspan='11'>Nenhum membro cadastrado.</td></tr>";
}

echo "</table>";



// Fechar a conexão
$conn->close();
?>
</div>
</body>
</html>