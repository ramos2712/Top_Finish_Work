-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 10-Nov-2023 às 12:13
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `restaurante`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bebidas`
--

DROP TABLE IF EXISTS `bebidas`;
CREATE TABLE IF NOT EXISTS `bebidas` (
  `id_bebida` int NOT NULL AUTO_INCREMENT,
  `nome_bebida` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `litro_bebida` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `valor_bebida` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_bebida`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pratos_principais`
--

DROP TABLE IF EXISTS `pratos_principais`;
CREATE TABLE IF NOT EXISTS `pratos_principais` (
  `id_prato` int NOT NULL AUTO_INCREMENT,
  `nome_prato` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `categoria_prato` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `valor_prato` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_prato`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobremesas`
--

DROP TABLE IF EXISTS `sobremesas`;
CREATE TABLE IF NOT EXISTS `sobremesas` (
  `id_sobremesa` int NOT NULL AUTO_INCREMENT,
  `nome_sobremesa` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tipo_sobremesa` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `valor_sobremesa` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_sobremesa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
