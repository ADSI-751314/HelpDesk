<?php

include_once '../../model/dependecia_class.php';
include_once '../../model/conexion_class.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dependencia_controller
 *
 * @author Sena
 */
class dependencia_controller extends dependecia_class {

    public static function insertDependencia(dependecia_class $d) {
        $a = new conexion_class;
        $sql = "insert into dependecia values (" . $d->getCodigo() . ", '" . $d->getNombre() . "', " . $d->getExtencion() . ")";
        $a->ejecutarQuery($sql);
        echo 'Consulta Ejecutada';
    }

    public static function consultarDependencias() {
        $a = new conexion_class();
        $sql = "select dep_nombre from dependencia";
        $result = $a->consultarQuery($sql);
        return $result;
    }

}

?>
