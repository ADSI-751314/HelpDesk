<?php

include_once 'conexion_class.php';

class tecnicos_class 
    {

    
    
    private $conexion; 
    public function __construct()
    {
        $this->conexion = new conexion_class();
        $this->conexion->conexion();
        
  }
    public function guardar($tec_codigo,$tec_correo,$tec_especialidad,$tec_numero_movil,$tec_numero_telefono,$tec_primer_apellido,$tec_primer_nombre,$tec_segundo_apellido,$tec_segundo_nombre)
    {
       $sql= " insert into tecnicos values ('$tec_codigo','$tec_correo','$tec_especialidad','$tec_numero_movil','$tec_numero_telefono','$tec_primer_apellido','$tec_primer_nombre','$tec_segundo_apellido','$tec_segundo_nombre')";
        
        
        $query = $this->conexion->ejecutarQuery($sql);
    }
    
  
    
       public function modificar($tec_codigo,$tec_correo,$tec_especialidad,$tec_numero_movil,$tec_numero_telefono,$tec_primer_apellido,$tec_primer_nombre,$tec_segundo_apellido,$tec_segundo_nombre)
    {
        $sql= "UPDATE tecnicos SET tec_correo = '" .$tec_correo."' tec_especialidad = '" .$tec_especialidad."' tec_numero_movil = '".$tec_numero_movil."' tec_numero_telefono = '".$tec_numero_telefono."' tec_primer_apellido = '".$tec_primer_apellido."'tec_primer_nombre = '".$tec_pimer_nombre."' tec_segundo_apellido = '".$tec_segundo_apellido."' tec_segundo_nombre = '".$tec_segundo_nombre."' where pk_tec_codigo = '".$tec_codigo."'";
        
        $query = $this->conexion->ejecutarQuery($sql);
    }
    
    public function consultar($pol_codigo)
    {
        //cnx bd
        //consulta bd
        
        $consulta_cliente = "select pk_pol_codigo,pol_descripcion from politicas where pk_pol_codigo =" . $pol_codigo."" ;
        
       $this->conexion->ejecutarQuery($consulta_cliente);
        
       // $cantidad_cliente = mysql_num_rows($fuente_cliente);
        
        
        
    }
        public function eliminar($pol_codigo) 
        {
        $sql = " DELETE FROM politicas where pk_pol_codigo=" . $pol_codigo . "";


        $query = $this->conexion->ejecutarQuery($sql);
        }
    }
  