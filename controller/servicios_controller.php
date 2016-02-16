<?php

include_once '../../HelpDesk/model/servicio_class.php';

$proceso=$_REQUEST['peticion'];

$SerController=new servicio_class();

switch ($proceso)
{
    case("guardar"):
    {
        $SerController->guardar($_REQUEST["txtTicket"], $_REQUEST["txtFechaCreacion"], $_REQUEST["txtHora"], $_REQUEST["txtDescripcion"], $_REQUEST["cboEstado"], $_REQUEST["cboPrioridad"], $_REQUEST["txtFechaActualizacion"], $_REQUEST["txtIdUsuario"], $_REQUEST["txtIdEquipo"]);
        echo 'Registrado con Éxito';
    }
    break;
    
    case("consultar"):
        {
            $SerController->consultar($_REQUEST['txtTicket']);
            echo 'Consultar';
        }
        break;
        
    case ("eliminar"):
        {
            $SerController->eliminar($_REQUEST['txtTicket']);
            echo 'Eliminado';
        }
        break;
    
    case("modificar");
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
