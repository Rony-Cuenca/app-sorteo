-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-09-2020 a las 01:25:43
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sorteodb`
--
CREATE DATABASE `sorteodb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sorteodb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `embajador`
--

CREATE TABLE IF NOT EXISTS `embajador` (
  `idembajador` int(11) NOT NULL AUTO_INCREMENT,
  `embajador` varchar(50) NOT NULL,
  PRIMARY KEY (`idembajador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `embajador`
--

INSERT INTO `embajador` (`idembajador`, `embajador`) VALUES
(1, 'PATRICIO'),
(2, 'CHANGANA'),
(3, 'SOTO'),
(4, 'AGUERO'),
(5, 'SOTELO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `idestado` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(10) NOT NULL,
  PRIMARY KEY (`idestado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idestado`, `estado`) VALUES
(1, 'NO ELECTO'),
(2, 'ELECTO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ganadores`
--

CREATE TABLE IF NOT EXISTS `ganadores` (
  `idganador` int(11) NOT NULL AUTO_INCREMENT,
  `numrifa` varchar(4) NOT NULL,
  `ganador` varchar(50) NOT NULL,
  PRIMARY KEY (`idganador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `premio`
--

CREATE TABLE IF NOT EXISTS `premio` (
  `idpremio` int(11) NOT NULL AUTO_INCREMENT,
  `premio` text NOT NULL,
  PRIMARY KEY (`idpremio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `premio`
--

INSERT INTO `premio` (`idpremio`, `premio`) VALUES
(13, 'TV LG LED 32 PULGADA'),
(14, 'EQUIPO DE SONIDO LG'),
(15, 'PLAYSTATION 4'),
(16, 'REFRIGERADOR SAMSUNG'),
(17, 'MICROONDAS OSTER'),
(18, 'COCINA OSTER 4 HORNILLAS'),
(19, 'LICUADORA OSTER'),
(20, 'LAVADORA SAMSUNG 15 KG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rifa`
--

CREATE TABLE IF NOT EXISTS `rifa` (
  `numrifa` varchar(4) NOT NULL,
  `nombcomprador` varchar(50) NOT NULL,
  `celular` varchar(9) NOT NULL,
  `idembajador` int(11) NOT NULL,
  `idestado` int(11) NOT NULL,
  PRIMARY KEY (`numrifa`),
  KEY `FK_rifa_estado` (`idestado`),
  KEY `FK_rifa_embajador` (`idembajador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rifa`
--

INSERT INTO `rifa` (`numrifa`, `nombcomprador`, `celular`, `idembajador`, `idestado`) VALUES
('R001', 'HENRY WILSON', '987456536', 5, 1),
('R002', 'JHOSELYN MARYURI', '987456537', 5, 1),
('R003', 'PAOLA LISBETH', '987456538', 5, 1),
('R004', 'WENDY XIOMARA', '987456539', 5, 1),
('R005', 'LUZ GERALDINE', '987456540', 5, 1),
('R006', 'GEDERLI MIGUEL', '987456541', 5, 1),
('R007', 'MERCEDES', '987456542', 5, 1),
('R008', 'HAROLD BRAN', '987456543', 5, 1),
('R009', 'FERNANDO ALBINO', '987456544', 5, 1),
('R010', 'MANUEL ABEL', '987456479', 2, 1),
('R011', 'DENISSE ALLISON FRANCHESCA', '987456480', 2, 1),
('R014', 'KATHERINE GABRIELA', '987456481', 3, 1),
('R015', 'ZULEIKA GERALDINE', '987456482', 3, 1),
('R016', 'JHOSELIN BEATRIZ', '987456483', 3, 1),
('R020', 'MARTHA MEDALY', '987456545', 5, 1),
('R021', 'MICHAELL', '987456546', 5, 1),
('R022', 'GONZALO BRAD', '987456547', 5, 1),
('R023', 'ANDREA SELENE', '987456548', 5, 1),
('R024', 'OSCAR', '987456549', 5, 1),
('R025', 'JULIANA', '987456550', 5, 1),
('R026', 'PIERO SEBASTIAN', '987456551', 5, 1),
('R027', 'FANNY MARISSA', '987456552', 5, 1),
('R028', 'SAMIR', '987456553', 5, 1),
('R029', 'SARA DEL PILAR', '987456554', 5, 1),
('R030', 'ALEXANDER STEED', '987456502', 5, 1),
('R031', 'STEFANI ELIZABETH', '987456503', 5, 1),
('R032', 'SUSANA ANDREA', '987456504', 5, 1),
('R033', 'FRANCO', '987456505', 5, 1),
('R034', 'LESSLY MISHELL', '987456506', 5, 1),
('R035', 'MARITZA GIANINA', '987456507', 5, 1),
('R036', 'SUSANA', '987456508', 5, 1),
('R037', 'GREYS JENIFER', '987456509', 5, 1),
('R038', 'MARCO ANTONIO MIRKO', '987456510', 5, 1),
('R039', 'ALVARO ENRIQUE', '987456511', 5, 1),
('R040', 'ELIZABETH PAMELA', '987456512', 5, 1),
('R041', 'ALESSANDRA', '987456513', 5, 1),
('R042', 'BRYAN WILFREDO', '987456514', 5, 1),
('R043', 'CECILIA DEL PILAR', '987456515', 5, 1),
('R044', 'DEIBY ALEXANDER', '987456516', 5, 1),
('R045', 'THALIA LUCERO', '987456517', 5, 1),
('R046', 'ADA ESPERANZA', '987456518', 5, 1),
('R047', 'YANYRA GRACIELA', '987456519', 5, 1),
('R048', 'OLGA LUCERO', '987456520', 5, 1),
('R049', 'VICTOR HUGO', '987456521', 5, 1),
('R050', 'ERICK GIANCARLO', '987456522', 5, 1),
('R051', 'GUIANELLA ROXANA', '987456523', 5, 1),
('R052', 'MARCIA ALEJANDRA', '987456524', 5, 1),
('R053', 'KATHERINE ROSSMARY', '987456525', 5, 1),
('R054', 'OSCAR FRANCISCO', '987456526', 5, 1),
('R055', 'CINDY DANIELA', '987456527', 5, 1),
('R056', 'CRISTHIAN ALEXIS', '987456528', 5, 1),
('R057', 'ASTRIO', '987456529', 5, 1),
('R058', 'BEATRIS YOVANA', '987456530', 5, 1),
('R059', 'JUDITH ESMERALDA', '987456531', 5, 1),
('R060', 'DISBET ANGELICA', '987456532', 5, 1),
('R061', 'GUADALUPE', '987456533', 5, 1),
('R062', 'ASTRYA ANTONELLA', '987456534', 5, 1),
('R063', 'AME JOHANNA', '987456535', 5, 1),
('R064', 'SELENE MARISOL', '987456536', 5, 1),
('R080', 'ALEJANDRO JADIR', '987456475', 1, 1),
('R081', 'LUDWING ALEXANDER', '987456476', 1, 1),
('R082', 'DIEGO MARTIN', '987456477', 1, 1),
('R083', 'GERARDO ISRAEL', '987456478', 1, 1),
('R084', 'JAMELY DEL PILAR', '987456479', 1, 1),
('R120', 'DANNY JHONATAN', '987456483', 4, 1),
('R121', 'ANNY MISHELL', '987456484', 4, 1),
('R122', 'PAMELA SILVANA', '987456485', 4, 1),
('R123', 'ISABEL FRENESSY', '987456486', 4, 1),
('R125', 'JULISA YESENIA', '987456488', 4, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `rifa`
--
ALTER TABLE `rifa`
  ADD CONSTRAINT `FK_rifa_embajador` FOREIGN KEY (`idembajador`) REFERENCES `embajador` (`idembajador`),
  ADD CONSTRAINT `FK_rifa_estado` FOREIGN KEY (`idestado`) REFERENCES `estado` (`idestado`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
