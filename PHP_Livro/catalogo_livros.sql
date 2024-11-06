-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/11/2024 às 21:56
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
  `codigo` int(11) NOT NULL COMMENT 'codigo do livro.',
  `nome` varchar(200) NOT NULL COMMENT 'nome do livro.',
  `autor` varchar(200) NOT NULL COMMENT 'nome do autor do livro.',
  `editora` varchar(100) NOT NULL COMMENT 'nome da editora que publicou o livro.',
  `ano` int(4) NOT NULL COMMENT 'ano em que o livro foi publicado.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`codigo`, `nome`, `autor`, `editora`, `ano`) VALUES
(258, 'as aventuras de jack chan 2', 'monteiro', 'casa', 2024),
(495, 'A princesa e o sapo', 'historia', 'replica', 1593);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(200) NOT NULL COMMENT 'nome do usuario',
  `senha` varchar(200) NOT NULL COMMENT 'senha criptografada.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `senha`) VALUES
('railson.monteiro', '$2y$10$cwvTJ/I1SuQPfiQFCHlT5OsfzFdzDyaepFzdiUUNthhwEfFQGvM5a');

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
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'codigo do livro.', AUTO_INCREMENT=4880;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
