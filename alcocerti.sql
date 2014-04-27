-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-04-2014 a las 05:32:25
-- Versión del servidor: 5.5.34-0ubuntu0.13.04.1
-- Versión de PHP: 5.4.9-4ubuntu2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `alcocerti`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categoria`
--

CREATE TABLE IF NOT EXISTS `Categoria` (
  `id_Categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nomb_Categoria` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_Categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `Categoria`
--

INSERT INTO `Categoria` (`id_Categoria`, `nomb_Categoria`) VALUES
(1, 'Monitores'),
(2, 'asdasd'),
(3, 'asd'),
(4, 'dasd'),
(5, 'gdfg'),
(6, 'sfgf5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto`
--

CREATE TABLE IF NOT EXISTS `Producto` (
  `id_Producto` int(11) NOT NULL AUTO_INCREMENT,
  `nomb_Producto` varchar(30) DEFAULT NULL,
  `marc_Producto` varchar(30) DEFAULT NULL,
  `descrip_Producto` varchar(200) DEFAULT NULL,
  `img_Producto` varchar(200) DEFAULT NULL,
  `id_Categoria` int(11) NOT NULL,
  `id_Usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_Producto`),
  KEY `fk_Categoria_Producto` (`id_Categoria`),
  KEY `fk_Usuario_Producto` (`id_Usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Producto`
--

INSERT INTO `Producto` (`id_Producto`, `nomb_Producto`, `marc_Producto`, `descrip_Producto`, `img_Producto`, `id_Categoria`, `id_Usuario`) VALUES
(1, 'LG 22 GD-GF', 'LG', 'monitor de hd', 'sd/dsf', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `id_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomb_Usuario` varchar(30) DEFAULT NULL,
  `ape_Usuario` varchar(30) DEFAULT NULL,
  `dni_Usuario` char(8) DEFAULT NULL,
  `pass_Usuario` char(20) DEFAULT NULL,
  `tele_Usuario` char(9) DEFAULT NULL,
  `celu_Usuario` char(7) DEFAULT NULL,
  PRIMARY KEY (`id_Usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`id_Usuario`, `nomb_Usuario`, `ape_Usuario`, `dni_Usuario`, `pass_Usuario`, `tele_Usuario`, `celu_Usuario`) VALUES
(1, 'admin', 'ad', '1546', '1234', '589445', '9412215'),
(2, 'Marcos', 'Mauricio', '45681', '1234', '545451', '981212'),
(3, 'sdf', 'sdfsdf', '423432', '23423423', '234235234', '23423'),
(4, 'angela', 'mauricio', '45454', '1234', '945', '54105'),
(5, 'ofsdk', 'lksfld', 'kldkf', 'klkdsk', 'kldk', 'ldkl'),
(6, 'asd', 'asdas', 'asd', 'sad', 'asdassda', 'ss'),
(7, 'qqqqq', 'qqqq', 'qq', 'qq', 'qqq', 'qq');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Producto`
--
ALTER TABLE `Producto`
  ADD CONSTRAINT `fk_Categoria_Producto` FOREIGN KEY (`id_Categoria`) REFERENCES `Categoria` (`id_Categoria`),
  ADD CONSTRAINT `fk_Usuario_Producto` FOREIGN KEY (`id_Usuario`) REFERENCES `Usuario` (`id_Usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
