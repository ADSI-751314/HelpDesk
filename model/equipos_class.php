<?php
include 'conexion_class.php';
class equipos_class {
 //put your code here
    private $pk_equ_codigo;
    private $equ_nombre;
    private $equ_precio;
    private $dep_codigo;
    private $tip_codigo;
    private $conexion;
    
    public function __construct()
    {
           $this->conexion = new conexion_class();
           $this->conexion->conexion();
    }
    
    //metodo que recibe los valores enviados desde la el controlador de garantias para ser guardados en la bd
    public function insertar($pk_equ_codigo,$equ_nombre,$equ_precio,$fk_dep_codigo,$fk_tip_codigo)
    {
        $sql= "insert into equipos values ('$pk_equ_codigo','$equ_nombre','$equ_precio','$fk_dep_codigo','$fk_tip_codigo')";
        $query = $this->conexion->ejecutarQuery($sql);
    }
   

     //metodo que me elimina el campo seleccionado desde el formulario
    public function eliminar($pk_gar_codigo)
    {
        $sql="DELETE FROM equipos WHERE pk_equ_codigo = '".$pk_gar_codigo."'";
        $query = $this->conexion->ejecutarQuery($sql);        
    }
     //metodo para modificar el campo seleccionado
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
    public function consultar($pk_equ_codigo) {

        //CONEXION CON LA BASE DE DATOS 
        $sql="select * from equipos where pk_equ_codigo = '".$pk_equ_codigo."'"; 
        $query = $this->conexion->consultarQuery($sql);
        
        // contruir un ciclo que recorra los registros que valla desde cero hasta las cantidad de clientes
        foreach ($query as $fila) {

           $contenido = "<tr>
                            <td> " . $fila['pk_equ_codigo'] . " </td>
                            <td> " . $fila['equ_nombre'] . " </td>
                            <td> " . $fila['equ_precio'] . " </td>
                            <td> " . $fila['fk_dep_codigo'] . " </td>
                            <td> " . $fila['fk_tip_codigo'] . " </td>
                        </tr>";
            echo $contenido;
        }
        //fin del ciclo
    }
    
    public function consultar_todo()
    {
        $sql="select * from garantias";
        $query = $this->conexion->consultarQuery($sql);
        return $query;
    }   
}
