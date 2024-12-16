-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Set-2024 às 20:49
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

DROP TABLE IF EXISTS `tb_clientes`;
CREATE TABLE IF NOT EXISTS `tb_clientes` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`codigo`, `nome`, `email`, `senha`, `foto`) VALUES
(38, 'pedro', '', '$2y$10$8/BUfZyixx.Dw/Q0..VJ6Oi', 'fotos/62706879415b87df0cfc7446fd052511.jpg'),
(39, 'pedro', 'pedro@gmail.com', '$2y$10$S7oahCz5YtYHx4ZNNucQGuN', 'fotos/03c423be95739240335e1d8694713dfb.jpg'),
(40, 'a', 'a', '$2y$10$OQpJuONUG7qNjykD/HexgOg', 'fotos/bb102ee508b6233739221224c0f8fb0f.jpg'),
(41, 'pedro', 'a', 'a', 'fotos/88a4d1211ba0f420ec3e83cdc0c6d722.jpg'),
(42, 'b', 'b', 'b', 'fotos/187510abfeaae26d9fe4fd37752ee032.jpg'),
(43, '', '', '$2y$10$vVEpoyE2LshtjTs2EmVlOe2', 'fotos/18efd5caac49a844a56ac210faca3856.jpg'),
(44, 'pedro', 'pedro', '$2y$10$aclSzJ1imkxH5xE4EAKAvuT', 'fotos/891545fdd8f0b67f2495e285e53e47b5.jpg'),
(45, 'henry', 'henry', '$2y$10$kdxFHL3Ohuuja57GzsMjqOt', 'fotos/56073d118b8ff3901fa26f936d2d58e9.jpg'),
(46, 'teste', 'teste', '$2y$10$5d9c93qx5c9xThYpq.ZLQ.OBRyv7Q74/LpZYiT9RA7Gy3i1jN0BE.', 'fotos/bb34de8a4ee102d570f75980c30bc9b7.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
