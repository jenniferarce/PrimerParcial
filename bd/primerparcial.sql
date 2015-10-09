-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2015 a las 02:59:45
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `primerparcial`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `BorrarVoto`(IN `idd` INT)
    NO SQL
delete from votos where id=idd$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarVoto`(IN `dn` INT, IN `prov` VARCHAR(20), IN `lo` VARCHAR(50), IN `di` VARCHAR(50), IN `cand` VARCHAR(20), IN `se` VARCHAR(20))
    NO SQL
INSERT into votos (dni,provincia,localidad,direccion,candidato,sexo)values(dn,prov,lo,di,cand,se)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ModificarVoto`(IN `dn` INT(20), IN `prov` VARCHAR(20), IN `lo` VARCHAR(50), IN `di` VARCHAR(50),IN `cand` VARCHAR(20), IN `se` VARCHAR(20), IN `idd` INT)
    NO SQL
UPDATE votos set dni=dn,provincia=prov,localidad=lo,direccion=di,candidato=cand,sexo=se WHERE id=idd$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerVotos`()
    NO SQL
select * from votos$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerVotosId`(IN `idd` INT)
    NO SQL
SELECT * from votos where id=idd$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `validarDni`(IN `dn` INT(20))
    NO SQL
SELECT * from votos where dni=dn$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votos`
--

CREATE TABLE IF NOT EXISTS `votos` (
`id` int(11) NOT NULL,
  `dni` int(20) NOT NULL,
  `provincia` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `localidad` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `candidato` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `sexo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `votos`
--

INSERT INTO `votos` (`id`, `dni`, `provincia`, `localidad`, `direccion`, `candidato`, `sexo`) VALUES
(2, 1000001, 'sdas', '', '', 'Massa', 'Masculino'),
(5, 1000007, 'u', '', '', 'Massa', 'Masculino'),
(8, 1000012, 'ere', '', '', 'Macri', 'Masculino'),
(9, 1000002, 't', '', '', 'Macri', 'Masculino'),
(12, 1000002, 'sd', 'Massa', 'Femenino', 'sd', 'g');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `votos`
--
ALTER TABLE `votos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `votos`
--
ALTER TABLE `votos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
