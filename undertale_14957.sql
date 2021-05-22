-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Maio-2021 às 23:20
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `undertale_14957`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `nomeop` varchar(70) DEFAULT NULL,
  `link` varchar(80) DEFAULT NULL,
  `permissao` int(11) DEFAULT NULL,
  `target` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`idmenu`, `nomeop`, `link`, `permissao`, `target`) VALUES
(1, 'PERSONAGENS', 'index.php?op=characters', 0, '_self'),
(2, 'CONTEUDO DO JOGO', '?op=gamecont', 0, '_self'),
(3, 'COMUNIDADE', 'loginanim.php', 0, '_self'),
(4, '<i class=\"fas fa-user-circle\"></i>', 'index.php', 0, '_self'),
(5, 'Lara', 'index.php', 0, '_self'),
(6, '<i class=\"fas fa-home\"></i>&nbsp Menu</a>', 'home.php', 5, '_self'),
(7, '<i class=\"fas fa-user-circle\"></i>&nbsp Perfil', 'index.php', 5, '_self'),
(8, '<i class=\"fas fa-images\"></i>&nbsp Galeria', '?op=coisas', 5, '_self'),
(9, '<i class=\"fas fa-sign-out-alt\"></i>&nbsp Sair', 'logout.php', 5, '_self'),
(10, '<i class=\"fas fa-home\"></i>&nbsp Menu</a>', 'home.php', 5, '_self'),
(11, '<i class=\"fas fa-user-circle\"></i>&nbsp Perfil', 'index.php', 5, '_self'),
(12, '<i class=\"fas fa-sign-out-alt\"></i>&nbsp Sair', 'logout.php', 5, '_self');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
