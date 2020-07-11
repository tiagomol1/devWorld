-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jul-2020 às 04:10
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `devworld`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `text` text NOT NULL,
  `date` varchar(200) NOT NULL,
  `image_file` varchar(250) NOT NULL,
  `video_file` varchar(250) NOT NULL,
  `document_file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `id_user`, `text`, `date`, `image_file`, `video_file`, `document_file`) VALUES
(6, 1, 'Publicaç?o de teste para ver se irá registrar corretamente', '10/07/2020 as 10:26', '', '', ''),
(7, 1, 'teste', '10/07/2020 as 10:31', 'erro.PNG', '', ''),
(8, 1, 'Video teste', '10/07/2020 as 10:44', '', '2020-06-27 15-47-36.mp4', ''),
(9, 1, 'teste de documento', '10/07/2020 as 10:55', '', '', 'Espiral 3D para baixo e desdobrar.ffx'),
(10, 1, 'teste com tudo ', '10/07/2020 as 11:04', 'constrato salvo.PNG', '2020-06-27 15-53-59.mp4', 'boleto_para_deposito_nuconta.pdf'),
(11, 3, 'teste com o usuário do Mauricio', '10/07/2020 as 11:06', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fullName` varchar(200) NOT NULL,
  `companyName` varchar(200) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `typeUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `fullName`, `companyName`, `cnpj`, `typeUser`) VALUES
(1, 'tiago.luz@catolicasc.org.br', 'tiagomol1', '123', 'Tiago Murilo', '0', '0', 0),
(3, 'mauricio@catolicasc.org.br', 'mauricio', '123', 'Mauricio\r\n', '0', '0', 0),
(11, 'tiago.murilo08@gmail.com123', '123', '321', 'Tiago Murilo Ochôa da Luz', '', '0', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
