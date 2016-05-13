<?php  include "../../HelpDesk/model/conexion_class.php";

class base_conocimiento_class{
    
    private $conexion;
    //TABLA DETALLE_SERVICIO 
    private $pk_det_codigo;
    private $det_descripcion;
    private $det_fecha;
   //TABLA HISTORIAL_CAMBIOS 
    private $pk_htc_codigo;
    private $htc_fecha;
    private $htc_hora;
    private $htc_descripcion;
    //TABLA TEC_SERV_DET
    private $pk_tsd_codigo;
    private $fk_tec_codigo;
    private $fk_ser_ticket;
    private $fk_det_codigo;
    //TABLA SERVICIOS 
    private $pk_ser_ticket;
    private $ser_fecha;
    private $ser_hora;
    private $ser_descripcion;
    private $ser_estado;
    private $ser_prioridad;
    private $ser_fecha_modificacion;
    private $fk_usu_codigo;
    private $fk_equ_codigo;
            
            
    public function __construct()
   {
           $this->conexion = new conexion_class();
           $this->conexion->conexion();
    }
    
    public function consultar(){
        
        
        $sql="select from detalles_servicios INNER JOIN tec_ser_det ON detalles_servicios.pk_det_codigo = tec_ser_det.fk_tsd_codigo'".$pk_det_codigo."' OR pk_tsd_codigo = '".$pk_tsd_codigo.'" OR pk_det_codigo ='".$det_descripcion.'";
        
        $query = $this->conexion->consultarQuery($sql);
        return $query;
       

    }
    


    public function consulta($pk_htc_codigo,$htc_fecha,$htc_hora,$htc_descripcion){
        
        
        $sql="select * from historial_cambios where pk_htc_codigo = '".$pk_htc_codigo."'";
        $query = $this->conexion->consultarQuery($sql);
        return $query;
        
    }
    
}

