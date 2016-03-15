<?php

include 'conexion_class.php';

class HistorialCambios_class {
    //put your code here
    private $conexion;
    public function __construct()
    {
           $this->conexion = new conexion_class();
           $this->conexion->conexion();
    }
    
    //metodo que recibe los valores enviados desde la el controlador de garantias para ser guardados en la bd
    public function guardar($pk_htc_codigo,$htc_fecha,$htc_hora,$htc_descripcion)
    {
        $sql= "insert into historial_cambios values ('$pk_htc_codigo','$htc_fecha','$htc_hora','$htc_descripcion')";
        $query = $this->conexion->ejecutarQuery($sql);
    }
     //metodo que me consulta la peticion enviada desde el formulario
    public function consultar($pk_htc_codigo)
    {
        $sql="select * from historial_cambios WHERE pk_htc_codigo = '".$pk_htc_codigo."'";
        $query = $this->conexion->consultarQuery($sql);
        return $query;
    }
     //metodo que me elimina el campo seleccionado desde el formulario
    public function eliminar($pk_htc_codigo)
    {
        $sql="DELETE FROM historial_cambios WHERE pk_htc_codigo = '".$pk_htc_codigo."'";
        $query = $this->conexion->ejecutarQuery($sql);        
    }
     //metodo para modificar el campo seleccionado
    public function modificar ($pk_htc_codigo,$htc_fecha,$htc_hora,$htc_descripcion)
    {
        $sql="UPDATE historial_cambios SET htc_fecha = '".$htc_fecha."',
                                   htc_hora = '".$htc_hora."',
                                   htc_descripcion = '".$htc_descripcion."'                                   
                                   WHERE pk_htc_codigo = '".$pk_htc_codigo."'";
        $this->conexion->ejecutarQuery($sql);
                                    
    }
    public function consultar_todo1()
    {
        $sql="select * from historial_cambios";
        $query = $this->conexion->consultarQuery($sql);
        
    }
}