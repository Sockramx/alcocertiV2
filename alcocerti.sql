create database alcocerti;

use alcocerti;


CREATE TABLE IF NOT EXISTS `Categoria` (
  `id_Categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nomb_Categoria` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_Categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;




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

SELECT * FROM Producto WHERE id_Categoria=5;


INSERT INTO `Producto` (`id_Producto`, `nomb_Producto`, `marc_Producto`, `descrip_Producto`, `img_Producto`, `id_Categoria`, `id_Usuario`) VALUES
(1, 'LG 22 GD-GF', 'LG', 'monitor de hd', 'sd/dsf', 1, 1);



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



INSERT INTO Usuario (`id_Usuario`, `nomb_Usuario`, `ape_Usuario`, `dni_Usuario`, `pass_Usuario`, `tele_Usuario`, `celu_Usuario`) VALUES (NULL, 'admin2', 'ad', '1546', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '589445', '9412215')

ALTER TABLE `Producto`
  ADD CONSTRAINT `fk_Categoria_Producto` 
FOREIGN KEY (`id_Categoria`) REFERENCES `Categoria` (`id_Categoria`),
  ADD CONSTRAINT `fk_Usuario_Producto` 
FOREIGN KEY (`id_Usuario`) REFERENCES `Usuario` (`id_Usuario`);





SELECT * FROM Usuario;
SELECT * FROM Producto;
SELECT * FROM Categoria;
SELECT * FROM Usuario;

select id_Categoria from  Categoria where nomb_Categoria="tablets";
select id_Usuario from  Usuario where nomb_Usuario="admin";

delete from Producto where is_Producto=69;