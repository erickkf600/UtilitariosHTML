-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Mar-2018 às 13:12
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `cpf` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `dataNasc` date NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `cep` double NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `telefoneFixo` varchar(30) NOT NULL,
  `telefoneCel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `usuario`, `cpf`, `email`, `senha`, `dataNasc`, `endereco`, `cep`, `bairro`, `cidade`, `telefoneFixo`, `telefoneCel`) VALUES
(2, 'alexande', 'junio', '2158161', 'junior@bn.com', '202cb962ac59075b964b07152d234b70', '0000-00-00', 'rua z', 3151858, 'eden', 'sjm', '', ''),
(3, 'erick', 'erickk', '186156', 'erickkf600@gmail.com', '202cb962ac59075b964b07152d234b70', '0000-00-00', 'rua j', 1554148, 'edne', 'sjm', '22121', ''),
(4, 'carlos', 'ins', '123456789', 'ch@bm.com', '202cb962ac59075b964b07152d234b70', '0000-00-00', 'rua h', 0, 'kirl', 'sjm', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codigo` int(11) NOT NULL,
  `nomeprod` varchar(30) NOT NULL,
  `caracteristica` longtext NOT NULL,
  `preco` double NOT NULL,
  `fabricante` varchar(30) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
