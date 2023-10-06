-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Set-2023 às 01:29
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cleanday`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb01usuarios`
--

CREATE TABLE `tb01usuarios` (
  `tb01id` int(11) NOT NULL,
  `tb01nome` varchar(255) NOT NULL,
  `tb01sobrenome` varchar(255) DEFAULT NULL,
  `tb01dtNasc` date NOT NULL,
  `tb01email` varchar(255) NOT NULL,
  `tb01senha` varchar(255) NOT NULL,
  `tb01cep` varchar(20) DEFAULT NULL,
  `tb01telefone` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb02endereco`
--

CREATE TABLE `tb02endereco` (
  `tb02id` int(11) NOT NULL,
  `tb02regiao` varchar(255) DEFAULT NULL,
  `tb02bairro` varchar(255) DEFAULT NULL,
  `tb02rua` varchar(255) DEFAULT NULL,
  `tb02numero` int(11) DEFAULT NULL,
  `tb02id_usuario` int(11) DEFAULT NULL,
  `tb02id_unidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb03material`
--

CREATE TABLE `tb03material` (
  `tb03id` int(11) NOT NULL,
  `tb03nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb04unidades`
--

CREATE TABLE `tb04unidades` (
  `tb04id` int(11) NOT NULL,
  `tb04nome` varchar(255) NOT NULL,
  `tb04horarioFunc` varchar(255) DEFAULT NULL,
  `tb04comentario` text DEFAULT NULL,
  `tb04email` varchar(255) DEFAULT NULL,
  `tb04tel` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb05materiais_unidade`
--

CREATE TABLE `tb05materiais_unidade` (
  `tb05id` int(11) NOT NULL,
  `tb05id_unidade` int(11) NOT NULL,
  `tb05id_material` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb01usuarios`
--
ALTER TABLE `tb01usuarios`
  ADD PRIMARY KEY (`tb01id`);

--
-- Índices para tabela `tb02endereco`
--
ALTER TABLE `tb02endereco`
  ADD PRIMARY KEY (`tb02id`),
  ADD KEY `tb02id_usuario` (`tb02id_usuario`),
  ADD KEY `tb02id_unidade` (`tb02id_unidade`);

--
-- Índices para tabela `tb03material`
--
ALTER TABLE `tb03material`
  ADD PRIMARY KEY (`tb03id`);

--
-- Índices para tabela `tb04unidades`
--
ALTER TABLE `tb04unidades`
  ADD PRIMARY KEY (`tb04id`);

--
-- Índices para tabela `tb05materiais_unidade`
--
ALTER TABLE `tb05materiais_unidade`
  ADD PRIMARY KEY (`tb05id`),
  ADD KEY `tb05id_material` (`tb05id_material`),
  ADD KEY `tb05id_unidade` (`tb05id_unidade`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb01usuarios`
--
ALTER TABLE `tb01usuarios`
  MODIFY `tb01id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb02endereco`
--
ALTER TABLE `tb02endereco`
  MODIFY `tb02id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb03material`
--
ALTER TABLE `tb03material`
  MODIFY `tb03id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb04unidades`
--
ALTER TABLE `tb04unidades`
  MODIFY `tb04id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb05materiais_unidade`
--
ALTER TABLE `tb05materiais_unidade`
  MODIFY `tb05id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb02endereco`
--
ALTER TABLE `tb02endereco`
  ADD CONSTRAINT `tb02id_unidade` FOREIGN KEY (`tb02id_unidade`) REFERENCES `tb04unidades` (`tb04id`),
  ADD CONSTRAINT `tb02id_usuario` FOREIGN KEY (`tb02id_usuario`) REFERENCES `tb01usuarios` (`tb01id`);

--
-- Limitadores para a tabela `tb05materiais_unidade`
--
ALTER TABLE `tb05materiais_unidade`
  ADD CONSTRAINT `tb05id_material` FOREIGN KEY (`tb05id_material`) REFERENCES `tb03material` (`tb03id`),
  ADD CONSTRAINT `tb05id_unidade` FOREIGN KEY (`tb05id_unidade`) REFERENCES `tb04unidades` (`tb04id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
