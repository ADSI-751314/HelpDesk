<?php

include '../../HelpDesk/model/conexion_class.php';

class provedores_class {

    private $conexion;

    public function __construct() {
        $this->conexion = new conexion_class();
        $this->conexion->conexion();
    }

    public function guardar($pro_codigo, $pro_nombre, $pro_telefono, $pro_direccion, $pro_correo, $pro_pagina_web) {
        $sql = " insert into proveedores values ('$pro_codigo','$pro_nombre', '$pro_telefono','$pro_direccion','$pro_correo','$pro_pagina_web')";
        
       // $query = $this->conexion->ejecutarQuery($sql);
        if(!$query = $this->conexion->ejecutarQuery($sql)){
           echo 'error';
        }
       
         if ($query == '1') {
        echo '<div class="alert alert-success alert-dismissable alerta"></div>';
    }
    }

    
    function cargarModificar($id) {
  
  
    $sql = "select pk_pro_codigo,pro_nombre,pro_telefono,pro_direccion,pro_correo,pro_pagina_web from proveedores where pk_pro_codigo = $id";
   
     $query = $this->conexion->ejecutarQuery($sql);
    if (!$result = $this->conexion->ejecutarQuery($sql)) {
        echo $conexion->error;
    }else{
       
         while ($row = mysqli_fetch_array($result)) {
             
             
            echo  '<div class="modal-header">';  
            echo "<button type='button' class='close  btn-circle btn-danger' data-dismiss='modal' aria-hidden='true'><i class='fa fa-times'></i></button>";
            
            echo "<h1 class='h1_align'> Up Date Proveedores</h1>";
          
            echo '</div>';
            echo  "<div> <label class=''>Codigo Provedor</label> <input type='text' class='form-control ' disabled='true' id='txtPro_codigo' value=\"$row[0]\" class='form-control'> </input></div>";
              
            echo  "<div> <label class=''>Nombre </label> <input type='text' class='form-control ' id='txtPro_nombre' value='".$row[1]."'  > </input></div>";
            
            echo "<div> <label class=''>Telefono</label> <input type='text' class='form-control ' id='txtPro_telefono' value='".$row[2]."' > </input></div>";
       
            echo "<div> <label class=''>Direccion </label> <input type='text' class='form-control ' id='txtPro_direccion' value='".$row[3]."'  > </input></div>";
       
            echo "<div> <label class=''>Correo </label> <input type='text' class='form-control ' id='txtPro_correo' value='".$row[4]."' > </input></div>";
       
            echo "<div> <label class=''>Pagina Web</label> <input type='text' class='form-control ' id='txtpagina_web' value='".$row[5]."' > </input></div>";
            
            echo "<br><a onclick='modificar();'  id='btnmodificar' value='modificar'  class='btn btn-lg btn-primary nav nav-justified'>Modificar</a>"  ;   

         }
    }
}
    
    
    
    function cargarAgregar() {
        
            echo  '<div class="modal-header">';  
            echo "<button type='button' class='close  btn-circle btn-danger' data-dismiss='modal' aria-hidden='true'><i class='fa fa-times'></i></button>";
            echo "<h1 class='h1_align'>Registro de Proveedores</h1>";
    
            echo '</div>';
            echo  "<div> <label class=''>Codigo Provedor</label> <input type='text' id='txtPro_codigo' class='form-control campos' > </input></div>";
              
            echo  "<div> <label class=''>Nombre </label> <input type='text' id='txtPro_nombre' class='form-control' campos> </input></div>";
            
            echo "<div> <label class=''>Telefono</label> <input type='text' id='txtPro_telefono' class='form-control' > </input></div>";
       
            echo "<div> <label class=''>Direccion </label> <input type='text' id='txtPro_direccion' class='form-control'> </input></div>";
       
            echo "<div> <label class=''>Correo </label> <input type='text' id='txtPro_correo' class='form-control'> </input></div>";
       
            echo "<div> <label class=''>Pagina Web</label> <input type='text' id='txtpagina_web' class='form-control'> </input></div>";
            
            echo "<br><a onclick='guardar();' id='btnagregar' name='btnAgregar' value='agregar'   class='btn btn-lg btn-primary  nav-justified'>Agregar</a>"  ;   



         }
    

    
    
    
    public function modificar($pro_codigo, $pro_nombre, $pro_telefono, $pro_direccion, $pro_correo, $pro_pagina_web) {
        $sql = " UPDATE proveedores SET pro_nombre='" . $pro_nombre . "', pro_telefono='" . $pro_telefono . "',pro_direccion='" . $pro_direccion . "',pro_correo='" . $pro_correo . "',pro_pagina_web='" . $pro_pagina_web . "' where pk_pro_codigo='" . $pro_codigo . "'";


        $query = $this->conexion->ejecutarQuery($sql);
        
         if ($query == '1') {
        echo '<div class="alert alert-success alert-dismissable alerta">
        
        </div>';
    } else {
        echo '<div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡UPS!</strong> Ha ocurrido un error.
        </div>';
    }
    }

