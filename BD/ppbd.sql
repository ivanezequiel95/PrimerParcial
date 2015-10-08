-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2015 a las 17:01:39
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ppbd`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Alta`(IN `par_dni` INT(10), IN `par_provincia` VARCHAR(50), IN `par_candidato` VARCHAR(50), IN `par_sexo` VARCHAR(50), IN `par_localidad` VARCHAR(50), IN `par_direccion` VARCHAR(50))
    NO SQL
INSERT INTO `votos`(`dni`, `provincia`, `candidato`, `sexo`, `localidad`, `direccion`) VALUES (par_dni,par_provincia,par_candidato,par_sexo,par_localidad,par_direccion)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerTodos`()
    NO SQL
SELECT * FROM `votos`$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votos`
--

CREATE TABLE IF NOT EXISTS `votos` (
  `dni` int(10) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `candidato` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `votos`
--

INSERT INTO `votos` (`dni`, `provincia`, `candidato`, `sexo`, `localidad`, `direccion`) VALUES
(37247887, 'Santa Fe', 'Scioli', 'Masculino', 'Rosario', 'Cochabamba 666'),
(39266774, 'Buenos Aires', 'Macri', 'Femenino', 'Lanus', 'Choele Choel 475');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
