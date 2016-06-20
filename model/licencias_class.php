<?php
include_once 'conexion_class.php';

class licencias_class {
   
    private $pk_lic_codigo;
    private $lic_nombre;
    private $lic_fecha_compra;
    private $lic_fecha_caducidad;
    private $lic_precio;
    private $lic_cobertura;
    private $conexion;

    public function __construct() {
        $this->conexion = new conexion_class();
        $this->conexion->conexion();
    }

    public function crear($pk_lic_codigo, $lic_nombre,$lic_fecha_inicio,$lic_fecha_compra,$lic_fecha_caducidad,$lic_precio, $lic_cobertura) {
        
        $sql = "INSERT INTO licencias values('$pk_lic_codigo','$lic_nombre','$lic_fecha_inicio','$lic_fecha_compra','$lic_fecha_caducidad','$lic_precio','$lic_cobertura')";
        $query = $this->conexion->ejecutarQuery($sql);
        
        
//         if ($query == '1') {
//        echo '<div class="alert alert-success alert-dismissable">
//        <button type="submit" class="close" data-dismiss="alert">&times;</button>
//        <strong>¡Bien!</strong> Dato agregado Correctamente.
//        </div>';
//    } else {
//        echo '<div class="alert alert-warning alert-dismissable">
//        <button type="submit" class="close" data-dismiss="alert">&times;</button>
//        <strong>¡UPS!</strong> Ha ocurrido un error.
//        </div>';
//    }
    }

    public function actualizar($pk_lic_codigo, $lic_nombre, $lic_fecha_inicio,$lic_fecha_compra, $lic_fecha_caducidad, $lic_precio, $lic_cobertura) {
        
        $sql="UPDATE licencias SET pk_lic_codigo = '".$pk_lic_codigo."',
                                        lic_nombre ='". $lic_nombre."',
                                        lic_fecha_inicio = '".$lic_fecha_inicio."',            
                                        lic_fecha_compra ='".$lic_fecha_compra."',
                                        lic_fecha_caducidad = '".$lic_fecha_caducidad."',
                                        lic_precio='".$lic_precio."',
                                        lic_cobertura = '".$lic_cobertura."' 
                                        where pk_lic_codigo='" . $pk_lic_codigo ."'";
        $query = $this->conexion->ejecutarQuery($sql);
        
        
       
    }

  
    public function consultar($pk_lic_codigo,$lic_nombre) {

        //CONEXION CON LA BASE DE DATOS 
        $sql="select pk_lic_codigo, lic_nombre, lic_fecha_inicio, lic_fecha_caducidad, lic_fecha_compra,  lic_precio, lic_cobertura from licencias where pk_lic_codigo = '".$pk_lic_codigo."' or lic_nombre = '".$lic_nombre."'"; 
        $query = $this->conexion->consultarQuery($sql);
        
        // contruir un ciclo que recorra los registros que valla desde cero hasta las cantidad de clientes
        foreach ($query as $fila) {

           $contenido = "<tr>
                            <td> " . $fila['pk_lic_codigo'] . " </td>
                            <td> " . $fila['lic_nombre'] . " </td>
                            <td> " . $fila['lic_fecha_inicio'] . " </td>
                            <td> " . $fila['lic_fecha_caducidad'] . " </td>
                            <td> " . $fila['lic_fecha_compra'] . " </td>
                            <td> " . $fila['lic_precio'] . " </td>
                            <td> " . $fila['lic_cobertura'] . " </td>
                            
                        </tr>";
            echo $contenido;
        }
        //fin del ciclo
    }
public function consulta() {

    //CONEXION CON LA BASE DE DATOS 
        $sql="select * from licencias"; 
        $query = $this->conexion->consultarQuery($sql);
        
       
        // contruir un ciclo que recorra los registros que valla desde cero hasta las cantidad de clientes
        foreach ($query as $fila) {

           $contenido = "<tr>
                            <td> " . $fila['pk_lic_codigo'] . " </td>
                            <td> " . $fila['lic_nombre'] . " </td>
                            <td> " . $fila['lic_fecha_inicio'] . " </td>
                            <td> " . $fila['lic_fecha_compra'] . " </td>
                            <td> " . $fila['lic_fecha_caducidad'] . " </td>
                            <td> " . $fila['lic_precio'] . " </td>
                            <td> " . $fila['lic_cobertura'] . " </td>
                        </tr>";
            echo $contenido;
        }
        //fin del ciclo
    }
    
    public function eliminar($pk_lic_codigo)
    {
        $sql = " DELETE FROM licencias where pk_lic_codigo= '".$pk_lic_codigo."'";
        $query = $this->conexion->ejecutarQuery($sql);
        
//        if ($query == 'eliminar') {
//        echo '<div class="alert alert-danger alert-dismissable">
//        <button type="submit" class="close" data-dismiss="alert">&times;</button>
//        <strong>¡Bien!</strong> Registro Eliminado con exito .
//        </div>';
//    } else {
//        echo '<div class="alert alert-warning alert-dismissable">
//        <button type="submit" class="close" data-dismiss="alert">&times;</button>
//        <strong>¡UPS!</strong> Ha ocurrido un error.
//        </div>';
//    }
    }
    
    public function consultar_todo()
    {
        $sql="select * from licencias";
        $query = $this->conexion->consultarQuery($sql);
        
    }
    
     public function consultar_todo1()
    {
        $sql="select * from licencias";
        $query = $this->conexion->consultarQuery($sql);
        
    }

}
