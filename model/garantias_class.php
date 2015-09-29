<?php

include 'conexion_class.php';

class garantias_class {
    //put your code here
    private $conexion;
    public function __construct()
    {
           $this->conexion = new conexion_class();
           $this->conexion->conexion();
    }
    public function guardar($pk_gar_codigo,$gar_tipo,$gar_fecha_inicio,$gar_fecha_fin,$gar_descripcion,$gar_foranea)
    {
        $sql= "insert into garantias values ('$pk_gar_codigo','$gar_tipo','$gar_fecha_inicio','$gar_fecha_fin','$gar_descripcion','$gar_foranea')";
        $query = $this->conexion->ejecutarQuery($sql);
    }
    public function consultar($pk_gar_codigo)
    {
        $sql="select * from garantias WHERE pk_gar_codigo = '".$pk_gar_codigo."'";
        $query = $this->conexion->consultarQuery($sql);
        return $query;
    }
    public function eliminar($pk_gar_codigo)
    {
        $sql="DELETE FROM garantias WHERE pk_gar_codigo = '".$pk_gar_codigo."'";
        $query = $this->conexion->ejecutarQuery($sql);        
    }
    public function modificar ($pk_gar_codigo,$gar_tipo,$gar_fecha1,$gar_fecha2,$gar_descripcion,$fk_equ_codigo)
    {
        $sql="UPDATE garantias SET gar_tipo = '".$gar_tipo."',
                                   gar_fecha_inicio= '".$gar_fecha1."',
                                   gar_fecha_fin = '".$gar_fecha2."',
                                   gar_descripcion = '".$gar_descripcion."',
                                   fk_equ_codigo = '".$fk_equ_codigo."'    
                                   WHERE pk_gar_codigo = '".$pk_gar_codigo."'";
        $this->conexion->ejecutarQuery($sql);
                                    
    }
}
