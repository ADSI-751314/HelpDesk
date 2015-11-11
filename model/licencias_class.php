<?php

include '../../HelpDesk/model/conexion_class.php';
include 'model/conexion_class.php';



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
    function getPk_lic_codigo() {
        return $this->pk_lic_codigo;
    }

    function getLic_nombre() {
        return $this->lic_nombre;
    }

    function getLic_fecha_compra() {
        return $this->lic_fecha_compra;
    }

    function getLic_fecha_caducidad() {
        return $this->lic_fecha_caducidad;
    }

    function getLic_precio() {
        return $this->lic_precio;
    }

    function getLic_cobertura() {
        return $this->lic_cobertura;
    }

    function getConexion() {
        return $this->conexion;
    }

    function setPk_lic_codigo($pk_lic_codigo) {
        $this->pk_lic_codigo = $pk_lic_codigo;
    }

    function setLic_nombre($lic_nombre) {
        $this->lic_nombre = $lic_nombre;
    }

    function setLic_fecha_compra($lic_fecha_compra) {
        $this->lic_fecha_compra = $lic_fecha_compra;
    }

    function setLic_fecha_caducidad($lic_fecha_caducidad) {
        $this->lic_fecha_caducidad = $lic_fecha_caducidad;
    }

    function setLic_precio($lic_precio) {
        $this->lic_precio = $lic_precio;
    }

    function setLic_cobertura($lic_cobertura) {
        $this->lic_cobertura = $lic_cobertura;
    }

    function setConexion($conexion) {
        $this->conexion = $conexion;
    }
    
    
    public function crear($pk_lic_codigo, $lic_nombre, $lic_fecha_compra, $lic_fecha_caducidad, $lic_precio, $lic_cobertura) {
       
        $sql = "INSERT INTO licencias values('$pk_lic_codigo','$lic_nombre','$lic_fecha_compra','$lic_fecha_caducidad','$lic_precio','$lic_cobertura')";

        $query = $this->conexion->ejecutarQuery($sql);
    }

    public function actualizar($pk_lic_codigo, $lic_nombre, $lic_fecha_compra, $lic_fecha_caducidad, $lic_precio, $lic_cobertura) {
        
        $sql = " UPDATE licencias SET ('$pk_lic_codigo','$lic_nombre','$lic_fecha_compra','$lic_fecha_caducidad','$lic_precio','$lic_cobertura') where pk_lic_codigo='" . $pk_lic_codigo ."'";

        $query = $this->conexion->ejecutarQuery($sql);
    }

    public function consultar($pk_lic_codigo) {

        //CONEXION CON LA BASE DE DATOS 

        include_once ("conexion.php");
        $objconex = new Conexion ();
        $conecta = $objconex->conectar();

        // CONSULTA CASE DE DATOS 

        $consulta_licencias = "select pk_lic_codigo,lic_nombre,lic_fecha_compra,lic_fecha_caducidad,lic_precio,lic_cobertura FROM licencias";

        //ejecucion de la consulta

        $fuente_helpdesk = mysql_query($consulta_helpdesk, $conecta);

        //obtener la cantidad de registros
        $cantidad_licencias = mysql_num_rows($fuente_licencias);


        // contruir un ciclo que recorra los registros que valla desde cero hasta las cantidad de clientes
        for ($i = 0; $i < $cantidad_licencias; $i++) {
            $registro_licencias = mysql_fetch_row($fuente_helpdesk);

            $contenido = "<tr>
                            <td> " . $registro_licencias[0] . " </td>
                            <td> " . $registro_licencias[1] . " </td>
                            <td> " . $registro_licencias[2] . " </td>
                            <td> " . $registro_licencias[3] . " </td>
                            <td> " . $registro_licencias[4] . " </td>
                            <td> " . $registro_licencias[5] . " </td>
                            <td> " . $registro_licencias[6] . " </td>
		
                        </tr>";

            echo $contenido;
        }
        //fin del ciclo
    }

    public function eliminar($pk_lic_codigo) {
        $sql = " DELETE FROM licencias where pk_lic_codigo= '" . $pk_lic_codigo."'";


        $query = $this->conexion->ejecutarQuery($sql);
    }

}
