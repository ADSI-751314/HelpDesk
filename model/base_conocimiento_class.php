<?php
include "../../HelpDesk/model/conexion_class.php";

class base_conocimiento_class{
    
    private $conexion;
    
    private $pk_det_codigo;
    private $det_descripcion;
    private $det_fecha;
   
    private $pk_htc_codigo;
    private $htc_fecha;
    private $htc_hora;
    private $htc_descripcion;
   
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
    public function consulta($pk_htc_codigo,$htc_fecha,$htc_hora,$htc_descripcion){
        
        
        $sql="select * from historial_cambios where pk_htc_codigo = '".$pk_htc_codigo."'";
        $query = $this->conexion->consultarQuery($sql);
        return $query;
        
    }
    
}

