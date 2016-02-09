insert into PERMISOS(
pk_per_codigo,
per_tipo,
per_descripcion
) values (
2,
'Modificar',
'Descripcion Permiso'
);
insert into DEPENDENCIAS(
pk_dep_codigo,
dep_nombre,
dep_extension) values (
2,
'Gerencia',
'3456');

insert into ROLES(
pk_rol_codigo,
rol_descripcion,
fk_per_codigo) values(
2,
'descripcion del rol',
2
);
insert into USUARIOS (
pk_usu_codigo,
usu_primer_nombre,
usu_segundo_nombre,
usu_primer_apellido,
usu_segundo_apellido,
usu_extension,
usu_cargo,
usu_correo,
usu_username,               
usu_password,
usu_fecha_creacion,
usu_fecha_modificacion,
fk_rol_codigo,
fk_dep_codigo)
values (
2,
'Jaime',
'Alberto',
'Lopez',
'Taborda'
,'3456'
,'Gerente'
,'jalope@une.net.co',
'jalope',
'jalope1',
now(),
now(),
2,
2);

 



