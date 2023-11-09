CREATE DATABASE motoclube;
USE motoclube;
CREATE TABLE membros (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  cpf VARCHAR(11) NOT NULL,
  data_nascimento DATE NOT NULL,
  moto VARCHAR(255) NOT NULL,
  data_inicio DATE NOT NULL,
  data_saida DATE,
  status VARCHAR(255) NOT NULL,
  cargo VARCHAR(255),
  observacoes VARCHAR(255),
  PRIMARY KEY (id)
);