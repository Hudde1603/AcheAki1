-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 22-Maio-2022 às 16:32
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessorio`
--

CREATE TABLE `acessorio` (
  `idacessorio` int(11) NOT NULL,
  `cor` varchar(45) DEFAULT NULL,
  `tamanho` varchar(45) DEFAULT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `idartigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `acessorio`
--

INSERT INTO `acessorio` (`idacessorio`, `cor`, `tamanho`, `marca`, `idartigo`) VALUES
(14, 'verde', 'azul', 'sei la', 49),
(15, 'verde', 'azul', 'sei la', 51),
(16, 'preto', 'nn', 'sei la', 49),
(17, 'verde', 'azul', 'sei la', 55),
(18, 'verde', 'azul', 'sei la', 56),
(19, 'verde', 'azul', 'sei la', 57),
(20, 'verde', 'azul', 'sei la', 58),
(21, 'castanha', 'zei la', 'nem sei', 61),
(22, 'castanha', 'zei la', 'nem sei', 61),
(23, 'castanha', 'zei la', 'nem sei', 61),
(24, 'castanha', 'zei la', 'nem sei', 61),
(25, 'verde', 'azul', 'sei la', 61),
(26, 'verde', 'azul', 'sei la', 61),
(27, 'verde', 'azul', 'sei la', 70),
(28, 'verde', 'knknk', 'knknkn', 71),
(29, 'verde', 'azul', 'sei la', 75);

-- --------------------------------------------------------

--
-- Estrutura da tabela `anel`
--

