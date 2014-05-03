create database alcocerti

use alcocerti;

drop database alcocerti

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
  `pass_Usuario` char(200) DEFAULT NULL,
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
INSERT INTO Usuario (`id_Usuario`, `nomb_Usuario`, `ape_Usuario`, `dni_Usuario`, `pass_Usuario`, `tele_Usuario`, `celu_Usuario`) VALUES (NULL, 'admin2', 'ad', '1546', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '589445', '9412215')
--
SELECT * FROM Usuario;
SELECT * FROM Producto; 
-- Filtros para la tabla `Producto`
--
ALTER TABLE `Producto`
  ADD CONSTRAINT `fk_Categoria_Producto` FOREIGN KEY (`id_Categoria`) REFERENCES `Categoria` (`id_Categoria`),
  ADD CONSTRAINT `fk_Usuario_Producto` FOREIGN KEY (`id_Usuario`) REFERENCES `Usuario` (`id_Usuario`);
