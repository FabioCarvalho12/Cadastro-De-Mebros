<link rel="stylesheet" href="css/editar.css">

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

// Consultar a tabela membros para obter os dados do membro
$sql = "SELECT * FROM membros WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Obter a linha do resultado
  $row = $result->fetch_assoc();

  // Exibir um formulário com os dados preenchidos
  echo "<div id='cadastro'>";
  echo "<h1>Editar de Membros</h1>";
  echo "<form method='POST' action='atualizar.php'>";
  echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
  echo "<p><label for='nome'>Nome:</label> <input type='text' id='nome' name='nome' value='" . $row["nome"] . "' required></p>";
  echo "<p><label for='cpf'>CPF:</label> <input type='text' id='cpf' name='cpf' value='" . $row["cpf"] . "' required maxlength='11' pattern='\d{11}'></p>";
  echo "<p><label for='data_nascimento'>Data de nascimento:</label> <input type='date' id='data_nascimento' name='data_nascimento' value='" . $row["data_nascimento"] . "' required></p>";
  echo "<p><label for='moto'>Moto:</label> <input type='text' id='moto' name='moto' value='" . $row["moto"] . "' required></p>";
  echo "<p><label for='data_inicio'>Data de início:</label> <input type='date' id='data_inicio' name='data_inicio' value='" . $row["data_inicio"] . "' required></p>";
  echo "<p><label for='data_saida'>Data de saída:</label> <input type='date' id='data_saida' name='data_saida' value='" . $row["data_saida"] . "'></p>";
  echo "<p><label for='status'>Status:</label> <select id='status' name='status' required>";
  if ($row["status"] == "ativo") {
    echo "<option value='ativo' selected>Ativo</option>";
    echo "<option value='afastado'>Afastado</option>";
    echo "<option value='suspenso'>Suspenso</option>";
  } else if ($row["status"] == "afastado") {
    echo "<option value='Ativo'>Ativo</option>";
    echo "<option value='Afastado' selected>Afastado</option>";
    echo "<option value='Suspenso'>Suspenso</option>";
  } else {
    echo "<option value='ativo'>Ativo</option>";
    echo "<option value='afastado'>Afastado</option>";
    echo "<option value='suspenso' selected>Suspenso</option>";
  }
  echo "</select></p>";
  echo "<p><label for='cargo'>Cargo:</label> <input type='text' id='cargo' name='cargo' value='" . $row["cargo"] . "'></p>";
  echo "<p><label for='observacoes'>Observações:</label> <input type='text' id='observacoes' name='observacoes' value='" . $row["observacoes"] . "'></p>";
  echo "<p><input type='submit' value='Atualizar'> <a href='listar.php' id='voltar'>Voltar</a> </p>";
  echo "</form>";
  echo "</div>"; // Final da div container
  echo "</body>";
  echo "</html>"; 
  
} else {
  // Exibir uma mensagem se não houver um membro com o id informado
  echo "Membro não encontrado.";
}

// Fechar a conexão
$conn->close();
?>
</body>
</html>