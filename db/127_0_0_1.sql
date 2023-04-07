-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Abr-2023 às 17:02
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
(5, 'Poliesportiva');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_estado`
--

CREATE TABLE `tb_estado` (
  `id_estado` int(11) NOT NULL,
  `sigla_estado` varchar(2) NOT NULL,
  `nome_estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_estado`
--

INSERT INTO `tb_estado` (`id_estado`, `sigla_estado`, `nome_estado`) VALUES
(1, 'AC', 'Acre'),
(2, 'AL', 'Alagoas'),
(3, 'AP', 'Amapá'),
(4, 'AM', 'Amazonas'),
(5, 'BA', 'Bahia'),
(6, 'CE', 'Ceará'),
(7, 'ES', 'Espírito Santo'),
(8, 'GO', 'Goiás'),
(9, 'MA', 'Maranhão'),
(10, 'MT', 'Mato Grosso'),
(11, 'MS', 'Mato Grosso do Sul'),
(12, 'MG', 'Minas Gerais'),
(13, 'PA', 'Pará'),
(14, 'PB', 'Paraíba'),
(15, 'PR', 'Paraná'),
(16, 'PE', 'Pernambuco'),
(17, 'PI', 'Piauí'),
(18, 'RJ', 'Rio de Janeiro'),
(19, 'RN', 'Rio Grande do Norte'),
(20, 'RS', 'Rio Grande do Sul'),
(21, 'RO', 'Rondônia'),
(22, 'RR', 'Roraima'),
(23, 'SC', 'Santa Catarina'),
(24, 'SP', 'São Paulo'),
(25, 'SE', 'Sergipe'),
(26, 'TO', 'Tocantins'),
(27, 'DF', 'Distrito Federal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_locador`
--

CREATE TABLE `tb_locador` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cpf/cnpj` varchar(20) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_locador`
--

INSERT INTO `tb_locador` (`id_cliente`, `nome_cliente`, `email`, `cpf/cnpj`, `telefone`, `senha`) VALUES
(2, 'Jorge Quebra Mola', 'jorginhodelas@gmail.com', '', '11940028922', '202cb962ac59075b964b07152d234b70'),
(3, 'Gustavo', 'gustavo329886@gmail.com', '414124124', '1414214', '202cb962ac59075b964b07152d234b70'),
(4, 'José', 'joselindo@gmail.com', '123445', '1341414', '202cb962ac59075b964b07152d234b70'),
(5, 'Pabllo Vittar', 'pabllonoitada@gmail.com', '10390466277', '117762883928', '81dc9bdb52d04dc20036dbd8313ed055');

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
  `id_estado` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `img1` varchar(60) NOT NULL,
  `img2` varchar(60) NOT NULL,
  `img3` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_local`
--

INSERT INTO `tb_local` (`id_local`, `nome_local`, `id_categoria`, `desc_local`, `telefone`, `cep`, `id_estado`, `id_cliente`, `img1`, `img2`, `img3`) VALUES
(1, 'Quadra Futsal', 1, 'Bater aquela bolinha de cria', '11940028922', '08485430', 1, 2, '', '', ''),
(2, 'Mário kart quadras', 2, 'Melhor lugar pra tirar a ponta do dedo', '123123421', '12313333', 2, 4, '', '', ''),
(17, 'Quadrinha', 3, 'de areia', '1111222', '121212', 25, 3, 'imgsquadras/0339be6c103e396db084949d7c8b85c2.jpg', 'imgsquadras/ff2853bc17a97f581fa75414285587f3.jpg', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_locatario`
--

CREATE TABLE `tb_locatario` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_locatario`
--

INSERT INTO `tb_locatario` (`id_cliente`, `nome_cliente`, `email`, `senha`) VALUES
(1, 'Breno', 'breno.oliveira79@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Joao', 'jojinhodelas@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `tb_estado`
--
ALTER TABLE `tb_estado`
  ADD PRIMARY KEY (`id_estado`);

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
  ADD KEY `FK_Categoria_Id_Categoria` (`id_categoria`),
  ADD KEY `FK_Estado_Id_Estado` (`id_estado`);

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
-- AUTO_INCREMENT de tabela `tb_estado`
--
ALTER TABLE `tb_estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `tb_locador`
--
ALTER TABLE `tb_locador`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_local`
--
ALTER TABLE `tb_local`
  MODIFY `id_local` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `tb_locatario`
--
ALTER TABLE `tb_locatario`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_local`
--
ALTER TABLE `tb_local`
  ADD CONSTRAINT `FK_Categoria_Id_Categoria` FOREIGN KEY (`id_categoria`) REFERENCES `tb_categoria` (`id_categoria`),
  ADD CONSTRAINT `FK_Estado_Id_Estado` FOREIGN KEY (`id_estado`) REFERENCES `tb_estado` (`id_estado`),
  ADD CONSTRAINT `FK_Locador_Id_Cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tb_locador` (`id_cliente`);
