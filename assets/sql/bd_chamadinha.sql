-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/03/2025 às 12:28
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"; -- configura o SQL_MODE para permitir AUTO_INCREMENT
START TRANSACTION;
SET time_zone = "+00:00"; -- iicia uma transação SQL


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

CREATE TABLE `tb_alunos` ( --cria a tabela
  `Id` int(11) NOT NULL, -- cria o id automatico dos alunos
  `Alunos` varchar(255) NOT NULL -- cria o nome
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci; -- usa InnoDB como mecanismo de armazenamento e utf8mb4 como charset

--
-- Despejando dados para a tabela `tb_alunos`
--

INSERT INTO `tb_alunos` (`Id`, `Alunos`) VALUES -- insere as informações na tabela
(1, 'Antônio Gabriel Santos Godoy Carneiro'), -- nome 1
(3, 'Daniel Camargo de Lima'), -- nome 2
(4, 'David Gabriel Tarley'), -- nome 3
(5, 'Gabriel de Oliveira Domingues Moraes'), -- nome 4
(7, 'Josue Orellana Montenegro'), -- nome 5
(8, 'Kenya Banach Chrominski Jaques'), -- nome 6
(9, 'Leandro Piai Barreto'), -- nome 7
(10, 'Marcia Gisseli Mamani Condarco'), -- nome 8
(11, 'Matheus Dantas de Sousa'), -- nome 9
(12, 'Matheus David'), -- nome 10
(13, 'Matheus Guida Pires'), -- nome 11
(14, 'Matheus Leonardo Ismarsi'), -- nome 12
(15, 'Ryan Lima Germano '), -- nome 13
(16, 'Thiago Bispo Souza'), -- nome 14
(18, 'Vítor Frazatto Barduco'), -- nome 15
(19, 'Walmir Antonio de Sousa Ribeiro'); -- nome 16

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_info_alunos`
--

CREATE TABLE `tb_info_alunos` ( -- cria a tabela das informações dos alunos
  `id` int(11) NOT NULL COMMENT 'Primary Key', -- cria o id
  `telefone` varchar(11) DEFAULT NULL, -- o telefone
  `email` varchar(255) DEFAULT NULL, -- o email
  `nascimento` date DEFAULT NULL, -- a data de nascimento
  `frequente` tinyint(1) DEFAULT NULL, -- a frequencia
  `id_alunos` int(11) DEFAULT NULL, -- o id dos alunos
  `img` varchar(255) NOT NULL -- a imagem
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci; -- usa InnoDB como mecanismo de armazenamento e utf8mb4 como charset


--
-- Despejando dados para a tabela `tb_info_alunos`
--

INSERT INTO `tb_info_alunos` (`id`, `telefone`, `email`, `nascimento`, `frequente`, `id_alunos`, `img`) VALUES -- aqui adiciona as informações na tabela
(1, '12950617242', 'Antonio@gmail.com', '1999-05-07', 1, 1, 'antonio.png'), -- info 1
(3, '19495991393', 'Daniel@gmail.com', '2008-01-10', 1, 3, 'daniel.png'), -- info 2
(4, '16109028285', 'David@gmail.com', '2000-09-08', 1, 4, 'david.png'), -- info 3
(5, '14413046245', 'Gabriel@gmail.com', '2007-05-05', 0, 5, 'rias.webp'), -- info 4
(7, '12632477002', 'Josue @gmail.com', '2006-01-19', 1, 7, 'josue.png'), -- info 5
(8, '16773431839', 'Kenya@gmail.com', '1994-02-17', 1, 8, 'kenya.png'), -- info 6
(9, '11440797994', 'Leandro@gmail.com', '2006-05-04', 1, 9, 'leandro.png'), -- info 7
(10, '14073968091', 'Marcia@gmail.com', '2000-05-07', 1, 10, 'marcia.png'), -- info 8
(11, '13974976536', 'MatheusDantas@gmail.com', '1980-07-06', 1, 11, 'matheus-dantas.png'), -- info 9
(12, '12143616002', 'MatheusDavid@gmail.com', '2007-04-27', 1, 12, 'matheus-david.png'), -- info 10
(13, '18898381341', 'MatheusGuida1@gmail.com', '2004-01-03', 1, 13, 'matheus-guida.png'), -- info 11
(14, '18262215541', 'MatheusIsmarsi@gmail.com', '2007-02-22', 1, 14, 'matheus-ismarsi.png'), -- info 12
(15, '12620419470', 'Ryan@gmail.com', '2008-03-02', 1, 15, 'ryan.png'), -- info 13
(16, '19627729143', 'Thiago@gmail.com', '2007-03-24', 1, 16, 'thiago.png'), -- info 14
(18, '13409792391', 'Vítor@gmail.com', '2005-08-22', 1, 18, 'vitor.png'), -- info 15
(19, '13157565466', 'Walmir@gmail.com', '1994-04-29', 1, 19, 'walmir.png'), -- info 16
(20, '19999999999', 'paulo@gmail.com', '2003-05-24', 0, 20, 'paulin.png'), -- info 17
(0, 'aaaaaaaaaaa', 'aaaaaaaaaaaaaa', NULL, NULL, NULL, 'josue.png'), -- info 18
(0, 'aaaaaaaaaaa', 'aaaaaaaaaaaaaa', NULL, NULL, NULL, 'josue.png'), -- info 19
(0, '1111', '1111', NULL, NULL, NULL, 'kenya.png'), -- info 20
(0, 'qqweqweqewq', 'qwqeeqweqq', NULL, NULL, NULL, 'leandro.png'); -- info 21

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_alunos`
--
ALTER TABLE `tb_alunos` -- define  o Id como a chave primária da tabela tb_alunos 
  ADD PRIMARY KEY (`Id`); 

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_alunos`
--
ALTER TABLE `tb_alunos` -- configura Id para ser AUTO_INCREMENT, permitindo que novos registros sejam adicionados automaticamente com IDs sequenciais
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39; -- o próximo valor de AUTO_INCREMENT vai ser 39
COMMIT; -- e dale tudo

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
