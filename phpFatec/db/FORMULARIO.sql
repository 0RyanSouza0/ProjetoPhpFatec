CREATE DATABASE FORMULARIO;

USE FORMULARIO;

CREATE TABLE USER(
 id BIGINT PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR (50) NOT NULL,
 email VARCHAR(150) NOT NULL,
 telefone VARCHAR (20) NOT NULL,
 data_nascimento DATE NOT NULL,
 genero VARCHAR (30),	
 tipo_evento_inscricao VARCHAR(50),
 descricao_evento VARCHAR(200)

 
);

SELECT*FROM USER;

