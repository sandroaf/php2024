-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/10/2024 às 21:56
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
  `codigo_lista` int(11) NOT NULL COMMENT 'Código da Lista que pertence o Item',
  `usuario_nome` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `item`
--

INSERT INTO `item` (`codigo`, `datahora`, `descricao`, `quantidade`, `codigo_lista`, `usuario_nome`) VALUES
(1, '2024-09-23 17:45:09', 'Café', 1.00, 1, 'sandro'),
(2, '2024-09-23 17:45:09', 'Filtro de Café', 1.00, 1, 'sandro'),
(11, '2024-10-07 19:10:10', 'Refrigerante', 2.00, 1, 'sandro'),
(12, '2024-10-07 19:10:21', 'Queijo prato', 1.00, 1, 'sandro'),
(19, '2024-10-21 17:25:14', 'Camisa', 2.00, 17, 'sandro'),
(20, '2024-10-21 18:12:09', 'Calças', 1.00, 17, 'sandro'),
(21, '2024-10-22 18:14:05', 'arroz', 1.00, 21, 'marcelo'),
(22, '2024-10-22 18:27:29', 'Saco de Luxo', 1.00, 23, 'marcelo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `lista`
--

CREATE TABLE `lista` (
  `codigo` int(11) NOT NULL COMMENT 'Código de Identificação  da lista de compras',
  `nome` varchar(100) NOT NULL COMMENT 'Nome da Lista de Compras',
  `usuario_nome` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `lista`
--

INSERT INTO `lista` (`codigo`, `nome`, `usuario_nome`) VALUES
(1, 'Compras de Casa ', 'sandro'),
(17, 'viagem trabalho', 'sandro'),
(21, 'Casa', 'marcelo'),
(23, 'Trabalho', 'marcelo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(40) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `senha`) VALUES
('marcelo', '$2y$10$8LeP3h4CfQRpzdfPFtL78ubx6/lH.Cw2D6fjXjA6ZVB9nfFswIt4C'),
('sandro', '$2y$10$4UVRXvCAJ5bsVZdvp2//F.Z4keLNC3o/KBsl2oxn0D9OS8aYuoynW');

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
  ADD KEY `nome_lista` (`nome`) USING BTREE;

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`nome`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `item`
--
ALTER TABLE `item`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código do Item', AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `lista`
--
ALTER TABLE `lista`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código de Identificação  da lista de compras', AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
