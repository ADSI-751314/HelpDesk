<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dependecia_class
 *
 * @author Sena
 */
class dependecia_class {
    //put your code here
    
    private $codigo;
    private $nombre;
    private $extencion;
    
    function __construct($codigo, $nombre, $extencion) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->extencion = $extencion;
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

    public function getExtencion() {
        return $this->extencion;
    }

    public function setExtencion($extencion) {
        $this->extencion = $extencion;
    }


}

?>
