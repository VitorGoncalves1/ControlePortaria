-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Maio-2024 às 15:54
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portariateste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `expedicao`
--

CREATE TABLE `expedicao` (
  `pecas` varchar(30) DEFAULT NULL,
  `volume` varchar(30) DEFAULT NULL,
  `notafisc` varchar(30) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `visto` varchar(30) DEFAULT NULL,
  `observacoes` varchar(200) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `op` varchar(30) DEFAULT NULL,
  `placa` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `expedicao`
--

INSERT INTO `expedicao` (`pecas`, `volume`, `notafisc`, `hora`, `visto`, `observacoes`, `id`, `data`, `op`, `placa`) VALUES
('asdas', 'dasdas', 'dasdas', '00:00:00', '15:11', 'asdasd', 2, NULL, NULL, 'hhy-0909'),
('dasda', 'dada', 'dad', '12:42:00', 'asdasd', 'asdad', 3, '2024-05-08', 'dasdas', 'hgsh-22'),
(NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, 'hhy-000'),
('asdasdas', 'dasdasdas', 'dasdasdasda', '13:44:00', 'sadddddddddddddddddddddddddddd', 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 5, '2024-05-10', 'asdasasdasdasd', NULL),
('dfsdf', 'sdfsdf', 'sdfsdf', '10:26:00', 'fsdfsdf', 'fdsfsdf', 6, '2024-05-15', 'fdsfs', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario_terceiro`
--

CREATE TABLE `horario_terceiro` (
  `placa` varchar(30) DEFAULT NULL,
  `hora_entrada` time DEFAULT NULL,
  `hora_saida` time DEFAULT NULL,
  `hora_entrada2` time DEFAULT NULL,
  `hora_saida2` time DEFAULT NULL,
  `data` date DEFAULT NULL,
  `cpf` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `horario_terceiro`
--

INSERT INTO `horario_terceiro` (`placa`, `hora_entrada`, `hora_saida`, `hora_entrada2`, `hora_saida2`, `data`, `cpf`, `id`) VALUES
('hhy-8330', '11:39:00', NULL, NULL, NULL, '2023-12-28', '666', 1),
('hhy-8330', '12:00:00', NULL, NULL, NULL, '2023-12-29', '666', 2),
('hhy-8330', '07:04:00', NULL, NULL, NULL, '2024-01-22', '1234', 3),
('hhe-8330', '16:38:00', '17:39:00', '20:42:00', '20:42:00', '2024-02-02', '1234', 4),
('hhe-8330', '12:46:00', NULL, NULL, NULL, '2024-02-13', '1234', 5),
('teste@', '16:38:00', NULL, NULL, NULL, '2024-03-11', '323232', 6),
('hhk-8330', '09:07:00', '10:08:00', '16:01:00', '23:05:00', '2024-03-27', '0000', 7),
('hh5-teste', '09:30:00', '10:31:00', '00:00:00', '00:00:00', '2024-03-27', '777', 8),
('hhk-8330', '16:47:00', '19:55:00', '19:55:00', '20:56:00', '2024-04-11', '0000', 9),
('qqq-111', '08:39:00', '10:41:00', '12:43:00', '00:00:00', '2024-04-12', '7878', 10),
('hhs-8330', '09:02:00', '11:04:00', '00:00:00', '00:00:00', '2024-04-12', '5432', 11),
('hhe-2345', '16:57:00', NULL, NULL, NULL, '2024-04-19', '1234', 12),
('qqq-111', '15:09:00', NULL, NULL, NULL, '2024-04-24', '7878', 13),
('bbb-1111', '11:46:00', '13:46:00', '14:47:00', '15:47:00', '2024-05-16', '0000', 14),
('GEK 0277', '19:06:00', NULL, NULL, NULL, '2024-05-16', '76767', 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario_visitante`
--

CREATE TABLE `horario_visitante` (
  `cpf` varchar(30) DEFAULT NULL,
  `placa` varchar(30) DEFAULT NULL,
  `hora_entrada` time DEFAULT NULL,
  `hora_saida` time DEFAULT NULL,
  `hora_entrada2` time DEFAULT NULL,
  `hora_saida2` time DEFAULT NULL,
  `data` date DEFAULT NULL,
  `notafiscal` varchar(50) DEFAULT NULL,
  `observacoes` varchar(50) DEFAULT NULL,
  `destino` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `horario_visitante`
--

INSERT INTO `horario_visitante` (`cpf`, `placa`, `hora_entrada`, `hora_saida`, `hora_entrada2`, `hora_saida2`, `data`, `notafiscal`, `observacoes`, `destino`, `id`) VALUES
('555', 'ggg', '16:42:00', NULL, NULL, NULL, '2024-04-25', 'sdfsdf', 'sdfsdfsd', 'sdfsdfs', 1),
('3232', '123456', '10:42:00', '12:42:00', '13:42:00', '14:42:00', '2024-04-26', '223412412-15', 'Executar serviÃ§o terceiro ', 'Local', 2),
('111', 'hhy-8340', '12:44:00', NULL, NULL, NULL, '2024-04-26', '423423423-2', 'asdasda', 'dasdasd', 3),
('2121', '', '14:14:00', NULL, NULL, NULL, '2024-04-26', '33434343-12', 'Padaria Fino Sabor ', 'Industria', 5),
('8989', 'NÃ£o Possui', '13:39:00', NULL, NULL, NULL, '2024-04-26', 'fsdfsd', 'fsdfsdfs', 'sdfsdfsd', 6),
('2323', 'NÃ£o Possui', '16:53:00', '17:54:00', '18:55:00', '20:56:00', '2024-04-26', '223223', '12312312', '31231231', 7),
('1111', 'NÃ£o Possui', '12:39:00', NULL, NULL, NULL, '2024-04-30', 'sdasdas', 'asdasdas', 'asdasdas', 8),
('1111', 'jjj-222', '15:05:00', NULL, NULL, NULL, '2024-05-01', 'gfdgdf', 'fgdfgdf', 'dfgdfgd', 9),
('3232332', 'NÃ£o Possui', '15:25:00', NULL, NULL, NULL, '2024-05-03', 'dfdsfsd', 'sdfsdfsdfsdfds', 'sdfdsfsdfsd', 10),
('0909', 'NÃ£o Possui', '15:45:00', '16:46:00', '19:45:00', '20:45:00', '2024-05-03', 'asdasdas', 'dasdasdas', 'asdasdasd', 11),
('0909', 'jjj-444', '16:44:00', NULL, NULL, NULL, '2024-05-04', 'ggdfgdf', 'gdfgdfgdf', 'gdfgdfgdf', 12),
('1111', 'jjj-222', '17:48:00', NULL, NULL, NULL, '2024-05-03', 'fghfg', 'fghfgh', 'hfghfgh', 13),
('MG16', 'QXH 5143', '11:20:00', NULL, NULL, NULL, '2024-05-06', 'NF-44.246 SERIEÂº1', '( AQUASALES ) ANALISE DE TRATAMENTO DE AGUA', 'INDUSTRIA', 35),
('8989', 'NÃ£o Possui', '11:36:00', '00:00:00', '00:00:00', '00:00:00', '2024-05-06', 'asdasdas', 'asdasdasdasdas', 'asdasdasd', 36),
('MG 2046', 'NÃ£o Possui', '11:56:00', '13:01:00', '00:00:00', '00:00:00', '2024-05-06', '223412412-15', 'SAIU A SERVIÃ‡O DA EMPRESA', 'INDÃšSTRIA', 37);

-- --------------------------------------------------------

--
-- Estrutura da tabela `terceiro`
--

CREATE TABLE `terceiro` (
  `cpf` varchar(30) NOT NULL,
  `nome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `terceiro`
--

INSERT INTO `terceiro` (`cpf`, `nome`) VALUES
('0000', 'Lafon '),
('1234', 'Vitor'),
('123456', 'Raul Seixas'),
('323232', 'Aderbaldo'),
('5432', 'Natalia'),
('5656', 'Cavaco'),
('666', 'Thiago'),
('76767', 'Miguel Ocanha'),
('777', 'Rodrigo'),
('7878', 'Roberta ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo_terceiro`
--

CREATE TABLE `veiculo_terceiro` (
  `modelo` varchar(30) DEFAULT NULL,
  `cpf` varchar(30) DEFAULT NULL,
  `placa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculo_terceiro`
--

INSERT INTO `veiculo_terceiro` (`modelo`, `cpf`, `placa`) VALUES
('Sentra', '0000', 'bbb-1111'),
('HRV', '76767', 'GEK 0277'),
('Duster', '777', 'hh5-teste'),
('Corsa', '1234', 'hhe-2345'),
('cruze', '1234', 'hhe-8330'),
('Celta', '1234', 'hhf-8330'),
('Celta', '0000', 'hhk-8330'),
('Chevette', '5432', 'hhs-8330'),
('corsa', '666', 'hhy-8330'),
('Uno', '7878', 'qqq-111'),
('Cors', '323232', 'teste@');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo_visitante`
--

CREATE TABLE `veiculo_visitante` (
  `modelo` varchar(30) DEFAULT NULL,
  `cpf` varchar(30) DEFAULT NULL,
  `placa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculo_visitante`
--

INSERT INTO `veiculo_visitante` (`modelo`, `cpf`, `placa`) VALUES
('Chevette', '3232', '123456'),
('Meriva', '555', 'ggg'),
('KOMBI', 'MG 2046', 'HEQ 4785'),
('Celta', '5556', 'hhe-9898'),
('CORSA', '111', 'hhy-8340'),
('Celta', '1111', 'jjj-222'),
('Monza', '0909', 'jjj-444'),
('MOTO', 'MG16', 'QXH 5143');

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitantes`
--

CREATE TABLE `visitantes` (
  `cpf` varchar(30) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `tipo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `visitantes`
--

INSERT INTO `visitantes` (`cpf`, `nome`, `tipo`) VALUES
('0000', 'Rodrigo Santoro', 'visitante'),
('0909', 'Teste7', 'visitante'),
('111', 'Vitor Cavaco', NULL),
('1111', 'Chovas', 'visitante'),
('112', 'Gpn', NULL),
('123124', 'Roberto', NULL),
('2121', 'Vitor Cavaco', 'terceiro'),
('222', 'Vitor Gonçalves', NULL),
('2323', 'teste1', 'terceiro'),
('3232', 'Bruna Marquezine ', 'terceiro'),
('3232332', 'Teste6', 'visitante'),
('555', 'Bruna Marquezine', ''),
('5556', 'Bruna Marquezine', 'terceiro'),
('8989', 'Biricotico', 'terceiro'),
('MG 2046', 'VANDEIR ARAUJO DE OLIVEIRA ', 'visitante'),
('MG16', 'JEEP', 'terceiro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expedicao`
--
ALTER TABLE `expedicao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horario_terceiro`
--
ALTER TABLE `horario_terceiro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cpf_terceiro` (`cpf`),
  ADD KEY `fk_placa_terceiro` (`placa`);

--
-- Indexes for table `horario_visitante`
--
ALTER TABLE `horario_visitante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cpf_visitante` (`cpf`),
  ADD KEY `fk_placa_visitante` (`placa`);

--
-- Indexes for table `terceiro`
--
ALTER TABLE `terceiro`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `veiculo_terceiro`
--
ALTER TABLE `veiculo_terceiro`
  ADD PRIMARY KEY (`placa`),
  ADD KEY `fk_terceiro_veiculo` (`cpf`);

--
-- Indexes for table `veiculo_visitante`
--
ALTER TABLE `veiculo_visitante`
  ADD PRIMARY KEY (`placa`),
  ADD KEY `fk_gestor_veiculo` (`cpf`);

--
-- Indexes for table `visitantes`
--
ALTER TABLE `visitantes`
  ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expedicao`
--
ALTER TABLE `expedicao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `horario_terceiro`
--
ALTER TABLE `horario_terceiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `horario_visitante`
--
ALTER TABLE `horario_visitante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `horario_terceiro`
--
ALTER TABLE `horario_terceiro`
  ADD CONSTRAINT `fk_cpf_terceiro` FOREIGN KEY (`cpf`) REFERENCES `terceiro` (`cpf`),
  ADD CONSTRAINT `fk_placa_terceiro` FOREIGN KEY (`placa`) REFERENCES `veiculo_terceiro` (`placa`);

--
-- Limitadores para a tabela `horario_visitante`
--
ALTER TABLE `horario_visitante`
  ADD CONSTRAINT `fk_cpf_visitante` FOREIGN KEY (`cpf`) REFERENCES `visitantes` (`cpf`);

--
-- Limitadores para a tabela `veiculo_terceiro`
--
ALTER TABLE `veiculo_terceiro`
  ADD CONSTRAINT `fk_terceiro_veiculo` FOREIGN KEY (`cpf`) REFERENCES `terceiro` (`cpf`);

--
-- Limitadores para a tabela `veiculo_visitante`
--
ALTER TABLE `veiculo_visitante`
  ADD CONSTRAINT `fk_gestor_veiculo` FOREIGN KEY (`cpf`) REFERENCES `visitantes` (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
