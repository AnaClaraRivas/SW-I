-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/08/2025 às 17:18
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
-- Banco de dados: `estoquelivros`
--
CREATE DATABASE IF NOT EXISTS `estoquelivros` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `estoquelivros`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro`
--

CREATE TABLE `livro` (
  `codlivro` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `ano` int(11) NOT NULL,
  `paginas` int(11) NOT NULL,
  `autor` varchar(60) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `sinopse` text NOT NULL,
  `editora` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livro`
--

INSERT INTO `livro` (`codlivro`, `titulo`, `genero`, `ano`, `paginas`, `autor`, `preco`, `sinopse`, `editora`) VALUES
(1, 'O Amor Não É Óbvio', 'Romance', 2019, 392, 'Elayne Baeta', 47.03, 'Em \"O Amor Não É Óbvio\", Íris, uma adolescente obcecada por novelas, se vê em meio a descobertas sobre sua própria vida ao 		      investigar o término de seu crush, Cadu, com Édra, descobrindo que o amor pode ser surpreendente e não segue um caminho óbvio', 'Galera Record'),
(4, 'Oxe Baby', 'Poesia', 2021, 181, 'Elayne Baeta', 29.90, 'Conjunto de poemas da escritora Elayne Baeta', 'Galera Record'),
(5, 'Coisas Óbvias Sobre o Amor', 'Romance', 2024, 616, 'Elayne Baeta', 49.90, '\'Coisas Óbvias Sobre o Amor\' é o segundo livro da duologia \'Laranja-Forte\', escrito por Elayne Baeta.', 'Galera Record');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`codlivro`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `codlivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