CREATE TABLE `anel` (
  `idanel` int(11) NOT NULL,
  `idacessorio` int(11) NOT NULL,
  `idartigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `anel`
--

INSERT INTO `anel` (`idanel`, `idacessorio`, `idartigo`) VALUES
(1, 16, 49),
(2, 27, 70);

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigo`
--

CREATE TABLE `artigo` (
  `idartigo` int(11) NOT NULL,
  `descricao` text DEFAULT NULL,
  `foto` text NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `local` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `status` varchar(45) NOT NULL,
  `idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `artigo`
--

INSERT INTO `artigo` (`idartigo`, `descricao`, `foto`, `item_name`, `local`, `data`, `status`, `idcliente`) VALUES
(49, 'sds', 'Rectangle 1279.png', 'Ipad 11', '', '0000-00-00', 'achado', 55),
(50, 'esta sim sei la', 'Rectangle 1279.png', 'Computador', '', '0000-00-00', 'achado', 55),
(51, 'teste testte tese', 'AcheAki.sql', 'Fio', '', '0000-00-00', 'achado', 55),
(52, 'nsn', 'Rectangle 1279.png', 'Ipad 11', '', '0000-00-00', 'achado', 55),
(53, 'hhs', 'Rectangle 1279.png', 'Recreio', '', '0000-00-00', 'perdido', 55),
(54, 'apple', 'Rectangle 1279.png', 'Ipod', '', '0000-00-00', 'perdido', 55),
(55, 'shhs', 'Rectangle 1279.png', 'teste 4', '', '0000-00-00', 'perdido', 55),
(56, 'shhs', 'Rectangle 1279.png', 'Pano', '', '0000-00-00', 'perdido', 55),
(57, 'shhs', 'Rectangle 1279.png', 'Feitiço na minha porta', '', '0000-00-00', 'perdido', 55),
(58, 'naa', 'Rectangle 1279.png', 'Nada', '', '0000-00-00', 'achado', 55),
(59, 'sei l', 'Rectangle 1279.png', 'Liamba', 'Luanda', '2022-05-17', 'achado', 55),
(60, 'encontrado na rua', 'Rectangle 1284.png', 'Ipad 12', 'Luanda', '2022-05-17', 'achado', 67),
(61, 'Sei la como', 'Rectangle 1284.png', 'Pasta', 'Luanda', '2022-05-17', 'achado', 55),
(62, 'Sei la como', 'Rectangle 1284.png', 'Pasta', 'Luanda', '2022-05-17', 'achado', 55),
(63, 'Sei la como', 'Rectangle 1284.png', 'Pasta', 'Luanda', '2022-05-17', 'achado', 55),
(64, 'Sei la como', 'Rectangle 1284.png', 'Pasta', 'Luanda', '2022-05-17', 'achado', 55),
(65, 'Seija', 'Rectangle 1284.png', 'Pasta', 'Luanda', '2022-05-17', 'achado', 55),
(66, 'Seija', 'Rectangle 1284.png', 'Pasta', 'Luanda', '2022-05-17', 'achado', 55),
(67, 'teste', 'Rectangle 1282.png', 'Iphone 13', 'Luanda', '2022-05-17', 'achado', 55),
(68, 'teste', 'Rectangle 1282.png', 'Iphone 13', 'Luanda', '2022-05-17', 'achado', 55),
(69, 'testte', 'Rectangle 1283.png', 'MacBook', 'Luanda', '2022-05-17', 'achado', 67),
(70, 'sei la', 'Rectangle 1285.png', 'Casaco', 'Luanda', '2022-05-17', 'achado', 55),
(71, 'tes', 'Rectangle 1280.png', 'Ipad 11', 'Luanda', '2022-05-19', 'achado', 55),
(72, 'hbhb', 'Rectangle 1285.png', 'teste 4', 'Luanda', '2022-05-19', 'achado', 67),
(73, 'hbhb', 'Rectangle 1285.png', 'teste 4', 'Luanda', '2022-05-19', 'achado', 67),
(74, 'ddd', '/storage/Rectangle 1282.png', 'Android', 'Luanda', '2022-05-19', 'perdido', 55),
(75, 'ww', '/Users/V/Documents/GitHub/AcheAki1/AcheAki/storage/app/Rectangle 1281.png', 'Feitiço', 'Luanda', '2022-05-19', 'perdido', 55);

-- --------------------------------------------------------

--
-- Estrutura da tabela `bilhete`
--

CREATE TABLE `bilhete` (
  `idbilhete` int(11) NOT NULL,
  `idartigo` int(11) NOT NULL,
  `iddocumento` int(11) NOT NULL,
  `filhacao1` varchar(45) NOT NULL,
  `filhacao2` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `bilhete`
--

INSERT INTO `bilhete` (`idbilhete`, `idartigo`, `iddocumento`, `filhacao1`, `filhacao2`) VALUES
(1, 54, 14, 'beste', 'snnsn'),
(2, 72, 15, 'beste', 'snnsn'),
(3, 72, 15, 'beste', 'snnsn');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartaoeleitoral`
--

CREATE TABLE `cartaoeleitoral` (
  `ideleitoral` int(11) NOT NULL,
  `iddocumento` int(11) NOT NULL,
  `idartigo` int(11) NOT NULL,
  `grupo` int(11) NOT NULL,
  `numeleitor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `telefone` int(10) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nome`, `telefone`, `email`) VALUES
(55, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(56, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(57, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(58, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(59, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(60, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(61, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(62, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(63, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(64, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(65, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(66, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(67, 'Luis Ariel Dumbo', 937467276, 'exemplo@gmail.com'),
(68, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(69, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(70, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(71, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(72, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(73, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(74, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(75, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(76, 'Luis Ariel Dumbo', 937467276, 'exemplo@gmail.com'),
(77, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(78, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(79, 'Luis Ariel Dumbo', 937467276, 'exemplo@gmail.com'),
(80, 'Luis Ariel Dumbo', 937467276, 'exemplo@gmail.com'),
(81, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(82, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com'),
(83, 'Luis Ariel Dumbo', 937467276, 'kss@mail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `computador`
--

CREATE TABLE `computador` (
  `idcomputador` int(11) NOT NULL,
  `ideletronico` int(11) NOT NULL,
  `idartigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `computador`
--

INSERT INTO `computador` (`idcomputador`, `ideletronico`, `idartigo`) VALUES
(1, 15, 50),
(2, 21, 69);

-- --------------------------------------------------------

--
-- Estrutura da tabela `documento`
--

CREATE TABLE `documento` (
  `iddocumento` int(11) NOT NULL,
  `genero` varchar(16) NOT NULL,
  `nomedocumento` varchar(50) DEFAULT NULL,
  `idartigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `documento`
--

INSERT INTO `documento` (`iddocumento`, `genero`, `nomedocumento`, `idartigo`) VALUES
(14, 'sds', 'Luis Ariel Dumbo', 54),
(15, 'sds', 'Luis Ariel Dumbo', 72),
(16, 'sds', 'Luis Ariel Dumbo', 72);

-- --------------------------------------------------------

--
-- Estrutura da tabela `eletronico`
--

CREATE TABLE `eletronico` (
  `ideletronico` int(11) NOT NULL,
  `cor` varchar(45) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `idartigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `eletronico`
--

INSERT INTO `eletronico` (`ideletronico`, `cor`, `marca`, `modelo`, `idartigo`) VALUES
(15, 'azul', 'eew', 'wewe', 50),
(16, 'preto', 'iphone', NULL, 53),
(17, 'preto', 'iphone', '11 pro', 59),
(18, 'preto', 'iphone', '12 pro', 60),
(19, 'preto', 'iphone', '11 pro', 67),
(20, 'preto', 'iphone', '11 pro', 67),
(21, 'preto', 'iphone', 'ioo', 69),
(22, 'preto', 's4', '11 pro', 74);

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrega`
--

CREATE TABLE `entrega` (
  `identrega` int(11) NOT NULL,
  `idusuario` int(10) UNSIGNED NOT NULL,
  `idartigo` int(11) NOT NULL,
  `idpontoreferencia` int(11) NOT NULL,
  `dtentrega` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fio`
--

CREATE TABLE `fio` (
  `idfio` int(11) NOT NULL,
  `idacessorio` int(11) NOT NULL,
  `idartigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `fio`
--

INSERT INTO `fio` (`idfio`, `idacessorio`, `idartigo`) VALUES
(1, 14, 49),
(2, 15, 51),
(3, 20, 58),
(4, 28, 71),
(5, 29, 75);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ipad`
--

CREATE TABLE `ipad` (
  `idipad` int(11) NOT NULL,
  `ideletronico` int(11) NOT NULL,
  `idartigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ipad`
--

INSERT INTO `ipad` (`idipad`, `ideletronico`, `idartigo`) VALUES
(1, 16, 53),
(2, 17, 59);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `oculo`
--

CREATE TABLE `oculo` (
  `idoculo` int(11) NOT NULL,
  `idacessorio` int(11) NOT NULL,
  `idartigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `oculo`
--

INSERT INTO `oculo` (`idoculo`, `idacessorio`, `idartigo`) VALUES
(1, 17, 55),
(2, 18, 56),
(3, 19, 57);

-- --------------------------------------------------------

--
-- Estrutura da tabela `passaporte`
--

CREATE TABLE `passaporte` (
  `idpassaporte` int(11) NOT NULL,
  `idartigo` int(11) NOT NULL,
  `iddocumento` int(11) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `numpessoal` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pasta`
--

CREATE TABLE `pasta` (
  `idpasta` int(11) NOT NULL,
  `idacessorio` int(11) NOT NULL,
  `idartigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pasta`
--

INSERT INTO `pasta` (`idpasta`, `idacessorio`, `idartigo`) VALUES
(1, 21, 61),
(2, 21, 61),
(3, 21, 61),
(4, 21, 61),
(5, 25, 61),
(6, 25, 61);

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontoreferencia`
--

CREATE TABLE `pontoreferencia` (
  `idpontoreferencia` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `contacto` int(11) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `idusuario` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `idtelefone` int(11) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `ideletronico` int(11) NOT NULL,
  `idartigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `telefone`
--

INSERT INTO `telefone` (`idtelefone`, `tipo`, `ideletronico`, `idartigo`) VALUES
(1, '91234567', 18, 60),
(2, '937467276', 19, 67),
(3, '937467276', 19, 67),
(4, '937467276', 22, 74);

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste`
--

CREATE TABLE `teste` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(10) UNSIGNED NOT NULL,
  `nome` varchar(45) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acessorio`
--
ALTER TABLE `acessorio`
  ADD PRIMARY KEY (`idacessorio`,`idartigo`),
  ADD KEY `fk_acessorio_artigo1_idx` (`idartigo`);

--
-- Índices para tabela `anel`
--
ALTER TABLE `anel`
  ADD PRIMARY KEY (`idanel`,`idacessorio`,`idartigo`),
  ADD KEY `fk_anel_acessorio1_idx` (`idacessorio`,`idartigo`);

--
-- Índices para tabela `artigo`
--
ALTER TABLE `artigo`
  ADD PRIMARY KEY (`idartigo`),
  ADD KEY `fk_artigo_cliente1_idx` (`idcliente`);

--
-- Índices para tabela `bilhete`
--
ALTER TABLE `bilhete`
  ADD PRIMARY KEY (`idbilhete`,`idartigo`,`iddocumento`),
  ADD KEY `fk_bilhete_documento1_idx` (`iddocumento`,`idartigo`);

--
-- Índices para tabela `cartaoeleitoral`
--
ALTER TABLE `cartaoeleitoral`
  ADD PRIMARY KEY (`ideleitoral`,`iddocumento`,`idartigo`),
  ADD KEY `fk_cartaoeleitoral_documento1_idx` (`iddocumento`,`idartigo`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Índices para tabela `computador`
--
ALTER TABLE `computador`
  ADD PRIMARY KEY (`idcomputador`,`ideletronico`,`idartigo`),
  ADD KEY `fk_computador_eletronico1_idx` (`ideletronico`,`idartigo`);

--
-- Índices para tabela `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`iddocumento`,`idartigo`),
  ADD KEY `fk_documento_artigo1_idx` (`idartigo`);

--
-- Índices para tabela `eletronico`
--
ALTER TABLE `eletronico`
  ADD PRIMARY KEY (`ideletronico`,`idartigo`),
  ADD KEY `fk_eletronico_artigo1_idx` (`idartigo`);

--
-- Índices para tabela `entrega`
--
ALTER TABLE `entrega`
  ADD PRIMARY KEY (`identrega`,`idusuario`,`idartigo`,`idpontoreferencia`),
  ADD KEY `fk_entrega_usuario1_idx` (`idusuario`),
  ADD KEY `fk_entrega_artigo1_idx` (`idartigo`),
  ADD KEY `fk_entrega_pontoreferencia1_idx` (`idpontoreferencia`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `fio`
--
ALTER TABLE `fio`
  ADD PRIMARY KEY (`idfio`,`idacessorio`,`idartigo`),
  ADD KEY `fk_fio_acessorio1_idx` (`idacessorio`,`idartigo`);

--
-- Índices para tabela `ipad`
--
ALTER TABLE `ipad`
  ADD PRIMARY KEY (`idipad`,`ideletronico`,`idartigo`),
  ADD KEY `fk_ipad_eletronico1_idx` (`ideletronico`,`idartigo`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `oculo`
--
ALTER TABLE `oculo`
  ADD PRIMARY KEY (`idoculo`,`idacessorio`,`idartigo`),
  ADD KEY `fk_oculo_acessorio1_idx` (`idacessorio`,`idartigo`);

--
-- Índices para tabela `passaporte`
--
ALTER TABLE `passaporte`
  ADD PRIMARY KEY (`idpassaporte`,`idartigo`,`iddocumento`),
  ADD KEY `fk_passaporte_documento1_idx` (`iddocumento`,`idartigo`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `pasta`
--
ALTER TABLE `pasta`
  ADD PRIMARY KEY (`idpasta`,`idacessorio`,`idartigo`),
  ADD KEY `fk_pasta_acessorio1_idx` (`idacessorio`,`idartigo`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `pontoreferencia`
--
ALTER TABLE `pontoreferencia`
  ADD PRIMARY KEY (`idpontoreferencia`),
  ADD KEY `fk_pontoreferencia_usuario1_idx` (`idusuario`);

--
-- Índices para tabela `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`idtelefone`,`ideletronico`,`idartigo`),
  ADD KEY `fk_telefone_eletronico1_idx` (`ideletronico`,`idartigo`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acessorio`
--
ALTER TABLE `acessorio`
  MODIFY `idacessorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `anel`
--
ALTER TABLE `anel`
  MODIFY `idanel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `artigo`
--
ALTER TABLE `artigo`
  MODIFY `idartigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de tabela `bilhete`
--
ALTER TABLE `bilhete`
  MODIFY `idbilhete` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cartaoeleitoral`
--
ALTER TABLE `cartaoeleitoral`
  MODIFY `ideleitoral` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de tabela `computador`
--
ALTER TABLE `computador`
  MODIFY `idcomputador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `documento`
--
ALTER TABLE `documento`
  MODIFY `iddocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `eletronico`
--
ALTER TABLE `eletronico`
  MODIFY `ideletronico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `entrega`
--
ALTER TABLE `entrega`
  MODIFY `identrega` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fio`
--
ALTER TABLE `fio`
  MODIFY `idfio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `ipad`
--
ALTER TABLE `ipad`
  MODIFY `idipad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `oculo`
--
ALTER TABLE `oculo`
  MODIFY `idoculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `passaporte`
--
ALTER TABLE `passaporte`
  MODIFY `idpassaporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pasta`
--
ALTER TABLE `pasta`
  MODIFY `idpasta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pontoreferencia`
--
ALTER TABLE `pontoreferencia`
  MODIFY `idpontoreferencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `telefone`
--
ALTER TABLE `telefone`
  MODIFY `idtelefone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `acessorio`
--
ALTER TABLE `acessorio`
  ADD CONSTRAINT `fk_acessorio_artigo1` FOREIGN KEY (`idartigo`) REFERENCES `artigo` (`idartigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `anel`
--
ALTER TABLE `anel`
  ADD CONSTRAINT `fk_anel_acessorio1` FOREIGN KEY (`idacessorio`,`idartigo`) REFERENCES `acessorio` (`idacessorio`, `idartigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `artigo`
--
ALTER TABLE `artigo`
  ADD CONSTRAINT `fk_artigo_cliente1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `bilhete`
--
ALTER TABLE `bilhete`
  ADD CONSTRAINT `fk_bilhete_documento1` FOREIGN KEY (`iddocumento`,`idartigo`) REFERENCES `documento` (`iddocumento`, `idartigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cartaoeleitoral`
--
ALTER TABLE `cartaoeleitoral`
  ADD CONSTRAINT `fk_cartaoeleitoral_documento1` FOREIGN KEY (`iddocumento`,`idartigo`) REFERENCES `documento` (`iddocumento`, `idartigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `computador`
--
ALTER TABLE `computador`
  ADD CONSTRAINT `fk_computador_eletronico1` FOREIGN KEY (`ideletronico`,`idartigo`) REFERENCES `eletronico` (`ideletronico`, `idartigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `fk_documento_artigo1` FOREIGN KEY (`idartigo`) REFERENCES `artigo` (`idartigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `eletronico`
--
ALTER TABLE `eletronico`
  ADD CONSTRAINT `fk_eletronico_artigo1` FOREIGN KEY (`idartigo`) REFERENCES `artigo` (`idartigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `entrega`
--
ALTER TABLE `entrega`
  ADD CONSTRAINT `fk_entrega_artigo1` FOREIGN KEY (`idartigo`) REFERENCES `artigo` (`idartigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_entrega_pontoreferencia1` FOREIGN KEY (`idpontoreferencia`) REFERENCES `pontoreferencia` (`idpontoreferencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_entrega_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `fio`
--
ALTER TABLE `fio`
  ADD CONSTRAINT `fk_fio_acessorio1` FOREIGN KEY (`idacessorio`,`idartigo`) REFERENCES `acessorio` (`idacessorio`, `idartigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `ipad`
--
ALTER TABLE `ipad`
  ADD CONSTRAINT `fk_ipad_eletronico1` FOREIGN KEY (`ideletronico`,`idartigo`) REFERENCES `eletronico` (`ideletronico`, `idartigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `oculo`
--
ALTER TABLE `oculo`
  ADD CONSTRAINT `fk_oculo_acessorio1` FOREIGN KEY (`idacessorio`,`idartigo`) REFERENCES `acessorio` (`idacessorio`, `idartigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `passaporte`
--
ALTER TABLE `passaporte`
  ADD CONSTRAINT `fk_passaporte_documento1` FOREIGN KEY (`iddocumento`,`idartigo`) REFERENCES `documento` (`iddocumento`, `idartigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pasta`
--
ALTER TABLE `pasta`
  ADD CONSTRAINT `fk_pasta_acessorio1` FOREIGN KEY (`idacessorio`,`idartigo`) REFERENCES `acessorio` (`idacessorio`, `idartigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pontoreferencia`
--
ALTER TABLE `pontoreferencia`
  ADD CONSTRAINT `fk_pontoreferencia_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `telefone`
--
ALTER TABLE `telefone`
  ADD CONSTRAINT `fk_telefone_eletronico1` FOREIGN KEY (`ideletronico`,`idartigo`) REFERENCES `eletronico` (`ideletronico`, `idartigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
