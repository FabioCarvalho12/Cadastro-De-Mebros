<html>
<head>
  <link rel="stylesheet" href="CSS/style.css">
  <title>Cadastro de Membros</title>
</head>
<body>
  <h1>Cadastro de Membros</h1>
  
  <!-- Cria uma div para o formulário de cadastro -->
  
<div id="cadastro">
<form method="POST" action="cadastrar.php">

  <!-- Adiciona labels para os campos do formulário -->
  
  <p><label for="nome">Nome:</label> <input type="text" name="nome" id="nome" required></p>
  <p><label for="cpf">CPF:</label> <input type="text" name="cpf" id="cpf" required maxlength="11" pattern="\d{11}"></p>
  <p><label for="data_nascimento">Data de nascimento:</label> <input type="date" name="data_nascimento" id="data_nascimento" required></p>
  <p><label for="moto">Moto:</label> <input type="text" name="moto" id="moto" required></p>
  <p><label for="data_inicio">Data de início:</label> <input type="date" name="data_inicio" id="data_inicio" required></p>
  <p><label for="data_saida">Data de saída:</label> <input type="date" name="data_saida" id="data_saida"></p>
  <p><label for="status">Status:</label> <select name="status" id="status" required>
  <option value="ativo">Ativo</option>
  <option value="afastado">Afastado</option>
  <option value="suspenso">Suspenso</option>
  </select></p>
  <p><label for="cargo">Cargo:</label> <select name="cargo" id="cargo">
  <!-- Você pode adicionar ou remover as opções de acordo com o seu motoclube -->
  <option value="Membro">Membro</option>
  <option value="Presidente">Presidente</option>
  <option value="Vice-presidente">Vice-Presidente</option>
  <option value="Secretario">Secretário</option>
  <option value="Tesoureiro">Tesoureiro</option>
  <option value="Diretor">Diretor</option>
  <option value="Conselheiro">Conselheiro</option>
  <option value="Capitão de Estrada">Capitão de Estrada</option>
  <option value="Diretor de Diciplina">Conselheiro</option>
  
  </select></p>
  
  <div class="container">
    <form method="POST" action="cadastrar.php">
      <input type="submit" value="Cadastrar" class="botao">
    </form>
    <form action="listar.php" method="post" id="lista">
      <input type="submit" value="Membros" class="botao">
    </form>
  </div>
  
  </form> <!-- Fecha o formulário de cadastro -->

</div>

<!-- Cria uma div para o formulário de listagem -->

<
</body>
</html>