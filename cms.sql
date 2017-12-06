-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2017 at 02:27 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactos`
--

CREATE TABLE `contactos` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactos`
--

INSERT INTO `contactos` (`id_contacto`, `nombre`, `correo`, `mensaje`) VALUES
(1, 'Freddy', 'frondonfermin@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet neque quis turpis molestie eleifend in id felis. Nam pulvinar volutpat vestibulum. Vestibulum cursus arcu nec velit varius malesuada. Curabitur efficitur sagittis felis ut feugiat. Duis hendrerit elit a rutrum fringilla. Phasellus velit dolor, posuere sit amet consequat commodo, consectetur eu justo. Maecenas eu nibh vel orci posuere lobortis. Fusce porta ultrices laoreet.');

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `titulo` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuerpo` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `titulo` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuerpo` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo`, `resumen`, `foto`, `cuerpo`) VALUES
(2, '2da noticia', 'Un poquito dura', '17966697_1810243045962285_6461772726705654847_o.jpg', '<p><strong>Lorem ipsum dolor sit amet</strong>, <em>consectetur adipiscing elit.</em> Proin sit amet neque quis turpis molestie eleifend in id felis. Nam pulvinar volutpat vestibulum. Vestibulum cursus arcu nec velit varius malesuada. Curabitur efficitur sagittis felis ut feugiat. Duis hendrerit elit a rutrum fringilla. Phasellus velit dolor, posuere sit amet consequat commodo, consectetur eu justo. Maecenas eu nibh vel orci posuere lobortis. Fusce porta ultrices laoreet.</p>'),
(3, '3ra noticia', 'Noticia a prueba de escapes', 'Ed-Sheeran-pop-art-2016-PPcorn.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet neque quis turpis molestie eleifend in id felis. Nam pulvinar volutpat vestibulum. Vestibulum cursus arcu nec velit varius malesuada. Curabitur efficitur sagittis felis ut feugiat. Duis hendrerit elit a rutrum fringilla. Phasellus velit dolor, posuere sit amet consequat commodo, consectetur eu justo. Maecenas eu nibh vel orci posuere lobortis. Fusce porta ultrices laoreet.</p>'),
(4, 'Noticia durax', 'Esta tiene que guardarse para probar si es verdad que funciona el ', 'mr__robot_wallpaper_by_floxido-d9cpwgr.png', '<p style="text-align: justify;"><strong>Lorem</strong> <em>ipsum</em> dolor <span style="background-color: #000080;">sit</span> <span style="color: #808000;">amet, consectetur</span> adipiscing elit.<img src="https://cloud.tinymce.com/stable/plugins/emoticons/img/smiley-foot-in-mouth.gif" alt="foot-in-mouth" /> <span style="text-decoration: line-through;">Proin sit amet neque quis turpis molestie eleifend in id felis. Nam pulvinar volutpat vestibulum.</span></p>\r\n<p style="text-align: justify;">Vestibulum cursus arcu nec velit varius malesuada. Curabitur efficitur sagittis felis ut feugiat. Duis hendrerit elit a rutrum fringilla. Phasellus velit dolor, posuere sit amet consequat commodo, consectetur eu justo. Maecenas eu nibh vel orci posuere lobortis. Fusce porta ultrices laoreet.</p>\r\n<ol>\r\n<li style="text-align: justify;">uno</li>\r\n<li style="text-align: justify;">dos</li>\r\n</ol>');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `cedula` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitud` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitud` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `cedula`, `nombre`, `apellido`, `telefono`, `correo`, `direccion`, `latitud`, `longitud`, `admin`, `password`) VALUES
(1, '402-1239070-8', 'Freddy', 'Rondon', '8297406341', 'frondonfermin@gmail.com', '8400 NW 25th Street, Suite 100', '18.93845', '-69.4345', 1, '912ec803b2ce49e4a541068d495ab570');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD UNIQUE KEY `correo_2` (`correo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
