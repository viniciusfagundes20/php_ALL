-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 13-Set-2019 às 19:44
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evf`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_admin_sit`
--

DROP TABLE IF EXISTS `sts_admin_sit`;
CREATE TABLE IF NOT EXISTS `sts_admin_sit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_sit` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created` timestamp NOT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sts_admin_sit`
--

INSERT INTO `sts_admin_sit` (`id`, `admin_sit`, `type`, `created`, `modified`) VALUES
(1, 1, 'online', '2019-09-08 03:00:00', NULL),
(2, 2, 'online e privada', '2019-09-08 03:00:00', NULL),
(3, 3, 'offline', '2019-09-08 03:00:00', NULL),
(4, 4, 'offline e privada', '2019-09-08 03:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_artigos`
--

DROP TABLE IF EXISTS `sts_artigos`;
CREATE TABLE IF NOT EXISTS `sts_artigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(220) NOT NULL,
  `descricao` text NOT NULL,
  `conteudo` text NOT NULL,
  `imagem` varchar(220) DEFAULT NULL,
  `slug` varchar(220) NOT NULL,
  `keywords` varchar(220) NOT NULL,
  `description` varchar(220) NOT NULL,
  `author` varchar(50) NOT NULL,
  `qnt_acesso` int(11) NOT NULL,
  `adms_robot` int(11) NOT NULL,
  `adms_usuario_id` int(11) NOT NULL,
  `adms_sit_id` int(11) NOT NULL,
  `sts_tps_artigo_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sts_artigos`
--

INSERT INTO `sts_artigos` (`id`, `titulo`, `descricao`, `conteudo`, `imagem`, `slug`, `keywords`, `description`, `author`, `qnt_acesso`, `adms_robot`, `adms_usuario_id`, `adms_sit_id`, `sts_tps_artigo_id`, `created`, `modified`) VALUES
(1, 'Lorem ipsum', 'Lorem ipsum, is dolor', 'Lorem ipsum', 'img.png', 'null', 'null', 'null', 'null', 6, 1, 1, 1, 1, '2019-09-08 00:00:00', NULL),
(2, 'Lorem ipsum', 'Lorem ipsum, is dolor', 'Lorem ipsum', 'img.png', 'null', 'null', 'null', 'null', 5, 1, 1, 1, 1, '2019-09-08 00:00:00', NULL),
(3, 'Lorem ipsum', 'Lorem ipsum, is dolor', 'Lorem ipsum', 'img.png', 'null', 'null', 'null', 'vinicin.fagundes', 58, 1, 1, 1, 1, '2019-09-08 00:00:00', NULL),
(4, 'Lorem ipsum', 'Lorem ipsum, is dolor', 'Lorem ipsum', 'img.png', 'null', 'null', 'null', 'null', 5, 1, 1, 1, 1, '2019-09-08 00:00:00', NULL),
(5, 'Lorem ipsum', 'Lorem ipsum, is dolor', 'Lorem ipsum', 'img.png', 'null', 'null', 'null', 'null', 30, 1, 1, 1, 1, '2019-09-08 00:00:00', NULL),
(6, 'Lorem ipsum', 'Lorem ipsum, is dolor', 'Lorem ipsum', 'img.png', 'null', 'null', 'null', 'null', 5, 1, 1, 1, 1, '2019-09-08 00:00:00', NULL),
(7, 'Null', 'Null', 'sssssssssssssAsdafsasdasdasd', '', 'asdasdas', 'asdasdasd', 'asdasd', 'Vinicius', 55, 1, 1, 1, 1, '2019-09-10 00:00:00', NULL),
(8, 'Null', 'Null', 'sssssssssssssAsdafsasdasdasd', '', 'asdasdas', 'asdasdasd', 'asdasd', 'Vinicius', 55, 1, 1, 1, 1, '2019-09-10 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_carousel`
--

DROP TABLE IF EXISTS `sts_carousel`;
CREATE TABLE IF NOT EXISTS `sts_carousel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(220) NOT NULL,
  `file` varchar(220) NOT NULL,
  `ext` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sts_carousel`
--

INSERT INTO `sts_carousel` (`id`, `user`, `file`, `ext`, `created`, `modified`) VALUES
(1, 'vinicin.fagundes', 'img', 'jpg', '2019-09-08 00:00:00', NULL),
(2, 'vanusa.fagundes', 'img2', 'jpg', '2019-09-06 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_colors`
--

DROP TABLE IF EXISTS `sts_colors`;
CREATE TABLE IF NOT EXISTS `sts_colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(220) NOT NULL,
  `class` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sts_colors`
--

INSERT INTO `sts_colors` (`id`, `color`, `class`, `created`, `modified`) VALUES
(1, 'blue', '-primary', '2019-09-08 00:00:00', NULL),
(2, 'red', '-danger', '2019-09-08 00:00:00', NULL),
(3, 'Yellow', '-warning', '2019-09-08 00:00:00', NULL),
(4, 'Green', '-success', '2019-09-08 00:00:00', NULL),
(5, 'Black', '-dark', '2019-09-08 00:00:00', NULL),
(6, 'body', '-body', '2019-09-08 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_controllers`
--

DROP TABLE IF EXISTS `sts_controllers`;
CREATE TABLE IF NOT EXISTS `sts_controllers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `controller` varchar(220) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT 'Vanusa Fagundes',
  `dateCreate` datetime NOT NULL,
  `dateModified` datetime DEFAULT NULL,
  `classPertence` varchar(220) NOT NULL,
  `js` varchar(255) DEFAULT NULL,
  `css` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sts_controllers`
--

INSERT INTO `sts_controllers` (`id`, `controller`, `title`, `dateCreate`, `dateModified`, `classPertence`, `js`, `css`) VALUES
(1, 'Home', 'Vanusa Fagundes', '2019-09-08 00:00:00', NULL, 'Sts', 'jquery.min.js&bootstrap.min.js&personalizado.js&scrollreveal.min.js', 'bootstrap.min.css&personalizado.css&animate.css'),
(2, 'Founds', 'Error 404', '2019-09-08 00:00:00', NULL, 'Sts', NULL, 'bootstrap.min.css&personalizado.css'),
(3, 'Contato', 'Contato', '2019-09-08 00:00:00', NULL, 'Sts', 'jquery.min.js', 'bootstrap.min.css'),
(4, 'Blog', 'Blog', '2019-09-08 00:00:00', NULL, 'Sts', 'jquery.min.js&bootstrap.min.js&personalizado.js&scrollreveal.min.js', 'bootstrap.min.css&personalizado.css'),
(5, 'Artigo', 'Artigo', '2019-09-08 00:00:00', NULL, 'Sts', 'jquery.min.js', 'bootstrap.min.css');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_fire`
--

DROP TABLE IF EXISTS `sts_fire`;
CREATE TABLE IF NOT EXISTS `sts_fire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(220) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(220) NOT NULL,
  `title` varchar(500) NOT NULL,
  `button` varchar(220) NOT NULL,
  `color` int(11) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sts_fire`
--

INSERT INTO `sts_fire` (`id`, `usuario`, `description`, `img`, `title`, `button`, `color`, `created`, `modified`, `active`) VALUES
(1, 'vinicin.fagundes', 'Teste', 'GTA-V-big.jpg', 'Teste', 'Click aqui', 1, '2019-09-06 00:00:00', NULL, 1),
(2, 'vinicius', 'description', 'GTA-V-big.jpg', 'GTA-V-big.jpg', 'GTA-V-big.jpg', 1, '2019-09-06 00:00:00', NULL, 1),
(3, 'vanusa', 'venha fazer uma limpeza de pele com 10% de desconto', 'img.jpg', 'Limpeza', 'click', 1, '2019-09-06 00:00:00', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_tps_artigos`
--

DROP TABLE IF EXISTS `sts_tps_artigos`;
CREATE TABLE IF NOT EXISTS `sts_tps_artigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sts_tps_artigos`
--

INSERT INTO `sts_tps_artigos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Publico', '2019-09-06 00:00:00', NULL),
(2, 'Privado', '2019-09-06 00:00:00', NULL),
(3, 'Privado com resumo publico', '2019-09-06 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_videos`
--

DROP TABLE IF EXISTS `sts_videos`;
CREATE TABLE IF NOT EXISTS `sts_videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(220) NOT NULL,
  `descricao` text NOT NULL,
  `video` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sts_videos`
--

INSERT INTO `sts_videos` (`id`, `titulo`, `descricao`, `video`, `created`, `modified`) VALUES
(1, 'Vinicin', 'bonde da stronda', '<iframe width=\"914\" height=\"514\" src=\"https://www.youtube.com/embed/S0JXCUicXBQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2019-09-06 00:00:00', NULL),
(2, 'teste', 'teste', '<iframe width=\"914\" height=\"514\" src=\"https://www.youtube.com/embed/HNN-lCCYYNo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2019-09-06 00:00:00', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
