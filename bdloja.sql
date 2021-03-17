 -- phpMyAdmin SQL Dump
-- version 2.11.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Abr 05, 2018 as 09:37 PM
-- Versão do Servidor: 5.7.21
-- Versão do PHP: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Banco de Dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

create database loja;

show databases;

use loja;

CREATE TABLE produtos (
  idProduto int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(250) NOT NULL,
  preco decimal(8,2) NOT NULL,
  qtde int(11) NOT NULL,
  imagem varchar(200) NOT NULL,
  categoria varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idProduto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

CREATE TABLE usuario (
  idusuario int(11) NOT NULL AUTO_INCREMENT,
  nomec varchar(250) NOT NULL,
  email varchar(250) NOT NULL,
  senha varchar(250) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

CREATE TABLE cliente (
  idcliente int(11) NOT NULL AUTO_INCREMENT,
  nomeco varchar(250) NOT NULL,
  email1 varchar(250) NOT NULL,
  senha1 varchar(250) NOT NULL,
  cep int(9)NOT NULL,
  rua varchar(250)NOT NULL,
  numero varchar(100)NOT NULL,
  complemento varchar(250)NOT NULL,
  bairro varchar(250)NOT NULL,
  estado varchar(3)NOT NULL,
  cidade varchar(200)NOT NULL,
   PRIMARY KEY (`idcliente`) 
   ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

CREATE TABLE pedido (
  idpedido int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(250) NOT NULL,
  preco decimal(8,2) NOT NULL,
  qtde int(11) NOT NULL,
  imagem varchar(200) NOT NULL,
  categoria varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idpedido`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

   

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO produtos (`idProduto`, `nome`, `preco`, `qtde`, `imagem`, `categoria`) VALUES
(2, 'mouse', '15.50', 500, '', 'InformÃ¡tica'),
(3, 'lapis', '4.00', 2, 'teste', 'livros'),
(5, 'Caderno', '10.00', 10, '', 'Livros');
