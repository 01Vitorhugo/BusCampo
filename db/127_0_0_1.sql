-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Jun-2023 às 02:13
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_buscampo`
--
CREATE DATABASE IF NOT EXISTS `bd_buscampo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `bd_buscampo`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `id_categoria` int(11) NOT NULL,
  `desc_categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_categoria`
--

INSERT INTO `tb_categoria` (`id_categoria`, `desc_categoria`) VALUES
(1, 'Futebol'),
(2, 'Futsal'),
(3, 'Basquete'),
(4, 'Vôlei'),
(5, 'Poliesportiva'),
(6, 'Areia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_locador`
--

CREATE TABLE `tb_locador` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `doc` varchar(20) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `imagem` varchar(60) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_locador`
--

INSERT INTO `tb_locador` (`id_cliente`, `nome_cliente`, `email`, `doc`, `telefone`, `imagem`, `senha`) VALUES
(2, 'Jorge Quebra Mola', 'jorginhodelas@gmail.com', '', '11940028922', '', '202cb962ac59075b964b07152d234b70'),
(3, 'Gustavo Henrique', 'gustavo329886@gmail.com', '414124124', '1414214', '', '202cb962ac59075b964b07152d234b70'),
(4, 'José', 'joselindo@gmail.com', '123445', '1341414', '', '202cb962ac59075b964b07152d234b70'),
(5, 'Pabllo Vittar', 'pabllonoitada@gmail.com', '10390466277', '117762883928', '', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Vitor Hugo', 'vitorhhugo0031@gmail.com', '112323734', '112223890274238', '', '202cb962ac59075b964b07152d234b70'),
(7, 'Bianca', 'bia@email.com', '123', '40028922', '', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_local`
--

CREATE TABLE `tb_local` (
  `id_local` int(11) NOT NULL,
  `nome_local` varchar(40) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `desc_local` varchar(70) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `img1` varchar(60) NOT NULL,
  `img2` varchar(60) NOT NULL,
  `img3` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_local`
--

INSERT INTO `tb_local` (`id_local`, `nome_local`, `id_categoria`, `desc_local`, `telefone`, `cep`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `id_cliente`, `img1`, `img2`, `img3`) VALUES
(1, 'Quadra Futsal', 1, 'Bater aquela bolinha de cria', '11940028922', '08485430', 'Avenida Jabaquara', 0, 'Jabaquara', 'São Paulo', 'SP', 2, 'imgsquadras/765ccd5d13a6d7fa8d08396a5b11fa84.jpg', 'imgsquadras/765ccd5d13a6d7fa8d08396a5b11fa84.jpg', ''),
(2, 'Mário kart quadras', 2, 'Melhor lugar pra tirar a ponta do dedo', '123123421', '48500000', 'R. Antônio Andrade Souza', 10, 'Euclides da Cunha', 'Salvador', 'BA', 4, 'imgsquadras/3a97d149928a59eb30713eaf3194f16f.jpg', 'imgsquadras/3a97d149928a59eb30713eaf3194f16f.jpg', ''),
(17, 'Quadrinha', 3, 'de areia', '1111222', '24900355', 'Rua José Alves da Costa', 123, 'Centro', 'Maricá', 'RJ', 3, 'imgsquadras/0339be6c103e396db084949d7c8b85c2.jpg', 'imgsquadras/0339be6c103e396db084949d7c8b85c2.jpg', ''),
(19, 'Quadra de Areia Itapevi', 6, 'Areia e Alegria nos pés', '40028922', '08260220', 'Rua Alfredo Catalani', 31, 'Jardim Cibele', 'São Paulo', 'SP', 3, 'imgsquadras/71592b0a764c32244d6b6a084f36ae84.jpg', 'imgsquadras/71592b0a764c32244d6b6a084f36ae84.jpg', ''),
(20, 'Liberdade FC', 1, 'Campo de Futebol', '11967169254', '08260-005', 'Avenida Jacu-Pêssego', 0, 'José Bonifácio', 'São Paulo', 'SP', 3, 'imgsquadras/b089319b7a9832c72745ca8ec22485e4.jpg', 'imgsquadras/5a179684fd0d8ec0cefedb6131839657.jpg', ''),
(21, 'Grêmio Botafogo', 1, 'Ceu Jambeiro ', '119873652', ' 08420-09', 'Avenida José Pinheiro Borges', 0, 'Jardim Helena', 'São Paulo', 'SP', 3, 'imgsquadras/da475d9dc8b9e7a2b11b9b83f3165503.jpg', 'imgsquadras/ea9f73b236881b2761fcc58db22ea306.jpg', ''),
(22, 'Praça Da Cohab', 1, 'Campo de Futebol', '678653721', '79071-320', 'Avenida Pedro Paulo Soares de Oliveira', 0, 'Núcleo Habitacional Universitárias', 'Campo Grande', 'MS', 3, 'imgsquadras/d818c0c84f99c7caa3af33839a0316bf.jpg', 'imgsquadras/602f3ab26d2d04fca0c78c39e82cffc9.jpg', ''),
(25, 'Campo do Sedex', 1, 'CDC Cidade Tiradentes', '11908290220', '08411-400', 'Estrada Santa Etelvina', 0, 'Vila Marilena', 'São Paulo', 'SP', 6, 'imgsquadras/3408314943c3d575a42b6733eff21783.jpg', 'imgsquadras/092dea2086565f2191586b6583366a1a.jpg', ''),
(27, 'Campo do Santos', 1, 'CDC Águia de Haia', '1197653523', '03693-160', 'Rua Pierre Fermat', 0, 'Jardim Coimbra', 'São Paulo', 'SP', 6, 'imgsquadras/3e984b4f39fadaaf4215c1e0e9c0f320.jpg', 'imgsquadras/735ee72ac5928753a74bbbdc92c8d3e5.jpg', ''),
(28, 'Mega Play ', 1, 'Society', '112332423423424', '08290-430', 'Rua Capitania de Itamaracá', 0, 'Vila Carmosina', 'São Paulo', 'SP', 6, 'imgsquadras/fe9a2bf04da485a0fd86d57fa4759415.jpg', 'imgsquadras/1a6cebc6eee807c90d5697b32e82c054.jpg', ''),
(29, 'Fênix', 2, 'Fênix Futsal', '114564563454', '08230-020', 'Rua Francisco Rodrigues Seckler', 0, 'Vila Taquari', 'São Paulo', 'SP', 6, 'imgsquadras/3d08be807d63c6b153f6e69d26b929fa.jpg', 'imgsquadras/897692c84bda49844475363fe4805adb.jpg', ''),
(30, 'Arena sem opção ', 2, 'Quadra sem opção', '119873234', '03566-010', 'Rua Henrique Jacobs', 0, 'Vila Santa Teresa (Zona Leste)', 'São Paulo', 'SP', 6, 'imgsquadras/d4545201f60d546df8f9131f70fec964.jpg', 'imgsquadras/19adcb58e949c41372a91d0ba67a3d6d.jpg', ''),
(34, 'ADVM3 Vôlei Escola Mãozinha', 4, 'Vôlei ball', '119655234243424', ' 02631-00', 'Avenida Santa Inês', 0, 'Jardim Peri', 'São Paulo', 'SP', 6, 'imgsquadras/745cf8e62a68fe69d258b8fa17a90cc1.jpg', 'imgsquadras/86009f3239f2d46448987e9f391961db.jpg', ''),
(35, 'Esporte Clube AJR Voleibol/Cebasp', 4, 'Clube AJ', '119082354323', '03244-090', 'Rua Jacitara Tipiti', 0, 'Jardim Guairaca', 'São Paulo', 'SP', 6, 'imgsquadras/d2143cfd343f1060809dfb7571e31711.jpg', 'imgsquadras/495f4281dfb643e8cf541f0226ea00af.jpg', ''),
(36, 'Relíquias Esportes - Voleibol', 4, 'Voleibol', '9085345234', '03638-000', 'Rua São Serafim', 0, 'Penha de França', 'São Paulo', 'SP', 6, 'imgsquadras/54f8ad91cde04ec8374fa04f21662e0a.jpg', 'imgsquadras/01297740a6fd2dbe76e38ec54cba1e9b.jpg', ''),
(37, 'Quadra da Caititu', 3, 'Caititu', '119873343', '08223-000', 'Avenida Caititu', 0, 'Cidade Antônio Estevão de Carvalho', 'São Paulo', 'SP', 6, 'imgsquadras/f42c200e9e09c492db4300ade7cf13a2.jpg', 'imgsquadras/6175147f662b9f1266f91fd7b9fbee36.jpg', ''),
(38, 'Quadra Basquete Tiquatira', 3, 'Quadra tiquatira', '1198734234', '03608-000', 'Rua Senador Godói', 0, 'Vila São Geraldo', 'São Paulo', 'SP', 6, 'imgsquadras/e8ebd7a3cc134a45e529dda7fed3a7f4.jpg', 'imgsquadras/6f696158f083319dd488fe0c4599bc3d.jpg', ''),
(40, 'Quadra de Basquete', 3, 'Quadra José Mariano', '4421235445', '02030-100', 'Avenida Cruzeiro do Sul', 0, 'Canindé', 'São Paulo', 'SP', 6, 'imgsquadras/79282219853f03b35dbde1f9b0e0a225.jpg', 'imgsquadras/56aea527a960aad6b2902512c6959c1e.jpg', ''),
(41, 'Gão Basquetebol', 3, 'Gão', '1152345435234', '03337-000', 'Rua Eleonora Cintra', 0, 'Jardim Anália Franco', 'São Paulo', 'SP', 6, 'imgsquadras/b64efcdd5be408c14642a8326bffd090.jpg', 'imgsquadras/d8db53ba1d26ab3c32da7c150c9691de.jpg', ''),
(42, 'Quadra de Basquete - R. Mooca', 3, 'Basquete - Mooca', '116223454634', '03104-003', 'Rua da Mooca', 0, 'Mooca', 'São Paulo', 'SP', 6, 'imgsquadras/cfb4ff94078ebc463af7b9c61693f573.jpg', 'imgsquadras/8a8f7add2823f41c908f9dc3b38d52f9.jpg', ''),
(43, 'Praia Paulista Esportes de Areia', 6, 'Praia Paulista Esportes', '1134234234', '02067-000', 'Rua Chico Pontes', 0, 'Carandiru', 'São Paulo', 'SP', 6, 'imgsquadras/62d320803013dc6953811e5a7b9983b0.jpg', 'imgsquadras/1607c6484b2e8a9b71d868444430f5bd.jpg', ''),
(46, 'Arena 90', 6, 'Arena', '11223434234', ' 03350-11', 'Rua General Argolo', 0, 'Vila Invernada', 'São Paulo', 'SP', 6, 'imgsquadras/cf82a02edb595875b57f7cfe886fa04b.jpg', 'imgsquadras/5c57dba41ef611cd92d8124643d0bc24.jpg', ''),
(47, 'Arena Tatuapraia', 6, ' Tatuapraia', '11546334234', '03085-010', 'Rua São Felipe', 0, 'Parque São Jorge', 'Parque São Jorge', 'SP', 6, 'imgsquadras/f779e3d3aff0490027ded608342b3cee.jpg', 'imgsquadras/8978b239e7347353f7808fa07e9950fa.jpg', ''),
(49, 'Areia - CGH', 6, 'Areião', '11743523423', ' 04072-09', 'Rua Vieira do Minho', 0, 'Planalto Paulista', 'São Paulo', 'SP', 6, 'imgsquadras/d19c56ae27316097fee727004050c7de.jpg', 'imgsquadras/f61f913872ded4829e3de886b5751919.jpg', ''),
(51, 'Praiaki Beach Sports - Esportes na areia', 6, 'Esportes na areia', '1123341324231', '04571-210', 'Rua Rio da Prata', 0, 'Cidade Monções', 'São Paulo', 'SP', 6, 'imgsquadras/6db99d5fd03e546cce360011a8016229.jpg', 'imgsquadras/17e67d95aae6db3b54fe8223f99af274.jpg', ''),
(52, 'RM Quadras Esportivas', 5, 'RM', '1132423545', ' 03689-01', 'Rua Cajupiranga', 0, 'Jardim Nordeste', 'São Paulo', 'SP', 6, 'imgsquadras/064834d639b1e0927f92cbfe8c3c0925.jpg', 'imgsquadras/450ef9acc4230f0004b0c196a8c6a577.jpg', ''),
(53, 'LÍDER CONSTRUÇÃO ESPORTIVA', 5, 'LÍDER   ESPORTIVA', '1156754344566', '08280-110', 'Rua do Cádmio', 0, 'Cidade Líder', 'São Paulo', 'SP', 6, 'imgsquadras/f5cb649a094afc0a08d6ae713cdbcc0c.jpg', 'imgsquadras/97c5a498b587ad498a28625b2485df85.jpg', ''),
(55, 'CONSUL QUADRAS', 5, 'CONSUL QUADRAS', '11212312431234', '03463-050', 'Rua Felício Pereira', 0, 'Jardim Piqueroby', 'São Paulo', 'SP', 6, 'imgsquadras/e6834c4c9e165bb644d9545019a3b60b.jpg', 'imgsquadras/cf32467209d2863aa847172de63b441d.jpg', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_locatario`
--

CREATE TABLE `tb_locatario` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `imagem` varchar(60) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_locatario`
--

INSERT INTO `tb_locatario` (`id_cliente`, `nome_cliente`, `email`, `imagem`, `senha`) VALUES
(1, 'Breno', 'breno.oliveira79@gmail.com', '', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Joao', 'jojinhodelas@gmail.com', '', '202cb962ac59075b964b07152d234b70'),
(3, 'João', 'joaozinho@email.com', '', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `tb_locador`
--
ALTER TABLE `tb_locador`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `tb_local`
--
ALTER TABLE `tb_local`
  ADD PRIMARY KEY (`id_local`),
  ADD KEY `FK_Locador_Id_Cliente` (`id_cliente`),
  ADD KEY `FK_Categoria_Id_Categoria` (`id_categoria`);

--
-- Índices para tabela `tb_locatario`
--
ALTER TABLE `tb_locatario`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_locador`
--
ALTER TABLE `tb_locador`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_local`
--
ALTER TABLE `tb_local`
  MODIFY `id_local` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de tabela `tb_locatario`
--
ALTER TABLE `tb_locatario`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_local`
--
ALTER TABLE `tb_local`
  ADD CONSTRAINT `FK_Categoria_Id_Categoria` FOREIGN KEY (`id_categoria`) REFERENCES `tb_categoria` (`id_categoria`),
  ADD CONSTRAINT `FK_Locador_Id_Cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tb_locador` (`id_cliente`);
--
-- Banco de dados: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Extraindo dados da tabela `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"relation_lines\":\"true\",\"snap_to_grid\":\"off\",\"angular_direct\":\"direct\"}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Extraindo dados da tabela `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"bd_buscampo\",\"table\":\"tb_locatario\"},{\"db\":\"bd_buscampo\",\"table\":\"tb_locador\"},{\"db\":\"bd_buscampo\",\"table\":\"tb_local\"},{\"db\":\"bd_buscampo\",\"table\":\"tb_categoria\"},{\"db\":\"bd_buscampo\",\"table\":\"tb_estado\"}]');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

--
-- Extraindo dados da tabela `pma__table_info`
--

INSERT INTO `pma__table_info` (`db_name`, `table_name`, `display_field`) VALUES
('bd_buscampo', 'tb_local', 'nome_local');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Extraindo dados da tabela `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'bd_buscampo', 'tb_locador', '[]', '2023-05-31 22:41:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(10) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Extraindo dados da tabela `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2023-06-04 00:13:40', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"pt\"}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Índices para tabela `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Índices para tabela `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Índices para tabela `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Índices para tabela `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Índices para tabela `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Índices para tabela `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Índices para tabela `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Índices para tabela `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Índices para tabela `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Índices para tabela `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Índices para tabela `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Índices para tabela `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Índices para tabela `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Índices para tabela `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Índices para tabela `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Índices para tabela `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Banco de dados: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
