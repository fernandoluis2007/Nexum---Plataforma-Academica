-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Out-2024 às 23:35
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

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
-- Estrutura da tabela `events_agenda`
--

CREATE TABLE `events_agenda` (
  `id` int(11) NOT NULL,
  `title` varchar(90) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(10) NOT NULL,
  `start` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `end` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `events_agenda`
--

INSERT INTO `events_agenda` (`id`, `title`, `description`, `color`, `start`, `end`) VALUES
(1, 'Troca de turno', 'esse evento é uma troca de turno', 'red', '2024-09-11 02:36:12', '2024-09-13 02:36:12.000000'),
(9, 'Brasil x Equador', 'fudeu', 'blue', '2024-09-07 01:00:00', '2024-09-07 03:00:00.000000'),
(11, 'fasfasf', 'asfasfa', 'blue', '2024-09-19 13:30:00', '2024-09-19 15:30:00.000000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notaalunos`
--

CREATE TABLE `notaalunos` (
  `id` int(11) NOT NULL,
  `Primeira_Avaliação` float NOT NULL,
  `Segunda_Avaliação` float NOT NULL,
  `Terceira_Avaliação` float NOT NULL,
  `Prova_Final` float NOT NULL,
  `Nome_Aluno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `notaalunos`
--

INSERT INTO `notaalunos` (`id`, `Primeira_Avaliação`, `Segunda_Avaliação`, `Terceira_Avaliação`, `Prova_Final`, `Nome_Aluno`) VALUES
(9, 5, 2, 8, 10, 'Louis');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nomeProfessor`, `cpfProfessor`, `senhaProfessor`, `emailProfessor`, `sexoProfessor`, `cidadeProfessor`, `estadoProfessor`, `disciplinaProfessor`) VALUES
(1, 'tchau', '33935856067', '$2y$10$i69zp7c2pImCJuvIhF6ycO3fdOrRlnqoZs4Q3cHosEw4ERKBgsHb.', 'tchauB@gmail.com', 'masculino', 'Bauru', 'Sã', 'Programação'),
(5, 'tchauBom', '3393580612', '$2y$10$r3p6YFv6JufONtSw6b2a9eY9SHXa.4lT9i23AWZJCJlourXWjOdi6', 'tchauBem@gmail.com', 'feminino', 'Bauru', 'Sã', 'Doida'),
(6, 'bob', '3153512', '$2y$10$5UTmKSuusQQ3XIVejDJjjeeUfz4O3kJ52Hi26VF8n4ELeq2LTLrYy', 'bob@gmail.com', 'masculino', 'Bauru', 'Sã', 'Matematica'),
(7, 'Charton', '2665833', '$2y$10$mVAJdKnjQDA9HRVSU8qfk..2bGoXEcBzSjeLLVv1FFOdCLyYJEbpa', 'Charton@gmail.com', 'masculino', 'Bauru', 'Sã', 'nao sei'),
(8, 'dsa', 'asdas', '$2y$10$nm6tMRnUE8jJ9w4ux/uD.eGZjLX4wcus9I9KS1L6uoNmN/2k85k72', 'asd@gmail.com', 'feminino', 'dasda', 'ad', 'das'),
(9, 'Caleri', '2665833513', '$2y$10$BVqVSF9u30gAF7UB3Lm1beRckBNpdOtiJypLhmU/UwHVzL5kGJlMW', 'Caleri@gmail.com', 'masculino', 'Bauru', 'Sã', 'Educacao Fisca'),
(12, 'kaz', '2665833586', '$2y$10$kjbuhYMA2585eTVuEebmx.rYCk4AOI7yz.RDoKvkXc6o7gQxoty8a', 'kaz@gmail.com', 'masculino', 'Bauru', 'Sã', 'Ciencia'),
(13, 'DUDU', '15531566', '$2y$10$8u00Bu/n9Bu3SBm4dxM0kegd.QxJaLnij09YN2bGEuVJUKkQFv.Vq', 'dudu@gmail.com', 'masculino', 'Bauru', 'Sã', 'fisica'),
(14, 'Cibeli', '15531563', '$2y$10$DstNgqII1d1z34ginUMz1eao833JUS6snb2RHfw8pqFieY3dCRhAu', 'Cibeli@gmail.com', 'feminino', 'Bauru', 'Sã', 'Portugues');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `senha`, `email`, `sexo`, `cidade`, `estado`, `data_registro`) VALUES
(1, 'Cibeli Cristina Pelegrino', '490.010.618-69', '$2y$10$vKnr5L5yoVWPIgvWs.F.HuKe6zuoBeLs1TjdkUPSW4IXIY8Xu6RNa', 'carima2720@uorak.com', 'masculino', 'Bauru', 'SP', '2024-08-01 17:56:21'),
(3, 'Luis Fernando', '770.509.538-65', '$2y$10$HZrZX8JHHiNgbZmKMrkJfOBzSNzNzpnujkjP7Pg66a69.ZVTNzNxO', 'toufiq4418@uorak.com', 'masculino', 'Bauru', 'SP', '2024-08-01 17:58:27'),
(4, 'Fernando', '670.509.538-64', '$2y$10$DAoYpl1LtC3P2px96.qtdu9eepK4ol/f3CA/BDvoTlQKtceZFy5OCa', 'tojfiq4418@uorak.com', 'masculino', 'Bauru', 'SP', '2024-08-01 18:10:13'),
(7, 'Kaue', '770.509.428-65', '$2y$10$0m6b3m2y/toqGJG9AGgT4udzBer.Nl8Zp.bjLfG2PxkHpG0VU4dme', 'Kaueregianiramos002@gmail.com', 'masculino', 'Bauru', 'São Paulo', '2024-08-01 18:53:12'),
(8, 'Bob', '770.519.568-45', '$2y$10$XNKKas0//X1dECWKmpeeQe6g5JYxcQZWbAFOEbRvsO/ktnI4Ye0Sa', 'tffsfiq4418@uorak.com', 'masculino', 'Bauru', 'São Paulo', '2024-08-03 04:43:10'),
(9, 'Eve', '770.509.428-02', '$2y$10$tMAM8t1iK3wq2z6VXc3aKu.Ab0.9.f6baZG6PclxHLoPTDFnve266', 'BQKjsU@gmail.com', 'feminino', 'Bauru', 'São Paulo', '2024-08-12 21:45:57');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `events_agenda`
--
ALTER TABLE `events_agenda`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `notaalunos`
--
ALTER TABLE `notaalunos`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de tabela `events_agenda`
--
ALTER TABLE `events_agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `notaalunos`
--
ALTER TABLE `notaalunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
