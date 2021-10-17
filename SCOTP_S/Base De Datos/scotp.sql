-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-12-2018 a las 17:14:34
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `scotp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `idEm` int(11) NOT NULL AUTO_INCREMENT,
  `nomEm` varchar(35) NOT NULL,
  PRIMARY KEY (`idEm`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idEm`, `nomEm`) VALUES
(1, 'transporjal ruta 623-A S.A. De C.V.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargado`
--

DROP TABLE IF EXISTS `encargado`;
CREATE TABLE IF NOT EXISTS `encargado` (
  `idEn` int(11) NOT NULL AUTO_INCREMENT,
  `nomEn` varchar(30) NOT NULL,
  `apellidoPEn` varchar(20) NOT NULL,
  `apellidoMEn` varchar(20) NOT NULL,
  `correoEn` varchar(35) NOT NULL,
  `telefonoEn` bigint(20) DEFAULT NULL,
  `area` varchar(30) NOT NULL,
  `passEn` varchar(20) NOT NULL,
  `idEm_FK` int(11) DEFAULT NULL,
  PRIMARY KEY (`idEn`),
  KEY `idEm_FK` (`idEm_FK`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encargado`
--

INSERT INTO `encargado` (`idEn`, `nomEn`, `apellidoPEn`, `apellidoMEn`, `correoEn`, `telefonoEn`, `area`, `passEn`, `idEm_FK`) VALUES
(4, 'Pedro', 'Martinez', 'Morales', 'pedrito@papu.com', 3312422123, 'RH', 'monos', NULL),
(3, 'paco', 'ron', 'ton', 'rrr@fff', 123456, 'finanzas', 'aaaaa', NULL),
(5, 'Juan Antonio', 'Robledo', 'Aceves', 'tonyangry45@hotmail.com', 3313287175, 'Recursos Humanos', 'password', NULL),
(6, 'paco', 'ron', 'ton', 'rrr@fffasasasa', 123456, 'finanzas', 'aaaaa', NULL),
(7, 'Roberto', 'Acevez', 'Martinez', 'robe@gmail.com', 3312456578, 'Finanzas', '0987654321', NULL),
(8, 'Don', 'Juan', 'Tenorio', 'Don_Juan@hotmail.com', 999999, 'Diseño HD', '123456', NULL),
(9, 'Ximena', 'Arzua', 'Flores', 'xixi2@gmail.com', 5512457806, 'RR.HH', 'holi', NULL),
(10, 'Julieta', 'Gonzalez', 'Renteria', 'julietilla@gmail.com', 3312435467, 'Finanzas', 'juliettillaholi', NULL),
(11, 'El prof', 'Malvado', 'Villano', 'tortura@malvados.evil', 66666666, 'Tortura Avanzada', 'toto', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operador`
--

DROP TABLE IF EXISTS `operador`;
CREATE TABLE IF NOT EXISTS `operador` (
  `idOp` int(11) NOT NULL AUTO_INCREMENT,
  `nomOp` varchar(30) NOT NULL,
  `apellidoPOp` varchar(20) NOT NULL,
  `apellidoMOp` varchar(20) NOT NULL,
  `correoOp` varchar(35) NOT NULL,
  `telefonoOp` bigint(20) NOT NULL,
  `estado` varchar(15) DEFAULT 'N/a',
  `dias` varchar(50) DEFAULT 'N/a',
  `horario` varchar(35) DEFAULT 'N/a',
  `fechaIni` date DEFAULT '2018-11-19',
  `fechaFin` date DEFAULT '2018-11-19',
  `passOp` varchar(20) NOT NULL,
  `numUnidad_FK` varchar(20) DEFAULT '0',
  `idEm_FK` int(11) DEFAULT NULL,
  PRIMARY KEY (`idOp`),
  KEY `numUnidad_FK` (`numUnidad_FK`),
  KEY `idEm_FK` (`idEm_FK`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `operador`
--

INSERT INTO `operador` (`idOp`, `nomOp`, `apellidoPOp`, `apellidoMOp`, `correoOp`, `telefonoOp`, `estado`, `dias`, `horario`, `fechaIni`, `fechaFin`, `passOp`, `numUnidad_FK`, `idEm_FK`) VALUES
(37, 'Panchon', 'Mares', 'Reno', 'pan@gmail.com', 3312647589, 'Activo', 'Lunes a Viernes', '8:00 AM - 2:00 PM', '2000-01-19', '2018-11-19', 'aaaaa', '4323', NULL),
(28, 'Anthony Esteven', 'Sandoval', 'Marquez', 'tonyangry46@gmail.com', 3324654234, 'Activo', 'Lunes a Viernes', '6:00 AM - 3:00 PM', '2016-12-14', '2018-11-19', 'password', '1230', NULL),
(27, 'Juan HD4K', 'Salazar', 'Villegas', 'salvi_Art1@hotmail.com', 3336900283, 'Inactivo', 'Lunes', '8:00 AM  a 9:00 PM', '1999-12-14', '2018-12-09', 'Maeve_10156', '3214', NULL),
(40, 'Julieta', 'Gonzalez', 'Renteria', 'julieta.renteria15@gmail.com', 3314990409, 'reprobada', 'viernes', 'helloo', '2018-11-19', '2018-11-19', 'ggg', '102', NULL),
(41, 'Jorge', 'Mendez', 'Ramirez', 'flor@gmail.com', 3312647590, 'N/a', 'N/a', 'N/a', '2018-11-19', '2018-11-19', 'qwerty', '102', NULL),
(46, 'Bartolo', 'Rodriguez', 'Macho', 'barto@gmail.com', 3342567821, 'Activo', 'Lunes a Viernes', '8:00 AM - 2:00 PM', '2016-12-01', '2018-11-19', '54321', '108', NULL),
(43, 'Alejandro', 'Leiva', 'Leivin', 'Tu_Corozon_@hotmail.com', 123456, 'N/a', 'N/a', 'N/a', '2018-11-19', '2018-11-19', 'aaaaa', '0', NULL),
(44, 'Cristopher', 'Plascencia', 'Chaparro', 'ocaraevoce@gmail.com', 232342, 'N/a', 'N/a', '8:00', '2018-11-19', '2018-11-19', 'cara', '1230', NULL),
(49, 'pit', 'pit', 'pit', 'pit@hot.com', 3322114455, 'N/a', 'N/a', 'N/a', '2018-11-19', '2018-11-19', 'pit', '0', NULL),
(47, 'Pedro', 'PezÃ³n', 'Sierra', 'pedro12@gmail.com', 3312586948, 'Activo', 'Lunes a Viernes', '2:00 PM a 8:00 PM', '2018-11-19', '2018-11-19', 'holi', '108', NULL),
(48, 'Darth Prof', 'Vader', 'Skywalker', 'Darthprof@darkside.evil', 9384727, 'Activo', 'Lunes a Viernes', '8:00 AM - 2:00 PM', '2018-11-19', '2018-11-19', '123456', '1230', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad`
--

DROP TABLE IF EXISTS `unidad`;
CREATE TABLE IF NOT EXISTS `unidad` (
  `numUnidad` int(11) NOT NULL,
  `placas` varchar(20) NOT NULL,
  `idEm_FK` int(11) DEFAULT NULL,
  PRIMARY KEY (`numUnidad`),
  KEY `idEm_FK` (`idEm_FK`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `unidad`
--

INSERT INTO `unidad` (`numUnidad`, `placas`, `idEm_FK`) VALUES
(1230, 'GH4F-4R', NULL),
(2134, 'PLOS-W2', NULL),
(3214, 'SCNF-33', NULL),
(542, 'MDFG-R5', NULL),
(4323, 'WART-JK', NULL),
(102, 'LOKH-4F', NULL),
(108, 'JX-0108', NULL),
(604, '123-BGY-K', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
