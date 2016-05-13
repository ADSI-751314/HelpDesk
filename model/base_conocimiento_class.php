<?php  include "../../HelpDesk/model/conexion_class.php";

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
    
    public function consultar(){
        
        
        $sql="select from detalles_servicios INNER JOIN tec_ser_det ON pk_det_codigo = '".$pk_det_codigo."' OR (pk_tsd_codigo = '".$pk_tsd_codigo.'") ON (pk_det_codigo ='".$det_descripcion.'")"  ;
        $query = $this->conexion->consultarQuery($sql);
        return $query;
       

    }
    
SELECT
interpretes.int_nombre,
albumes.alb_titulo,
canciones.can_titulo,
compositores.com_nombre,
compositores.com_apellido


FROM

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

