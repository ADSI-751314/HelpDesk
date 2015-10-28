<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tipo_equipo_class
 *
 * @author Sena
 */
class tipo_equipo_class {
    //put your code here
    private $codigo;
    private $nombre;
    
    function __construct($codigo, $nombre) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

}

?>
