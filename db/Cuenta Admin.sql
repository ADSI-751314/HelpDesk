
insert into `dependencias` (`pk_dep_codigo`, `dep_nombre`, `dep_extension`) values('1','Administrador','123');
insert into `permisos` (`pk_per_codigo`, `per_tipo`, `per_descripcion`) values('1','Admin','Administrador');
insert into `usuarios` (`pk_usu_codigo`, `usu_primer_nombre`, `usu_segundo_nombre`, `usu_primer_apellido`, `usu_segundo_apellido`, `usu_extension`, `usu_cargo`, `usu_correo`, `usu_username`, `usu_password`, `usu_fecha_creacion`, `usu_fecha_modificacion`, `fk_rol_codigo`, `fk_dep_codigo`) values('1','Admin','Admin','Admin','Admin','123','Administrador','admin@gmail.com','admin','admin','2015-09-05 11:35:47',NULL,'1','1');
