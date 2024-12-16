-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Set-2024 às 17:16
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_clientes`
--
CREATE DATABASE IF NOT EXISTS `bd_clientes` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bd_clientes`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

DROP TABLE IF EXISTS `tb_clientes`;
CREATE TABLE IF NOT EXISTS `tb_clientes` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`codigo`, `nome`, `email`, `foto`) VALUES
(1, 'Matheus', 'matheus_otario@gmail.com', '11 99999-9999'),
(2, 'Vinícius', 'vinicius_tempo@gmail.com', '11 98989-9898'),
(4, 'Auricio', 'aurislisboa@gmail.com', '11 94231-7890'),
(34, 'Pedro', 'pedro@gmail.com', 'fotos/27ca9743efb108acbf99c825d38e9b14.jpg'),
(37, 'Pedro', 'pedro@gmail.com', 'fotos/0bd7aa614b0e007aa843281476084659.jpg');
--
-- Banco de dados: `teste`
--
CREATE DATABASE IF NOT EXISTS `teste` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `teste`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

DROP TABLE IF EXISTS `departamento`;
CREATE TABLE IF NOT EXISTS `departamento` (
  `cod_dep` int NOT NULL AUTO_INCREMENT,
  `descr` varchar(40) NOT NULL,
  `localiz` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_dep`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
