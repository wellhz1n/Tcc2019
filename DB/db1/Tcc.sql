-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 22-Maio-2019 às 00:56
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Assunto` varchar(255) NOT NULL,
  `data_envio` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `Nome`, `Email`, `Assunto`, `data_envio`) VALUES
(23, 'Wellington Hellstrom', 'wellingtom1234520@gmail.com', 'dad', '2019-05-06 12:27:00'),
(24, 'hj', 'wellingtom1234520@gmail.com', 'hknjk', '2019-05-07 10:20:00'),
(25, 'vbhjv ', 'wellingtom1234520@gmail.com', 'vjvmv', '2019-05-10 14:22:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `descricao`, `img`, `valor`) VALUES
(17, 'Corpo Humano', 'Unico no estoque', '7a788c4124db4d124101d319ad11d871.png', 400000000),
(20, 'teste maior', 'haahh', '92a4407985ea3bb4674bc3f775266736.png', 222),
(21, 'html', 'html', '7ba48cb9115c44c8559e2285bb2b9a56.png', 20220),
(22, 'Exel', 'exel', '2f7886405515a124841f1e93a821ce87.png', 20),
(23, 'PowerPoint', 'vai que da bom', '5207bb17819e8b0a0d2fa3c9732c33d0.png', 1200),
(24, 'Google Chrome', 'Pesquisa ae ', '54b5d7a365616d4ad9066bba888b44d1.png', 200);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nivel_autoridade` tinyint(1) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_user`, `nome`, `senha`, `nivel_autoridade`, `img`) VALUES
(53, 'admin     ', '21232f297a57a5a743894a0e4a801fc3', 0, 'ce9a43020c56d0c69577a829b97dd4c4.png'),
(54, 'wellington ', 'dcbacadf485c141a2b9b0028f2c0b2e1', 0, NULL),
(68, 'root', '63a9f0ea7bb98050796b649e85481845', 0, NULL),
(70, 'Igor    ', 'dd97813dd40be87559aaefed642c3fbb', 1, 'f7e17470d5a2c60e8dadc54467e56117.jpg'),
(73, 'marquinhos', '202cb962ac59075b964b07152d234b70', 1, 'd0ce7660ac458876cce114a5d600f8cc.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
