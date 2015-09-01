--
-- Estructura de tabla para la tabla `detalle_servicio`
--

CREATE TABLE IF NOT EXISTS `detalle_servicio` (
  `det_id` int(11) NOT NULL AUTO_INCREMENT,
  `det_descripion` text NOT NULL,
  `det_fecha` date NOT NULL,
  `det_hora` time NOT NULL,
  PRIMARY KEY (`det_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE IF NOT EXISTS `equipo` (
  `pk_equ_id` int(11) NOT NULL,
  `equ_nombre` varchar(20) NOT NULL,
  `equ_tipo_equipo` varchar(12) NOT NULL,
  `equ_precio` float NOT NULL,
  `fk_tip_equi_id` int(11) NOT NULL,
  PRIMARY KEY (`pk_equ_id`),
  KEY `fk_tip_equi_id` (`fk_tip_equi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_tecnica`
--

CREATE TABLE IF NOT EXISTS `ficha_tecnica` (
  `pk_fic_tec_id` int(11) NOT NULL,
  `fk_equ_id` int(11) NOT NULL,
  PRIMARY KEY (`pk_fic_tec_id`),
  KEY `fk_equ_id` (`fk_equ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `garantia`
--

CREATE TABLE IF NOT EXISTS `garantia` (
  `pk_gar_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_equ_id` int(11) NOT NULL,
  PRIMARY KEY (`pk_gar_id`),
  KEY `fk_equ_id` (`fk_equ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialcambios`
--

CREATE TABLE IF NOT EXISTS `historialcambios` (
  `pk_his_id` int(11) NOT NULL AUTO_INCREMENT,
  `his_fecha` date NOT NULL,
  `his_hora` time NOT NULL,
  `his_descripcion` text NOT NULL,
  PRIMARY KEY (`pk_his_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licencia`
--

CREATE TABLE IF NOT EXISTS `licencia` (
  `pk_lic_id` int(11) NOT NULL AUTO_INCREMENT,
  `lic_fechaInstalacion` date NOT NULL,
  `lic_fechaVencimiento` date NOT NULL,
  `lic_obertura` varchar(20) NOT NULL,
  `lic_precio` float NOT NULL,
  PRIMARY KEY (`pk_lic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lic_equ`
--

CREATE TABLE IF NOT EXISTS `lic_equ` (
  `pk_lic_equ_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_lic_id` int(11) NOT NULL,
  `fk_equ_id` int(11) NOT NULL,
  PRIMARY KEY (`pk_lic_equ_id`),
  KEY `fk_lic_id` (`fk_lic_id`,`fk_equ_id`),
  KEY `fk_equ_id` (`fk_equ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parte`
--

CREATE TABLE IF NOT EXISTS `parte` (
  `pk_par_serie` varchar(20) NOT NULL,
  `par_marca` int(20) NOT NULL,
  `par_descripcion` text NOT NULL,
  `par_estado` varchar(11) NOT NULL,
  `fk_equ_id` int(11) NOT NULL,
  `fk_his_id` int(11) NOT NULL,
  PRIMARY KEY (`pk_par_serie`),
  KEY `fk_equ_id` (`fk_equ_id`,`fk_his_id`),
  KEY `fk_his_id` (`fk_his_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politica`
--

CREATE TABLE IF NOT EXISTS `politica` (
  `pk_pol_id` int(11) NOT NULL,
  `pol_descripcion` varchar(80) NOT NULL,
  `pol_nombre` varchar(35) NOT NULL,
  PRIMARY KEY (`pk_pol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pol_ser`
--

CREATE TABLE IF NOT EXISTS `pol_ser` (
  `fk_pol_id` int(11) NOT NULL,
  `fk_ser_ticket` int(11) NOT NULL,
  `pk_pol_ser_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`pk_pol_ser_id`),
  KEY `fk_pol_id` (`fk_pol_id`,`fk_ser_ticket`),
  KEY `fk_ser_ticket` (`fk_ser_ticket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `rol_id` int(11) NOT NULL AUTO_INCREMENT,
  `rol_nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`rol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE IF NOT EXISTS `servicio` (
  `pk_ser_ticket` int(11) NOT NULL,
  `ser_fecha` date NOT NULL,
  `ser_hora` time NOT NULL,
  `ser_descripcion` text NOT NULL,
  `fk_usu_id` int(11) NOT NULL,
  `fk_equ_id` int(11) NOT NULL,
  PRIMARY KEY (`pk_ser_ticket`),
  KEY `fk_usu_codigo` (`fk_usu_id`),
  KEY `fk_equ_id` (`fk_equ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnico`
--

CREATE TABLE IF NOT EXISTS `tecnico` (
  `pk_tec_id` int(11) NOT NULL,
  `tec_nombre` varchar(20) NOT NULL,
  `tec_apellido` varchar(30) NOT NULL,
  `tec_telefono` varchar(11) NOT NULL,
  `tec_correo` varchar(50) NOT NULL,
  `tec_especialidad` varchar(30) NOT NULL,
  PRIMARY KEY (`pk_tec_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tec_ser_det`
--

CREATE TABLE IF NOT EXISTS `tec_ser_det` (
  `fk_ser_ticket` int(11) NOT NULL,
  `fk_tec_id` int(11) NOT NULL,
  `fk_det_id` int(11) NOT NULL,
  `pk_tec_ser_det_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`pk_tec_ser_det_id`),
  KEY `fk_ser_ticket` (`fk_ser_ticket`,`fk_tec_id`),
  KEY `fk_tec_id` (`fk_tec_id`),
  KEY `fk_det_id` (`fk_det_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_equipo`
--

CREATE TABLE IF NOT EXISTS `tipo_equipo` (
  `pk_tip_equ_id` int(11) NOT NULL AUTO_INCREMENT,
  `tip_equ_nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`pk_tip_equ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `pk_usu_id` int(11) NOT NULL,
  `usu_nombre_usuario` varchar(20) NOT NULL,
  `usu_contrasena` varchar(30) NOT NULL,
  `usu_fecha_creacion` date NOT NULL,
  `usu_fecha_modificacion` date NOT NULL,
  PRIMARY KEY (`pk_usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usu_rol`
--

CREATE TABLE IF NOT EXISTS `usu_rol` (
  `pk_usu_rol_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_usu_id` int(11) NOT NULL,
  `fk_rol_id` int(11) NOT NULL,
  PRIMARY KEY (`pk_usu_rol_id`),
  KEY `fk_usu_id` (`fk_usu_id`,`fk_rol_id`),
  KEY `fk_rol_id` (`fk_rol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `equipo_ibfk_1` FOREIGN KEY (`fk_tip_equi_id`) REFERENCES `tipo_equipo` (`pk_tip_equ_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ficha_tecnica`
--
ALTER TABLE `ficha_tecnica`
  ADD CONSTRAINT `ficha_tecnica_ibfk_1` FOREIGN KEY (`fk_equ_id`) REFERENCES `equipo` (`pk_equ_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `garantia`
--
ALTER TABLE `garantia`
  ADD CONSTRAINT `garantia_ibfk_1` FOREIGN KEY (`fk_equ_id`) REFERENCES `equipo` (`pk_equ_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `lic_equ`
--
ALTER TABLE `lic_equ`
  ADD CONSTRAINT `lic_equ_ibfk_1` FOREIGN KEY (`fk_lic_id`) REFERENCES `licencia` (`pk_lic_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `lic_equ_ibfk_2` FOREIGN KEY (`fk_equ_id`) REFERENCES `equipo` (`pk_equ_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `parte`
--
ALTER TABLE `parte`
  ADD CONSTRAINT `parte_ibfk_1` FOREIGN KEY (`fk_equ_id`) REFERENCES `equipo` (`pk_equ_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `parte_ibfk_2` FOREIGN KEY (`fk_his_id`) REFERENCES `historialcambios` (`pk_his_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pol_ser`
--
ALTER TABLE `pol_ser`
  ADD CONSTRAINT `pol_ser_ibfk_1` FOREIGN KEY (`fk_pol_id`) REFERENCES `politica` (`pk_pol_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pol_ser_ibfk_2` FOREIGN KEY (`fk_ser_ticket`) REFERENCES `servicio` (`pk_ser_ticket`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_2` FOREIGN KEY (`fk_usu_id`) REFERENCES `usuario` (`pk_usu_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`fk_equ_id`) REFERENCES `equipo` (`pk_equ_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tec_ser_det`
--
ALTER TABLE `tec_ser_det`
  ADD CONSTRAINT `tec_ser_det_ibfk_3` FOREIGN KEY (`fk_det_id`) REFERENCES `detalle_servicio` (`det_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tec_ser_det_ibfk_1` FOREIGN KEY (`fk_tec_id`) REFERENCES `tecnico` (`pk_tec_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tec_ser_det_ibfk_2` FOREIGN KEY (`fk_ser_ticket`) REFERENCES `servicio` (`pk_ser_ticket`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usu_rol`
--
ALTER TABLE `usu_rol`
  ADD CONSTRAINT `usu_rol_ibfk_2` FOREIGN KEY (`fk_rol_id`) REFERENCES `rol` (`rol_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usu_rol_ibfk_1` FOREIGN KEY (`fk_usu_id`) REFERENCES `usuario` (`pk_usu_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
