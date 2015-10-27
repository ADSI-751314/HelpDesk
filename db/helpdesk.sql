-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-10-2015 a las 03:13:16
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `helpdesk`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencias`
--

CREATE TABLE IF NOT EXISTS `dependencias` (
  `pk_dep_codigo` tinyint(4) NOT NULL AUTO_INCREMENT,
  `dep_nombre` varchar(80) NOT NULL,
  `dep_extension` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`pk_dep_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `dependencias`
--

INSERT INTO `dependencias` (`pk_dep_codigo`, `dep_nombre`, `dep_extension`) VALUES
(1, 'Administrador', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_servicios`
--

CREATE TABLE IF NOT EXISTS `detalles_servicios` (
  `pk_det_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `det_descripcion` text NOT NULL,
  `det_fecha` datetime NOT NULL,
  PRIMARY KEY (`pk_det_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE IF NOT EXISTS `equipos` (
  `pk_equ_codigo` smallint(6) NOT NULL AUTO_INCREMENT,
  `equ_nombre` varchar(80) NOT NULL,
  `equ_precio` double NOT NULL,
  `equ_numero_serie` varchar(50) NOT NULL,
  `fk_dep_codigo` tinyint(4) NOT NULL,
  `fk_tip_codigo` tinyint(4) NOT NULL,
  PRIMARY KEY (`pk_equ_codigo`),
  KEY `fk_dep_codigo` (`fk_dep_codigo`),
  KEY `fk_tip_codigo` (`fk_tip_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos_licencias`
--

CREATE TABLE IF NOT EXISTS `equipos_licencias` (
  `pk_eql_codigo` smallint(6) NOT NULL AUTO_INCREMENT,
  `fk_equ_codigo` smallint(6) NOT NULL,
  `fk_lic_codigo` smallint(6) NOT NULL,
  PRIMARY KEY (`pk_eql_codigo`),
  KEY `fk_equ_codigo` (`fk_equ_codigo`),
  KEY `fk_lic_codigo` (`fk_lic_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas_tecnicas`
--

CREATE TABLE IF NOT EXISTS `fichas_tecnicas` (
  `pk_fic_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `fic_marca` varchar(50) NOT NULL,
  `fic_serial` varchar(50) NOT NULL,
  `fic_modelo` varchar(20) NOT NULL,
  `fic_memoria_ram` varchar(20) DEFAULT NULL,
  `fic_disco_duro` varchar(50) DEFAULT NULL,
  `fic_procesador` varchar(30) DEFAULT NULL,
  `fic_tarjeta_video` varchar(30) DEFAULT NULL,
  `fic_board` varchar(30) DEFAULT NULL,
  `fic_tarjeta_sonido` varchar(30) DEFAULT NULL,
  `fic_unidades_opticas` varchar(30) DEFAULT NULL,
  `fic_monitor` varchar(30) DEFAULT NULL,
  `fic_teclado` varchar(30) DEFAULT NULL,
  `fic_mouse` varchar(30) DEFAULT NULL,
  `fic_tarjeta_red` varchar(30) DEFAULT NULL,
  `fic_sistema_operativo` varchar(30) DEFAULT NULL,
  `fic_paquete_ofimatico` varchar(30) DEFAULT NULL,
  `fic_compresor` varchar(30) DEFAULT NULL,
  `fic_antivirus` varchar(30) DEFAULT NULL,
  `fic_bateria` varchar(30) DEFAULT NULL,
  `fic_cargador` varchar(30) DEFAULT NULL,
  `fic_multilector` varchar(30) DEFAULT NULL,
  `fic_puertos_usb` varchar(50) DEFAULT NULL,
  `fic_parlantes` varchar(30) DEFAULT NULL,
  `fic_microfono` varchar(30) DEFAULT NULL,
  `fic_tecnologia_impresion` varchar(30) DEFAULT NULL,
  `fic_memoria_boofer` varchar(30) DEFAULT NULL,
  `fic_manejo_papel` varchar(30) DEFAULT NULL,
  `fic_puertos` varchar(30) DEFAULT NULL,
  `fic_conectividad` varchar(30) DEFAULT NULL,
  `fic_potencia_salida` varchar(10) DEFAULT NULL,
  `fic_lumens` varchar(10) DEFAULT NULL,
  `fic_resolucion` varchar(10) DEFAULT NULL,
  `fic_lente` varchar(10) DEFAULT NULL,
  `fk_equ_codigo` smallint(6) NOT NULL,
  PRIMARY KEY (`pk_fic_codigo`),
  KEY `fk_equ_codigo` (`fk_equ_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_tecnica`
--

CREATE TABLE IF NOT EXISTS `ficha_tecnica` (
  `fic_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fk_pte_codigo` int(10) unsigned NOT NULL,
  `fk_equ_codigo` smallint(6) NOT NULL,
  `pte_serial` varchar(50) NOT NULL,
  PRIMARY KEY (`fic_id`),
  KEY `fk_pte_codigo` (`fk_pte_codigo`),
  KEY `fk_equ_codigo` (`fk_equ_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `garantias`
--

CREATE TABLE IF NOT EXISTS `garantias` (
  `pk_gar_codigo` smallint(6) NOT NULL,
  `gar_tipo` varchar(20) DEFAULT NULL,
  `gar_fecha_inicio` date NOT NULL,
  `gar_fecha_fin` date NOT NULL,
  `gar_descripcion` varchar(80) DEFAULT NULL,
  `fk_equ_codigo` smallint(6) NOT NULL,
  KEY `fk_equ_codigo` (`fk_equ_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_cambios`
--

CREATE TABLE IF NOT EXISTS `historial_cambios` (
  `pk_htc_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `htc_fecha` date NOT NULL,
  `htc_hora` time NOT NULL,
  `htc_descripcion` varchar(120) NOT NULL,
  `fk_equ_codigo` smallint(6) NOT NULL,
  PRIMARY KEY (`pk_htc_codigo`),
  KEY `fk_equ_codigo` (`fk_equ_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licencias`
--

CREATE TABLE IF NOT EXISTS `licencias` (
  `pk_lic_codigo` smallint(6) NOT NULL AUTO_INCREMENT,
  `lic_nombre` varchar(30) NOT NULL,
  `lic_fecha_compra` date NOT NULL,
  `lic_fecha_caducidad` date NOT NULL,
  `lic_precio` double DEFAULT NULL,
  `lic_cobertura` text,
  PRIMARY KEY (`pk_lic_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partes_equipos`
--

CREATE TABLE IF NOT EXISTS `partes_equipos` (
  `pte_marca` varchar(60) NOT NULL,
  `pte_descripcion` varchar(100) DEFAULT NULL,
  `pte_estado` varchar(20) NOT NULL,
  `pte_serial` varchar(50) NOT NULL,
  `pk_pte_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`pk_pte_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `pk_per_codigo` tinyint(4) NOT NULL AUTO_INCREMENT,
  `per_tipo` varchar(50) NOT NULL,
  `per_descripcion` varchar(120) NOT NULL,
  PRIMARY KEY (`pk_per_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`pk_per_codigo`, `per_tipo`, `per_descripcion`) VALUES
(1, 'Administrador', 'Administrador del sistema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politicas`
--

CREATE TABLE IF NOT EXISTS `politicas` (
  `pk_pol_codigo` smallint(6) NOT NULL AUTO_INCREMENT,
  `pol_descripcion` varchar(120) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  PRIMARY KEY (`pk_pol_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pol_ser`
--

CREATE TABLE IF NOT EXISTS `pol_ser` (
  `pol_ser_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fk_ser_ticket` int(10) NOT NULL,
  `fk_pol_codigo` smallint(6) NOT NULL,
  PRIMARY KEY (`pol_ser_id`),
  KEY `fk_ser_ticket` (`fk_ser_ticket`),
  KEY `fk_pol_codigo` (`fk_pol_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `pk_rol_codigo` tinyint(4) NOT NULL AUTO_INCREMENT,
  `rol_descripcion` varchar(80) NOT NULL,
  `fk_per_codigo` tinyint(4) NOT NULL,
  PRIMARY KEY (`pk_rol_codigo`),
  KEY `fk_per_codigo` (`fk_per_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`pk_rol_codigo`, `rol_descripcion`, `fk_per_codigo`) VALUES
(1, 'Administrador', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `pk_ser_ticket` int(11) NOT NULL AUTO_INCREMENT,
  `ser_fecha` date NOT NULL,
  `ser_hora` time NOT NULL,
  `ser_descripcion` text NOT NULL,
  `ser_estado` varchar(20) NOT NULL,
  `ser_prioridad` varchar(10) DEFAULT NULL,
  `ser_fecha_modificacion` datetime DEFAULT NULL,
  `fk_usu_codigo` smallint(6) NOT NULL,
  `fk_equ_codigo` smallint(6) NOT NULL,
  PRIMARY KEY (`pk_ser_ticket`),
  KEY `fk_usu_codigo` (`fk_usu_codigo`),
  KEY `fk_equ_codigo` (`fk_equ_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnicos`
--

CREATE TABLE IF NOT EXISTS `tecnicos` (
  `pk_tec_codigo` smallint(6) NOT NULL AUTO_INCREMENT,
  `tec_primer_nombre` varchar(30) NOT NULL,
  `tec_segundo_nombre` varchar(30) DEFAULT NULL,
  `tec_primer_apellido` varchar(30) NOT NULL,
  `tec_segundo_apellido` varchar(30) DEFAULT NULL,
  `tec_numero_telefono` varchar(15) DEFAULT NULL,
  `tec_numero_movil` varchar(15) DEFAULT NULL,
  `tec_correo` varchar(100) NOT NULL,
  `tec_especialidad` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pk_tec_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tec_ser_det`
--

CREATE TABLE IF NOT EXISTS `tec_ser_det` (
  `fk_tec_codigo` smallint(6) NOT NULL,
  `fk_ser_ticket` int(11) NOT NULL,
  `fk_det_codigo` int(11) NOT NULL,
  KEY `fk_tec_codigo` (`fk_tec_codigo`),
  KEY `fk_ser_ticket` (`fk_ser_ticket`),
  KEY `fk_det_codigo` (`fk_det_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_equipos`
--

CREATE TABLE IF NOT EXISTS `tipos_equipos` (
  `pk_tip_codigo` tinyint(4) NOT NULL AUTO_INCREMENT,
  `tip_nombre` varchar(80) NOT NULL,
  PRIMARY KEY (`pk_tip_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tipos_equipos`
--

INSERT INTO `tipos_equipos` (`pk_tip_codigo`, `tip_nombre`) VALUES
(1, 'Equipo de Cómputo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `pk_usu_codigo` smallint(6) NOT NULL AUTO_INCREMENT,
  `usu_primer_nombre` varchar(30) NOT NULL,
  `usu_segundo_nombre` varchar(30) DEFAULT NULL,
  `usu_primer_apellido` varchar(30) NOT NULL,
  `usu_segundo_apellido` varchar(30) DEFAULT NULL,
  `usu_extension` varchar(15) DEFAULT NULL,
  `usu_cargo` varchar(80) DEFAULT NULL,
  `usu_correo` varchar(100) DEFAULT NULL,
  `usu_username` varchar(30) NOT NULL,
  `usu_password` varchar(20) NOT NULL,
  `usu_fecha_creacion` datetime NOT NULL,
  `usu_fecha_modificacion` datetime DEFAULT NULL,
  `fk_rol_codigo` tinyint(4) NOT NULL,
  `fk_dep_codigo` tinyint(4) NOT NULL,
  PRIMARY KEY (`pk_usu_codigo`),
  KEY `fk_rol_codigo` (`fk_rol_codigo`),
  KEY `fk_dep_codigo` (`fk_dep_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`pk_usu_codigo`, `usu_primer_nombre`, `usu_segundo_nombre`, `usu_primer_apellido`, `usu_segundo_apellido`, `usu_extension`, `usu_cargo`, `usu_correo`, `usu_username`, `usu_password`, `usu_fecha_creacion`, `usu_fecha_modificacion`, `fk_rol_codigo`, `fk_dep_codigo`) VALUES
(1, 'Administrador', 'Administrador', 'Administrador', 'admin', '123', 'Administrador', 'admin@mail.com', 'admin', 'admin', '2015-09-05 13:27:19', NULL, 1, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `equipos_ibfk_1` FOREIGN KEY (`fk_dep_codigo`) REFERENCES `dependencias` (`pk_dep_codigo`),
  ADD CONSTRAINT `equipos_ibfk_2` FOREIGN KEY (`fk_tip_codigo`) REFERENCES `tipos_equipos` (`pk_tip_codigo`);

--
-- Filtros para la tabla `equipos_licencias`
--
ALTER TABLE `equipos_licencias`
  ADD CONSTRAINT `equipos_licencias_ibfk_1` FOREIGN KEY (`fk_equ_codigo`) REFERENCES `equipos` (`pk_equ_codigo`),
  ADD CONSTRAINT `equipos_licencias_ibfk_2` FOREIGN KEY (`fk_lic_codigo`) REFERENCES `licencias` (`pk_lic_codigo`);

--
-- Filtros para la tabla `ficha_tecnica`
--
ALTER TABLE `ficha_tecnica`
  ADD CONSTRAINT `ficha_tecnica_ibfk_2` FOREIGN KEY (`fk_pte_codigo`) REFERENCES `partes_equipos` (`pk_pte_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ficha_tecnica_ibfk_1` FOREIGN KEY (`fk_equ_codigo`) REFERENCES `equipos` (`pk_equ_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `garantias`
--
ALTER TABLE `garantias`
  ADD CONSTRAINT `garantias_ibfk_1` FOREIGN KEY (`fk_equ_codigo`) REFERENCES `equipos` (`pk_equ_codigo`);

--
-- Filtros para la tabla `historial_cambios`
--
ALTER TABLE `historial_cambios`
  ADD CONSTRAINT `historial_cambios_ibfk_1` FOREIGN KEY (`fk_equ_codigo`) REFERENCES `equipos` (`pk_equ_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pol_ser`
--
ALTER TABLE `pol_ser`
  ADD CONSTRAINT `pol_ser_ibfk_2` FOREIGN KEY (`fk_ser_ticket`) REFERENCES `servicios` (`pk_ser_ticket`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pol_ser_ibfk_1` FOREIGN KEY (`fk_pol_codigo`) REFERENCES `politicas` (`pk_pol_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`fk_per_codigo`) REFERENCES `permisos` (`pk_per_codigo`);

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`fk_usu_codigo`) REFERENCES `usuarios` (`pk_usu_codigo`),
  ADD CONSTRAINT `servicios_ibfk_2` FOREIGN KEY (`fk_equ_codigo`) REFERENCES `equipos` (`pk_equ_codigo`);

--
-- Filtros para la tabla `tec_ser_det`
--
ALTER TABLE `tec_ser_det`
  ADD CONSTRAINT `tec_ser_det_ibfk_1` FOREIGN KEY (`fk_tec_codigo`) REFERENCES `tecnicos` (`pk_tec_codigo`),
  ADD CONSTRAINT `tec_ser_det_ibfk_2` FOREIGN KEY (`fk_ser_ticket`) REFERENCES `servicios` (`pk_ser_ticket`),
  ADD CONSTRAINT `tec_ser_det_ibfk_3` FOREIGN KEY (`fk_det_codigo`) REFERENCES `detalles_servicios` (`pk_det_codigo`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`fk_rol_codigo`) REFERENCES `roles` (`pk_rol_codigo`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`fk_dep_codigo`) REFERENCES `dependencias` (`pk_dep_codigo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
