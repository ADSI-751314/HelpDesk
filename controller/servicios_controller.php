<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of servicios_controller
 *
 * @author USUARIO
 */

include_once '/HelpDesk/model/servicio_class.php';

$proceso=$_POST['peticion'];

$SerController=new servicio_class();

switch ($proceso)
{
    case('ENVIAR'):
    {
        $SerController->guardar($_REQUEST['txtTicket'], $_REQUEST['txtFechaCreacion'], $_REQUEST['txtHora'], $_REQUEST['txtDescripcion'], $_REQUEST['cboEstado'], $_REQUEST['cboPrioridad'], $_REQUEST['txtFechaActualizacion'], $_REQUEST['txtUsuario'], $_REQUEST['selComboIdEquipo']);
        echo 'Registrado con Éxito';
    }
    break;
    
    case('CONSULTAR'):
        {
            $SerController->consultar($_REQUEST['txtTicket']);
            echo 'Consultar';
        }
        break;
        
    case ('ELIMINAR'):
        {
            $SerController->eliminar($_REQUEST['txtTicket']);
            echo 'Eliminado';
        }
        break;
    
    case('MODIFICAR');
        {
            $SerController->modificar($_REQUEST['txtTicket'], $_REQUEST['txtFechaCreacion'], $_REQUEST['txtHora'], $_REQUEST['txtDescripcion'], $_REQUEST['cboEstado'], $_REQUEST['cboPrioridad'], $_REQUEST['txtFechaActualizacion'], $_REQUEST['txtUsuario'], $_REQUEST['selComboIdEquipo']);
            echo 'Modificado';
        }
        break;
}

class servicios_controller {
    //put your code here
    
    public function guardar($pTic, $pFec, $pHor, $pDes, $pEst, $pPrio, $pFecMod, $pUsu, $pEqu)
    {
        $guar=new servicio_class();
        $guar->guardar($pTic, $pFec, $pHor, $pDes, $pEst, $pPrio, $pFecMod, $pUsu, $pEqu);
    }
    
    public function eliminar($pTic) {
        $elim=new servicio_class();
        $elim->eliminar($pTic);
      }
      
      public function modificar($pTic, $pFec, $pHor, $pDes, $pEst, $pPrio, $pFecMod, $pUsu, $pEqu) 
      {
        $mod=new servicio_class();
        $mod->modificar($pTic, $pFec, $pHor, $pDes, $pEst, $pPrio, $pFecMod, $pUsu, $pEqu);
      }
      
}
