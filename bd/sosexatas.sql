-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Ago-2021 às 18:45
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sosexatas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `amizade`
--

CREATE TABLE `amizade` (
  `fk_Usuario_id` int(11) NOT NULL,
  `fk_Usuario_id_` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avatar`
--

CREATE TABLE `avatar` (
  `idAvatar` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endImg` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `avatar`
--

INSERT INTO `avatar` (`idAvatar`, `nome`, `endImg`) VALUES
(1, 'Linus', 'avatar01.png'),
(2, 'Guida', 'avatar02.png'),
(3, 'Sheldon', 'avatar03.png'),
(4, 'Gauss', 'avatar04.png'),
(5, 'Kobrinha', 'avatar05.png'),
(6, 'Gelado', 'avatar06.png'),
(7, 'Marie', 'avatar07.png'),
(8, 'Bicudo', 'avatar08.png'),
(9, 'Aladinha', 'avatar09.png'),
(10, 'Galileu', 'avatar10.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `idDisc` int(11) NOT NULL,
  `nomeDisc` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`idDisc`, `nomeDisc`) VALUES
(1, 'Cálculo 1'),
(2, 'GASL'),
(3, 'Algoritmos'),
(4, 'Física 1'),
(9, 'Álgebra Linear'),
(10, 'Lab de ICF'),
(11, 'Lab de Química');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materialdidatico`
--

CREATE TABLE `materialdidatico` (
  `idMat` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `endArq` varchar(150) NOT NULL,
  `fk_Topico_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `materialdidatico`
--

INSERT INTO `materialdidatico` (`idMat`, `nome`, `endArq`, `fk_Topico_id`) VALUES
(1, 'Material Teórico Def. Limites', 'limites.pdf', 3),
(3, 'Material X', 'teste.txt', 1);

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
(4, '2021_06_27_235825_create_amizade_table', 0),
(5, '2021_06_27_235825_create_avatar_table', 0),
(6, '2021_06_27_235825_create_disciplina_table', 0),
(7, '2021_06_27_235825_create_materialdidatico_table', 0),
(8, '2021_06_27_235825_create_pergunta_table', 0),
(9, '2021_06_27_235825_create_quiz_table', 0),
(10, '2021_06_27_235825_create_realiza_table', 0),
(11, '2021_06_27_235825_create_responde_table', 0),
(12, '2021_06_27_235825_create_subtopico_table', 0),
(13, '2021_06_27_235825_create_topico_table', 0),
(14, '2021_06_27_235825_create_usu_quiz_realiza_table', 0),
(15, '2021_06_27_235825_create_usuario_table', 0),
(16, '2021_06_27_235826_add_foreign_keys_to_amizade_table', 0),
(17, '2021_06_27_235826_add_foreign_keys_to_materialdidatico_table', 0),
(18, '2021_06_27_235826_add_foreign_keys_to_pergunta_table', 0),
(19, '2021_06_27_235826_add_foreign_keys_to_quiz_table', 0),
(20, '2021_06_27_235826_add_foreign_keys_to_realiza_table', 0),
(21, '2021_06_27_235826_add_foreign_keys_to_responde_table', 0),
(22, '2021_06_27_235826_add_foreign_keys_to_subtopico_table', 0),
(23, '2021_06_27_235826_add_foreign_keys_to_topico_table', 0),
(24, '2021_06_27_235826_add_foreign_keys_to_usu_quiz_realiza_table', 0),
(25, '2021_06_27_235826_add_foreign_keys_to_usuario_table', 0),
(26, '2014_10_12_000000_create_users_table', 1),
(27, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(28, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(29, '2021_06_29_005654_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

CREATE TABLE `pergunta` (
  `idPerg` int(11) NOT NULL,
  `enunciado` text NOT NULL,
  `opc1` text NOT NULL,
  `opc2` text NOT NULL,
  `opc3` text DEFAULT NULL,
  `opc4` text DEFAULT NULL,
  `opc5` text DEFAULT NULL,
  `resposta` int(11) NOT NULL,
  `fk_Quiz_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pergunta`
--

INSERT INTO `pergunta` (`idPerg`, `enunciado`, `opc1`, `opc2`, `opc3`, `opc4`, `opc5`, `resposta`, `fk_Quiz_id`) VALUES
(1, 'Pergunta 02', 'AA', 'BB', 'CC', 'DD', NULL, 4, 1),
(2, 'Esse enunciado é real?', 'Verdadeiro', 'Falso', NULL, NULL, NULL, 1, 2),
(3, 'Pergunta 02', 'AA', 'BB', 'CC', 'DD', 'EE', 5, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `quiz`
--

CREATE TABLE `quiz` (
  `idQuiz` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `fk_Topico_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `quiz`
--

INSERT INTO `quiz` (`idQuiz`, `nome`, `fk_Topico_id`) VALUES
(1, 'Teste de Nivelamento', 1),
(2, 'Teste Rápido', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `realiza`
--

CREATE TABLE `realiza` (
  `fk_Usuario_id` int(11) NOT NULL,
  `fk_Disciplina_id` int(11) NOT NULL,
  `desempenho` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `realiza`
--

INSERT INTO `realiza` (`fk_Usuario_id`, `fk_Disciplina_id`, `desempenho`) VALUES
(1, 1, 8),
(1, 3, 6),
(1, 2, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `responde`
--

CREATE TABLE `responde` (
  `fk_Pergunta_id` int(11) NOT NULL,
  `resposta` int(11) NOT NULL,
  `correto` tinyint(1) NOT NULL,
  `fk_tentativa` int(11) NOT NULL,
  `fk_Usuario_id` int(11) NOT NULL,
  `fk_Quiz_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `subtopico`
--

CREATE TABLE `subtopico` (
  `idSubTop` int(11) NOT NULL,
  `nomeSubTop` varchar(150) NOT NULL,
  `fk_Topico_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `subtopico`
--

INSERT INTO `subtopico` (`idSubTop`, `nomeSubTop`, `fk_Topico_id`) VALUES
(1, 'Equações Simples', 1),
(2, 'Inequações', 1),
(3, 'Equação II Grau', 1),
(8, 'Inequações', 1),
(9, 'SubTópico H', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `topico`
--

CREATE TABLE `topico` (
  `idTop` int(11) NOT NULL,
  `nomeTop` varchar(150) NOT NULL,
  `fk_Disciplina_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `topico`
--

INSERT INTO `topico` (`idTop`, `nomeTop`, `fk_Disciplina_id`) VALUES
(1, 'Capitulo 0', 1),
(3, 'Capitulo 1', 1),
(6, 'Topico ZA', 1),
(7, 'Topico AZ', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `nick` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `level` int(11) DEFAULT 0,
  `xp` bigint(20) DEFAULT 0,
  `rua` varchar(150) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(20) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(150) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `tipo` int(11) NOT NULL,
  `fk_Avatar_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `nick`, `cpf`, `email`, `senha`, `tel`, `level`, `xp`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `tipo`, `fk_Avatar_id`) VALUES
(1, 'André', '@Reis', '08354454029', 'teste@gmail.com', '123', '35999999999', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(2, 'Daniel', '@Baeta', '30378595040', 'opa@gmail.com', '123', '35999999999', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(3, 'Gabriel', '@Rezende', '86531065028', 'galera@gmail.com', '123', '35999999999', 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(5, 'Teste Aopa', 'ReisAB-12', '12345678901', 'eu@eu.com', '1234567a', '11111111111', 5, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(6, 'Dollynho - Seu amiguinho', 'Te1452-', '13679242603', 'andreluiz.dosreis.mg@gmail.com', '1234567b', '35988524311', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usu_quiz_realiza`
--

CREATE TABLE `usu_quiz_realiza` (
  `tentativa` int(11) NOT NULL,
  `fk_Usuario_id` int(11) NOT NULL,
  `fk_Quiz_id` int(11) NOT NULL,
  `nota` float NOT NULL,
  `data` date NOT NULL,
  `tempoGasto` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `amizade`
--
ALTER TABLE `amizade`
  ADD KEY `FK_Amizade_1` (`fk_Usuario_id`),
  ADD KEY `FK_Amizade_2` (`fk_Usuario_id_`);

--
-- Índices para tabela `avatar`
--
ALTER TABLE `avatar`
  ADD PRIMARY KEY (`idAvatar`);

--
-- Índices para tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`idDisc`);

--
-- Índices para tabela `materialdidatico`
--
ALTER TABLE `materialdidatico`
  ADD PRIMARY KEY (`idMat`),
  ADD KEY `FK_MaterialDidatico_1` (`fk_Topico_id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pergunta`
--
ALTER TABLE `pergunta`
  ADD PRIMARY KEY (`idPerg`),
  ADD KEY `FK_Pergunta_2` (`fk_Quiz_id`);

--
-- Índices para tabela `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`idQuiz`),
  ADD KEY `fk_topico_id` (`fk_Topico_id`);

--
-- Índices para tabela `realiza`
--
ALTER TABLE `realiza`
  ADD KEY `FK_Realiza_1` (`fk_Usuario_id`),
  ADD KEY `FK_Realiza_2` (`fk_Disciplina_id`);

--
-- Índices para tabela `responde`
--
ALTER TABLE `responde`
  ADD PRIMARY KEY (`fk_Pergunta_id`,`fk_tentativa`,`fk_Usuario_id`,`fk_Quiz_id`),
  ADD KEY `FK_Responde_4` (`fk_tentativa`),
  ADD KEY `FK_Responde_5` (`fk_Usuario_id`),
  ADD KEY `FK_Responde_6` (`fk_Quiz_id`);

--
-- Índices para tabela `subtopico`
--
ALTER TABLE `subtopico`
  ADD PRIMARY KEY (`idSubTop`),
  ADD KEY `FK_Subtopico_2` (`fk_Topico_id`);

--
-- Índices para tabela `topico`
--
ALTER TABLE `topico`
  ADD PRIMARY KEY (`idTop`),
  ADD KEY `FK_Topico_2` (`fk_Disciplina_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `cpf` (`cpf`,`email`),
  ADD KEY `FK_Usuario_2` (`fk_Avatar_id`);

--
-- Índices para tabela `usu_quiz_realiza`
--
ALTER TABLE `usu_quiz_realiza`
  ADD PRIMARY KEY (`tentativa`,`fk_Usuario_id`,`fk_Quiz_id`),
  ADD KEY `FK_Usu_Quiz_Realiza_2` (`fk_Usuario_id`),
  ADD KEY `FK_Usu_Quiz_Realiza_3` (`fk_Quiz_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avatar`
--
ALTER TABLE `avatar`
  MODIFY `idAvatar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `idDisc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `materialdidatico`
--
ALTER TABLE `materialdidatico`
  MODIFY `idMat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `idPerg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `quiz`
--
ALTER TABLE `quiz`
  MODIFY `idQuiz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `subtopico`
--
ALTER TABLE `subtopico`
  MODIFY `idSubTop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `topico`
--
ALTER TABLE `topico`
  MODIFY `idTop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usu_quiz_realiza`
--
ALTER TABLE `usu_quiz_realiza`
  MODIFY `tentativa` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `amizade`
--
ALTER TABLE `amizade`
  ADD CONSTRAINT `FK_Amizade_1` FOREIGN KEY (`fk_Usuario_id`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `FK_Amizade_2` FOREIGN KEY (`fk_Usuario_id_`) REFERENCES `usuario` (`idUsuario`);

--
-- Limitadores para a tabela `materialdidatico`
--
ALTER TABLE `materialdidatico`
  ADD CONSTRAINT `FK_MaterialDidatico_1` FOREIGN KEY (`fk_Topico_id`) REFERENCES `topico` (`idTop`);

--
-- Limitadores para a tabela `pergunta`
--
ALTER TABLE `pergunta`
  ADD CONSTRAINT `FK_Pergunta_2` FOREIGN KEY (`fk_Quiz_id`) REFERENCES `quiz` (`idQuiz`);

--
-- Limitadores para a tabela `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `fk_topico_id` FOREIGN KEY (`fk_Topico_id`) REFERENCES `topico` (`idTop`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `realiza`
--
ALTER TABLE `realiza`
  ADD CONSTRAINT `FK_Realiza_1` FOREIGN KEY (`fk_Usuario_id`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `FK_Realiza_2` FOREIGN KEY (`fk_Disciplina_id`) REFERENCES `disciplina` (`idDisc`);

--
-- Limitadores para a tabela `responde`
--
ALTER TABLE `responde`
  ADD CONSTRAINT `FK_Responde_1` FOREIGN KEY (`fk_Pergunta_id`) REFERENCES `pergunta` (`idPerg`),
  ADD CONSTRAINT `FK_Responde_4` FOREIGN KEY (`fk_tentativa`) REFERENCES `usu_quiz_realiza` (`tentativa`),
  ADD CONSTRAINT `FK_Responde_5` FOREIGN KEY (`fk_Usuario_id`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `FK_Responde_6` FOREIGN KEY (`fk_Quiz_id`) REFERENCES `quiz` (`idQuiz`);

--
-- Limitadores para a tabela `subtopico`
--
ALTER TABLE `subtopico`
  ADD CONSTRAINT `FK_Subtopico_2` FOREIGN KEY (`fk_Topico_id`) REFERENCES `topico` (`idTop`);

--
-- Limitadores para a tabela `topico`
--
ALTER TABLE `topico`
  ADD CONSTRAINT `FK_Topico_2` FOREIGN KEY (`fk_Disciplina_id`) REFERENCES `disciplina` (`idDisc`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_Usuario_2` FOREIGN KEY (`fk_Avatar_id`) REFERENCES `avatar` (`idAvatar`);

--
-- Limitadores para a tabela `usu_quiz_realiza`
--
ALTER TABLE `usu_quiz_realiza`
  ADD CONSTRAINT `FK_Usu_Quiz_Realiza_2` FOREIGN KEY (`fk_Usuario_id`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `FK_Usu_Quiz_Realiza_3` FOREIGN KEY (`fk_Quiz_id`) REFERENCES `quiz` (`idQuiz`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