    public function consultar() {

        //CONEXION CON LA BASE DE DATOS 
        // CONSULTA CASE DE DATOS 

        $consulta_cliente = "select pk_pro_codigo,pro_nombre,pro_telefono,pro_direccion,pro_correo,pro_pagina_web from proveedores ";

        if (!$result = $this->conexion->ejecutarQuery($consulta_cliente)) {
            echo $conexion->error;
        } 
        echo ' <table class="table  table-striped table-resposive table_text_align">
                                <tr>
                                    <td class="head_table"> CODIGO PROVEEDOR</td>
                                    <td class="head_table"> NOMBRE PROVEEDOR </td>
                                    <td class="head_table"> TELEFONO PROVEEDOR</td>
                                    <td class="head_table"> DIRECCION </td>
                                    <td class="head_table"> CORREO</td>
                                    <td class="head_table">PAGINA WEB</td>
                                    <td class="head_table">OPCIONES</td>
                            </tr>';
       
                
        while ($row = mysqli_fetch_array($result)) {
            

              $contenido = "<tr>
                                                        <td> " . $row[0] . " </td>
                                                        <td> " . $row[1] . " </td>
                                                        <td> " . $row[2] . " </td>
                                                        <td> " . $row[3] . " </td>
                                                        <td> " . $row[4] . " </td>
                                                        <td> " . $row[5] . " </td>
                                                        <td> <a onclick='cargarModificar(" . $row[0] . ");' data-toggle='modal' data-target='#myModal' name='btnmodificar' value='modificar' class=''>Modificar</a><br><a onclick='eliminar(\" $row[0]  \");'>Eliminar</a></td>

                                                        </tr>";

            echo $contenido;
        
      
            
        }
        
        
        echo '</table>';
    }

       public function consultarParametro($pro_parametro) {

        //CONEXION CON LA BASE DE DATOS 
        // CONSULTA CASE DE DATOS 

        $consulta_cliente = "select pk_pro_codigo,pro_nombre,pro_telefono,pro_direccion,pro_correo,pro_pagina_web from proveedores where pk_pro_codigo like '%".$pro_parametro."%' or  pro_nombre like '%".$pro_parametro."%' or   pro_telefono like '%".$pro_parametro."%' or   pro_direccion like '%".$pro_parametro."%' or pro_correo like '%".$pro_parametro."%' or pro_pagina_web like '%".$pro_parametro."%'";

        if (!$result = $this->conexion->ejecutarQuery($consulta_cliente)) {
            echo $conexion->error;
              
        } 
        

        
        
        
        echo '<table class="table  table-striped table-resposive table_text_align">
                                <tr>
                                    <td class="head_table"> CODIGO PROVEEDOR</td>
                                    <td class="head_table"> NOMBRE PROVEEDOR </td>
                                    <td class="head_table"> TELEFONO PROVEEDOR</td>
                                    <td class="head_table"> DIRECCION </td>
                                    <td class="head_table"> CORREO</td>
                                    <td class="head_table">PAGINA WEB</td>
                                    <td class="head_table">OPCIONES</td>
                            </tr>';
        while ($row = mysqli_fetch_array($result)) {
            $contenido = "<tr>
							<td> " . $row[0] . " </td>
							<td> " . $row[1] . " </td>
							<td> " . $row[2] . " </td>
							<td> " . $row[3] . " </td>
							<td> " . $row[4] . " </td>
                                                        <td> " . $row[5] . " </td>
							<td> <a onclick='cargarModificar(" . $row[0] . ");' data-toggle='modal' data-target='#myModal' name='btnmodificar' value='modificar' class=''>Modificar</a><br><a onclick='eliminar(\" $row[0]  \");'>Eliminar</a></td>
							</tr>";

            echo $contenido;
        }
        echo '</table>';
    }

    //fin del ciclo

    public function eliminar($pro_codigo) {
        $sql = " DELETE FROM proveedores where pk_pro_codigo=" . $pro_codigo . "";


        $query = $this->conexion->ejecutarQuery($sql);
                  if ($query == '1') {
        echo '<div class="alert alert-danger alert-dismissable alerta">
       
        </div>';
    } else {
        echo '<div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡UPS!</strong> Ha ocurrido un error.
        </div>';
    }
    }

}
