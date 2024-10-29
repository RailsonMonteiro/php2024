-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/10/2024 às 21:20
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `catalogo_livros`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `codigo` int(11) NOT NULL COMMENT 'Codigo do livro.',
  `nome` varchar(200) NOT NULL COMMENT 'Nome do livro.',
  `autor` varchar(200) NOT NULL COMMENT 'Autor que escreveu o livro.',
  `editora` varchar(100) NOT NULL COMMENT 'Nome da editora que publicou o livro.',
  `ano` int(4) NOT NULL COMMENT 'Ano de publicação do livro.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`codigo`, `nome`, `autor`, `editora`, `ano`) VALUES
(25, '25', '25', '25', 2589),
(58, '58', '58', '58', 58),
(123, 'railson', 'monteiro', 'casa', 2024),
(1234, 'railson super', 'railson monteiro', 'eventada', 2024),
(1235, '', '', '', 0),
(1236, '', '', '', 0),
(1237, 'É Assim que Acaba', 'Ali Hazelwood', 'GALERA RECORD', 2589),
(1905, 'railson monteiro', 'railson monteiro', 'railson monteiro', 2025),
(190519, 'as aventuras de jack chan', 'Jack chan', 'casa publicadora brasileira', 2026);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(200) NOT NULL COMMENT 'Nome do usuario',
  `senha` varchar(100) NOT NULL COMMENT 'Senha do usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `senha`) VALUES
('railson', '$2y$10$9T2djLgpBy1tuDT/GoMVIuvVkTGqnwbN0fVZtdoXB/8ILSAwYt8ay');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`nome`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo do livro.', AUTO_INCREMENT=190520;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
