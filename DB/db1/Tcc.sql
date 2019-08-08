-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 08-Ago-2019 às 01:27
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
-- Estrutura da tabela `carrinho`
--

DROP TABLE IF EXISTS `carrinho`;
CREATE TABLE IF NOT EXISTS `carrinho` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idproduto` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_IDPRODUTO` (`idproduto`),
  KEY `FK_IDUSUARIO` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartao`
--

DROP TABLE IF EXISTS `cartao`;
CREATE TABLE IF NOT EXISTS `cartao` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Numero` varchar(255) NOT NULL,
  `Tipo` int(11) DEFAULT NULL,
  `validade` varchar(255) DEFAULT NULL,
  `Codigo` varchar(255) DEFAULT NULL,
  `Id_Usuario` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_Usuario` (`Id_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cartao`
--

INSERT INTO `cartao` (`Id`, `Numero`, `Tipo`, `validade`, `Codigo`, `Id_Usuario`) VALUES
(1, '123456', 0, '22/55', '123', 132);

-- --------------------------------------------------------

--
-- Estrutura da tabela `carteira`
--

DROP TABLE IF EXISTS `carteira`;
CREATE TABLE IF NOT EXISTS `carteira` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dinheiro` decimal(10,0) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comprado`
--

DROP TABLE IF EXISTS `comprado`;
CREATE TABLE IF NOT EXISTS `comprado` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Usuario` int(11) NOT NULL,
  `Id_Produto` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_Usuario` (`Id_Usuario`),
  KEY `Id_Produto` (`Id_Produto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `configuracoes`
--

DROP TABLE IF EXISTS `configuracoes`;
CREATE TABLE IF NOT EXISTS `configuracoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chave` varchar(255) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  `cor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idusuario` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `configuracoes`
--

INSERT INTO `configuracoes` (`id`, `chave`, `idusuario`, `ativo`, `cor`) VALUES
(1, 'MUDARCORSITE', 53, 1, '#067edb'),
(3, 'DESABILITACONTATO', 53, 1, NULL),
(17, 'DESABILITACONTATO', 128, 1, NULL),
(18, 'MUDARCORSITE', 128, 1, '#3300e5'),
(23, 'DESABILITACONTATO', 132, 0, NULL),
(24, 'MUDARCORSITE', 132, 1, '#0e0033');

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `Nome`, `Email`, `Assunto`, `data_envio`) VALUES
(26, 'teste', 'wellingtom.h@hotmail.com', 'mdspkamd', '2019-05-24 10:36:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `descricao`, `img`, `valor`) VALUES
(17, 'Corpo Humano', 'Unico no estoque', '7a788c4124db4d124101d319ad11d871.png', 400000000),
(28, 'Google Chrome', 'Navegador Web Melhor que o EDGE', '846bae3605115753dbd04e7623625007.png', 100),
(29, 'Html', 'Curso basico de html ', 'a64fece50d6cd256487bf3c7d2ac7b04.png', 0),
(30, 'Css', 'Curso de Css basico.', 'be2ccf37c5fe0ac7a37735df430497e3.png', 0),
(31, 'PHP -Basico', 'Curso de PHP', '7d3f92715577bdc3f034b068172aca47.png', 0),
(32, 'a', 'a', 'b1a1a50d9988c78e3a5364e13018b16b.png', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_cartao`
--

DROP TABLE IF EXISTS `tipo_cartao`;
CREATE TABLE IF NOT EXISTS `tipo_cartao` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` int(1) NOT NULL,
  `Descricao` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_cartao`
--

INSERT INTO `tipo_cartao` (`Id`, `Tipo`, `Descricao`) VALUES
(1, 0, 'Visa'),
(2, 1, 'MasterCard'),
(3, 2, 'Elo');

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
  `email` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_user`, `nome`, `senha`, `nivel_autoridade`, `img`, `email`, `cpf`) VALUES
(53, 'admin     ', '21232f297a57a5a743894a0e4a801fc3', 0, '97c9f09bc9b0f7c1a8ce59a6dc4359af.png', '', ''),
(128, 'root', '63a9f0ea7bb98050796b649e85481845', 0, '53d7d1c2665aceeb9f448eff5723f379.jpg', '', ''),
(132, 'mateus', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL, '', '');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `FK_IDPRODUTO` FOREIGN KEY (`idproduto`) REFERENCES `produto` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_IDUSUARIO` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`id_user`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `cartao`
--
ALTER TABLE `cartao`
  ADD CONSTRAINT `cartao_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuario` (`id_user`);

--
-- Limitadores para a tabela `carteira`
--
ALTER TABLE `carteira`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id_user`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `comprado`
--
ALTER TABLE `comprado`
  ADD CONSTRAINT `comprado_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuario` (`id_user`),
  ADD CONSTRAINT `comprado_ibfk_2` FOREIGN KEY (`Id_Produto`) REFERENCES `produto` (`id`);

--
-- Limitadores para a tabela `configuracoes`
--
ALTER TABLE `configuracoes`
  ADD CONSTRAINT `configuracoes_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`id_user`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
