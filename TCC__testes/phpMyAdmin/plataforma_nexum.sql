-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Set-2024 às 13:43
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `plataforma_nexum`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `nomeProfessor` varchar(255) NOT NULL,
  `cpfProfessor` char(11) NOT NULL,
  `senhaProfessor` varchar(255) NOT NULL,
  `emailProfessor` varchar(255) NOT NULL,
  `sexoProfessor` enum('feminino','masculino','outro') NOT NULL,
  `cidadeProfessor` varchar(255) NOT NULL,
  `estadoProfessor` char(2) NOT NULL,
  `disciplinaProfessor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nomeProfessor`, `cpfProfessor`, `senhaProfessor`, `emailProfessor`, `sexoProfessor`, `cidadeProfessor`, `estadoProfessor`, `disciplinaProfessor`) VALUES
(1, 'tchau', '33935856067', '$2y$10$i69zp7c2pImCJuvIhF6ycO3fdOrRlnqoZs4Q3cHosEw4ERKBgsHb.', 'tchauB@gmail.com', 'masculino', 'Bauru', 'Sã', 'Programação'),
(5, 'tchauBom', '3393580612', '$2y$10$r3p6YFv6JufONtSw6b2a9eY9SHXa.4lT9i23AWZJCJlourXWjOdi6', 'tchauBem@gmail.com', 'feminino', 'Bauru', 'Sã', 'Doida');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexo` enum('feminino','masculino','outro') NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `data_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `senha`, `email`, `sexo`, `cidade`, `estado`, `data_registro`) VALUES
(1, 'Cibeli Cristina Pelegrino', '490.010.618-69', '$2y$10$vKnr5L5yoVWPIgvWs.F.HuKe6zuoBeLs1TjdkUPSW4IXIY8Xu6RNa', 'carima2720@uorak.com', 'masculino', 'Bauru', 'SP', '2024-08-01 20:56:21'),
(3, 'Luis Fernando', '770.509.538-65', '$2y$10$HZrZX8JHHiNgbZmKMrkJfOBzSNzNzpnujkjP7Pg66a69.ZVTNzNxO', 'toufiq4418@uorak.com', 'masculino', 'Bauru', 'SP', '2024-08-01 20:58:27'),
(4, 'Fernando', '670.509.538-64', '$2y$10$DAoYpl1LtC3P2px96.qtdu9eepK4ol/f3CA/BDvoTlQKtceZFy5OCa', 'tojfiq4418@uorak.com', 'masculino', 'Bauru', 'SP', '2024-08-01 21:10:13'),
(7, 'Kaue', '770.509.428-65', '$2y$10$0m6b3m2y/toqGJG9AGgT4udzBer.Nl8Zp.bjLfG2PxkHpG0VU4dme', 'Kaueregianiramos002@gmail.com', 'masculino', 'Bauru', 'São Paulo', '2024-08-01 21:53:12');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpfProfessor` (`cpfProfessor`),
  ADD UNIQUE KEY `emailProfessor` (`emailProfessor`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
