<?php  include "../../HelpDesk/model/conexion_class.php";

class base_conocimiento_class{
    
    private $conexion;

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
    
            
    public function __construct()
   {
           $this->conexion = new conexion_class();
           $this->conexion->conexion();
    }
    
    public function consultar(){
        
        
        $sql = "select servicios.pk_ser_ticket,servicios.ser_descripcion,servicios.ser_fecha,detalles_servicios.det_descripcion,detalles_servicios.det_fecha,
            tec_serv_det.pk_tsd_codigo, tec_serv_det.fk_tec_codigo FROM 

            servicios inner join tec_serv_det 
            on servicios.pk_ser_ticket = tec_serv_det.fk_ser_ticket
            inner join detalles_servicios 
            on tec_serv_det.fk_det_codigo = detalles_servicios.pk_det_codigo
            inner join equipos 
            on servicios.fk_equ_codigo = equipos.pk_equ_codigo
            inner join partes_equipos 
            on equipos.pk_equ_codigo = partes_equipos.fk_equ_codigo
            inner join historial_cambios
            on partes_equipos.pk_pte_codigo = historial_cambios.pk_htc_codigo

            where 

            servicios.pk_ser_ticket like '%5%' or 
            equipos.equ_nombre like '%com%' or 
            partes_equipos.pte_descripcion like '%hardware%'";

        $query = $this->conexion->consultarQuery($sql);
        return $query;
    }


    public function consulta($pk_htc_codigo,$htc_fecha,$htc_hora,$htc_descripcion){
        
        
        $sql="select * from historial_cambios where pk_htc_codigo = '".$pk_htc_codigo."'";
        $query = $this->conexion->consultarQuery($sql);
        return $query;
        
    }
    
}

