-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 24/11/2017 às 12:55
-- Versão do servidor: 10.1.26-MariaDB
-- Versão do PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `doctoron`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendar`
--

CREATE TABLE `agendar` (
  `idagendar` int(11) NOT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `dataagende` varchar(220) DEFAULT NULL,
  `hora` varchar(220) DEFAULT NULL,
  `unidade` varchar(220) DEFAULT NULL,
  `cartaosus` varchar(220) DEFAULT NULL,
  `espc` varchar(220) DEFAULT NULL,
  `modifild` datetime NOT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) DEFAULT NULL,
  `nascimento` varchar(220) DEFAULT NULL,
  `email` varchar(220) DEFAULT NULL,
  `usuario` varchar(220) DEFAULT NULL,
  `senha` varchar(220) DEFAULT NULL,
  `bairro` varchar(220) DEFAULT NULL,
  `telefone` varchar(220) DEFAULT NULL,
  `cpf` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `nascimento`, `email`, `usuario`, `senha`, `bairro`, `telefone`, `cpf`) VALUES
(1, 'Douglas', '04-09-2017', 'douguinhadod@hotmail.com', 'douglas', '$2y$10$B9VVhBdQSTVMKviptyK7tOQTKX1628zj4XfRMYmW2aT3p01bpPwHK', 'Santo Amaro', '3106-0265', '123.1232.232.12'),
(2, 'thiago santos', '04-09-2017', 'thiago@Hotmail.com', 'thiago', '$2y$10$TbgFwNFdqRUV69yp0J39ruVmG4d0ipHw79q4xLZ70PE.IbpAebrxS', 'terezinha', '3106-0265', '123.1232.232.12'),
(3, 'Sabrinna', '04-09-2017', 'Sabrinna@user.br', 'Sabrinna', '$2y$10$f3jB3//80tYFChV.XbroQuT3aUp4LyBs4kxG.cPpUnRWp/pOrAfDm', 'Santo Amaro', '3106-0265', '123.1232.232.12'),
(4, 'Fabiano Oliveira', '05-10-2017', 'fabiano@user.br', 'Fabiano01', '$2y$10$dTAfx88AjodxArkaWY4IzOMNbCq2oFBXPP9jiPN49IuvXU6tEynXK', 'Av,Flores', '3104-3243', '123.2333.3232.2'),
(5, 'admin', '04-09-2017', 'admin@admin.br', 'admin', '$2y$10$eB.6dEOGWV2R8IY2pISEPOT8idiot6Y/8PkpVriJKCRBuMp1qHB1S', 'Av.Machado', '3106-0265', '123.1232.232.12'),
(6, 'yury', '04-09-2017', 'yuri@gmail.com', 'yuri', '$2y$10$k9W9AVtYXZy850RLN3jUQehRK5OH8MJwHahZgJ46YrHzTxlTaSEda', 'terezinha', '3106-0265', '123.1232.232.12'),
(7, 'Cleide', '04-09-2017', 'cleide@user.br', 'cleide', '$2y$10$0.fvrK3NhqZ56/SYxsgB6u7BPprS/md3dMCG4X/i2bmI0kX0uugpK', 'terezinha', '31033029', '123.1232.232.12');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `agendar`
--
ALTER TABLE `agendar`
  ADD PRIMARY KEY (`idagendar`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `agendar`
--
ALTER TABLE `agendar`
  MODIFY `idagendar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `agendar`
--
ALTER TABLE `agendar`
  ADD CONSTRAINT `agendar_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
