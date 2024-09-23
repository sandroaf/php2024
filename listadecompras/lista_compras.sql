-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/09/2024 às 21:20
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lista_compras`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `item`
--

CREATE TABLE `item` (
  `codigo` int(11) NOT NULL COMMENT 'Código do Item',
  `datahora` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Data e Hora que item foi incluída',
  `descricao` varchar(250) NOT NULL COMMENT 'Descrição do Item',
  `quantidade` float(12,2) NOT NULL DEFAULT 1.00 COMMENT 'Quantidade para compra do item',
  `codigo_lista` int(11) NOT NULL COMMENT 'Código da Lista que pertence o Item'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `item`
--

INSERT INTO `item` (`codigo`, `datahora`, `descricao`, `quantidade`, `codigo_lista`) VALUES
(1, '2024-09-23 17:45:09', 'Café', 1.00, 1),
(2, '2024-09-23 17:45:09', 'Filtro de Café', 1.00, 1),
(3, '2024-09-23 17:45:49', 'Detergente', 2.00, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `lista`
--

CREATE TABLE `lista` (
  `codigo` int(11) NOT NULL COMMENT 'Código de Identificação  da lista de compras',
  `nome` varchar(100) NOT NULL COMMENT 'Nome da Lista de Compras'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `lista`
--

INSERT INTO `lista` (`codigo`, `nome`) VALUES
(1, 'Casa'),
(3, 'Trabalho');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `descricao_index` (`descricao`),
  ADD KEY `codigo_lista_index` (`codigo_lista`);

--
-- Índices de tabela `lista`
--
ALTER TABLE `lista`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `nome_lista` (`nome`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `item`
--
ALTER TABLE `item`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código do Item', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `lista`
--
ALTER TABLE `lista`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código de Identificação  da lista de compras', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
