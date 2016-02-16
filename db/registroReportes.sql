insert into DEPENDENCIAS values(1,'Administrador','123');
insert into DEPENDENCIAS values(2,'Gerencia','3456');
insert into DEPENDENCIAS values(3,'Empleado','3457');

insert into PERMISOS values(1,'Administrador','Administrador del sistema');
insert into PERMISOS values(2,'Modificar','Descripcion Permiso');
insert into PERMISOS values(3,'Consultar','Descripcion Permiso');

insert into ROLES values(1,'Administrador',1);
insert into ROLES values(2,'Supervisor',2);
insert into ROLES values(3,'descripcion del rol',3);

insert into USUARIOS values(1,'Andres','Felipe','Perez','Isaza','1314','Administrador','admin@mail.com','admin','admin',now(),now(),1,1);
insert into USUARIOS values(2,'Jaime','Alberto','Lopez','Taborda','3456','Gerente','jalope@une.net.co','jalope','jalope1',now(),now(),2,2);
insert into USUARIOS values(3,'Yuli','Tatiana','Gonzalez','Gonzalez','3457','Empleada','jutago@une.net.co','jutago','jutago1',now(),now(),3,3);


INSERT INTO TIPOS_EQUIPOS(`tip_nombre`) VALUES ('Soportes');
INSERT INTO `EQUIPOS`(`equ_nombre`, `equ_precio`, `fk_dep_codigo`, `fk_tip_codigo`) VALUES ('Compaq','1.200.000',1,1);
INSERT INTO `SERVICIOS`(`ser_fecha`, `ser_hora`, `ser_descripcion`, `ser_estado`, `ser_prioridad`, `ser_fecha_modificacion`, `fk_usu_codigo`, `fk_equ_codigo`) VALUES ('2016-02-15','13:00','Fallo','Abierto','Alto','2016-02-15',1,1);
