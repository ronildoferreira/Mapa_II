-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Set-2021 às 02:00
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ra211618745`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `course`
--

CREATE TABLE `course` (
  `nameCourse` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateStart` date NOT NULL,
  `dateFinish` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `course`
--

INSERT INTO `course` (`nameCourse`, `description`, `dateStart`, `dateFinish`, `status`, `created_at`, `updated_at`, `id`) VALUES
('Curso de C++', 'Aprenda a programar em 20 dias', '2021-09-10', '2021-12-25', 1, '2021-09-22 23:22:01', '2021-09-22 23:25:36', 4),
('Curso de PHP', 'Aprenda a programar em 20 dias', '2021-09-10', '2021-12-25', 2, '2021-09-22 23:26:12', '2021-09-22 23:26:12', 5),
('erewr', 'rwerw', '0000-00-00', '0000-00-00', 1, '2021-09-28 00:30:22', '2021-09-28 00:30:22', 6),
('erewr', 'rwerw', '0000-00-00', '0000-00-00', 1, '2021-09-28 00:30:22', '2021-09-28 00:30:22', 7),
('Delphi', 'Curso Pratico', '2002-02-11', '2002-02-20', 1, '2021-09-28 00:33:49', '2021-09-28 00:33:49', 8),
('Delphi', 'Curso Pratico', '2002-02-11', '2002-02-20', 1, '2021-09-28 00:33:49', '2021-09-28 00:33:49', 9),
('C', 'Liguagem C', '2021-02-22', '2001-02-22', 1, '2021-09-28 22:24:55', '2021-09-28 22:24:55', 10),
('C', 'Liguagem C', '2021-02-22', '2001-02-22', 1, '2021-09-28 22:24:55', '2021-09-28 22:24:55', 11),
('C++', 'Liguagem C++', '2021-02-22', '2001-02-22', 1, '2021-09-28 22:29:39', '2021-09-28 22:29:39', 12),
('C++', 'Liguagem C++', '2021-02-22', '2001-02-22', 1, '2021-09-28 22:29:39', '2021-09-28 22:29:39', 13),
('Puthon', '20 projetos', '2001-11-11', '2021-12-12', 1, '2021-09-28 22:43:00', '2021-09-28 22:43:00', 14),
('Puthon', '20 projetos', '2001-11-11', '2021-12-12', 1, '2021-09-28 22:43:00', '2021-09-28 22:43:00', 15),
('Python', '20 projetos', '2001-11-11', '2021-12-12', 1, '2021-09-28 22:43:10', '2021-09-28 22:43:10', 16),
('Python', '20 projetos', '2001-11-11', '2021-12-12', 1, '2021-09-28 22:43:10', '2021-09-28 22:43:10', 17),
('C', 'Liguagem C', '2021-02-17', '2001-02-07', 1, '2021-09-28 22:43:50', '2021-09-28 22:43:50', 18),
('C', 'Liguagem C', '2021-02-17', '2001-02-07', 1, '2021-09-28 22:43:50', '2021-09-28 22:43:50', 19),
('C++', 'Liguagem C', '2021-02-19', '2001-02-07', 1, '2021-09-28 22:48:20', '2021-09-28 22:48:20', 20),
('C++', 'Liguagem C', '2021-02-19', '2001-02-07', 1, '2021-09-28 22:48:20', '2021-09-28 22:48:20', 21),
('Redes de Computadores', 'O melhor do Brasil', '2021-09-23', '2021-09-08', 1, '2021-09-28 22:49:05', '2021-09-28 22:49:05', 22),
('Redes de Computadores', 'O melhor do Brasil', '2021-09-23', '2021-09-08', 1, '2021-09-28 22:49:05', '2021-09-28 22:49:05', 23),
('Laravel', 'Laravel avançado', '2021-02-22', '2001-02-22', 1, '2021-09-28 22:51:59', '2021-09-28 22:51:59', 24),
('Laravel', 'Laravel avançado', '2021-02-22', '2001-02-22', 1, '2021-09-28 22:51:59', '2021-09-28 22:51:59', 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `student`
--

CREATE TABLE `student` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `password`, `phone`, `course`, `status`, `created_at`, `updated_at`) VALUES
(0, 'Ronildo Ferreira da Silva', 'ronildo@ronildo.com.br', '888888', '88888888', 888888, 1, '2021-09-23 22:55:04', '2021-09-23 22:55:04');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
