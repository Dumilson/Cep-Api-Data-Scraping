-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 06-Jul-2022 às 13:44
-- Versão do servidor: 5.7.33
-- versão do PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pegar_cep`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ceps`
--

CREATE TABLE `ceps` (
  `id` int(11) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) NOT NULL,
  `uf` varchar(50) NOT NULL,
  `ibge` varchar(50) DEFAULT NULL,
  `gia` varchar(50) DEFAULT NULL,
  `ddd` varchar(50) NOT NULL,
  `siafi` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ceps`
--

INSERT INTO `ceps` (`id`, `cep`, `logradouro`, `complemento`, `bairro`, `uf`, `ibge`, `gia`, `ddd`, `siafi`, `created_at`, `updated_at`) VALUES
(2, '77690-970', 'Rua Rui Barbosa', '435', 'Setor Central', 'TO', '1701903', '', '63', '9237', '2022-07-06 00:48:12', '2022-07-06 00:48:12'),
(3, '77690-970', 'Rua Rui Barbosa', '435', 'Setor Central', 'TO', '1701903', '', '63', '9237', '2022-07-06 00:49:17', '2022-07-06 00:49:17'),
(4, '77690-970', 'Rua Rui Barbosa', '435', 'Setor Central', 'TO', '1701903', '', '63', '9237', '2022-07-06 00:49:59', '2022-07-06 00:49:59'),
(5, '57435-970', 'Teste Edit', 'Teste Edit', 'Teste Edit', 'TJ', '20 Teste', 'Teste', '888', 'Teste', '2022-07-06 00:50:23', '2022-07-06 00:50:23'),
(6, '77690-970', 'Rua Rui Barbosa', '435', 'Setor Central', 'TO', '1701903', '', '63', '9237', '2022-07-06 00:52:20', '2022-07-06 00:52:20'),
(7, '57435-970', 'Travessa Cônego Jasson Souto', '36', 'Centro', 'AL', '2700904', '', '82', '2717', '2022-07-06 02:12:11', '2022-07-06 02:12:11');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ceps`
--
ALTER TABLE `ceps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ceps`
--
ALTER TABLE `ceps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
