-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 06-Set-2019 às 20:25
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adms_cors`
--

DROP TABLE IF EXISTS `adms_cors`;
CREATE TABLE IF NOT EXISTS `adms_cors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `cor` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `adms_cors`
--

INSERT INTO `adms_cors` (`id`, `nome`, `cor`, `created`, `modified`) VALUES
(1, 'Azul', 'primary', '2018-05-23 00:00:00', NULL),
(2, 'Cinza', 'secondary', '2018-05-23 00:00:00', NULL),
(3, 'Verde', 'success', '2018-05-23 00:00:00', NULL),
(4, 'Vermelho', 'danger', '2018-05-23 00:00:00', NULL),
(5, 'Laranjado', 'warning', '2018-05-23 00:00:00', NULL),
(6, 'Azul Claro', 'info', '2018-05-23 00:00:00', NULL),
(7, 'Claro', 'light', '2018-05-23 00:00:00', NULL),
(8, 'Cinza escuro', 'dark', '2018-05-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `adms_robots`
--

DROP TABLE IF EXISTS `adms_robots`;
CREATE TABLE IF NOT EXISTS `adms_robots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `adms_robots`
--

INSERT INTO `adms_robots` (`id`, `nome`, `tipo`, `created`, `modified`) VALUES
(1, 'Indexar a pÃ¡gina e seguir os links', 'index,follow', '2018-02-23 00:00:00', NULL),
(2, 'NÃ£o indexar a pÃ¡gina mas seguir os links', 'noindex,follow', '2018-02-23 00:00:00', NULL),
(3, 'Indexar a pÃ¡gina mas nÃ£o seguir os links', 'index,nofollow', '2018-02-23 00:00:00', NULL),
(4, 'NÃ£o indexar a pÃ¡gina e nem seguir os links', 'noindex,nofollow', '2018-02-23 00:00:00', NULL),
(5, 'NÃ£o exibir a versÃ£o em cache da pÃ¡gina', 'noarchive', '2018-02-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `adms_sits`
--

DROP TABLE IF EXISTS `adms_sits`;
CREATE TABLE IF NOT EXISTS `adms_sits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `adms_cor_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `adms_sits`
--

INSERT INTO `adms_sits` (`id`, `nome`, `adms_cor_id`, `created`, `modified`) VALUES
(1, 'Ativo', '3', '2018-03-23 00:00:00', NULL),
(2, 'Inativo', '4', '2018-03-23 00:00:00', NULL),
(3, 'Analise', '1', '2018-03-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `adms_usuarios`
--

DROP TABLE IF EXISTS `adms_usuarios`;
CREATE TABLE IF NOT EXISTS `adms_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `apelido` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `recuperar_senha` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chave_descadastro` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conf_email` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagem` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adms_niveis_acesso_id` int(11) NOT NULL,
  `adms_sits_usuario_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `adms_usuarios`
--

INSERT INTO `adms_usuarios` (`id`, `nome`, `apelido`, `email`, `usuario`, `senha`, `recuperar_senha`, `chave_descadastro`, `conf_email`, `imagem`, `adms_niveis_acesso_id`, `adms_sits_usuario_id`, `created`, `modified`) VALUES
(1, 'Cesar N. Szpak', 'Cesar', 'cesar@celke.com.br', 'cesar@celke.com.br', '$2y$10$nA6dx3mjOygZE5Xt5iwt5eRebzXfskbXcwUam8yLCECj7NrjXr12q', 'bbe0d9883f909fb95ca46e8396fd7194', NULL, NULL, 'logo-celke.jpg', 1, 1, '2018-03-23 00:00:00', '2018-05-04 13:40:10'),
(2, 'Jessica', 'Jessica', 'jessica@celke.com.br', 'jessica@celke.com.br', '$2y$10$UDdxOqZghWMPVQQ094COZeNdT/VFBJXqwFfAyRNLZnycaXhY8yK9u', NULL, NULL, NULL, 'celke.jpg', 3, 1, '2018-03-23 00:00:00', NULL),
(3, 'Kelly', 'Kelly', 'kelly@celke.com.br', 'kelly@celke.com.br', '$2y$10$mF6VRdX9nhSW6f0zB6akCONsSBoUnEFBU61BMxUDRVBirP02xVK46', NULL, NULL, NULL, 'logo-celke.jpg', 2, 1, '2018-03-23 00:00:00', '2018-04-22 14:43:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_artigos`
--

DROP TABLE IF EXISTS `sts_artigos`;
CREATE TABLE IF NOT EXISTS `sts_artigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `conteudo` text COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `resumo_publico` text COLLATE utf8_unicode_ci NOT NULL,
  `qnt_acesso` int(11) NOT NULL DEFAULT '0',
  `adms_robot_id` int(11) NOT NULL,
  `adms_usuario_id` int(11) NOT NULL,
  `adms_sit_id` int(11) NOT NULL,
  `sts_tps_artigo_id` int(11) NOT NULL,
  `sts_cats_artigo_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sts_artigos`
--

INSERT INTO `sts_artigos` (`id`, `titulo`, `descricao`, `conteudo`, `imagem`, `slug`, `keywords`, `description`, `author`, `resumo_publico`, `qnt_acesso`, `adms_robot_id`, `adms_usuario_id`, `adms_sit_id`, `sts_tps_artigo_id`, `sts_cats_artigo_id`, `created`, `modified`) VALUES
(1, 'Sample blog post 1', 'Donec 1 ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', '<p>This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>\r\n								<hr>\r\n								<p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>\r\n								<blockquote>\r\n								  <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>\r\n								</blockquote>\r\n								<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>\r\n								<h2>Heading</h2>\r\n								<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>\r\n								<h3>Sub-heading</h3>\r\n								<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n								<pre><code>Example code block</code></pre>\r\n								<p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>\r\n								<h3>Sub-heading</h3>\r\n								<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>\r\n								<ul>\r\n									<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>\r\n									<li>Donec id elit non mi porta gravida at eget metus.</li>\r\n									<li>Nulla vitae elit libero, a pharetra augue.</li>\r\n								</ul>\r\n								<p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>\r\n								<ol>\r\n									<li>Vestibulum id ligula porta felis euismod semper.</li>\r\n									<li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>\r\n									<li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>\r\n								</ol>\r\n								<p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>', 'artigo.jpg', 'sample-blog-post-1', 'artigo, artigo 1, ', 'Descricao do artigo um para seo', 'Celke', '<p>This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>\n                            <hr>\n                            <p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>', 6, 1, 1, 1, 1, 1, '2018-02-18 00:00:00', NULL),
(2, 'Sample blog post 2', 'Donec 2 ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', '<p>This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>\r\n								<hr>\r\n								<p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>\r\n								<blockquote>\r\n								  <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>\r\n								</blockquote>\r\n								<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>\r\n								<h2>Heading</h2>\r\n								<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>\r\n								<h3>Sub-heading</h3>\r\n								<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n								<pre><code>Example code block</code></pre>\r\n								<p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>\r\n								<h3>Sub-heading</h3>\r\n								<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>\r\n								<ul>\r\n									<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>\r\n									<li>Donec id elit non mi porta gravida at eget metus.</li>\r\n									<li>Nulla vitae elit libero, a pharetra augue.</li>\r\n								</ul>\r\n								<p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>\r\n								<ol>\r\n									<li>Vestibulum id ligula porta felis euismod semper.</li>\r\n									<li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>\r\n									<li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>\r\n								</ol>\r\n								<p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>', 'artigo.jpg', 'sample-blog-post-2', 'artigo, artigo 2, ', 'Descricao do artigo dois para seo', 'Celke', '<p>This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>\n                            <hr>\n                            <p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>', 4, 1, 1, 1, 1, 1, '2018-02-19 00:00:00', NULL),
(3, 'Sample blog post 3', 'Donec 3 ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', '<p>This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>\r\n								<hr>\r\n								<p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>\r\n								<blockquote>\r\n								  <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>\r\n								</blockquote>\r\n								<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>\r\n								<h2>Heading</h2>\r\n								<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>\r\n								<h3>Sub-heading</h3>\r\n								<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n								<pre><code>Example code block</code></pre>\r\n								<p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>\r\n								<h3>Sub-heading</h3>\r\n								<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>\r\n								<ul>\r\n									<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>\r\n									<li>Donec id elit non mi porta gravida at eget metus.</li>\r\n									<li>Nulla vitae elit libero, a pharetra augue.</li>\r\n								</ul>\r\n								<p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>\r\n								<ol>\r\n									<li>Vestibulum id ligula porta felis euismod semper.</li>\r\n									<li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>\r\n									<li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>\r\n								</ol>\r\n								<p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>', 'artigo.jpg', 'sample-blog-post-3', 'artigo, artigo 3 ', 'Descricao do artigo tres para seo', 'Celke', '<p>This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>\n                            <hr>\n                            <p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>', 14, 1, 1, 1, 1, 1, '2018-02-20 00:00:00', NULL),
(4, 'Sample blog post 4 titulo', 'Donec 4 ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', '<p>4This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>\n								<hr>\n								<p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>\n								<blockquote>\n								  <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>\n								</blockquote>\n								<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>\n								<h2>Heading</h2>\n								<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>\n								<h3>Sub-heading</h3>\n								<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\n								<pre><code>Example code block</code></pre>\n								<p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>\n								<h3>Sub-heading</h3>\n								<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>\n								<ul>\n									<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>\n									<li>Donec id elit non mi porta gravida at eget metus.</li>\n									<li>Nulla vitae elit libero, a pharetra augue.</li>\n								</ul>\n								<p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>\n								<ol>\n									<li>Vestibulum id ligula porta felis euismod semper.</li>\n									<li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>\n									<li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>\n								</ol>\n								<p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>', 'artigo.jpg', 'sample-blog-post-4', 'artigo, artigo 4 ', 'Descricao do artigo quatro para seo', 'Celke', '<p>This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>\n                            <hr>\n                            <p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>', 13, 1, 1, 1, 1, 1, '2018-02-21 00:00:00', NULL),
(5, 'Sample blog post 5', 'Donec 5 ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', '<p>This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>\r\n								<hr>\r\n								<p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>\r\n								<blockquote>\r\n								  <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>\r\n								</blockquote>\r\n								<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>\r\n								<h2>Heading</h2>\r\n								<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>\r\n								<h3>Sub-heading</h3>\r\n								<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n								<pre><code>Example code block</code></pre>\r\n								<p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>\r\n								<h3>Sub-heading</h3>\r\n								<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>\r\n								<ul>\r\n									<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>\r\n									<li>Donec id elit non mi porta gravida at eget metus.</li>\r\n									<li>Nulla vitae elit libero, a pharetra augue.</li>\r\n								</ul>\r\n								<p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>\r\n								<ol>\r\n									<li>Vestibulum id ligula porta felis euismod semper.</li>\r\n									<li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>\r\n									<li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>\r\n								</ol>\r\n								<p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>', 'artigo.jpg', 'sample-blog-post-5', 'artigo, artigo 5', 'Descricao do artigo cinco para seo', 'Celke', '<p>This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>\n                            <hr>\n                            <p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>', 1, 1, 1, 1, 1, 1, '2018-02-22 00:00:00', NULL),
(6, 'Sample blog post 6', 'Donec 6 ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', '<p>This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>\r\n								<hr>\r\n								<p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>\r\n								<blockquote>\r\n								  <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>\r\n								</blockquote>\r\n								<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>\r\n								<h2>Heading</h2>\r\n								<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>\r\n								<h3>Sub-heading</h3>\r\n								<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n								<pre><code>Example code block</code></pre>\r\n								<p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>\r\n								<h3>Sub-heading</h3>\r\n								<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>\r\n								<ul>\r\n									<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>\r\n									<li>Donec id elit non mi porta gravida at eget metus.</li>\r\n									<li>Nulla vitae elit libero, a pharetra augue.</li>\r\n								</ul>\r\n								<p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>\r\n								<ol>\r\n									<li>Vestibulum id ligula porta felis euismod semper.</li>\r\n									<li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>\r\n									<li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>\r\n								</ol>\r\n								<p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>', 'artigo.jpg', 'sample-blog-post-6', 'artigo, artigo 6', 'Descricao do artigo seis para seo', 'Celke', '<p>This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>\n                            <hr>\n                            <p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>', 20, 4, 1, 1, 1, 1, '2018-02-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_carousels`
--

DROP TABLE IF EXISTS `sts_carousels`;
CREATE TABLE IF NOT EXISTS `sts_carousels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `posicao_text` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titulo_botao` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ordem` int(11) NOT NULL,
  `adms_cor_id` int(11) DEFAULT NULL,
  `adms_situacoe_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sts_carousels`
--

INSERT INTO `sts_carousels` (`id`, `nome`, `imagem`, `titulo`, `descricao`, `posicao_text`, `titulo_botao`, `link`, `ordem`, `adms_cor_id`, `adms_situacoe_id`, `created`, `modified`) VALUES
(1, 'Primeiro Exemplo', 'imagem_um.jpg', 'Example headline1.', 'Cras 1 justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'text-left', 'Mais detalhes', 'https://celke.com.br/', 1, 1, 1, '2018-05-23 00:00:00', NULL),
(2, 'Segundo Exemplo', 'imagem_dois.jpg', 'Example headline2.', 'Cras 2 justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'text-center', 'Inscrever-se', 'https://celke.com.br/', 2, 5, 1, '2018-05-23 00:00:00', NULL),
(3, 'Terceiro Exemplo', 'imagem_tres.jpg', 'One more for good measure3.', 'Cras 3 justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'text-right', 'Comprar', 'https://celke.com.br/\r\n', 3, 4, 1, '2018-05-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_cats_artigos`
--

DROP TABLE IF EXISTS `sts_cats_artigos`;
CREATE TABLE IF NOT EXISTS `sts_cats_artigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `sts_situacoe_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sts_cats_artigos`
--

INSERT INTO `sts_cats_artigos` (`id`, `nome`, `sts_situacoe_id`, `created`, `modified`) VALUES
(1, 'PHP', 1, '2018-02-23 00:00:00', NULL),
(2, 'Bootstrap', 1, '2018-02-23 00:00:00', NULL),
(3, 'MySQLi', 1, '2018-02-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_contatos`
--

DROP TABLE IF EXISTS `sts_contatos`;
CREATE TABLE IF NOT EXISTS `sts_contatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `assunto` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sts_contatos`
--

INSERT INTO `sts_contatos` (`id`, `nome`, `email`, `assunto`, `mensagem`, `created`, `modified`) VALUES
(1, 'Cesar', 'cesar@celke.com.br', 'teste1', 'msg teste 1', '2018-05-06 11:33:16', NULL),
(2, 'Cesar', 'cesar@celke.com.br', 'teste1', 'msg teste 1', '2018-05-06 11:33:27', NULL),
(3, 'Cesar', 'cesar@celke.com.br', 'teste1', 'msg teste 1', '2018-05-07 10:16:36', NULL),
(4, 'Cesar', 'cesar@celke.com.br', 'teste1', 'msg teste 1', '2018-05-07 10:32:34', NULL),
(5, 'Cesar', 'cesar@celke.com.br', 'teste1', 'msg teste 1', '2018-05-07 10:32:47', NULL),
(6, 'Cesar', 'cesar@celke.com.br', 'Teste 6', 'Teste 6', '2018-05-07 11:20:12', NULL),
(7, 'Cesar', 'cesar@celke.com.br', 'Teste 6', 'Teste 6', '2018-05-07 11:20:12', NULL),
(8, 'Cesar', 'cesar@celke.com.br', 'Teste 8', 'Teste 8', '2018-05-07 11:39:49', NULL),
(9, 'Cesar', '', 'Teste 9', 'Teste 9', '2018-05-07 11:40:12', NULL),
(10, 'Cesar', 'cesar@celke.com.br', 'Teste 10', 'Teste 10', '2018-05-09 11:10:13', NULL),
(11, 'Cesar', 'cesar@celke.com.br', 'Teste 11', 'Teste 11', '2018-05-09 11:10:21', NULL),
(12, 'Cesar', 'cesar@celke.com.br', 'Teste 12', 'Teste 12', '2018-05-09 11:16:20', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_paginas`
--

DROP TABLE IF EXISTS `sts_paginas`;
CREATE TABLE IF NOT EXISTS `sts_paginas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `controller` varchar(220) NOT NULL,
  `nomePagina` varchar(220) NOT NULL,
  `titulo` varchar(220) NOT NULL,
  `obs` text,
  `keywords` varchar(220) NOT NULL,
  `description` varchar(220) NOT NULL,
  `author` varchar(50) NOT NULL,
  `imagem` varchar(220) DEFAULT NULL,
  `lib_bloq` tinyint(1) NOT NULL DEFAULT '0',
  `ordem` int(11) NOT NULL,
  `sts_tps_pg_id` int(11) NOT NULL,
  `sts_robot_id` int(11) NOT NULL,
  `sts_situacao_pg_id` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sts_paginas`
--

INSERT INTO `sts_paginas` (`id`, `controller`, `nomePagina`, `titulo`, `obs`, `keywords`, `description`, `author`, `imagem`, `lib_bloq`, `ordem`, `sts_tps_pg_id`, `sts_robot_id`, `sts_situacao_pg_id`, `created`, `modified`) VALUES
(1, 'Home', 'Página inicial', 'Home', 'None ', 'noticias, sobre empresa', 'site de noticias', 'Vinicius', 'home.jpg', 1, 1, 1, 1, 1, '2019-09-06 00:00:00', NULL),
(2, 'sobreEmpresa', 'sobre_empresa', 'sobre_empresa', 'sobre_empresa', 'null', 'none', 'Vinicius', NULL, 1, 2, 1, 1, 1, '2019-09-06 00:00:00', NULL),
(3, 'Blog', 'Blog', 'Blog', 'Blog', 'none', 'null', 'Vinicius', NULL, 1, 1, 1, 1, 1, '2019-09-06 00:00:00', NULL),
(4, 'Contato', 'Contato', 'Contato', 'Contato', 'none', 'null', 'Vinicius', NULL, 1, 1, 1, 1, 1, '2019-09-06 00:00:00', NULL),
(5, 'Artigo', 'Artigo', 'Artigo', 'Artigo', 'none', 'null', 'Vinicius', NULL, 1, 1, 1, 1, 1, '2019-09-06 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_robots`
--

DROP TABLE IF EXISTS `sts_robots`;
CREATE TABLE IF NOT EXISTS `sts_robots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `tipo` varchar(40) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sts_robots`
--

INSERT INTO `sts_robots` (`id`, `nome`, `tipo`, `created`, `modified`) VALUES
(1, 'indexar a página e seguir os links', 'index.follow', '2019-09-06 00:00:00', NULL),
(2, 'não indexar a página mas seguir os links', 'noindex.follow', '2019-09-06 00:00:00', NULL),
(3, 'indexar a página mas não seguir', 'index.nofollow', '2019-09-06 00:00:00', NULL),
(4, 'não index a página e nem seguir os links', 'noindex.nofollow', '2019-09-06 00:00:00', NULL),
(5, 'não exibir a versão em cache da página', 'noarchive', '2019-09-06 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_servicos`
--

DROP TABLE IF EXISTS `sts_servicos`;
CREATE TABLE IF NOT EXISTS `sts_servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `icone_um` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `nome_um` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `descricao_um` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `icone_dois` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `nome_dois` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `descricao_dois` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `icone_tres` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `nome_tres` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `descricao_tres` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sts_servicos`
--

INSERT INTO `sts_servicos` (`id`, `titulo`, `icone_um`, `nome_um`, `descricao_um`, `icone_dois`, `nome_dois`, `descricao_dois`, `icone_tres`, `nome_tres`, `descricao_tres`, `created`, `modified`) VALUES
(1, 'ServiÃ§os', 'ion-ios-camera-outline', 'ServiÃ§os um', 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'ion-ios-film-outline', 'ServiÃ§os dois', 'This card has supporting text below as a natural lead-in to additional content.', 'ion-ios-videocam-outline', 'ServiÃ§os tres', 'This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.', '2018-05-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_situacaos_pgs`
--

DROP TABLE IF EXISTS `sts_situacaos_pgs`;
CREATE TABLE IF NOT EXISTS `sts_situacaos_pgs` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `adms_cor_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sts_situacaos_pgs`
--

INSERT INTO `sts_situacaos_pgs` (`id`, `nome`, `adms_cor_id`, `created`, `modified`) VALUES
(1, 'Ativo', 3, '2018-05-23 00:00:00', NULL),
(2, 'Inativo', 5, '2018-05-23 00:00:00', NULL),
(3, 'Analise', 1, '2018-05-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_situacao_pgs`
--

DROP TABLE IF EXISTS `sts_situacao_pgs`;
CREATE TABLE IF NOT EXISTS `sts_situacao_pgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `adms_cor_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sts_situacao_pgs`
--

INSERT INTO `sts_situacao_pgs` (`id`, `nome`, `adms_cor_id`, `created`, `modified`) VALUES
(1, 'Ativo', 3, '2019-09-06 00:00:00', NULL),
(2, 'Inativo', 5, '2019-09-06 00:00:00', NULL),
(3, 'Analise', 1, '2019-09-06 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_sobres`
--

DROP TABLE IF EXISTS `sts_sobres`;
CREATE TABLE IF NOT EXISTS `sts_sobres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(220) NOT NULL,
  `descricao` text NOT NULL,
  `img` varchar(220) NOT NULL,
  `adms_sit_id` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sts_sobres`
--

INSERT INTO `sts_sobres` (`id`, `titulo`, `descricao`, `img`, `adms_sit_id`, `created`, `modified`) VALUES
(1, 'Artigos Celke', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'celke.jpg', 1, '2019-09-04 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_sobs_emps`
--

DROP TABLE IF EXISTS `sts_sobs_emps`;
CREATE TABLE IF NOT EXISTS `sts_sobs_emps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `ordem` int(11) NOT NULL,
  `adms_sit_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sts_sobs_emps`
--

INSERT INTO `sts_sobs_emps` (`id`, `titulo`, `descricao`, `imagem`, `ordem`, `adms_sit_id`, `created`, `modified`) VALUES
(1, 'Sobre empresa um.', 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', 'empresa.jpg', 1, 1, '2018-05-23 00:00:00', NULL),
(2, 'Sobre empresa dois.', 'Descricao sobre empresa 2 Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', 'empresa.jpg', 2, 1, '2018-05-23 00:00:00', NULL),
(3, 'Sobre empresa tres.', 'Descricao sobre empresa 3 Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', 'empresa.jpg', 3, 1, '2018-05-23 00:00:00', NULL),
(4, 'Sobre empresa quatro.', 'Descricao sobre empresa 4 Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', 'empresa.jpg', 4, 1, '2018-05-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_tps_artigos`
--

DROP TABLE IF EXISTS `sts_tps_artigos`;
CREATE TABLE IF NOT EXISTS `sts_tps_artigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sts_tps_artigos`
--

INSERT INTO `sts_tps_artigos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Publico', '2018-02-23 00:00:00', NULL),
(2, 'Privado', '2018-02-23 00:00:00', NULL),
(3, 'Privado com resumo publico', '2018-02-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_tps_pgs`
--

DROP TABLE IF EXISTS `sts_tps_pgs`;
CREATE TABLE IF NOT EXISTS `sts_tps_pgs` (
  `id` int(11) NOT NULL,
  `tipo` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `obs` text COLLATE utf8_unicode_ci NOT NULL,
  `ordem` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sts_tps_pgs`
--

INSERT INTO `sts_tps_pgs` (`id`, `tipo`, `nome`, `obs`, `ordem`, `created`, `modified`) VALUES
(1, 'sts', 'Site Principal', 'Core do site principal', 1, '2018-05-23 00:00:00', NULL),
(2, 'lojas', 'Loja', 'Loja virtual', 2, '2018-05-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_videos`
--

DROP TABLE IF EXISTS `sts_videos`;
CREATE TABLE IF NOT EXISTS `sts_videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sts_videos`
--

INSERT INTO `sts_videos` (`id`, `titulo`, `descricao`, `video`, `created`, `modified`) VALUES
(1, 'VÃ­deo', 'This is a wider card with supporting text below as a natural lead-in to additional content.', '<iframe width=\"1107\" height=\"623\" src=\"https://www.youtube.com/embed/NseE9irdmZc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2018-05-23 00:00:00', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
