CREATE DATABASE IF NOT EXISTS HelpDesk;

USE HelpDesk;

CREATE TABLE IF NOT EXISTS PERMISOS(
    pk_per_codigo int auto_increment,
    per_tipo varchar(50) not null,
    per_descripcion varchar(120) not null,
    primary key(pk_per_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS ROLES(
    pk_rol_codigo int auto_increment,
    rol_descripcion varchar(80) not null,
    fk_per_codigo int not null,
    primary key(pk_rol_codigo),
    foreign key(fk_per_codigo) references PERMISOS(pk_per_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS DEPENDENCIAS(
    pk_dep_codigo int auto_increment,
    dep_nombre varchar(80) not null,
    dep_extension varchar(15),
    primary key(pk_dep_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS USUARIOS(
    pk_usu_codigo int auto_increment,
    usu_primer_nombre varchar(30) not null,
    usu_segundo_nombre varchar(30),
    usu_primer_apellido varchar(30) not null,
    usu_segundo_apellido varchar(30),
    usu_extension varchar(15),
    usu_cargo varchar(80),
    usu_correo varchar(100),
    usu_username varchar(30) not null UNIQUE,
    usu_password varchar(20) not null,
    usu_fecha_creacion datetime not null,
    usu_fecha_modificacion datetime,
    fk_rol_codigo int not null,
    fk_dep_codigo int not null,
    primary key(pk_usu_codigo),
    foreign key(fk_rol_codigo) references ROLES(pk_rol_codigo),
    foreign key(fk_dep_codigo) references DEPENDENCIAS(pk_dep_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS TIPOS_EQUIPOS(
    pk_tip_codigo int auto_increment,
    tip_nombre varchar(80) not null,
    primary key(pk_tip_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS EQUIPOS(
    pk_equ_codigo int auto_increment,
    equ_nombre varchar(80) not null,
    equ_precio double not null,
    fk_dep_codigo int not null,
    fk_tip_codigo int not null,
    primary key(pk_equ_codigo),
    foreign key(fk_dep_codigo) references DEPENDENCIAS(pk_dep_codigo),
    foreign key(fk_tip_codigo) references TIPOS_EQUIPOS(pk_tip_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS SERVICIOS(
    pk_ser_ticket int auto_increment,
    ser_fecha date not null,
    ser_hora time not null,
    ser_descripcion text not null,
    ser_estado varchar(20) not null,
    ser_prioridad varchar(10),
    ser_fecha_modificacion datetime,
    fk_usu_codigo int not null,
    fk_equ_codigo int not null,
    primary key(pk_ser_ticket),
    foreign key(fk_usu_codigo) references USUARIOS(pk_usu_codigo),
    foreign key(fk_equ_codigo) references EQUIPOS(pk_equ_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS DETALLES_SERVICIOS(
    pk_det_codigo int auto_increment,
    det_descripcion text not null,
    det_fecha datetime not null,
    primary key(pk_det_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS TECNICOS(
    pk_tec_codigo int auto_increment,
    tec_primer_nombre varchar(30) not null,
    tec_segundo_nombre varchar(30),
    tec_primer_apellido varchar(30) not null,
    tec_segundo_apellido varchar(30),
    tec_numero_telefono varchar(15),
    tec_numero_movil varchar(15),
    tec_correo varchar(100) not null,
    tec_especialidad varchar(100),
    primary key(pk_tec_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS TEC_SERV_DET(
    pk_tsd_codigo int auto_increment,
    fk_tec_codigo int not null,
    fk_ser_ticket int not null,
    fk_det_codigo int not null,
    primary key(pk_tsd_codigo),
    foreign key(fk_tec_codigo) references TECNICOS(pk_tec_codigo),
    foreign key(fk_ser_ticket) references SERVICIOS(pk_ser_ticket),
    foreign key(fk_det_codigo) references DETALLES_SERVICIOS(pk_det_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS POLITICAS(
    pk_pol_codigo int auto_increment,
    pol_descripcion varchar(120) not null,
    primary key(pk_pol_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS HISTORIAL_CAMBIOS(
    pk_htc_codigo int auto_increment,
    htc_fecha date not null,
    htc_hora time not null,
    htc_descripcion varchar(120) not null,
    primary key(pk_htc_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS PARTES_EQUIPOS(
    pk_pte_codigo int auto_increment,
    pte_serial varchar(50) not null,
    pte_marca varchar(60) not null,
    pte_descripcion varchar(100),
    pte_estado varchar(20) not null,
    fk_equ_codigo int not null,
    fk_htc_codigo int not null,
    primary key(pk_pte_codigo),
    foreign key(fk_equ_codigo) references EQUIPOS(pk_equ_codigo),
    foreign key(fk_htc_codigo) references HISTORIAL_CAMBIOS(pk_htc_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS GARANTIAS(
    pk_gar_codigo int not null,
    gar_tipo varchar(20),
    gar_fecha_inicio date not null,
    gar_fecha_fin date not null,
    gar_descripcion varchar(80),
    fk_equ_codigo int not null,
    primary key(pk_gar_codigo),
    foreign key(fk_equ_codigo) references EQUIPOS(pk_equ_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS LICENCIAS(
    pk_lic_codigo int auto_increment,
    lic_nombre varchar(30) not null,
    lic_fecha_inicio date not null,
    lic_fecha_caducidad date not null,
    lic_fecha_compra date not null,
    lic_precio double,
    lic_cobertura text,
    primary key(pk_lic_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS EQUIPOS_LICENCIAS(
    pk_eql_codigo int auto_increment,
    fk_equ_codigo int not null,
    fk_lic_codigo int not null,
    primary key(pk_eql_codigo),
    foreign key(fk_equ_codigo) references EQUIPOS(pk_equ_codigo),
    foreign key(fk_lic_codigo) references LICENCIAS(pk_lic_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS FICHAS_TECNICAS(
    pk_fic_codigo int auto_increment,
    fic_marca varchar(50) not null,
    fic_serial varchar(50) not null,
    fic_modelo varchar(20) not null,
    fic_memoria_ram varchar(20),
    fic_disco_duro varchar(50),
    fic_procesador varchar(30),
    fic_tarjeta_video varchar(30),
    fic_board varchar(30),
    fic_tarjeta_sonido varchar(30),
    fic_unidades_opticas varchar(30),
    fic_monitor varchar(30),
    fic_teclado varchar(30),
    fic_mouse varchar(30),
    fic_tarjeta_red varchar(30),
    fic_sistema_operativo varchar(30),
    fic_paquete_ofimatico varchar(30),
    fic_compresor varchar(30),
    fic_antivirus varchar(30),
    fic_bateria varchar(30),
    fic_cargador varchar(30),
    fic_multilector varchar(30),
    fic_puertos_usb varchar(50),
    fic_parlantes varchar(30),
    fic_microfono varchar(30),
    fic_tecnologia_impresion varchar(30),
    fic_memoria_boofer varchar(30),
    fic_manejo_papel varchar(30),
    fic_puertos varchar(30),
    fic_conectividad varchar(30),
    fic_potencia_salida varchar(10),
    fic_lumens varchar(10),
    fic_resolucion varchar(10),
    fic_lente varchar(10),
    fk_equ_codigo int not null,
    primary key(pk_fic_codigo),
    foreign key(fk_equ_codigo) references EQUIPOS(pk_equ_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS PROVEEDORES (
    pk_pro_codigo int NOT NULL,
    pro_nombre varchar(60) NOT NULL,
    pro_telefono varchar(20) NOT NULL,
    pro_direccion varchar(60),
    pro_correo varchar(60),
    pro_pagina_web varchar(60),
    PRIMARY KEY (pk_pro_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS PROVEEDORES_EQUIPOS (
    pk_pve_codigo int auto_increment,
    fk_equ_codigo int NOT NULL,
    fk_pro_codigo int NOT NULL,
    PRIMARY KEY (pk_pve_codigo),
    FOREIGN KEY (fk_equ_codigo) REFERENCES EQUIPOS(pk_equ_codigo),
    FOREIGN KEY (fk_pro_codigo) REFERENCES PROVEEDORES(pk_pro_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS PARTES_PROVEEDORES (
    pk_ppv_codigo int auto_increment,
    fk_pte_codigo int,
    fk_pro_codigo int NOT NULL,
    PRIMARY KEY (pk_ppv_codigo),
    FOREIGN KEY (fk_pte_codigo) REFERENCES PARTES_EQUIPOS(pk_pte_codigo),
    FOREIGN KEY (fk_pro_codigo) REFERENCES PROVEEDORES(pk_pro_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
