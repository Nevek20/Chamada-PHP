-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/03/2025 às 12:28
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_chamadinha`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_alunos`
--

CREATE TABLE `tb_alunos` (
  `Id` int(11) NOT NULL,
  `Alunos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_alunos`
--

INSERT INTO `tb_alunos` (`Id`, `Alunos`) VALUES
(1, 'Antônio Gabriel Santos Godoy Carneiro'),
(3, 'Daniel Camargo de Lima'),
(4, 'David Gabriel Tarley'),
(5, 'Gabriel de Oliveira Domingues Moraes'),
(7, 'Josue Orellana Montenegro'),
(8, 'Kenya Banach Chrominski Jaques'),
(9, 'Leandro Piai Barreto'),
(10, 'Marcia Gisseli Mamani Condarco'),
(11, 'Matheus Dantas de Sousa'),
(12, 'Matheus David'),
(13, 'Matheus Guida Pires'),
(14, 'Matheus Leonardo Ismarsi'),
(15, 'Ryan Lima Germano '),
(16, 'Thiago Bispo Souza'),
(18, 'Vítor Frazatto Barduco'),
(19, 'Walmir Antonio de Sousa Ribeiro');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_info_alunos`
--

CREATE TABLE `tb_info_alunos` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `telefone` varchar(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `frequente` tinyint(1) DEFAULT NULL,
  `id_alunos` int(11) DEFAULT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_info_alunos`
--

INSERT INTO `tb_info_alunos` (`id`, `telefone`, `email`, `nascimento`, `frequente`, `id_alunos`, `img`) VALUES
(1, '12950617242', 'Antonio@gmail.com', '1999-05-07', 1, 1, 'antonio.png'),
(3, '19495991393', 'Daniel@gmail.com', '2008-01-10', 1, 3, 'daniel.png'),
(4, '16109028285', 'David@gmail.com', '2000-09-08', 1, 4, 'david.png'),
(5, '14413046245', 'Gabriel@gmail.com', '2007-05-05', 0, 5, 'rias.webp'),
(7, '12632477002', 'Josue @gmail.com', '2006-01-19', 1, 7, 'josue.png'),
(8, '16773431839', 'Kenya@gmail.com', '1994-02-17', 1, 8, 'kenya.png'),
(9, '11440797994', 'Leandro@gmail.com', '2006-05-04', 1, 9, 'leandro.png'),
(10, '14073968091', 'Marcia@gmail.com', '2000-05-07', 1, 10, 'marcia.png'),
(11, '13974976536', 'MatheusDantas@gmail.com', '1980-07-06', 1, 11, 'matheus-dantas.png'),
(12, '12143616002', 'MatheusDavid@gmail.com', '2007-04-27', 1, 12, 'matheus-david.png'),
(13, '18898381341', 'MatheusGuida1@gmail.com', '2004-01-03', 1, 13, 'matheus-guida.png'),
(14, '18262215541', 'MatheusIsmarsi@gmail.com', '2007-02-22', 1, 14, 'matheus-ismarsi.png'),
(15, '12620419470', 'Ryan@gmail.com', '2008-03-02', 1, 15, 'ryan.png'),
(16, '19627729143', 'Thiago@gmail.com', '2007-03-24', 1, 16, 'thiago.png'),
(18, '13409792391', 'Vítor@gmail.com', '2005-08-22', 1, 18, 'vitor.png'),
(19, '13157565466', 'Walmir@gmail.com', '1994-04-29', 1, 19, 'walmir.png'),
(20, '19999999999', 'paulo@gmail.com', '2003-05-24', 0, 20, 'paulin.png'),
(0, 'aaaaaaaaaaa', 'aaaaaaaaaaaaaa', NULL, NULL, NULL, 'josue.png'),
(0, 'aaaaaaaaaaa', 'aaaaaaaaaaaaaa', NULL, NULL, NULL, 'josue.png'),
(0, '1111', '1111', NULL, NULL, NULL, 'kenya.png'),
(0, 'qqweqweqewq', 'qwqeeqweqq', NULL, NULL, NULL, 'leandro.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_alunos`
--
ALTER TABLE `tb_alunos`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_alunos`
--
ALTER TABLE `tb_alunos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
