<?php
include '../../HelpDesk/model/partesEquipos_class.php';



$partesEquipos = new partesEquipos_class();

if (isset($_GET['op']))
{
    $op=$_GET['op'];
}

IF($op == 0) {
    $partesEquipos->MostrarPartesEquipos();

}
      
        
        
IF($op == 1)
        {
        
                $PkParteCodigo = $_POST['pkCodigo'];
                $pteSeria=$_POST['serial'];
                $pteMarca=$_POST['marca'];
                $pteDescripcion=$_POST['descripcion'];
                $pteEstado=$_POST['estado'];
                $fkEquipoCodigo=$_POST['equipoCodigo'];
                $fkHistorialCodigo=$_POST['historialCodigo'];
        

        $partesEquipos->guardar( $PkParteCodigo,$pteSeria, $pteMarca, $pteDescripcion, $pteEstado, $fkEquipoCodigo, $fkHistorialCodigo);
        
        }
        
        if($op == 2){
            $PkParteCodigo = $_POST['pkCodigo'];
            
            $partesEquipos->ModalPartesModificar($PkParteCodigo);
            
        }
        
        if ($op == 3){
            $PkParteCodigo = $_POST['pkCodigo'];
                $pteSeria=$_POST['serial'];
                $pteMarca=$_POST['marca'];
                $pteDescripcion=$_POST['descripcion'];
                $pteEstado=$_POST['estado'];
                $fkEquipoCodigo=$_POST['equipoCodigo'];
                $fkHistorialCodigo=$_POST['historialCodigo'];
                
                $partesEquipos->ModifcarPartes($PkParteCodigo, $pteSeria, $pteMarca, $pteDescripcion, 
                        $pteEstado, $fkEquipoCodigo, $fkHistorialCodigo);
                       
        }
        
        if($op== 4){
            
            $PkParteCodigo = $_POST['pkCodigo'];
            $pteSeria= $_POST['serial']; 
            
            $partesEquipos->ConsultaFiltro($PkParteCodigo, $pteSeria);
            
            
        }
        
        
        if($op == 5){
            
           $PkParteCodigo = $_POST['pkCodigo'];
           
           $partesEquipos->EliminarPartes($PkParteCodigo);
            
            
        }
        



   

   
