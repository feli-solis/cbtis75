-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-10-2013 a las 16:01:07
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cbtis75`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admision`
--

CREATE TABLE IF NOT EXISTS `admision` (
  `Clave` int(32) NOT NULL,
  `Ex_Admision` float(3,1) NOT NULL,
  `Ex_Matematicas` float(3,1) NOT NULL,
  `Conducta` int(2) NOT NULL DEFAULT '-1',
  `Induccion_Alumnos` int(1) NOT NULL DEFAULT '0',
  `Induccion_Papas` int(1) NOT NULL DEFAULT '0',
  KEY `Clave` (`Clave`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admision`
--

INSERT INTO `admision` (`Clave`, `Ex_Admision`, `Ex_Matematicas`, `Conducta`, `Induccion_Alumnos`, `Induccion_Papas`) VALUES
(1, 0.0, 0.0, 1, 1, 0),
(2, 9.5, 9.0, 1, 0, 1),
(3, 0.0, 0.0, 0, 1, -1),
(9, 0.0, 0.0, -1, -1, -1),
(10, 0.0, 0.0, 0, 1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `Clave` int(32) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido_Paterno` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido_Materno` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Sexo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Edad` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Municipio_Donde_Vive` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Estado_Donde_Vive` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Municipio_donde_Nacio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Peso` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Estatura` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `Medida_de_la_Cintura` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Calle` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Colonia` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo_Postal` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_de_Nacimiento` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Curp` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Estado_Civil` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Tipo_Sanguineo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre_del_Padre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Ocupacion_del_Padre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono_del_Padre` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Celular_del_Padre` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Distancia_y_Tiempo_a_su_Casa` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Transporte` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Costo_del_transporte` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre_de_Secundaria` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Domicilio_de_secundaria` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Municipio_de_Secundaria` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Estado_de_Secundaria` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Tipo_de_secundaria` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Modalidad_de_Secundaria` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Regimen_de_Secundaria` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Promedio_de_Secundaria` float(2,1) NOT NULL DEFAULT '0.0',
  `Boleta_de_Secundaria` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Certificado_de_Secundaria` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Primera_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Segunda_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Tercera_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Cuarta_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Quinta_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Sexta_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Septima_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Clave`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Clave`, `Nombre`, `Apellido_Paterno`, `Apellido_Materno`, `Sexo`, `Edad`, `Municipio_Donde_Vive`, `Estado_Donde_Vive`, `Municipio_donde_Nacio`, `Peso`, `Estatura`, `Medida_de_la_Cintura`, `Email`, `Calle`, `Colonia`, `Codigo_Postal`, `Fecha_de_Nacimiento`, `Curp`, `Estado_Civil`, `Tipo_Sanguineo`, `Nombre_del_Padre`, `Ocupacion_del_Padre`, `Telefono_del_Padre`, `Celular_del_Padre`, `Distancia_y_Tiempo_a_su_Casa`, `Transporte`, `Costo_del_transporte`, `Nombre_de_Secundaria`, `Domicilio_de_secundaria`, `Municipio_de_Secundaria`, `Estado_de_Secundaria`, `Tipo_de_secundaria`, `Modalidad_de_Secundaria`, `Regimen_de_Secundaria`, `Promedio_de_Secundaria`, `Boleta_de_Secundaria`, `Certificado_de_Secundaria`, `Primera_Opcion`, `Segunda_Opcion`, `Tercera_Opcion`, `Cuarta_Opcion`, `Quinta_Opcion`, `Sexta_Opcion`, `Septima_Opcion`) VALUES
(1, 'MARIO RICARDO', 'LLAMAS', 'ARTEAGA', 'MASCULINO', '38', 'ALLENDE', 'GUANAJUATO', 'ALLENDE', '70', '1.70', '', 'LLAMASARTEAGA@YAHOO.COM.MX', 'FRONDA 22', 'MEZQUITEZ II', '37750', '20 MARZO 1975', '', 'CASADO', 'ORH +', '', '', '', '', '', 'NO SELECCIONADO', '', '', '', '', '', '', '', '', 0.0, 'NO SELECCIONADO', 'NO SELECCIONADO', 'PROGRAMACION', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO'),
(2, 'EDGAR AZAEL', 'DEANDA', 'GONZALEZ', 'MASCULINO', '22', '', '', '', '', '', '', '', 'SAN RAFAEL NORTE #2', 'SAN ANTONIO', '', '', '', '', '', '', '', '', '', '', 'NO SELECCIONADO', '', '', '', '', '', '', '', '', 8.5, 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO'),
(3, 'LUIS FELIPE', 'SOLIS', 'ENRIQUEZ', 'MASCULINO', '24', '', '', '', '', '', '', '', 'CALZADA DE LA LUZ #88', 'CENTRO', '37700', '', '', '', '', '', '', '', '', '', 'NO SELECCIONADO', '', '', '', '', '', '', '', '', 0.0, 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO'),
(9, 'ISAAC', 'ANDRADE', 'JAINS', 'MASCULINO', '20', '', '', '', '', '', '', '', 'RINCONADA DE SAN MARTIN #5', 'SAN ANTONIO', '', '', '', '', '', '', '', '', '', '', 'NO SELECCIONADO', '', '', '', '', '', '', '', '', 0.0, 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO'),
(10, 'xxx', 'XXX', 'XXX', 'FEMENINO', '22', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'NO SELECCIONADO', '', '', '', '', '', '', '', '', 0.0, 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO', 'NO SELECCIONADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombre` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `Clave` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Clave`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `contrasena`, `Clave`) VALUES
('Mario', '114mas', 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admision`
--
ALTER TABLE `admision`
  ADD CONSTRAINT `admision_ibfk_1` FOREIGN KEY (`Clave`) REFERENCES `alumnos` (`Clave`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
