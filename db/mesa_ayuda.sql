-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-09-2015 a las 02:36:22
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mesa_ayuda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencia`
--

CREATE TABLE IF NOT EXISTS `dependencia` (
  `pk_dep_codigo` int(10) NOT NULL,
  `dep_nombre` varchar(50) DEFAULT NULL,
  `dep_extension` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`pk_dep_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleservicio`
--

CREATE TABLE IF NOT EXISTS `detalleservicio` (
  `pk_detSer_codigo` int(10) NOT NULL,
  `detSer_descripcion` varchar(500) DEFAULT NULL,
  `detSer_fecha` date DEFAULT NULL,
  PRIMARY KEY (`pk_detSer_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE IF NOT EXISTS `equipo` (
  `pk_equ_codigo` int(10) NOT NULL,
  `equ_nombre` varchar(30) DEFAULT NULL,
  `equ_precio` int(10) DEFAULT NULL,
  `fk_dep_codigo` int(6) NOT NULL,
  `fk_tip_codigo` int(6) NOT NULL,
  PRIMARY KEY (`pk_equ_codigo`),
  KEY `fk_dep_codigo` (`fk_dep_codigo`),
  KEY `fk_tip_codigo` (`fk_tip_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_licencias`
--

CREATE TABLE IF NOT EXISTS `equipo_licencias` (
  `pk_lic_equ_id` int(10) NOT NULL,
  `fk_equ_codigo` int(10) DEFAULT NULL,
  `fk_lic_codigo` int(10) DEFAULT NULL,
  PRIMARY KEY (`pk_lic_equ_id`),
  KEY `equi_lic` (`fk_equ_codigo`),
  KEY `equi_lic2` (`fk_lic_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichatecnica`
--

CREATE TABLE IF NOT EXISTS `fichatecnica` (
  `pk_fic_codigo` int(10) NOT NULL,
  `fic_marca` varchar(30) DEFAULT NULL,
  `fic_serial` int(15) DEFAULT NULL,
  `fic_modelo` varchar(30) DEFAULT NULL,
  `fic_memoriaRAM` varchar(20) DEFAULT NULL,
  `fic_discoDuro` varchar(20) DEFAULT NULL,
  `fic_procesador` varchar(20) DEFAULT NULL,
  `fic_tarjetaVideo` varchar(20) DEFAULT NULL,
  `fic_board` varchar(20) DEFAULT NULL,
  `fic_tarjetaSonido` varchar(20) DEFAULT NULL,
  `fic_unidadesOpticas` varchar(20) DEFAULT NULL,
  `fic_monitor` varchar(20) DEFAULT NULL,
  `fic_teclado` varchar(20) DEFAULT NULL,
  `fic_mouse` varchar(20) DEFAULT NULL,
  `fic_tarjetaRed` varchar(20) DEFAULT NULL,
  `fic_sistemaOperativo` varchar(20) DEFAULT NULL,
  `fic_paqueteOfimatico` varchar(20) DEFAULT NULL,
  `fic_compresor` varchar(20) DEFAULT NULL,
  `fic_antivirus` varchar(20) DEFAULT NULL,
  `fic_bateria` varchar(20) DEFAULT NULL,
  `fic_cargador` varchar(20) DEFAULT NULL,
  `fic_lectorTarjetas` varchar(20) DEFAULT NULL,
  `fic_numeroPuertosUSB` int(2) DEFAULT NULL,
  `fic_parlantes` varchar(20) DEFAULT NULL,
  `fic_microfono` varchar(20) DEFAULT NULL,
  `fic_tecnologiaImpresion` varchar(20) DEFAULT NULL,
  `fic_memoriaBoofer` varchar(20) DEFAULT NULL,
  `fic_manejoPapel` varchar(20) DEFAULT NULL,
  `fic_conectores` varchar(20) DEFAULT NULL,
  `fic_numerosPuertosRed` varchar(20) DEFAULT NULL,
  `fic_potenciaSalida` varchar(20) DEFAULT NULL,
  `fic_lumens` varchar(20) DEFAULT NULL,
  `fic_resolucion` varchar(20) DEFAULT NULL,
  `fic_lente` varchar(20) DEFAULT NULL,
  `fk_equ_codigo` int(10) DEFAULT NULL,
  PRIMARY KEY (`pk_fic_codigo`),
  KEY `ficha_equi` (`fk_equ_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `garantias`
--

CREATE TABLE IF NOT EXISTS `garantias` (
  `pk_gar_codigo` int(10) NOT NULL,
  `gar_tipoGarantia` varchar(100) DEFAULT NULL,
  `gar_fechaInicio` date DEFAULT NULL,
  `gar_fechaVencimiento` date DEFAULT NULL,
  `gar_descripcion` varchar(500) DEFAULT NULL,
  `fk_equ_codigo` int(10) DEFAULT NULL,
  PRIMARY KEY (`pk_gar_codigo`),
  KEY `gar_equi` (`fk_equ_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_cambios`
--

CREATE TABLE IF NOT EXISTS `historial_cambios` (
  `pk_cam_codigo` int(10) NOT NULL,
  `cam_fecha` date DEFAULT NULL,
  `cam_hora` datetime DEFAULT NULL,
  `cam_descripcion` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`pk_cam_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licencias`
--

CREATE TABLE IF NOT EXISTS `licencias` (
  `pk_lic_codigo` int(10) NOT NULL,
  `lic_nombre` varchar(30) DEFAULT NULL,
  `lic_fechaCompra` date DEFAULT NULL,
  `lic_fechaInicio` date DEFAULT NULL,
  `lic_fechaVencimietno` date DEFAULT NULL,
  `lic_precio` int(9) DEFAULT NULL,
  `lic_cobertura` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`pk_lic_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partes`
--

CREATE TABLE IF NOT EXISTS `partes` (
  `pk_par_serial` int(10) NOT NULL,
  `par_marca` varchar(30) DEFAULT NULL,
  `par_descripcion` varchar(255) DEFAULT NULL,
  `par_estado` varchar(30) DEFAULT NULL,
  `fk_equ_codigo` int(10) DEFAULT NULL,
  `fk_cam_codigo` int(10) DEFAULT NULL,
  PRIMARY KEY (`pk_par_serial`),
  KEY `fk_cam_codigo` (`fk_cam_codigo`),
  KEY `par_equ` (`fk_equ_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partes_proveedores`
--

CREATE TABLE IF NOT EXISTS `partes_proveedores` (
  `fk_par_serial` int(10) DEFAULT NULL,
  `fk_pro_codigo` int(10) DEFAULT NULL,
  `pk_par_pro_serial` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`pk_par_pro_serial`),
  KEY `part_prov` (`fk_par_serial`),
  KEY `part_prov_dos` (`fk_pro_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `pk_per_codigo` int(10) NOT NULL,
  `per_descripcion` varchar(500) DEFAULT NULL,
  `per_tipo` int(10) NOT NULL,
  PRIMARY KEY (`pk_per_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politicas`
--

CREATE TABLE IF NOT EXISTS `politicas` (
  `pk_pol_codigo` int(10) NOT NULL,
  `pol_descripcion` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`pk_pol_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `pk_pro_codigo` int(10) NOT NULL,
  `pro_nombre` varchar(20) DEFAULT NULL,
  `pro_telefono` varchar(20) DEFAULT NULL,
  `pro_direccion` varchar(20) DEFAULT NULL,
  `pro_correo` varchar(20) DEFAULT NULL,
  `pro_pagina_web` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`pk_pro_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores_equipo`
--

CREATE TABLE IF NOT EXISTS `proveedores_equipo` (
  `fk_equ_codigo` int(10) DEFAULT NULL,
  `fk_pro_codigo` int(10) DEFAULT NULL,
  `pk_pro_par_serial` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`pk_pro_par_serial`),
  KEY `provee_equi` (`fk_equ_codigo`),
  KEY `prov_equi_dos` (`fk_pro_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `pk_rol_codigo` int(10) NOT NULL,
  `rol_descripcion` varchar(500) DEFAULT NULL,
  `fk_per_codigo` int(10) NOT NULL,
  PRIMARY KEY (`pk_rol_codigo`),
  KEY `fk_per_codigo` (`fk_per_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `pk_ser_ticket` int(6) NOT NULL,
  `ser_fecha` date DEFAULT NULL,
  `ser_hora` time DEFAULT NULL,
  `ser_descripcion` varchar(500) DEFAULT NULL,
  `fk_usu_codigo` int(10) NOT NULL,
  `fk_equ_codigo` int(10) NOT NULL,
  `ser_estado` varchar(500) NOT NULL,
  `ser_prioridad` varchar(50) NOT NULL,
  `ser_fechaModificacion` date NOT NULL,
  PRIMARY KEY (`pk_ser_ticket`),
  KEY `fk_equ_codigo` (`fk_equ_codigo`),
  KEY `usu_servicio` (`fk_usu_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnico`
--

CREATE TABLE IF NOT EXISTS `tecnico` (
  `pk_tec_id` int(10) NOT NULL,
  `tec_nombre1` varchar(50) DEFAULT NULL,
  `tec_nombre2` varchar(50) DEFAULT NULL,
  `tec_apelllido1` varchar(50) DEFAULT NULL,
  `tec_apellido2` varchar(50) DEFAULT NULL,
  `tec_telefono` int(10) DEFAULT NULL,
  `tec_correo` varchar(50) DEFAULT NULL,
  `tec_especialidad` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pk_tec_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecserdet`
--

CREATE TABLE IF NOT EXISTS `tecserdet` (
  `fk_tec_id` int(10) NOT NULL,
  `fk_ser_ticket` int(10) NOT NULL,
  `fk_detSer_codigo` int(10) NOT NULL,
  KEY `fk_tec_id` (`fk_tec_id`),
  KEY `fk_ser_ticket` (`fk_ser_ticket`),
  KEY `fk_detSer_codigo` (`fk_detSer_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoequipo`
--

CREATE TABLE IF NOT EXISTS `tipoequipo` (
  `pk_tip_codigo` int(6) NOT NULL,
  `tip_nombre` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`pk_tip_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `pk_usu_id` int(10) NOT NULL,
  `usu_nombre1` varchar(50) DEFAULT NULL,
  `usu_nombre2` varchar(50) DEFAULT NULL,
  `usu_apellido1` varchar(50) DEFAULT NULL,
  `usu_apellido2` varchar(50) DEFAULT NULL,
  `usu_extension` int(4) DEFAULT NULL,
  `usu_cargo` varchar(50) DEFAULT NULL,
  `usu_correo` varchar(50) DEFAULT NULL,
  `usu_username` varchar(50) DEFAULT NULL,
  `usu_passwordd` varchar(20) DEFAULT NULL,
  `usu_fechaCreacion` date DEFAULT NULL,
  `usu_fechaModificacion` date DEFAULT NULL,
  `fk_rol_codigo` int(10) NOT NULL,
  `fk_dep_codigo` int(10) DEFAULT NULL,
  PRIMARY KEY (`pk_usu_id`),
  KEY `rel_usuario_roles` (`fk_rol_codigo`),
  KEY `rel_usuario_dependencia` (`fk_dep_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `fk_dep_codigo` FOREIGN KEY (`fk_dep_codigo`) REFERENCES `dependencia` (`pk_dep_codigo`),
  ADD CONSTRAINT `fk_tip_codigo` FOREIGN KEY (`fk_tip_codigo`) REFERENCES `tipoequipo` (`pk_tip_codigo`);

--
-- Filtros para la tabla `equipo_licencias`
--
ALTER TABLE `equipo_licencias`
  ADD CONSTRAINT `equi_lic` FOREIGN KEY (`fk_equ_codigo`) REFERENCES `equipo` (`pk_equ_codigo`),
  ADD CONSTRAINT `equi_lic2` FOREIGN KEY (`fk_lic_codigo`) REFERENCES `licencias` (`pk_lic_codigo`);

--
-- Filtros para la tabla `fichatecnica`
--
ALTER TABLE `fichatecnica`
  ADD CONSTRAINT `ficha_equi` FOREIGN KEY (`fk_equ_codigo`) REFERENCES `equipo` (`pk_equ_codigo`);

--
-- Filtros para la tabla `garantias`
--
ALTER TABLE `garantias`
  ADD CONSTRAINT `gar_equi` FOREIGN KEY (`fk_equ_codigo`) REFERENCES `equipo` (`pk_equ_codigo`);

--
-- Filtros para la tabla `partes`
--
ALTER TABLE `partes`
  ADD CONSTRAINT `fk_cam_codigo` FOREIGN KEY (`fk_cam_codigo`) REFERENCES `historial_cambios` (`pk_cam_codigo`),
  ADD CONSTRAINT `par_equ` FOREIGN KEY (`fk_equ_codigo`) REFERENCES `equipo` (`pk_equ_codigo`);

--
-- Filtros para la tabla `partes_proveedores`
--
ALTER TABLE `partes_proveedores`
  ADD CONSTRAINT `part_prov` FOREIGN KEY (`fk_par_serial`) REFERENCES `partes` (`pk_par_serial`),
  ADD CONSTRAINT `part_prov_dos` FOREIGN KEY (`fk_pro_codigo`) REFERENCES `proveedores` (`pk_pro_codigo`);

--
-- Filtros para la tabla `proveedores_equipo`
--
ALTER TABLE `proveedores_equipo`
  ADD CONSTRAINT `provee_equi` FOREIGN KEY (`fk_equ_codigo`) REFERENCES `equipo` (`pk_equ_codigo`),
  ADD CONSTRAINT `prov_equi_dos` FOREIGN KEY (`fk_pro_codigo`) REFERENCES `proveedores` (`pk_pro_codigo`);

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `fk_per_codigo` FOREIGN KEY (`fk_per_codigo`) REFERENCES `permisos` (`pk_per_codigo`);

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `fk_equ_codigo` FOREIGN KEY (`fk_equ_codigo`) REFERENCES `equipo` (`pk_equ_codigo`),
  ADD CONSTRAINT `usu_servicio` FOREIGN KEY (`fk_usu_codigo`) REFERENCES `usuario` (`pk_usu_id`);

--
-- Filtros para la tabla `tecserdet`
--
ALTER TABLE `tecserdet`
  ADD CONSTRAINT `fk_detSer_codigo` FOREIGN KEY (`fk_detSer_codigo`) REFERENCES `detalleservicio` (`pk_detSer_codigo`),
  ADD CONSTRAINT `fk_ser_ticket` FOREIGN KEY (`fk_ser_ticket`) REFERENCES `servicios` (`pk_ser_ticket`),
  ADD CONSTRAINT `fk_tec_id` FOREIGN KEY (`fk_tec_id`) REFERENCES `tecnico` (`pk_tec_id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_rol_codigo` FOREIGN KEY (`fk_rol_codigo`) REFERENCES `roles` (`pk_rol_codigo`),
  ADD CONSTRAINT `rel_usuario_dependencia` FOREIGN KEY (`fk_dep_codigo`) REFERENCES `dependencia` (`pk_dep_codigo`),
  ADD CONSTRAINT `rel_usuario_roles` FOREIGN KEY (`fk_rol_codigo`) REFERENCES `roles` (`pk_rol_codigo`),
  ADD CONSTRAINT `usu_dep` FOREIGN KEY (`fk_dep_codigo`) REFERENCES `dependencia` (`pk_dep_codigo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
