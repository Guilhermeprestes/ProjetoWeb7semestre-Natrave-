-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Maio-2018 às 22:42
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `natravedb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `partidatb`
--

CREATE TABLE `partidatb` (
  `id_partida` int(100) NOT NULL,
  `nome_partida` varchar(50) NOT NULL,
  `descricao_partida` varchar(200) NOT NULL,
  `data` date NOT NULL,
  `rua` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `partidatb`
--

INSERT INTO `partidatb` (`id_partida`, `nome_partida`, `descricao_partida`, `data`, `rua`, `bairro`, `cidade`, `estado`, `nome`, `email`, `telefone`) VALUES
(9, 'PARTIDA TESTE 1', 'partida de futebol amador', '2018-05-20', 'Pastor Hugo Gegembauer 265', 'Parque Ortolandia', 'Hortolandia', 'Sao Paulo', 'Guilherme ', 'guilhermeoprestes@hotmail.com', '982303329'),
(10, 'PARTIDA TESTE 2', 'partida de futebol amador 2', '2018-05-30', 'Pastor Hugo Gegembauer 265', 'Parque Ortolandia', 'Hortolandia', 'Sao Paulo', 'Guilherme', 'guilhermeoprestes@hotmail.com', '982303329');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `partidatb`
--
ALTER TABLE `partidatb`
  ADD PRIMARY KEY (`id_partida`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `partidatb`
--
ALTER TABLE `partidatb`
  MODIFY `id_partida` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
