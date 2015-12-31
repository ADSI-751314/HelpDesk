<?php
include "../../HelpDesk/model/conexion_class.php";

class base_conocimiento_class{
    
    private $conexion;
    private $pk_det_codigo;
    private $det_descripcion;
    private $det_fecha;

    public function __construct()
    {
           $this->conexion = new conexion_class();
           $this->conexion->conexion();
    }
    
    public function consultar($pk_det_codigo,$det_descripcion,$det_fecha){
        
        
        $sql="select * from detalles_servicios where pk_det_codigo = '".$pk_det_codigo."'";
        $query = $this->conexion->consultarQuery($sql);
        return $query;
        
    }
    
    
}

