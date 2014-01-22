
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-01-2014 a las 10:44:00
-- Versión del servidor: 5.1.69
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u859503001_base`
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
  `Zona` int(2) NOT NULL DEFAULT '-1',
  `Test` int(1) NOT NULL DEFAULT '0',
  `Ex_Mate` int(1) NOT NULL DEFAULT '-1',
  `Sexo_p` int(1) NOT NULL,
  `Edad_p` int(1) NOT NULL,
  `Promedio_Sec` int(1) NOT NULL,
  `Puntaje` int(3) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`Clave`),
  UNIQUE KEY `Clave` (`Clave`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admision`
--

INSERT INTO `admision` (`Clave`, `Ex_Admision`, `Ex_Matematicas`, `Conducta`, `Induccion_Alumnos`, `Induccion_Papas`, `Zona`, `Test`, `Ex_Mate`, `Sexo_p`, `Edad_p`, `Promedio_Sec`, `Puntaje`) VALUES
(8, 10.0, 10.0, -1, 1, 1, 2, 1, 1, 1, 1, 1, 8),
(6, 10.0, 10.0, 1, 1, 1, -1, 1, 1, 0, -1, 1, 4),
(10, 10.0, 9.0, 0, 0, 1, 2, 1, 0, 0, 1, 0, 5),
(9, 10.0, 10.0, 1, 1, -1, -1, 1, 1, 0, 0, 0, 2);

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
  `Estado_donde_Nacio` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
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
  `Promedio_de_Secundaria` float(3,1) NOT NULL DEFAULT '0.0',
  `Boleta_de_Secundaria` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Certificado_de_Secundaria` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Primera_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Segunda_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Tercera_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Cuarta_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Quinta_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Sexta_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Septima_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Clave`),
  UNIQUE KEY `Clave` (`Clave`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Clave`, `Nombre`, `Apellido_Paterno`, `Apellido_Materno`, `Sexo`, `Edad`, `Municipio_Donde_Vive`, `Estado_Donde_Vive`, `Municipio_donde_Nacio`, `Estado_donde_Nacio`, `Peso`, `Estatura`, `Medida_de_la_Cintura`, `Email`, `Calle`, `Colonia`, `Codigo_Postal`, `Fecha_de_Nacimiento`, `Curp`, `Estado_Civil`, `Tipo_Sanguineo`, `Nombre_del_Padre`, `Ocupacion_del_Padre`, `Telefono_del_Padre`, `Celular_del_Padre`, `Distancia_y_Tiempo_a_su_Casa`, `Transporte`, `Costo_del_transporte`, `Nombre_de_Secundaria`, `Domicilio_de_secundaria`, `Municipio_de_Secundaria`, `Estado_de_Secundaria`, `Tipo_de_secundaria`, `Modalidad_de_Secundaria`, `Regimen_de_Secundaria`, `Promedio_de_Secundaria`, `Boleta_de_Secundaria`, `Certificado_de_Secundaria`, `Primera_Opcion`, `Segunda_Opcion`, `Tercera_Opcion`, `Cuarta_Opcion`, `Quinta_Opcion`, `Sexta_Opcion`, `Septima_Opcion`) VALUES
(6, 'ISAAC FELIPE', 'ANDRADE', 'JAINS', 'Hombre', '21', 'Zumpango', 'Guanajuato', 'Zumpango', '', '80', '186', '86', 'ifaj_66@hotmail.com', 'SAN MARTIN 5', 'SAN ANTONIO', '37750', '21/4/1998', 'AAJI920421HVZNNS01', 'Casado(a)', 'B+', 'FELIPE ANDRADE CRUZ', 'INGENIERO AGRONOMO', '1544949', '4151190236', '40min.      /      35', 'Automovil', '35', 'ANGEL WENSESLAO CABRERA', 'ZARCO 15', 'Zacatlán', 'Puebla', 'General', 'Escolarizada', 'Público', 10.0, 'SI', 'SI', 'Programación', 'Electricidad', 'Soporte y Mantenimiento Técnico', 'Mecánica Industrial', 'Contabilidad', 'Logística', 'Administración de Recursos Humanos'),
(8, 'LUISA', 'PEREZ', 'LOPEZ', 'Mujer', '15', 'Abasolo', 'Baja California', 'Abasolo', 'Coahuila de Zaragoza', '40', '166', '50', 'no@hotmail.com', 'MICALLE 1', 'MICOLONIA', '37722', '3/1/1998', 'SOEL221188HGTLNS05', 'Casado(a)', 'O-', 'ALFONSO', 'MAESTRO', '3245678', '41533245', '20min.  /  3', 'Urbano', '40', 'MI SECU', 'EN SU CALLE', 'Asientos', 'Aguascalientes', 'General', 'Escolarizada', 'Público', 10.0, 'SI', 'SI', 'Administración de Recursos Humanos', 'Contabilidad', 'Electricidad', 'Logística', 'Logística', 'Mecánica Industrial', 'Soporte y Mantenimiento Técnico'),
(10, 'PEDRO PICAPIEDRA', 'GONZALEZ', 'PEREZ', 'Hombre', '15', 'San Miguel de Allende', 'Guanajuato', 'San Miguel de Allende', 'Guanajuato', '80', '170', '60', 'ifaj_66@hotmail.com', 'ROSAS 21', 'CENTRO', '73350', '3/2/1998', 'AAJI920421HVZNNS01', 'Casado(a)', 'B+', 'EDUARDO GONZALEZ', 'MAESTRO', '4151123465', '4141190345', '30min.  /  2', 'Urbano', '5', 'SECUNDARIA 23', 'HERNAN CORTES 12', 'Puebla', 'Puebla', 'General', 'Escolarizada', 'Público', 9.0, 'SI', 'SI', 'Administración de Recursos Humanos', 'Contabilidad', 'Electricidad', 'Logística', 'Mecánica Industrial', 'Programación', 'Soporte y Mantenimiento Técnico'),
(9, 'ERICK LUIS', 'TORRES', 'LOPEZ', 'Hombre', '17', 'Chapultepec', 'Guanajuato', 'Chapultepec', 'México', '70', '170', '60', 'ifaj_66@hotmail.com', 'SAN MARTIN 5', 'SAN ANTONIO', '37800', '20/4/1996', 'AAJI920421HVZNNS01', 'Casado(a)', 'O+', 'EDGAR', 'MAESTRO', '41566789', '4156789', '30min.  /  10', 'Urbano', '10', 'SEC 123', 'ROSAS 43', 'Axapusco', 'México', 'General', 'Escolarizada', 'Público', 9.0, 'SI', 'SI', 'Administración de Recursos Humanos', 'Contabilidad', 'Electricidad', 'Logística', 'Mecánica Industrial', 'Programación', 'Soporte y Mantenimiento Técnico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombre` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `prioridad` int(2) NOT NULL,
  `Clave` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Clave`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `contrasena`, `Correo`, `prioridad`, `Clave`) VALUES
('Mario', '114mas', '', 2, 1),
('feli', '221188', '', 1, 5),
('Edgar', '12345', 'azael_dg@hotmail.com', 2, 6),
('isaac', '12345', 'ifaj_66@hotmail.com', 1, 7),
('isaac', '123456', 'ifaj_66@hotmail.com', 1, 8),
('juan', '123', 'azael_dg@hotmail.com', 1, 9),
('maria', '123', 'azael_dg@hotmail.com', 2, 10),
('azael', '123456789', 'azael_dg@hotmail.com', 1, 11),
('isaac', '12345', 'azael_dg@hotmail.com', 1, 12);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
