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
        
        
        $sql="Select from detalles_servicios INNER JOIN tec_ser_det ON detalles_servicios.pk_det_codigo = tec_ser_det.fk_tsd_codigo'".$pk_det_codigo."' OR pk_tsd_codigo = '".$pk_tsd_codigo.'" OR pk_det_codigo ='".$det_descripcion.'";
        
        $query = $this->conexion->consultarQuery($sql);
        return $query;
       

    }
    interpretes inner join interprete_album
on interpretes.pk_int_codigo = interprete_album.fk_int_codigo
inner join albumes
on interprete_album.fk_alb_codigo = albumes.pk_alb_codigo
inner join canciones_albumes
on albumes.pk_alb_codigo = canciones_albumes.fk_alb_codigo
inner join canciones
on  canciones_albumes.fk_can_codigo = canciones.pk_can_codigo
inner join canciones_compositores
on canciones.pk_can_codigo = canciones_compositores.fk_can_codigo
inner join compositores
on canciones_compositores.fk_com_codigo = compositores.pk_com_codigo



    public function consulta($pk_htc_codigo,$htc_fecha,$htc_hora,$htc_descripcion){
        
        
        $sql="select * from historial_cambios where pk_htc_codigo = '".$pk_htc_codigo."'";
        $query = $this->conexion->consultarQuery($sql);
        return $query;
        
    }
    
}

