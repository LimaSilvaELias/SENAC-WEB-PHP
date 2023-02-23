-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Fev-2023 às 20:47
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
-- Banco de dados: `corretora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `associado`
--

CREATE TABLE `associado` (
  `FK_E3_OCORRENCIAS_nr` int(3) DEFAULT NULL,
  `FK_E2_AUTOMOVEL_renavam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `e1_clientes`
--

CREATE TABLE `e1_clientes` (
  `codigo` int(3) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `cpf` bigint(11) DEFAULT NULL,
  `rg` bigint(10) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `FK_endereco_endereco_PK` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `e2_automovel`
--

CREATE TABLE `e2_automovel` (
  `renavam` bigint(11) NOT NULL,
  `placa` varchar(10) DEFAULT NULL,
  `fabricante` varchar(20) DEFAULT NULL,
  `ano` int(4) DEFAULT NULL,
  `modelo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `e3_ocorrencias`
--

CREATE TABLE `e3_ocorrencias` (
  `nr` int(3) NOT NULL,
  `data` date DEFAULT NULL,
  `local` varchar(20) DEFAULT NULL,
  `descricao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `e3_ocorrencias`
--

INSERT INTO `e3_ocorrencias` (`nr`, `data`, `local`, `descricao`) VALUES
(1, '2023-02-08', 'Gama', 'Foi fazer drift e se lascou');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `endereco_PK` int(2) NOT NULL,
  `logradouro` varchar(50) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`endereco_PK`, `logradouro`, `bairro`, `uf`, `cidade`) VALUES
(1, 'rua 03', 'Alvorada', 'go', 'novo gama');

-- --------------------------------------------------------

--
-- Estrutura da tabela `possui`
--

CREATE TABLE `possui` (
  `FK_E1_CLIENTES_codigo` int(3) DEFAULT NULL,
  `FK_E2_AUTOMOVEL_renavam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `e1_clientes`
--
ALTER TABLE `e1_clientes`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `e2_automovel`
--
ALTER TABLE `e2_automovel`
  ADD PRIMARY KEY (`renavam`);

--
-- Índices para tabela `e3_ocorrencias`
--
ALTER TABLE `e3_ocorrencias`
  ADD PRIMARY KEY (`nr`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`endereco_PK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
