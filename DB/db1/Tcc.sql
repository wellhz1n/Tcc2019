-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 12/06/2019 às 02:56
-- Versão do servidor: 10.1.40-MariaDB
-- Versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Tcc`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `configuracoes`
--

CREATE TABLE `configuracoes` (
  `id` int(11) NOT NULL,
  `chave` varchar(255) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  `cor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `configuracoes`
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
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Assunto` varchar(255) NOT NULL,
  `data_envio` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `contato`
--

INSERT INTO `contato` (`id`, `Nome`, `Email`, `Assunto`, `data_envio`) VALUES
(26, 'teste', 'wellingtom.h@hotmail.com', 'mdspkamd', '2019-05-24 10:36:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `produto`
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
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nivel_autoridade` tinyint(1) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_user`, `nome`, `senha`, `nivel_autoridade`, `img`) VALUES
(53, 'admin     ', '21232f297a57a5a743894a0e4a801fc3', 0, '5155657ab766319c2915414c1e524743.jpg'),
(128, 'root', '63a9f0ea7bb98050796b649e85481845', 0, '53d7d1c2665aceeb9f448eff5723f379.jpg'),
(132, 'mateus', 'e10adc3949ba59abbe56e057f20f883e', 0, NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_IDPRODUTO` (`idproduto`),
  ADD KEY `FK_IDUSUARIO` (`idusuario`);

--
-- Índices de tabela `configuracoes`
--
ALTER TABLE `configuracoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Índices de tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `configuracoes`
--
ALTER TABLE `configuracoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `FK_IDPRODUTO` FOREIGN KEY (`idproduto`) REFERENCES `produto` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_IDUSUARIO` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`id_user`) ON DELETE CASCADE;

--
-- Restrições para tabelas `configuracoes`
--
ALTER TABLE `configuracoes`
  ADD CONSTRAINT `configuracoes_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`id_user`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
