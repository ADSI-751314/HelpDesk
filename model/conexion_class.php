<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexion_class
 *
 * @author Juan-Buitrago
 */
require_once 'constants.php'; // se incluye las constantes para poder establecer la conexion.

class conexion_class {

//put your code here

    private $conexion; // se declara la variable privada de conexion.

    /* Se crea metodo para establecer la conexion con la base de datos */

    public function conexion() {
        
        // se valida sin existe una conexion.
        if (!isset($this->conexion)) {
            
            // se valida si sucede un error al establecer la conexion, de ser asi se retorna el error dentro del catch.
            try {
                
                // se usar las constantes definidas en constants.php para establecer la conexion
                $this->conexion = (mysql_connect(HOST, USER, PASSWORD, PORT)) or die(mysql_error());
                mysql_select_db(DATABASE, $this->conexion) or die(mysql_error());
                
                
                // se retorna la conexion
                return $this->conexion;
                
            // si ocurre un error en la conexion se retorna el mensaje de error.    
            } catch (Exception $e) {
                
                return $e->getMessage();
            }
        }
    }

}