--
-- Banco de dados: `bd_skins`
--
CREATE DATABASE IF NOT EXISTS `bd_skins` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `bd_skins`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin`
--

CREATE TABLE `tb_admin` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `imagem` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_admin`
--

INSERT INTO `tb_admin` (`codigo`, `nome`, `email`, `senha`, `imagem`) VALUES
(4, 'Henrique', 'rickzin@delas.com', '202cb962ac59075b964b07152d234b70', 'pfp/0e059017d75a635b5160b6cd7b7851e4.jpg'),
(3, 'sntzera', 'gustavo329886@gmail.com', '', 'pfp/3d5b57f1d09a462118f925c5183d844c.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_skins`
--

CREATE TABLE `tb_skins` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `arma` varchar(40) NOT NULL,
  `bundle` varchar(70) NOT NULL,
  `preco` int(6) NOT NULL,
  `imagem` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_skins`
--

INSERT INTO `tb_skins` (`codigo`, `nome`, `arma`, `bundle`, `preco`, `imagem`) VALUES
(16, 'spectre minima', 'spectre', 'minima', 1275, 'imgs/9d51a520c72e74766c5225138e05720b.jpg'),
(18, 'melee wand snowfall', 'melee wand', 'snowfall', 2550, 'imgs/99fc0912d1e6120633cfb493eb0a0625.jpg'),
(17, 'operator rgx 11z pro', 'operator', 'rgx 11z pro', 2175, 'imgs/def5ae4048359fcc279765bbf0a5ddc4.jpg'),
(14, 'ghost soberania', 'ghost', 'soberania', 1775, 'imgs/6d7b4e9b5397bffc14595dca0712df07.jpg'),
(12, 'Vandal Ion', 'Vandal', 'Ion', 1775, 'imgs/c96974e0a19e8684e0028ac7aaee841f.jpg'),
(19, 'phantom oni', 'phantom', 'oni', 1775, 'imgs/3643654d4e0e7f9549bd4c29fe9c3b6f.jpg'),
(20, 'melee karambit champions 2021', 'melee karambit', 'champions 2021', 5320, 'imgs/6b08620570768b8eaadc96d0e1316ea2.jpg'),
(21, 'ghost gaia´s vengeance', 'ghost', 'gaia´s vengeance', 1775, 'imgs/73f74dedd38de03755aba91e7e48b0c4.jpg'),
(22, 'sheriff ion', 'sheriff', 'ion', 1775, 'imgs/39cb1bb2224151a492b960b1b35bd304.jpg'),
(23, 'melee espada soberania', 'melee espada', 'soberania', 3550, 'imgs/5e04c8524071d7d58c96256f8f28a4d3.jpg'),
(24, 'melee adaga glichpop', 'melee adaga', 'glichpop', 4350, 'imgs/4fff0a640aae402f838d32cacd1212ed.jpg'),
(25, 'Vandal champions 2021', 'Vandal', 'champions 2021', 2675, 'imgs/9e207d5445618634e42b2e9791ffdea5.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `tb_skins`
--
ALTER TABLE `tb_skins`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_skins`
--
ALTER TABLE `tb_skins`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
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
  `id` int(5) UNSIGNED NOT NULL,
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
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
('root', '[{\"db\":\"bd_buscampo\",\"table\":\"tb_local\"},{\"db\":\"bd_buscampo\",\"table\":\"tb_locador\"},{\"db\":\"bd_buscampo\",\"table\":\"tb_locatario\"},{\"db\":\"bd_buscampo\",\"table\":\"tb_estado\"},{\"db\":\"bd_buscampo\",\"table\":\"tb_categoria\"}]');

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
-- Estrutura da tabela `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

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
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
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
('root', '2023-04-06 14:36:09', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"pt\"}');

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
-- Índices para tabela `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

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
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT de tabela `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Banco de dados: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
