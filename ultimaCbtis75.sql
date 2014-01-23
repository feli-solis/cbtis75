-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 23, 2014 at 09:53 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cbtis75`
--

-- --------------------------------------------------------

--
-- Table structure for table `admision`
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
-- Dumping data for table `admision`
--

INSERT INTO `admision` (`Clave`, `Ex_Admision`, `Ex_Matematicas`, `Conducta`, `Induccion_Alumnos`, `Induccion_Papas`, `Zona`, `Test`, `Ex_Mate`, `Sexo_p`, `Edad_p`, `Promedio_Sec`, `Puntaje`) VALUES
(8, 10.0, 10.0, -1, 1, 1, 2, 1, 1, 1, 1, 1, 8),
(6, 10.0, 10.0, 1, 1, 1, -1, 1, 1, 0, -1, 1, 4),
(10, 10.0, 9.0, 0, 0, 1, 2, 1, 0, 0, 1, 0, 5),
(9, 10.0, 10.0, 1, 1, -1, -1, 1, 1, 0, 0, 0, 2),
(11, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(12, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(13, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(14, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(15, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(16, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(17, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(18, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(19, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(20, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(21, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(22, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(23, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(24, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(25, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(26, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(27, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(28, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(29, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(30, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(31, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(32, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(33, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(34, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(35, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(36, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(37, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(38, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(39, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(40, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(41, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(42, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(43, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(44, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(45, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(46, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(47, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(48, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(49, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(50, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(51, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(52, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(53, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(54, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(55, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(56, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(57, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(58, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(59, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(60, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(61, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(62, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(63, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(64, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(65, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(66, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(67, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(68, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(69, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(70, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(71, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1),
(72, 0.0, 0.0, -1, -1, -1, -1, 0, -1, 0, 0, 0, -1);

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
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
  `Cedula_de_Aspirante_SEG` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Primera_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Segunda_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Tercera_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Cuarta_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Quinta_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Sexta_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Septima_Opcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Clave`),
  UNIQUE KEY `Clave` (`Clave`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=73 ;

--
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`Clave`, `Nombre`, `Apellido_Paterno`, `Apellido_Materno`, `Sexo`, `Edad`, `Municipio_Donde_Vive`, `Estado_Donde_Vive`, `Municipio_donde_Nacio`, `Estado_donde_Nacio`, `Peso`, `Estatura`, `Medida_de_la_Cintura`, `Email`, `Calle`, `Colonia`, `Codigo_Postal`, `Fecha_de_Nacimiento`, `Curp`, `Estado_Civil`, `Tipo_Sanguineo`, `Nombre_del_Padre`, `Ocupacion_del_Padre`, `Telefono_del_Padre`, `Celular_del_Padre`, `Distancia_y_Tiempo_a_su_Casa`, `Transporte`, `Costo_del_transporte`, `Nombre_de_Secundaria`, `Domicilio_de_secundaria`, `Municipio_de_Secundaria`, `Estado_de_Secundaria`, `Tipo_de_secundaria`, `Modalidad_de_Secundaria`, `Regimen_de_Secundaria`, `Promedio_de_Secundaria`, `Boleta_de_Secundaria`, `Certificado_de_Secundaria`, `Cedula_de_Aspirante_SEG`, `Primera_Opcion`, `Segunda_Opcion`, `Tercera_Opcion`, `Cuarta_Opcion`, `Quinta_Opcion`, `Sexta_Opcion`, `Septima_Opcion`) VALUES
(6, 'ISAAC FELIPE', 'ANDRADE', 'JAINS', 'Hombre', '21', 'Zumpango', 'Guanajuato', 'Zumpango', '', '80', '186', '86', 'ifaj_66@hotmail.com', 'SAN MARTIN 5', 'SAN ANTONIO', '37750', '21/4/1998', 'AAJI920421HVZNNS01', 'Casado(a)', 'B+', 'FELIPE ANDRADE CRUZ', 'INGENIERO AGRONOMO', '1544949', '4151190236', '40min.      /      35', 'Automovil', '35', 'ANGEL WENSESLAO CABRERA', 'ZARCO 15', 'Zacatlán', 'Puebla', 'General', 'Escolarizada', 'Público', 10.0, 'SI', 'SI', '', 'Programación', 'Electricidad', 'Soporte y Mantenimiento Técnico', 'Mecánica Industrial', 'Contabilidad', 'Logística', 'Administración de Recursos Humanos'),
(8, 'LUISA', 'PEREZ', 'LOPEZ', 'Mujer', '15', 'Abasolo', 'Baja California', 'Abasolo', 'Coahuila de Zaragoza', '40', '166', '50', 'no@hotmail.com', 'MICALLE 1', 'MICOLONIA', '37722', '3/1/1998', 'SOEL221188HGTLNS05', 'Casado(a)', 'O-', 'ALFONSO', 'MAESTRO', '3245678', '41533245', '20min.  /  3', 'Urbano', '40', 'MI SECU', 'EN SU CALLE', 'Asientos', 'Aguascalientes', 'General', 'Escolarizada', 'Público', 10.0, 'SI', 'SI', '', 'Administración de Recursos Humanos', 'Contabilidad', 'Electricidad', 'Logística', 'Logística', 'Mecánica Industrial', 'Soporte y Mantenimiento Técnico'),
(10, 'PEDRO PICAPIEDRA', 'GONZALEZ', 'PEREZ', 'Hombre', '15', 'San Miguel de Allende', 'Guanajuato', 'San Miguel de Allende', 'Guanajuato', '80', '170', '60', 'ifaj_66@hotmail.com', 'ROSAS 21', 'CENTRO', '73350', '3/2/1998', 'AAJI920421HVZNNS01', 'Casado(a)', 'B+', 'EDUARDO GONZALEZ', 'MAESTRO', '4151123465', '4141190345', '30min.  /  2', 'Urbano', '5', 'SECUNDARIA 23', 'HERNAN CORTES 12', 'Puebla', 'Puebla', 'General', 'Escolarizada', 'Público', 9.0, 'SI', 'SI', '', 'Administración de Recursos Humanos', 'Contabilidad', 'Electricidad', 'Logística', 'Mecánica Industrial', 'Programación', 'Soporte y Mantenimiento Técnico'),
(9, 'ERICK LUIS', 'TORRES', 'LOPEZ', 'Hombre', '17', 'Chapultepec', 'Guanajuato', 'Chapultepec', 'México', '70', '170', '60', 'ifaj_66@hotmail.com', 'SAN MARTIN 5', 'SAN ANTONIO', '37800', '20/4/1996', 'AAJI920421HVZNNS01', 'Casado(a)', 'O+', 'EDGAR', 'MAESTRO', '41566789', '4156789', '30min.  /  10', 'Urbano', '10', 'SEC 123', 'ROSAS 43', 'Axapusco', 'México', 'General', 'Escolarizada', 'Público', 9.0, 'SI', 'SI', '', 'Administración de Recursos Humanos', 'Contabilidad', 'Electricidad', 'Logística', 'Mecánica Industrial', 'Programación', 'Soporte y Mantenimiento Técnico'),
(13, 'JORGE EDUARDO', 'MARTINEZ', 'DOMINGUEZ', 'Hombre', '15', 'Aguascalientes', 'Aguascalientes', 'Aguascalientes', 'Aguascalientes', '70', '170', '80', 'jemartinez@gmail.com', 'CALZADA DE LOS HEROES', 'CENTRO', '37800', '1/1/2014', 'SOEL221188HGTLNS05', 'Casado(a)', 'O+', 'JOSE FRANCISCO MARTINEZ GONZALEZ', 'MAESTRO', '4181820029', '4181011821', '30min.   /   25', 'Urbano', '7', 'INSTITUTO MARIA DEL REFUGIO AG', 'GUTY CARDENAS 1', 'Aguascalientes', 'Aguascalientes', 'Particular', 'Escolarizada', 'Privado', 9.0, 'SI', 'SI', 'A1234568', 'ADMINISTRACIÓN DE RECURSOS HUMANOS', 'ADMINISTRACIÓN DE RECURSOS HUMANOS', 'ADMINISTRACIÓN DE RECURSOS HUMANOS', 'ADMINISTRACIÓN DE RECURSOS HUMANOS', 'ADMINISTRACIÓN DE RECURSOS HUMANOS', 'ADMINISTRACIÓN DE RECURSOS HUMANOS', 'ADMINISTRACIÓN DE RECURSOS HUMANOS'),
(72, 'LUIS FELIPE', 'SOLIS', 'ENRIQUEZ', 'Hombre', '25', 'Aguascalientes', 'Aguascalientes', 'Aguascalientes', 'Aguascalientes', '65', '167', '80', 'solislf@gmail.com', 'CALZADA DE LA LUZ 88', 'CENTRO', '37700', '1/1/2014', 'SOEL221188HGTLNS05', 'Casado(a)', 'A+', 'Luis Felipe Solis Enriquez', 'MAESTRO', '5241511175', '5241511175', '30min. / 25 km', 'Urbano', '35', 'INSTITUTO MARIA DEL REFUGIO AG', 'GUTY CARDENAS 1', 'Aguascalientes', 'Aguascalientes', 'Particular', 'Escolarizada', 'Público', 8.8, 'SI', 'SI', 'A1234567', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos'),
(71, 'LUIS FELIPE', 'SOLIS', 'ENRIQUEZ', 'Hombre', '25', 'Dolores Hidalgo Cuna de la Independencia Nacional', 'Guanajuato', 'San Miguel de Allende', 'Guanajuato', '65', '167', '80', 'solislf@gmail.com', 'CALZADA DE LA LUZ 88', 'CENTRO', '37700', '22/11/1988', 'SOEL221188HGTLNS05', 'Casado(a)', 'A+', 'Luis Felipe Solis Enriquez', 'MAESTRO', '5241511175', '5241511175', '30min. / 25 km', 'Urbano', '35', 'INSTITUTO MARIA DEL REFUGIO AG', 'GUTY CARDENAS 1', 'San Miguel de Allende', 'Guanajuato', 'Particular', 'Escolarizada', 'Público', 8.8, 'SI', 'SI', 'A1234567', 'Administración de Recursos Humanos', 'Contabilidad', 'Electricidad', 'Logística', 'Mecánica Industrial', 'Programación', 'Soporte y Mantenimiento Técnico'),
(59, 'LUIS FELIPE', 'Enriquez', 'Felipe Solis', 'Hombre', '10', 'Aguascalientes', 'Aguascalientes', 'Aguascalientes', 'Aguascalientes', '75', '160', '53', 'jemartinez@gmail.com', 'CALZADA DE LOS HEROES', 'CENTRO', '37700', '1/1/2014', 'SOEL221188HGTLNS33', 'Soltero(a)', 'O+', 'Luis Felipe Solis Enriquez', 'MAESTRO', '5241511175', '5241511175', '30min. / 25 km', 'Autobus', '35', 'LUIS FELIPE SOLIS ENRIQUEZ', 'GUTY CARDENAS 1', 'Aguascalientes', 'Aguascalientes', 'General', 'Escolarizada', 'Público', 9.0, 'SI', 'SI', 'A1234566', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos'),
(70, 'ERICK', 'TORRES', 'HERNANDEZ', 'Hombre', '15', 'Dolores Hidalgo Cuna de la Independencia Nacional', 'Guanajuato', 'Dolores Hidalgo Cuna de la Independencia Nacional', 'Guanajuato', '80', '180', '60', 'ifaj_66@hotmail.com', 'ROSAS 12', 'CENTRO', '37800', '1/1/2014', 'AAJI920421HVZNNS01', 'Soltero(a)', 'AB+', 'PEDRO TORRES', 'MAESTRO', '4151123465', '4151190234', '10min. / 2 km', 'Urbano', '5', 'FUEGO NEUVO', '5 DE MAYO 12', 'Dolores Hidalgo Cuna de la Ind', 'Guanajuato', 'General', 'Escolarizada', 'Público', 9.0, 'SI', 'SI', '23145676', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos'),
(69, 'ERICK', 'TORRES', 'HERNANDEZ', 'Hombre', '15', 'Dolores Hidalgo Cuna de la Independencia Nacional', 'Guanajuato', 'Dolores Hidalgo Cuna de la Independencia Nacional', 'Guanajuato', '80', '180', '60', 'ifaj_66@hotmail.com', 'ROSAS 12', 'CENTRO', '37800', '1/1/2014', 'AAJI920421HVZNNS01', 'Soltero(a)', 'AB+', 'PEDRO TORRES', 'MAESTRO', '4151123465', '4151190234', '10min. / 2 km', 'Urbano', '5', 'FUEGO NEUVO', '5 DE MAYO 12', 'Dolores Hidalgo Cuna de la Ind', 'Guanajuato', 'General', 'Escolarizada', 'Público', 9.0, 'SI', 'SI', '23145676', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos'),
(68, 'ERICK', 'TORRES', 'HERNANDEZ', 'Hombre', '15', 'Aguascalientes', 'Aguascalientes', 'Dolores Hidalgo Cuna de la Independencia Nacional', 'Guanajuato', '80', '180', '60', 'ifaj_66@hotmail.com', 'ROSAS 12', 'CENTRO', '37800', '1/1/2014', 'AAJI920421HVZNNS01', 'Soltero(a)', 'AB+', 'PEDRO TORRES', 'MAESTRO', '4151123465', '4151190234', '10min. / 2 km', 'Urbano', '5', 'FUEGO NEUVO', '5 DE MAYO 12', 'Aguascalientes', 'Aguascalientes', 'General', 'Escolarizada', 'Público', 9.0, 'SI', 'SI', '23145676', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos'),
(67, 'ERICK', 'TORRES', 'HERNANDEZ', 'Hombre', '15', 'Dolores Hidalgo Cuna de la Independencia Nacional', 'Guanajuato', 'Actopan', 'Hidalgo', '80', '180', '60', 'ifaj_66@hotmail.com', 'ROSAS 12', 'CENTRO', '37800', '4/3/1998', 'AAJI920421HVZNNS01', 'Soltero(a)', 'AB+', 'PEDRO TORRES', 'MAESTRO', '4151123465', '4151190234', '10min. / 2 km', 'Urbano', '5', 'FUEGO NEUVO', '5 DE MAYO 12', 'San Miguel de Allende', 'Guanajuato', 'General', 'Escolarizada', 'Público', 9.0, 'SI', 'SI', '23145676', 'Administración de Recursos Humanos', 'Contabilidad', 'Electricidad', 'Logística', 'Mecánica Industrial', 'Programación', 'Soporte y Mantenimiento Técnico'),
(65, 'LUIS FELIPE', 'Enriquez', 'Felipe Solis', 'Hombre', '10', 'Aguascalientes', 'Aguascalientes', 'Aguascalientes', 'Aguascalientes', '75', '160', '53', 'jemartinez@gmail.com', 'CALZADA DE LOS HEROES', 'CENTRO', '37700', '1/1/2014', 'SOEL221188HGTLNS33', 'Soltero(a)', 'O+', 'Luis Felipe Solis Enriquez', 'MAESTRO', '5241511175', '5241511175', '30min. / 28 km', 'Autobus', '35', 'LUIS FELIPE SOLIS ENRIQUEZ', 'GUTY CARDENAS 1', 'Aguascalientes', 'Aguascalientes', 'General', 'Escolarizada', 'Público', 9.0, 'SI', 'SI', 'A1234566', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos'),
(66, 'LUIS FELIPE', 'Enriquez', 'Felipe Solis', 'Hombre', '10', 'Aguascalientes', 'Aguascalientes', 'Aguascalientes', 'Aguascalientes', '75', '160', '53', 'jemartinez@gmail.com', 'CALZADA DE LOS HEROES', 'CENTRO', '37700', '1/1/2014', 'SOEL221188HGTLNS33', 'Soltero(a)', 'O+', 'Luis Felipe Solis Enriquez', 'MAESTRO', '5241511175', '5241511175', '30min. / 28 km', 'Autobus', '35', 'LUIS FELIPE SOLIS ENRIQUEZ', 'GUTY CARDENAS 1', 'Aguascalientes', 'Aguascalientes', 'General', 'Escolarizada', 'Público', 9.0, 'SI', 'SI', 'A1234566', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos'),
(64, 'LUIS FELIPE', 'Enriquez', 'Felipe Solis', 'Hombre', '10', 'Aguascalientes', 'Aguascalientes', 'Aguascalientes', 'Aguascalientes', '75', '160', '53', 'jemartinez@gmail.com', 'CALZADA DE LOS HEROES', 'CENTRO', '37700', '1/1/2014', 'SOEL221188HGTLNS33', 'Soltero(a)', 'O+', 'Luis Felipe Solis Enriquez', 'MAESTRO', '5241511175', '5241511175', '30min. / 28 km', 'Autobus', '35', 'LUIS FELIPE SOLIS ENRIQUEZ', 'GUTY CARDENAS 1', 'Aguascalientes', 'Aguascalientes', 'General', 'Escolarizada', 'Público', 9.0, 'SI', 'SI', 'A1234566', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos'),
(63, 'LUIS FELIPE', 'Enriquez', 'Felipe Solis', 'Hombre', '10', 'Aguascalientes', 'Aguascalientes', 'Aguascalientes', 'Aguascalientes', '75', '160', '53', 'jemartinez@gmail.com', 'CALZADA DE LOS HEROES', 'CENTRO', '37700', '1/1/2014', 'SOEL221188HGTLNS33', 'Soltero(a)', 'O+', 'Luis Felipe Solis Enriquez', 'MAESTRO', '5241511175', '5241511175', '30min. / 28 km', 'Autobus', '35', 'LUIS FELIPE SOLIS ENRIQUEZ', 'GUTY CARDENAS 1', 'Aguascalientes', 'Aguascalientes', 'General', 'Escolarizada', 'Público', 9.0, 'SI', 'SI', 'A1234566', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos'),
(62, 'LUIS FELIPE', 'Enriquez', 'Felipe Solis', 'Hombre', '10', 'Aguascalientes', 'Aguascalientes', 'Aguascalientes', 'Aguascalientes', '75', '160', '53', 'jemartinez@gmail.com', 'CALZADA DE LOS HEROES', 'CENTRO', '37700', '1/1/2014', 'SOEL221188HGTLNS33', 'Soltero(a)', 'O+', 'Luis Felipe Solis Enriquez', 'MAESTRO', '5241511175', '5241511175', '30min. / 28 km', 'Autobus', '35', 'LUIS FELIPE SOLIS ENRIQUEZ', 'GUTY CARDENAS 1', 'Aguascalientes', 'Aguascalientes', 'General', 'Escolarizada', 'Público', 9.0, 'SI', 'SI', 'A1234566', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos'),
(61, 'LUIS FELIPE', 'Enriquez', 'Felipe Solis', 'Hombre', '10', 'Aguascalientes', 'Aguascalientes', 'Aguascalientes', 'Aguascalientes', '75', '160', '53', 'jemartinez@gmail.com', 'CALZADA DE LOS HEROES', 'CENTRO', '37700', '1/1/2014', 'SOEL221188HGTLNS33', 'Soltero(a)', 'O+', 'Luis Felipe Solis Enriquez', 'MAESTRO', '5241511175', '5241511175', '30min. / 28 km', 'Autobus', '35', 'LUIS FELIPE SOLIS ENRIQUEZ', 'GUTY CARDENAS 1', 'Aguascalientes', 'Aguascalientes', 'General', 'Escolarizada', 'Público', 9.0, 'SI', 'SI', 'A1234566', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos'),
(60, 'LUIS FELIPE', 'Enriquez', 'Felipe Solis', 'Hombre', '10', 'Aguascalientes', 'Aguascalientes', 'Aguascalientes', 'Aguascalientes', '75', '160', '53', 'jemartinez@gmail.com', 'CALZADA DE LOS HEROES', 'CENTRO', '37700', '1/1/2014', 'SOEL221188HGTLNS33', 'Soltero(a)', 'O+', 'Luis Felipe Solis Enriquez', 'MAESTRO', '5241511175', '5241511175', '30min. / 28 km', 'Autobus', '35', 'LUIS FELIPE SOLIS ENRIQUEZ', 'GUTY CARDENAS 1', 'Aguascalientes', 'Aguascalientes', 'General', 'Escolarizada', 'Público', 9.0, 'SI', 'SI', 'A1234566', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos', 'Administración de Recursos Humanos');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
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
-- Dumping data for table `usuarios`
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
