<?php

include 'conexion_class.php';

class garantias_class {
    //put your code here
    private $conexion;
    public function _construct()
    {
           $this->conexion = new conexion_class();
           $this->conexion->conexion();
    }
    public function almacenar($gar_codigo,$gar_hardware,$gar_software,$gar_fecha1,$gar_fecha2,$gar_descripcion)
    {
        $sql= "insert into garantias values ('$gar_codigo','$gar_hardware','$gar_software','$gar_fecha1','$gar_fecha2','$gar_descripcion')";
        $query = $this->conexion->ejecutarQuery($sql);
    }
    public function consultar($gar_codigo,$gar_hardware,$gar_software,$gar_fecha1,$gar_fecha2,$gar_descripcion)
    {
        $sql="select * from garantias";
        $query = $this->conexion->ejecutarQuery($sql);
        
    }
    public function eliminar($gar_codigo)
    {
        $sql="DELETE FROM garantias WHERE pk_gar_codigo = ('$pk_gar_codigo')";
        $query = $this->conexion->ejecutarQuery($sql);        
    }
    public function modificar ($gar_codigo,$gar_hardware,$gar_software,$gar_fecha1,$gar_fecha2,$gar_descripcion)
    {
        $sql="UPDATE garantias SET gar_hardware = '".$gar_hardware."',
                                   gar_software = '".$gar_software."',
                                   gar_fecha_inicio= '".$gar_fecha1."',
                                   gar_fecha_fin = '".$gar_fecha2."',
                                   gar_descripcion = '".$gar_descripcion."',
                                   WHERE pk_gar_codigo = '".$pk_gar_codigo."'";
                                    
    }
}
