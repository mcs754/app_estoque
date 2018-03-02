CREATE DATABASE db_estoque;
USE db_estoque;
CREATE TABLE produtos(
  id          INT           NOT NULL AUTO_INCREMENT,
  descricao   VARCHAR(200)  NOT NULL,
  quantidade  DECIMAL(10,2) NOT NULL,
  valor       DECIMAL(10,2),
  validade    DATE,
  PRIMARY KEY (id)
);
CREATE TABLE usuarios(
  id    INT           NOT NULL  AUTO_INCREMENT,
  email VARCHAR(200)  NOT NULL,
  senha VARCHAR(200)  NOT NULL,
  PRIMARY KEY (id)
);
insert into usuarios (email, senha) values('admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');